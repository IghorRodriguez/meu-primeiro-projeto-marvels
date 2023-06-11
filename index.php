<?php
    $page = $_GET['page'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TheMarvels</title>
        <?php
            switch($page) {
                case 'viloes':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;
               
                case 'avengers':
                    echo '<link rel="stylesheet" href="css/avengers.css">';
                    break;

                case 'xmen':
                    echo '<link rel="stylesheet" href="css/xmen.css">';
                    break;
                
                case 'inumanos':
                    echo '<link rel="stylesheet" href="css/inumanos.css">';
                    break;
                
                case 'quarteto':
                    echo '<link rel="stylesheet" href="css/quarteto.css">';
                    break;

                case 'eternos':
                    echo '<link rel="stylesheet" href="css/eternos.css">';
                    break;
                
                case 'guardioes':
                    echo'<link rel="stylesheet" href="css/guardioes.css">';
                    break;

                default:
                    echo '<link rel="stylesheet" href="css/styles.css">';
                    break;
                
            }
        ?>
        <!-- <link rel="stylesheet" href="css/styles.css"> -->
    </head>
    <body>

    <?php 
    

    switch($page) {
        case 'viloes':
            include('inc/viloes.php');
            break;

        case 'avengers':
            include('inc/avengers.php');
            break;

        case 'xmen':
            include('inc/xmen.php');
            break;

        case 'inumanos':
            include('inc/inumanos.php');
            break;
            
        case 'quarteto':
            include('inc/quarteto.php');
            break;
        
        case 'eternos':
            include('inc/eternos.php');
            break;
        
        case 'guardioes':
            include('inc/guardioes.php');
            break;

        default:
            include('inc/marvels.php');
            break;
    }

    ?>

    </body>
</html>