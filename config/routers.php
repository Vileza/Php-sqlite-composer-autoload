<?php

  use Alura\Cursos\Controller\ListarCursos;
  use Alura\Cursos\Controller\Persistencia;
  use Alura\Cursos\Controller\Formularioinsersao;
  use Alura\Cursos\Controller\Exclusao;

  $rotas=[
    'listar-cursos' => ListarCursos::class,
    'novo-curso' => Formularioinsersao::class,
    'salvar-curso' => Persistencia::class,
    'excluir-curso' => Exclusao::class,
  ];

  return $rotas;


?>
