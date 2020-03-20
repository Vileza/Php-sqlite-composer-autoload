<?php

  namespace Alura\Cursos\Controller;


  class Formularioinsersao implements InterfaceControleRequisicao{

    public function processaRequisicao():void{
      $titulo = "Cursos";
      require __DIR__ . "/../../view/cursos/formulario.php";
    }
  }

?>
