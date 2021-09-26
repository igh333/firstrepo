<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'Logowanie';
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);

   $sql = "SELECT id, login FROM tabela where typ='Admin'";
         $result = $con->query($sql);
         
         if ($result->num_rows > 0) {
           echo "<center><table border=2 style='background: green;'>"  ;
           echo "<tr style='background: #edf062;'>";
           echo "<td>". "ID" . "</td>";
           echo "<td>". "Login" . "</td>";
           echo "</tr>";
           while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>". $row["id"] . "</td>";
                     echo "<td>". $row["login"] . "</td>";
                    echo "</tr>";
            
           }echo "</table></center>";
         }
?>


<!DOCTYPE html>
    <head></head>
    <body>
        <center>   
            <form action='' method='post'>
                <br><br><a href="Admin.php"><input type="button" value="Powrót"></a>
            </form>
        </center>
    </body>
</html>