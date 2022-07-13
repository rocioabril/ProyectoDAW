<?php
/*function pinta_banner($n){
    for ($i=0; $i < $n ; $i++) { 
        include("banner.php");
    }
}

function pintar_card_mas_vendidos($n){
    for ($i=0; $i < $n ; $i++) { 
        include("card_mas_vendidos.php");
    }
}

function pintar_card_novedades($n){
    for ($i=0; $i < $n ; $i++) { 
        include("card_novedades.php");
    }
}*/


//esto lo cambio en aside y en main_home, pongo la funcion pintar 
//y el archivo ("banner.php","card_mas_vendidos.php","card_novedades.php")
function pintar($n, $files){
    for ($i=0; $i < $n ; $i++) { 
        include($files);
    }
}
?>
