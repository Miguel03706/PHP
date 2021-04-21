<?php
    session_start();
    require_once "conexao.php";
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/escola.svg">
    <title>Site Etec</title>
</head>
<body>

     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
     <script type="text/javascript" src="bootstrap.min.js"></script> 

     <link rel="stylesheet" type="text/css" href="estilos/stylepost.css">


   <header>
         <?php
            $query = "SELECT id_postagem,imagem FROM postagens WHERE id_postagem = '$id'";
            $executa = mysqli_query($conexao,$query);
            $dados= mysqli_fetch_array($executa);

            echo "<style type='text/css'>
           .img_top{ 
            width: auto;
            height: 80vh;
            background-image: url('upload/$dados[imagem]');
            background-size: cover;  
            background-repeat: no-repeat;
            background-position:center;}
        </style>";

        echo " <div class='img_top'>
            <nav class='menu_top'>
             <ul>
                <a href='index.php'>    <li>  Inicio     </li> </a>
                <a href='#meio'>     <li>  Postagem </li> </a>
                <a href='#footer'>   <li>  Contatos  </li> </a>";
                if(!isset($_SESSION['nome'])){
               echo "<a href='login.php'> <li>  Logar     </li> </a>";
                }else{
                    echo "<a href='logout.php'> <li>  Deslogar     </li> </a>";  
                }?>
             </ul>
                <?php 
                     $query = "SELECT id_postagem,tema FROM postagens WHERE id_postagem = '$id'";
                     $executa = mysqli_query($conexao,$query);
                     $dados=mysqli_fetch_array($executa);

                     echo "<div id='teste'><a>$dados[tema]</a></div>";
                ?>
            </nav>
        </div>     
    </header>

    <?php 
                     $query_materia = "SELECT materia FROM postagens WHERE id_postagem = '$id'";
                     $executa_materia = mysqli_query($conexao,$query_materia);
                     $dados_materia = mysqli_fetch_array($executa_materia);
                    
                             
                    if($dados_materia["materia"] == 3){
                     echo"
                            <div class='container-fluid'>
                                <div class='row'>
                                      <aside class='col-md-6 text-center btns'> 
                                            <a href='#portugues'><input type='submit' value='Português' class='btn_autor' name='portugues' onclick='portugues()'></a>
                                        </aside>
                                        <aside class='col-md-6 text-center btns'> 
                                            <a href='#ingles'><input type='submit' value='Inglês' class='btn_autor' name='ingles' onclick='ingles()'></a>
                                        </aside>
                                </div>
                            </div>";
                    }
                    ?>
        <script>
            function ingles(){
               
                var texto = document.getElementById('texto');
                var res = document.getElementById('res');
                texto.style.display = 'none';
                res.style.display = 'unset';
                res.innerHTML = `<h1>OI SAMYYY<h1>`;
                
            }
            function portugues(){
                texto.style.display = 'unset';
                res.style.display = 'none';
            }
        </script>
    
   <div class="meio" id="meio">
                <?php  
            
            $query = "SELECT id_postagem,pesquisa FROM postagens WHERE id_postagem = '$id'";
            $executa = mysqli_query($conexao,$query);
            $dados=mysqli_fetch_array($executa);

            echo "<div id='texto'>$dados[pesquisa]</div>";
            
        ?>    
          <div id="res"></div>
   </div>
   <div id="meio_ing"> </div>



   
 <!-- aparecer no desktop -->  
 <div class="mobile-hide"></div>
      <!-- aparecer no mobile -->  
            <div class="mobile">
                <div class="desktop-hide">
                    
                </div>
            </div>


  
            <footer class="footer" id="footer">
         <div class="container-fluid">
            <div class="row">
                <aside class="col-md-4 text-center">Trabalho realizado na Etec de Itaquaquecetuba</aside>
                <aside class="col-md-4 text-center"><p>&copy; Eduarda | Matheus | Micaeli | Miguel</p></aside>
                <aside class="col-md-4 text-center"><p>2º ETIM DS</p></aside>
                <aside class="col-md-12 text-center"><a href="cadastro_pesquisa.php"> Adicionar pesquisa</a></aside>
                <!--  cada "row" tem 12cols, dividir eles formam colunas-->
            </div>
         </div>
    </footer>
</body>
</html>

<?php

?>