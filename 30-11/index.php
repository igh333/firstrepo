<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["imie"]) {
?>
Welcome <?php echo $_SESSION["imie"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
<?php
if($_SESSION["Admin"]){    
    $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);

   $sql = "SELECT * FROM 4g";
         $result = $con->query($sql);
         
         if ($result->num_rows > 0) {
           echo "<table border=2'>"  ;
           echo "<tr'>";
           echo "<td>". "id" . "</td>";
            echo "<td>". "imie" . "</td>";
            echo "<td>". "nazwisko" . "</td>";
            echo "<td>". "Admin" . "</td>";
           echo "</tr>";
           while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    
                    echo "<td>". $row["ID"] . "</td>";
                     echo "<td>". $row["Imie"] . "</td>";
                     echo "<td>". $row["Nazwisko"] . "</td>";
                     echo "<td>". $row["Admin"] . "</td>";
                    echo "</tr>";
            
           }echo "</table>";
         } else {
           echo "0 results";
         }     



}
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>