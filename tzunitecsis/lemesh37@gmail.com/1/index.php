<html>
<head>
    <title>Каталог</title>
    <link href="../2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../2/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container" align="center">
<?php
class calculator
{
    public function __construct()
    {
        if($_SERVER['REQUEST_METHOD']=="POST") {
//$expr = '3 4 5 * + 7 + 4 6 - /';
            $expr = $_POST['num1'];

            function calc($str)
            {
                $stack = array();

                $token = strtok($str, ' ');

                while ($token !== false) {
                    if (in_array($token, array('*', '/', '+', '-', '^'))) {
                        if (count($stack) < 2)
                            throw new Exception("Недостаточно данных в стеке для операции '$token'");
                        $b = array_pop($stack);
                        $a = array_pop($stack);
                        switch ($token) {
                            case '*':
                                $res = $a * $b;
                                break;
                            case '/':
                                $res = $a / $b;
                                break;
                            case '+':
                                $res = $a + $b;
                                break;
                            case '-':
                                $res = $a - $b;
                                break;
                            case '^':
                                $res = pow($a, $b);
                                break;

                        }
                        array_push($stack, $res);
                    } elseif (is_numeric($token)) {
                        array_push($stack, $token);
                    } else {
                        throw new Exception("Недопустимый символ в выражении: $token");
                    }

                    $token = strtok(' ');
                }
                if (count($stack) > 1)
                    throw new Exception("Количество операторов не соответствует количеству операндов");
                return array_pop($stack);
            }


            $newcalc = calc($expr);
                if($newcalc){
                echo "<p>Результат: $newcalc</p>";
            }
        }
    }
}



?>

<a href='../index.php'>Назад</a>
<h1>Калькулятор</h1>



<form class="center-block form-review" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

    Введите значения через пробел:<br />
    <input class="form-control" type="text" name="num1" /><br /><br />
    <input class="btn btn-primary btn-block" type="submit" value="Считать!" />
</form>
<h2><?php $wre= new calculator();?></h2>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../2/js/bootstrap.min.js"></script>

</body>
</html>