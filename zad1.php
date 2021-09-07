<?php
    $n = $_POST['war'];
    //$n = $_GET['war'];
    for($i=0;$i<$n;$i++){
        /*echo($i);
        echo("<br>");*/
        $los = rand(15,65);
        echo($los);
        echo("<br>");
    }

?>
<form action="" method="POST">
    <input type="text" name="war">
    <input type="submit" value="show">
<form>