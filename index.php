<?php
  include('admin/config.php');
  $mysqli = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container">

      
      <div class="row barra-verde" >
        <div class="col-md-11 text-center">
          Free Delivery over $100. Gift with Purchase over $150
        </div>
        <div class="col-md-1 text-end">
          <img src="img/x.svg">
        </div>
      </div>
      <div class="header">
        <div class="coluna1">
          <img src="img/logo.svg">
        </div>
        <div>
          <ul class="menu">
            <li>
              <a href="">
                Home 
              </a>
            </li>
            <li>
              <a href=''>
                Quem Somos 
              </a>
            </li>
            <li class="down">
              <a href=''>
                Serviços 
              </a>
              <ul>
                <li>
                  <a href="">
                    Serviço A
                  </a>
                </li>
                <li>
                  <a href="">
                    Serviço B
                  </a>
                </li>
                <li>
                  <a href="">
                    Serviço C
                  </a>
                </li>
              </ul>
            </li>
            <li class="down">
              <a href=''>
                Produtos
              </a>
              <ul>
                <li>
                  <a href="">
                    Produto A
                  </a>
                </li>
                <li>
                  <a href="">
                    Produto B
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href=''>
                Contato
              </a>
            </li>
          </ul>
        </div>
        <div class="coluna3">
          <a href="">
            <img src="img/lupa.svg">
          </a>
          <a href="">
            <img src="img/profile.png">
          </a>
          <a href="">
            <img src="img/carrinho.svg">
          </a>
        </div>        
      </div>
      <div style="height: 500px;" class="_debug">
        Banner...
      </div>
      <?php
        $query = "select * from produtos ORDER BY id";
        $result = mysqli_query($mysqli, $query);
      ?>
      <div class="produtos">
        <h2>
          Ultimas <span>Ofertas</span>
        </h2>
        <div class="row">
          <?php
            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
          ?>
          <div class="col-md-3">
            <div class="produto_thumb">
              <div class="imagem" style="background-image: url(img/<?php echo $row['imagem'] ?>)">
              </div>
                <?php 
                  echo $row['nome'];
                ?>
            </div>
            <div style="background-color: #F7F5F0;">
              <?php echo number_format($row['preco'], 2,',','.') ?>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>