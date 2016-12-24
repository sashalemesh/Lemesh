<?php include_once 'interface.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    

</head>
<body>
<!--<div class="container ">-->
<!--    <div class="row">-->
<!--<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>-->
<!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>-->
<!--    </div>-->
<!--</div>-->

<div class="container">
    <form  method="GET" class="center-block form-review" id="feedback">
        <h2 class="center-block">найдена строка</h2>
        <div class="panel panel-info" id="list"><?php echo $item?></div>
        <div class="form-group">
            <label for="name">Введите строку для поиска:</label>
            <input type="text" class="form-control" name="name" id="name"  required>
        </div>

        <input type="submit" class="btn btn-primary btn-block" name="add" value="Найти">
    </form>
    <div class="page-header">
        <h1>Мое резюме</h1>
    </div>
    <div class="jumbotron">
        <div class="container">

            <?php include_once 'resume.html'?>

        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>
