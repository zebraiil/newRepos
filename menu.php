<?php 
    $num1;
    $num2;
    function shoewMenu($num1, $num2){
        echo "Выберите действия \n";
        echo "1. Ввести два числа\n"
        echo "2. Выполнить сложение\n"
        echo "3. Выполнить вычитание\n"
        echo "4. Выполнить деление\n"
        echo "5. Возвести число в степень\n"
    }

    function enterNum($num1, $num2)
    {
        echo "Введите первое число: ";
        $num1 = (float)trim(fgets(SIDIN));
        echo "Введите второе число: ";
        $num2 = (float)trim(fgets(SIDIN));
        return [$num1, $num2];
    }
?>