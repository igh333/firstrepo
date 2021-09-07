<?php
    function fib($n){
        if($n == 1 || $n == 2){
            return 1;
        }
        else{
            return fib($n - 1) + fib($n - 2);
        }
    }
    if(isset($_POST['show'])){
    $liczba = $_POST['liczba'];
    echo(fib($liczba));}
    ?>
    <form action="" method="POST">
        <input type="text" name="liczba"><br>
        <input type="submit" name="show" value="show">
    <form>