<!DOCTYPE html>
    <head>
        <title>Zmiana hasła</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <center>
            <form action='' method='post'>
                <br><font style='font-size: 22px;'>Login: <input type='text' name='log' style='margin-left: 87px;'></font>
                <br><font style='font-size: 22px;'>Stare hasło: <input type='password' name='has' style='margin-left: 44px;'></font>
                <br><font style='font-size: 22px;'>Nowe hasło: <input type='password' name='n_haslo' style='margin-left: 36px;'></font>
                <br><font style='font-size: 22px;'>Potwierdź hasło: <input type='password' name='p_haslo'></font>
                <br><br><a href="23d.html"><input type="button" value="Powrót"></a>
                &nbsp;&nbsp;<input type='submit' value='Zmien' name='sub3'>
            </form>
        </center>


        <?php
            $user= 'root';
            $pass= '';
            $host = 'localhost';
            $base = 'logowanie';
            $con= mysqli_connect($host,$user,$pass, $base);
            mysqli_select_db($con,$base);
            
            if(isset($_POST['sub3']))
            {
                $lo = $_POST['log'];
                $ha = $_POST['has'];
                $n_h = $_POST['n_haslo'];
                $p_h = $_POST['p_haslo'];
                $quer = "select Login, Haslo from Tabela where Login = '$lo' and Haslo = '$ha'";
                $runn = mysqli_query($con,$quer) or die(mysqli_error($con));
                $result = $con->query($quer);
                if($result->num_rows>0){
                    $subject = "$n_h";
                    $pattern2 = '/[A-Z]/';
                    $pattern = '/[!@#$%&^]/';
                    if(preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE) && preg_match($pattern2, $subject, $matches, PREG_OFFSET_CAPTURE)){
                        if($n_h == $p_h){
                            $query = "Update tabela set haslo = '$n_h' where login = '$lo'";
                            $run =mysqli_query($con,$query) or die(mysqli_error($con));
                        }
                        else{echo "<font style='color: red;'>Hasło i potwierdzenie nie są identyczne</font>";}
                    }
                    else{echo "<font style='color: red;'>Hasło nie spełnia wymagań co do złożoności</font>";}
                    }
                else{
                    echo "<font style='color: red;'>Podano błędny login lub hasło</font>";
                }
            }
        ?>
    </body>
</html>