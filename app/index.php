<?php
    session_start();
    require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- ajuda na responsividade(usando viewport(pesquise sobre))-->
    <link rel="icon" href="imagens/escola.svg"><!-- imagem q fica na aba de pesquisa em cima-->
    <title>Site Etec</title>
</head>
<body>
                <!-- BOOTSTRAPS PRO SITE FICAR RESPONSIVO-->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
     <script type="text/javascript" src="bootstrap.min.js"></script> 
                 <!-- ---------------------------------- -->
     <link rel="stylesheet" type="text/css" href="estilos/style.css">

     <header>
        
         <nav class="menu_top">
                <ul>
                    <a href="#sobre">    <li>  Sobre     </li> </a>
                    <a href="#meio">     <li>  Postagens </li> </a>
                    <a href="#footer">   <li>  Contatos  </li> </a>
                   <?php
                    if(!isset($_SESSION["nome"])){ //eu criei uma sessão em "login.php" se ela existir vai exibir isso:
                   echo "<a href='login.php'> <li>  Logar     </li> </a>";
                    }else{
                        echo "<a href='logout.php'> <li>  Deslogar     </li> </a>";  
                        //se essa sessão não existir, significa q o usuário n logou
                        
                    }?>
                </ul>
            </nav>
            <?php  
            if(isset($_SESSION["nome"])){ //frescurinha pra exibir o nome do usuario caso ele esteja logado hihi
                echo "<div id='teste'><a>Olá, $_SESSION[nome]</a></div>";
            }
         ?>
    </header>

    <div  id="sobre"></div>
    <!-- aparecer no desktop -->  
    <div class="mobile-hide">
         <div class="sobre">
              <p>
                <div class="sobre1">
                       <img src="imagens/artistas.png" alt="desenho de coruja com livros" height="100px" width="200px">
                       <p><h1>Titulo</h1></p><p>texto 
                      
                </div>
                    <div class="vazia"></div>
                <div class="sobre2">
                     <img src="imagens/logo-etec.png" alt="logo da etec" height="100px" width="150px">   
                     <p><h1>Titulo</h1></p><p>texto</p>  
                    </div>
                <div class="vazia"></div>
                <div class="sobre3">
                     <img src="imagens/coruja-livros.png" alt="artistas unidos" height="100px" width="200px">
                     <p><h1>Titulo</h1></p><p>texto  
                    </div>
             </p>
         </div>
     </div>

     <!-- aparecer no mobile -->
     <div class="mobile">
         <div class="desktop-hide">
            <div class="sobre_mobile">
               <p>
                 <div class="sobre1_mobile">
                       <img src="imagens/artistas.png" alt="desenho de coruja com livros" height="100px" width="200px">
                       <p> <h1>Titulo</h1></p><p>texto </p> 
                 </div><br>
                 <div class="sobre2_mobile">
                     <img src="imagens/logo-etec.png" alt="logo da etec" height="100px" width="150px">   
                     <p> <h1>Titulo</h1></p><p>texto </p>   
                    </div>
                 <div class="sobre3_mobile">
                     <img src="imagens/coruja-livros.png" alt="artistas unidos" height="100px" width="200px">
                     <p> <h1>Titulo</h1></p><p>texto </p>
                    </div>
              </p>
         </div>
                    
        </div>
            </div>
    
    <!-- aparecer no desktop -->
         <div class="mobile-hide">
             <div class="meio" id="meio">
                 <?php
                      $query = "SELECT * FROM postagens";
                      $executa = mysqli_query($conexao,$query);
                
                        while($dados = mysqli_fetch_array($executa)){
                            echo "<a href='postagens.php?id=$dados[id_postagem]'>
                           <div class='postagens'><br><img src='upload/$dados[imagem]' id='img_post'>
                            <p><strong>$dados[titulo]</strong></p>
                            <p>$dados[descricao]</p>
                            </div></a>";
                      }                
                ?>
             </div>
    </div>
      <!-- aparecer no mobile -->  
            <div class="mobile">
                <div class="desktop-hide">
                    <div class="meio_mobile" id="meio_mobile">
                     <?php
                         $query = "SELECT * FROM postagens";
                         $executa = mysqli_query($conexao,$query);
                
                         while($dados = mysqli_fetch_array($executa)){
                               echo "<a href='postagens.php?id=$dados[id_postagem]'>
                                <div class='postagens'><br>
                                    <img src='upload/$dados[imagem]' height='100px' width='200px'>
                                    <p><b>$dados[titulo]</b></p>
                                    <p>$dados[descricao]</p>
                                </div></a>";
                         }                
               
                     ?>
                   </div>
               </div>  
            </div>

 <!-- aparecer no desktop -->  
 <div class="mobile-hide">
     
 </div>
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