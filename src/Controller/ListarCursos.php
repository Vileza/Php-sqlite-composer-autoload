<?php

  namespace Alura\Cursos\Controller;
  use Alura\Cursos\Entity\Curso;
  use Alura\Cursos\Infra\EntityManagerCreator;
  use Alura\Cursos\Controller\InterfaceControleRequisicao;

  //Tem uma classe que o controlador que vai representar listar-cursos
  //Essa classe controla as requisições de listar-cursos
  class ListarCursos implements InterfaceControleRequisicao{

    private $repositorioDeCursos;

    //Esse metodo irá inicializar a variavel que é uma propriedade
    public function __construct(){

      //Na primeira linha ele irá pegar o EntityManagerCreator
      //Na segunda linha ele irá pegar o repositorio de cursos

      $entityManager = (new EntityManagerCreator())->getEntityManager();
      $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);

    }

    //Esse metodo faz a requisição, ou seja, busca todos os cursos.

    public function processaRequisicao():void{

      //Aqui por fim ele vai buscar os cursos

      $cursos = $this->repositorioDeCursos->findAll();
      $titulo = "Listar Cursos";
      require __DIR__ . "/../../view/cursos/listar-cursos.php";

      //Abaixo, após fazer as requisições de listar-cursos ele irá jogar html abaixo

    }

  }


?>
