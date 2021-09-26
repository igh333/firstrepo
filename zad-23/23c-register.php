<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Rejestracja</title>
    </head>
    <body>
        <center>
            <form action="" method='post'>
                <font style='font-size: 22px;'>Login: <input type='text' name='login' style='margin-left: 36px;'></font>
                <br><font style='font-size: 22px;'>Hasło: <input type='password' name='haslo' style='margin-left: 39px;'></font>
                <br><font style='font-size: 22px;'>Imie: <input type='text' name='imie' style='margin-left: 49px;'></font>
                <br><font style='font-size: 22px;'>Nazwisko: <input type='text' name='nazwisko' style='margin-left: 2px;'></font>
                <br><font style='font-size: 22px;'>Szkoła:<input type='text' name='szkola' style='margin-left: 35px;'></font>
                <br><font style='font-size: 22px;'>Adres: <input type='text' name='adres' style='margin-left: 36px;'></font>
                <br><font style='font-size: 22px;'>Telefon: <input type='number' name='telefon' style='margin-left: 22px;'></font>
                <br><br><a href="23c.html"><input type="button" value="Powrót"></a>
                &nbsp;&nbsp;<input type='submit' value='Submit' name='sub'>
            </form>
        </center>
            
        
        
        <?php
        $user= 'root';
        $pass= '';
        $host = 'localhost';
        $base = 'logowanie';
        $con= mysqli_connect($host,$user,$pass, $base);
        mysqli_select_db($con,$base);

        if(isset($_POST['sub']))
        {
            $logi = $_POST['login'];
            $hasl = $_POST['haslo'];
            $imi = $_POST['imie'];
            $nazwisk = $_POST['nazwisko'];
            $szkol = $_POST['szkola'];
            $adre = $_POST['adres'];
            $tel = $_POST['telefon'];
            if(empty($logi) or empty($hasl) or empty($imi) or empty($nazwisk) or empty($szkol) or empty($adre) or empty($tel) or strlen($tel) < 9){echo "<font style='color: red;'>Formularz jest błędny</font>";}
            else{
                
                $subject = "$hasl";
                $pattern2 = '/[A-Z]/';
                $pattern = '/[!@#$%&^]/';
                if(preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE) && preg_match($pattern2, $subject, $matches, PREG_OFFSET_CAPTURE)){
                    $query = "Insert into tabela(Login, Haslo, Imie, Nazwisko, Szkola, Adres, Telefon) values('$logi', '$hasl', '$imi','$nazwisk','$szkol','$adre','$tel')";
                    $run =mysqli_query($con,$query) or die(mysqli_error($con));
                    echo "Formularz zatwierdzony";
                }
                else{echo "<font style='color: red;'>Hasło nie spełnia wymagań co do złożoności</font>";}
            }
        }
    ?>



    </body>
</html>