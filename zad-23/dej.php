<!DOCTYPE html>
    <head></head>
    <body>
        <center>   
            <form action='' method='post'>
            <font style='font-size: 22px;'>Login: <input type='text' name='loginn'></font>
                <br><br><a href="Admin.php"><input type="button" value="Powrót"></a>
                &nbsp;&nbsp;<input type='submit' value='Usuń' name='sub2'>
            </form>
        </center>
        <?php
            $user= 'root';
            $pass= '';
            $host = 'localhost';
            $base = 'logowanie';
            $con= mysqli_connect($host,$user,$pass, $base);
            mysqli_select_db($con,$base);

            if(isset($_POST['sub2']))
            {
                $l = $_POST['loginn'];
                
                $que = "select Login, Haslo from Tabela where Login = '$l'";
                    $ru = mysqli_query($con,$que) or die(mysqli_error($con));
                    $res = $con->query($que);
                    if($res->num_rows>0){
                        $qu = "Update tabela set typ ='Admin' where login = '$l'";
                        $r = mysqli_query($con,$qu) or die(mysqli_error($con));
                        echo "Uprawnienia zmienione";
                        }
                else{
                    echo "<font style='color: red;'>Podano błędny login</font>";
                }
            }
        ?>
    </body>
</html>