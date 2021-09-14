<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
   
  
    if(isset($_GET['sub']))
		 {
             $id = $_GET['num'];
$query = "delete from 4g where id='$id'";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Usunięto";
}
else{
    echo "Błąd";
}
         }  
?>

<form action="" method="get">
Id:<input type="text" name="num"><br>
<input name="sub" type="submit" value="ok">
</form>