<?php
  include './assets/include/imgRandom.php';
  include './assets/include/imgSobre.php';
  ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <?php 
      include './assets/include/metas.html';
     ?>
     <!-- ICONE -->
     <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/control.css">
    <link rel="stylesheet" href="./assets/css/parallax.css">
    <style type="text/css">
    </style>
    <title>Sk8NoFront</title>
  </head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M3HE791MS3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-M3HE791MS3');
    </script>

  <body id="home-section">
    
    <!-- menu -->
    <?php 
      include './assets/include/menu.html';
      ?>

    <!-- imagem home -->
    <?php 
      include './assets/include/imgHome.php';
      ?>

    <div class="parallax color-black pas1"></div>
    
    <!-- sobre -->
   <?php 
      include './assets/include/sobre.html';
      ?>

    <div class="parallax color-black pas2"></div>

    <!-- galeria  -->
    <?php 
      include './assets/include/galeria.php';
      ?>
    
    <div class="parallax color-black pas1"></div>

    <!-- parceria -->
    <?php 
      include './assets/include/parceria.html';
      ?>
    
    <div class="parallax color-black pas2" ></div>
    
    <!-- contato -->
    <?php 
      include './assets/include/contato.html';
      ?>

    <a href="#home-section" id="myBtn" title="Go to top">&#8682;</a>
    
    <!-- footer -->
    <?php 
      include './assets/include/footer.html';
      ?>
    

    
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/js2.js"></script>
       <script type="text/javascript">
      //form textarea counter
      var text_max = 1000;
      $('#count_message').html('0 / ' + text_max );
      
      $('#exampleFormControlTextarea1').keyup(function() {
        var text_length = $('#exampleFormControlTextarea1').val().length;
        var text_remaining = text_max - text_length;
        
        $('#count_message').html(text_length + ' / ' + text_max);
      });
    </script>
  </body>
</html>
