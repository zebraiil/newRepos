<?php 
    $num1;
    $num2;
    function showMenu($num1, $num2){
        echo "Выберите действия \n";
        echo "1. Ввести два числа\n"
        echo "2. Выполнить сложение\n"
        echo "3. Выполнить вычитание\n"
        echo "4. Выполнить деление\n"
        echo "5. Возвести число в степень\n"
    }
    function delNum($num1, $num2){
        if ($num2 == 0){
            echo "Ошибка! Деление на 0 \n";
        }
        else{
            $result = $num1 / $b;
            echo "Результат деления: $result \n";
        }
        return[$num1, $num2];
    }
?>