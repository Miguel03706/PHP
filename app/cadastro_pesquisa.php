<?php
    require_once "conexao.php"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrever pesquisa</title>
</head>
<body>
        
     <script src="https://cdn.tiny.cloud/1/xdnu2x31f1uqlmsb90u431ron6apvqqmwfq852y5o62bjlke/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <form action="cadastro_pesquisa.php" method="post" enctype="multipart/form-data">

       <p>
            Titulo: <input type="text" name="titulo">
            Tema:   <input type="text" name="tema">
            Autor :
            <select name="autor">
                <?php
                     $query="SELECT id_usuario,nome FROM usuarios WHERE id_usuario <= 3";
                     $executa = mysqli_query($conexao,$query);
                     while($dados=mysqli_fetch_array($executa)){
                        echo "<option value='$dados[id_usuario]'>$dados[nome]";
                     }
                ?>
            </select>
            materia:
             <select name="materia">
                 <?php
                       $query="SELECT id_materia,nome FROM materias";
                       $executa = mysqli_query($conexao,$query);
                       while($dados=mysqli_fetch_array($executa)){
                          echo "<option value='$dados[id_materia]'>$dados[nome]";
                       }
                 ?>
            </select>
      </p>
      <p>imagem: <input type="file" name="arquivo" /></p><br>
      <p>
          texto: <textarea name="pesquisa" placeholder="Digite o conteudo"></textarea>
            <script>
                 tinymce.init({
                 selector: 'textarea',
                 plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                 toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                 toolbar_mode: 'floating',
                 tinycomments_mode: 'embedded',
                 tinycomments_author: 'Author name'
                });
            </script>
      </p>
      <br>       
        Descrição: <textarea name="descricao" cols="30" rows="10" placeholder="Descrição do texto"></textarea><br><br>
        <input type="submit" value="salvar" name="salvar"/>
    </form>

<br>
    <a href="index.php"> Voltar </a>
</body>
</html>


<?php
if(isset($_POST['salvar'])){

   

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $conteudo = $_POST['pesquisa'];
    $materia = $_POST['materia'];
    $descricao = $_POST['descricao'];
    $tema = $_POST['tema'];
    $arquivos = $_FILES['arquivo'];

        if($arquivos['error']==4){
            echo "<script>
                      alert('Imagem vazia');
                      location.href = 'cadastro_pesquisa.php';    
                  </script>
            ";
       }else{

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pegar a extensão do arquivo
    $nome = md5(uniqid(time())) . $extensao; // nome do arquivo
    $diretorio = "upload/"; //lugar q o arquivo vai

    move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$nome);


    $query = "INSERT INTO postagens (id_postagem,imagem,pesquisa,autor,titulo,materia,descricao,tema)
     VALUES (null,'$nome','$conteudo','$autor','$titulo','$materia','$descricao','$tema')";
    $executa = mysqli_query($conexao,$query);

     if($executa==1){
        echo "
            <script>
                alert('Dados inseridos meu parceiro!');
                location.href = 'index.php';
            </script>
        ";
     }else{
        echo "
            <script>
                alert('Deu errado meu parceiro;
                location.href = 'cadastro_pesquisa.php';
            </script>
        ";

     }
    } 
   }

?>