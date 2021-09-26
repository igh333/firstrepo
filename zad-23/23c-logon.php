<!DOCTYPE html>
    <head>
        <title>Logowanie</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <center>   
            <form action='' method='post'>
            <font style='font-size: 22px;'>Login: <input type='text' name='loginn'></font>
                <br><font style='font-size: 22px;'>Hasło: <input type='password' name='hasloo' style='margin-left: 1px;'></font>
                <br><br><a href="23c.html"><input type="button" value="Powrót"></a>
                &nbsp;&nbsp;<input type='submit' value='Zaloguj' name='sub2'>
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
            $h = $_POST['hasloo'];
            
            $que = "select Login, Haslo from Tabela where Login = '$l' and Haslo = '$h'";
                $ru = mysqli_query($con,$que) or die(mysqli_error($con));
                $res = $con->query($que);
                if($res->num_rows>0){
                    $qu = "select Login, Haslo from Tabela where Login = '$l' and Haslo = '$h' and Typ = 'Admin'";
                    $r = mysqli_query($con,$qu) or die(mysqli_error($con));
                    $res2 = $con->query($qu);
                    if($res2->num_rows>0){header( 'Location: Admin.php' );}
                    else{header( 'Location: 23d.php' );}
                }
            else{
                echo "<font style='color: red;'>Podano błędny login lub hasło</font>";
            }
        }
    ?>
    </body>
</html>