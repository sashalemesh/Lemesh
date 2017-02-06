<?php
if(isset($_REQUEST['add'])){
    $storage->add(new Review($_REQUEST['name'], $_REQUEST['text']));
    header('Location: /16-17/');
}