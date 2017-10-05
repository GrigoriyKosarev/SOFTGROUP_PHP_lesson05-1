<!DOCTYPE html>
<meta charset="UTF-8">

<html>

    <head>
        <title>Домашнє завданя 5 (калькулятор)</title>
    </head>

    <body>

        <form action="" method="post">

            <p>
                <input type="text" name="number1" value="число 1"/>
                <input type="text" name="operation" value="операція"/>
                <input type="text" name="number2" value="число 2"/>
                <input type="submit" value="=" onClick="">

            </p>

        </form>

<?php

    function getResultOperation($number1, $number2, $operation){
        if ($operation == "+"){
            echo $number1 + $number2;
        }
        elseif ($operation == "-"){
            echo $number1 - $number2;
        }
        elseif ($operation == "*"){
            echo $number1 * $number2;
        }
        elseif ($operation == "/"){
            if (!$number2 == 0){
                echo $number1 / $number2;
            }
            else{
                echo "Помилка! Ділення на 0.";
            }
        }
        else{
            echo "Не вірний формат введеної операції";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $number1 = $_REQUEST['number1'];
        $number2 = $_REQUEST['number2'];
        $operation = $_REQUEST['operation'];

        if (is_numeric($number1) && is_numeric($number2)) {
            getResultOperation($number1, $number2, $operation);
        } else {
            echo "Не заповнені вхідні дані";
        }
    }

?>

    </body>

</html>


