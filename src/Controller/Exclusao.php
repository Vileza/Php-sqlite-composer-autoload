<?php
  namespace Alura\Cursos\Controller;

  class Exclusao implements InterfaceControleRequisicao{

    public function __construct(){


    }
    public function processaRequisicao():void{
      $id =filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

      if(is_null($id) || $id === false){
        header('location:/listar-cursos');
        exit();
      }
      $curso = $this->entityManager->getReference(Curso::class, $id);
      $this->entityManager->remove($curso);
      $this->entityManager->flush();
      header('location: /listar-cursos');

    }
  }

?>
