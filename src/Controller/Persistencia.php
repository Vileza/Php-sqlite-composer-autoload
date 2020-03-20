<?php

  namespace Alura\Cursos\Controller;
  use Alura\Cursos\Infra\EntityManagerCreator;
  use Alura\Cursos\Entity\Curso;

  class Persistencia implements InterfaceControleRequisicao{

    private $entityManager;

    public function __construct(){

      $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao():void{

      $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
      $curso = new Curso();
      $curso->setDescricao($_POST['descricao']);
      $this->entityManager->persist($curso);
      $this->entityManager->flush();

      header('location:/listar-cursos');

    }
  }

?>
