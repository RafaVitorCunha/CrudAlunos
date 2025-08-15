<?php 
    require_once(__DIR__ . "/../../model/Aluno.php");
    require_once(__DIR__ . "/../../controller/AlunoController.php");

    $msgErro = "";
    $aluno = null;

    $id = 0;
    if(isset($_GET["id"]))
        $id = $_GET["id"];

    $alunoCont = new AlunoController();
    $aluno = $alunoCont->buscarPorId($id);

    if(! $aluno) {
        echo 
    }

    include_once(__DIR__ . "/form.php");