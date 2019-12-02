<!DOCTYPE html>
<html lang="en">
<head>
	<title>Novo post</title>
	<?php require 'header.php'; ?>
</head>
<body>
	  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="button-nav navbar-brand js-scroll-trigger" href="home.php">HOME</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="button-nav nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contato</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="button-nav nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="novo-post.php">Cadastro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Area cadastro -->

  <?php 

  // $msg = false;

  // if(isset($_FILES['post'])){
  //   $extensao = strtolower(substr($_FILES['post']['name'], -4)); //Pega a extenção do post.
  //   $novo_nome = md5(time()) . $extensao; // Define o nome do post.
  //   $diretorio = "upload/"; // Defineo diretorio para onde enviaremos o post.

  //   move_uploaded_file($_FILES['post']['tmp_name'], $diretorio.$novo_nome); // Efeitua o upload.

  //   $sql_code = "INSERT INTO post (post) VALUES(null,'$novo_nome', NOW())";
  //   if($mysql->query($sql_code)){
  //     $msg = "Arqivo enviado";
  //   }else{
  //     $msg = "Falha ao mandar o post";
  //   }
  // }
?>
	<div class="container" style="padding-top: 105px;">
		<div class="row" style="justify-content: center;">
			<form action="post.php" method="POST">
				<div class="form-group">
				    <label class="itens-form" id="title" for="title">Título</label>
				    <input type="text" name="title" class="form-control" id="title" placeholder="Título do post">
			  	</div>
			  	<hr />
            <div class="form-group">
                <label class="itens-form" for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome">
            </div>
            <hr />
            <div class="form-group">
                <label class="itens-form" for="exampleFormControlTextarea1">Área de texto</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button id="enviar" class="btn btn-info">Salvar</button>
			</form>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.js"integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.mask.min.js"></script>
        <script src="js/masks.js"></script>
		</div>
	</div>
  <?php include 'footer.php' ?>
</body>
</html>
