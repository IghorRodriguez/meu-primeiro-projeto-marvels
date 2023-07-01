<?php
    $page = $_GET['page'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="ico/themarvel.ico" type="image/x-icon">
        <meta charset="utf-8">
        <title>TheMarvels</title>
        <?php
            switch($page) {
                case 'viloes':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;
                case 'knull':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'ultron':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;
                
                case 'aniquilador':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'mephisto':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;
                
                case 'thanos':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;
                
                case 'beyonder':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'hela':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'kang':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'fenix':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'apocalipse':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'destino':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'carnificina':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'graviton':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'magneto':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'maestro':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;
                
                case 'evolucionario':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'molecular':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'dormammu':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'dracula':
                    echo '<link rel="stylesheet" href="css/viloes.css">';
                    break;

                case 'loki':
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
                
                case 'defensores':
                    echo'<link rel="stylesheet" href="css/defensores.css">';
                    break;

                case 'sexteto':
                    echo'<link rel="stylesheet" href="css/sexteto.css">';
                    break;

                case 'aranhaverso':
                    echo'<link rel="stylesheet" href="css/aranhaverso.css">';
                    break;

                case 'cabala':
                    echo'<link rel="stylesheet" href="css/cabala.css">';
                    break;
                
                case 'xforce':
                    echo'<link rel="stylesheet" href="css/xforce.css">';
                    break;
                
                case 'illuminati':
                    echo'<link rel="stylesheet" href="css/illuminati.css">';
                    break;
                
                case 'newavengers':
                    echo'<link rel="stylesheet" href="css/newavengers.css">';
                    break;

                case 'thunderbolts':
                    echo'<link rel="stylesheet" href="css/thunderbolts.css">';
                    break;
                
                case 'cosmicos':
                    echo'<link rel="stylesheet" href="css/cosmicos.css">';
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

        case 'knull':
            include('inc/knull.php');
            break;

        case 'ultron':
            include('inc/ultron.php');
            break;
        
        case 'aniquilador':
            include('inc/aniquilador.php');
            break;

        case 'mephisto':
            include('inc/mephisto.php');
            break;

        case 'mephisto':
            include('inc/mephisto.php');
            break;

        case 'thanos':
            include('inc/thanos.php');
            break;

        case 'beyonder':
            include('inc/beyonder.php');
            break;

        case 'hela':
            include('inc/hela.php');
            break;

        case 'kang':
            include('inc/kang.php');
            break;

        case 'fenix':
            include('inc/fenix.php');
            break;

        case 'apocalipse':
            include('inc/apocalipse.php');
            break;

        case 'destino':
            include('inc/destino.php');
            break;

        case 'carnificina':
            include('inc/carnificina.php');
            break;

        case 'graviton':
            include('inc/graviton.php');
            break;

        case 'magneto':
            include('inc/magneto.php');
            break;

        case 'maestro':
            include('inc/maestro.php');
            break;

        case 'loki':
            include('inc/loki.php');
            break;

        case 'evolucionario':
            include('inc/evolucionario.php');
            break;

        case 'dormammu':
            include('inc/dormammu.php');
            break;

        case 'molecular':
            include('inc/molecular.php');
            break;

            case 'dracula':
                include('inc/dracula.php');
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

        case 'defensores':
            include('inc/defensores.php');
            break;
        
        case 'sexteto':
            include('inc/sexteto.php');
            break;
            
        case 'aranhaverso':
            include('inc/aranhaverso.php');
            break;
        
        case 'cabala':
            include('inc/cabala.php');
            break;

        case 'xforce':
            include('inc/xforce.php');
            break;
        
        case 'illuminati':
            include('inc/illuminati.php');
            break;
        
        case 'newavengers':
            include('inc/newavengers.php');
            break;

        case 'thunderbolts':
            include('inc/thunderbolts.php');
            break;

        case 'cosmicos':
            include('inc/cosmicos.php');
            break;
        
        default:
            include('inc/marvels.php');
            break;
    }

    ?>

    </body>
</html>