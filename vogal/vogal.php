<?php
    $letra = $_POST['letra'];

    $letra = Strtolower($letra);
        // is_numeric($x); = verifica se a variavel é um número 
    $n = is_numeric($letra);                                        /*Vogal ou Consoante, se o camarada digitar uma letra.  Par ou Impar se ele digitar um número  */
                                                                                                      
    if($n == 0){
        if(strlen($letra) < 2 && strlen($letra) >= 1){  //strlen($x) lê quantos elementos exietem dentro de uma var                                                      13/05/2020
            switch($letra){                                                                            //         * *  *  *  *  * *                                  prof: Thiago PW II
                case 'a':                                                                              //         | |  |  |  |  | |
                    echo 'vogal';                                                                      //        ===================
                break;                                                                                 //       |                   |
                case 'e':                                                                              //       |       Feliz       |
                    echo 'vogal';                                                                      //       |    Aniversário!   |
                break;                                                                                 //       |    ＼(^º^)_/      |
                case 'i':                                                                              //       |___________________|
                    echo 'vogal';                                                                      //
                break;
                case 'o':
                    echo 'vogal';
                break;
                case 'u':
                    echo 'vogal';
                break;
                default:
                    echo 'consoante';

            }
       
        }else{
            if(strlen($letra) < 1){
                echo 'você não digitou nada';
            }else
            echo 'você digitou uma palavra';
         } 
    }else{
        $x = $letra;
        $y = 2;
        $r = fmod($x, $y);  //fmod verifica o resto da divisão // ou usar o %
        if($r==0){
            echo 'Número Par';
        }else{
            echo "Número impar";
        }
    }
?>