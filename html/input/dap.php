<?php
    
    $num1 = $_GET['num1'];

    $type = $_GET['type'];

    $num2 = $_GET['num2'];

    if ($type == "1") // 더하기
    {
        echo $num1." 더하기 ".$num2." 의 값은? ";
        echo $num1 + $num2;
    }
    else if ($type == "2") // 빼기
    {
        echo $num1." 빼기 ".$num2." 의 값은? ";
        echo $num1 - $num2;
    }
    else if ($type == "3") // 곱하기
    {
        echo $num1." 곱하기 ".$num2." 의 값은? ";
        echo $num1 * $num2;
    }

?>