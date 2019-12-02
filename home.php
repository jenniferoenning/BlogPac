<?php 
include 'header.php'; 
include 'connection.php';

$posts = $database->select("post","*");


?>

  <!-- Header título -->
  <header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="header-title">SITE PAC</h1>
            <div class="row">
              <hr class="container-separation2"></hr>
              <img class="img-header" src="img/icon-header.png">
              <hr class="container-separation2"></hr>
            </div>
          <p class="header-description">Through the future blog</p>
        </div>
      </div>
    </div>
  </header>
  
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
          <li class="nav-item mx-0 mx-lg-1" style="padding-top: 9px;">
            <form method="POST" action="">
              <input type="text" name="name">
              <input name="pesquisar" type="submit" value="ENVIAR">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Container infos -->
  <hr class="container-separation"></hr>
  <section class="my-5">
    <div>
      <p class="card-title text-center pb-5">Como funciona!?</p>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/info-1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Domótica termo usado na “Robótica”, definida como integração dos mecanismos automáticos em um espaço.</p>
            </div>
          </div>
        </div>
        <div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/info-2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Simplifica o cotidiano das pessoas, satisfazendo necessidades de comunicação, de conforto e segurança.</p>
            </div>
          </div>
        </div>
        <div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/info-3.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Termo surgiu pretendia-se controlar a iluminação, climatização, a segurança, interligando esses elementos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Container posts -->



  <section class="my-5">
    <hr class="container-separation"></hr>
    <div>
      <p class="nav-post-title text-center pb-5">Alguns posts de alunos</p>
    </div>
    <div class="container">
      <div class="row justify-content-center">
              <?php 
                foreach ($posts as $key => $value) {
                    echo '<div class="card border-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">' . $value["date"] . '</div>
                            <div class="card-body text-info">
                              <h5 class="card-title">' . $value["title"] . '</h5>
                              <p class="card-text">' . $value["content"] . '</p>
                            </div>
                          </div>';
                          
                }
              ?>
  </section>

<?php include 'footer.php'; ?>