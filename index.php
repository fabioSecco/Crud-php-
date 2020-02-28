<?php
require_once 'vendor/autoload.php';

// $produto = new \App\Model\Produto();
// $produto->setId(1);
// $produto->setNome('Gabinete Tiranossauro Rex ');
// $produto->setDescricao('Mobit');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(3);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
  echo $produto['nome']."<br>". $produto['descricao']."<hr>";
endforeach;
