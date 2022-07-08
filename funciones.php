<?php
/*function pintaBanner($n){ //$n es la cantidad de veces que quiero que se pinte el banner
    for($i = 0; $i < $n; $i++){
        include("banner.php");
    }
}

function pintaMasVendidos($n){ //$n es la cantidad de veces que quiero que se pinte el banner
    for($i = 0; $i < $n; $i++){
        include("cadsMasVendidos.php");
    }
}

function pintaNovedades($n){ //$n es la cantidad de veces que quiero que se pinte el banner
    for($i = 0; $i < $n; $i++){
        include("cadsMasVendidos.php");
    }
}*/

function pintar($n, $file){ //$n es la cantidad de veces que quiero que se pinte el banner
    for($i = 0; $i < $n; $i++){
        include($file);
    }
}



?>