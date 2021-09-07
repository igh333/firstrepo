<?php
    $ludzie = array("1"=>"Oleksii","2"=>"Tomasz","3"=>"Jakub","4"=>"Szymon", "5"=>"Filip","6"=>"Max","7"=>"Łukasz","8"=>"Kacper","9"=>"Bartek","10"=>"Emil");
    ksort($ludzie); //sortuje tablice wedlug kluczy
    //asort($ludzie); sortuje po wartosciach
    //arsort($ludzie); sortuje odwrotnie po wartosciach
    //krsort($ludzie); odwrotna kolejnosc kluczy
    reset($ludzie);
    while(list($klucz, $wartosc) = each($ludzie)){
        echo "$klucz = $wartosc <br>";
    }
?>
