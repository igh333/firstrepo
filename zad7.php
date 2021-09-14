<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $imie = $_GET['num'];
             $nazwisko = $_GET['nazw'];
             $hobby = $_GET['waga'];
$query = "Insert into 4g(imie, nazwisko, hobby) values('$imie', '$nazwisko', '$hobby')";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }  
?>

<form action="" method="get">
Imie:<input type="text" name="num"><br>
Nazwisko:<input type="text" name="nazw"><br>
Hobby:<input type="text" name="waga"><br>
<input name="sub" type="submit" value="ok">
</form>
