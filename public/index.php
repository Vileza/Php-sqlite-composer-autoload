<?php
  include __DIR__ . '/../vendor/autoload.php';

  use Alura\Cursos\Controller\InterfaceControleRequisicao;

  // Aqui a var $caminho estará recebendo o caminho da url, o rewrite vai ser um arquivo .htaccess que existe algumas regras
  $rota = require __DIR__ . "/../config/routers.php";
echo "<pre>";
  echo $caminho = $_GET['rewrite'];
  echo "</pre>";

  //A var $rota está dizendo que neste diretorio chame "routers.php" no caminho especificado

  //Nessa condição está verificando se existe o caminho fornecido  na var $caminho na var $rota que chamado o arquivo routers.php .
  //Caso não vai executar e dar um exit;
  if(!array_key_exists($caminho, $rota)){
    http_response_code(404);
    exit();
  }

  $caminhoControlador = $rota[$caminho];
  $controlador = new $caminhoControlador;
  $controlador->processaRequisicao();


?>
