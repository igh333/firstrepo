<?php
if(isset($_POST['show'])){
$log = $_POST['log'];
$pass = $_POST['pass'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$miasto = $_POST['miasto'];
if($log == 'jacek' && $pass == 'owca')
{
    echo("zalogowany");
    echo("Imie to " . $imie . ", nazwisko to " . $nazwisko . ", a miasto to " . $miasto);
}
else{
    echo("kappa");
}}

?>
<form action="" method="POST">
Login:<input type="text" name="log"> <br>
Haslo:<input type="password" name="pass">
 <br> <br>

        Imie:<input type="text" name="imie"><br>
        Nazwisko:<input type="text" name="nazwisko"><br>
        Miasto:<input type="text" name="miasto"><br>
        <input type="submit" name="show" value="show">
    <form>
