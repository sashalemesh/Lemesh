<?php
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


echo calc($expr);
$newcalc = calc($expr);
if($newcalc){
    echo "<p>Результат: $newcalc</p>";
}
}
?>

<h1>Калькулятор</h1>



<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

    Введите значения:<br />
    <input type="text" name="num1" /><br /><br />
    <input type="submit" value="Считать!" />
</form>
