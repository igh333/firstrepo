<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);

   $sql = "SELECT id, imie, nazwisko, hobby FROM 4g group by imie order by imie";
         $result = $con->query($sql);
         
         if ($result->num_rows > 0) {
           echo "<table border=2 style='background: green;'>"  ;
           echo "<tr style='background: blue;'>";
           echo "<td>". "id" . "</td>";
            echo "<td>". "imie" . "</td>";
            echo "<td>". "nazwisko" . "</td>";
            echo "<td>". "hobby" . "</td>";
           echo "</tr>";
           while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    
                    echo "<td>". $row["id"] . "</td>";
                     echo "<td>". $row["imie"] . "</td>";
                     echo "<td>". $row["nazwisko"] . "</td>";
                     echo "<td>". $row["hobby"] . "</td>";
                    echo "</tr>";
            
           }echo "</table>";
         } else {
           echo "0 results";
         } 
?>