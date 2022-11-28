<?php 
  $pasta = './assets/img/sobre/lateral/';
  $arquivos = glob("$pasta{*.jpg,*.JPG,*.png}", GLOB_BRACE);
  $lastPic = null;
  $randomSobre = null;
  if ($randomSobre == "" or $randomSobre=$lastPic) {
        
    $randomSobre = $arquivos[array_rand($arquivos)];
    $lastPic = $randomSobre;
    }

 ?>