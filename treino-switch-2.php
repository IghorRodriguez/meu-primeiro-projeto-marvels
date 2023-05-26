<?php

$pagina = $_GET['page'];


switch($pagina) {
    case '': // if ($pagina == '')  
        echo 'pagina 1';
        break;

    case 'guardioes': // if ($pagina == 'guardioes') 
        echo 'pagina guardiões';
        break;
    
    case 'viloes': // if ($pagina == 'viloes') 
        echo 'pagina vilões';
        break;

    default: 
        echo '404 pagina não encontrada';
        break;
}

