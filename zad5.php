<?php
    $owoce = array("d"=>"mango","a"=>"papaja","b"=>"banan","c"=>"aronia");
    //ksort($owoce); sortuje tablice wedlug kluczy
    //asort($owoce); sortuje po wartosciach
    //arsort($owoce); sortuje odwrotnie po wartosciach
    krsort($owoce); //odwrotna kolejnosc kluczy
    reset($owoce);
    while(list($klucz, $wartosc) = each($owoce)){
        echo "$klucz = $wartosc ";
    }
?>