<?php
  $diretorio = "./assets/img/galeria"; // abre o diretório
  
   
  $ponteiro = opendir($diretorio); // monta os vetores com os itens encontrados na pasta
  
  while ($nome_itens = readdir($ponteiro)) {
  
  $itens[]= $nome_itens;
  
  }// ordena o vetor de itens
  
  rsort($itens);// percorre o vetor para fazer a separacao entre listaPasta e pastas
  
  foreach ($itens as $listar) { // retira "./" e "../" para que retorne apenas pastas e listaPasta
  
  	if ($listar!="." && $listar!=".."){// checa se o tipo de arquivo encontrado é uma pasta
  
  		$listaPasta[]=$listar;
  
  		}
  
  	}
  
  
  // lista os listaPasta se houverem
  
  if ($listaPasta != "") {
  
  foreach($listaPasta as $listar)
   
  {
  
  //print "$listar";
  echo '<a href='.$diretorio."/".$listar.'>'.$listar.'</a><br />';
  
  }
  
  } else {
  
  echo "Não há nenhuma pagina.";
  
  }
  
  ?>