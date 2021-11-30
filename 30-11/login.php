<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','uczniowie') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM 4g WHERE imie='" . $_POST["imie"] . "' and hasło = '". $_POST["haslo"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['ID'];
        $_SESSION["imie"] = $row['Imie'];
        if($row['Admin']=="Tak"){
        $_SESSION["Admin"] = True;}
         else {$_SESSION["Admin"] = False;}}
         else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="imie">
 <br>
 Password:<br>
<input type="password" name="haslo">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>