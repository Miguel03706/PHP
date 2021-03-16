<meta charset="UTF-8">
<?php
    $mes = $_POST['mes'];

    switch ($mes){
        case 1:
            echo "Janeiro";
        break;
        case 2:
            echo "Fevereiro";
        break;
        case 3:
            echo "março";
        break;
        case 4:
            echo "abril";
        break;
        case 5:
            echo "maio";
        break;
        case 6:
            echo "junho";
        break;
        case 7:
            echo "julho";
        break;
        case 8:
            echo "agosto";
        break;
        case 9:
            echo "Setembro";
        break;
        case 10:
            echo "Outubro";
        break;
        case 11:
            echo "Novembro";
        break;
        case 12:
            echo "Dezembro";
        break;
        default:
        echo "Inválido";

    }


?>