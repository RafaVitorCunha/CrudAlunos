<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once(__DIR__ . "/../../model/Aluno.php");
    require_once(__DIR__ . "/../../controller/AlunoController.php");

    $msgErro = "";
    $aluno = null;

    //1- Receber o ID do aluno (GET).
    $id = 0;
    if(isset($_GET['id']))
        $id = $_GET['id'];

    //2- Chamar o controler para excluir.
    $alunoCont = new AlunoController();
    $aluno = $alunoCont->buscarPorId($id);
    if($aluno) {
        $erros = $alunoCont->excluirPorId($aluno->getId());
    
    //3- Verfica se deu erro.
        if($erros) {
        //3.1- SIM: exibe o erro na própria página.
            $msgErros = implode("<br>", $erros);
            echo $msgErros;

            } else {
        //3.2- NÃO (sucesso): redireciona para o LISTAR.
            header("location: listar.php");
            exit;
            }
        }
        else {
            echo "Aluno não encontrado!<br>";
            echo "<a href='listar.php'>Voltar</a>";
        }