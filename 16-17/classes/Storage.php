<?php

class Storage {
    private $list = [];
    private $storagePath = '';
    private $pages = 1;

    public function __construct($storagePath){
        $this->storagePath = $storagePath;
        //load from file
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/16-17/'.$this->storagePath)){
            if(filesize($_SERVER['DOCUMENT_ROOT'].'/16-17/'.$this->storagePath) > 0){
                $this->load();
            }
        }
    }

    public function __destruct(){
        $this->save();
    }

    public function add(Review $review){// add new review
        $this->list[] = $review;
    }

    public function save(){//save review to file
        $handle = fopen($_SERVER['DOCUMENT_ROOT'].'/16-17/'.$this->storagePath, 'w+');
        fwrite($handle, serialize($this->list));
        fclose($handle);
    }

    public function load(){//load reviews from file
        $this->list = unserialize(file_get_contents($this->storagePath));
    }

    public function all($order = ['date' => 'desc']){
        uasort($this->list, function ($first, $second) use($order) {
            $propName = array_keys($order)[0];
            if($order[$propName] === 'desc') {//сортируем по убыванию
                if($first->$propName < $second->$propName){
                    return 1;
                }else{
                    return -1;
                }
                //return $first->$propName <=> $second->$propName;
            }else{//сортируем по возрастанию
                if($first->$propName > $second->$propName){
                    return 1;
                }else{
                    return -1;
                }
            }
        });//sort by props
        return $this->list;
    }

    /**
     * @param $count - количество отзывов на странице
     */
    public function paginate($count){//постраничная навигация
        $arrPages = array_chunk($this->list, $count);
        $this->pages = count($arrPages);
        if(!isset($_REQUEST['page'])){
            $_REQUEST['page'] = 1;
        }
        if($_REQUEST['page'] - 1 > count($arrPages) - 1){
            $_REQUEST['page'] = 1;
        }
        return $arrPages[$_REQUEST['page'] - 1];//0 - заменить на переменную с request
    }

    public function links(){//вывод кнопок постраничной навигации
        //var_dump($_REQUEST['page'] - 2);
        if($this->pages == 1){
            echo "";
        }else{
            echo '<ul class="pagination">';
            if(($_REQUEST['page'] - 2) >= 0){
                echo '<li><a href="?page='.($_REQUEST['page'] - 1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
            }


            for ($page = 1; $page <= $this->pages; $page++) {
                if($page == $_REQUEST['page']){
                    echo '<li class="active"><a href="?page='.$page.'">'.$page.'</a></li>';
                }else{
                    echo '<li><a href="?page='.$page.'">'.$page.'</a></li>';
                }

            }
            if($_REQUEST['page'] < $this->pages) {
                echo '<li><a href="?page='.($_REQUEST['page'] + 1).'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
            }
            echo '</ul>';
        }

    }
}