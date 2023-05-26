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

        default:
            include('inc/marvels.php');
            break;
    }

    ?>

    </body>
</html>