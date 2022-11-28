<?php 
  $pasta = './assets/img/home/';
  $arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);
  $lastPic = "";
  $randomImage = null;
  if ($randomImage == "" or $randomImage=$lastPic) {
        
    $randomImage = $arquivos[array_rand($arquivos)];
    $lastPic = $randomImage;
    }

 ?>