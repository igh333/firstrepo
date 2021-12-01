<?php
    $cookie_name ="user";
    $cookie_value = 0;
    $bonus ="bonus";
    $mn = 2;
    setcookie($cookie_name,$cookie_value, time() + (30), "/");
?>
<html>
    <head>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE[$bonus])){
                if(!isset($_COOKIE[$cookie_name])){
                    echo "Cookie nazwane " . $cookie_name . " nie jest ustawione";

                }
                else{
                    echo "Cookie nazwane " . $cookie_name . " jest ustawione<br>";
                    echo "To twoja " . $_COOKIE[$cookie_name] . " wizyta na stronie<br>";
                    $cookie_value = ++$_COOKIE[$cookie_name];
                    setcookie($cookie_name,$cookie_value, time() + (30), "/");
                }
            }
            else {
                if(!isset($_COOKIE[$cookie_name])){
                    echo "Cookie nazwane " . $cookie_name . " nie jest ustawione";

                }
                else{
                    echo "Cookie nazwane " . $cookie_name . " jest ustawione<br>";
                    echo "To twoja " . $_COOKIE[$cookie_name] . " wizyta na stronie<br>";
                    $cookie_value = ($_COOKIE[$cookie_name]+$_COOKIE[$bonus]);
                    setcookie($cookie_name,$cookie_value, time() + (30), "/");
                }
            }
        ?>
        <form action="" method="GET">
            <button onClick="window.location.reload();">Refresh Page</button>
            <input type='submit' name='sub' value='Kup bonus'></button>
        </form>
        <?php
           if(isset($_GET['sub'])){
               if($_COOKIE[$cookie_name]<40){echo "Nie stać cię biedaku";}
               else{
                    $cookie_value = ($_COOKIE[$cookie_name]-40);
                    setcookie($cookie_name,$cookie_value, time() + (30), "/");
                    $mn = ++$_COOKIE[$bonus];
                    setcookie($bonus,$mn, time() + (30), "/");
                    
                }
            }
        ?>
    </body>
</html>
