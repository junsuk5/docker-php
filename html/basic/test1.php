<?php
    // 한 줄 주석
    /*
    여러 줄 주석
    */
?>

<?php
    // $value = "1";
    // var_dump($value); //string

    // $value = 1;
    // var_dump($value); //int

    // $value = 1.1;
    // var_dump($value); //float

    // $value = "1"."1";
    // var_dump($value); //string
?>

<?php
    // 함수 선언
    function function_name($number)
    {
        return $number * 2;
    }

    // 함수 실행
    echo function_name(function_name(10));
?>