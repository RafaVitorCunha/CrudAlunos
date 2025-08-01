<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once(__DIR__ . "/../../controller/AlunoController.php");

    //Chamar o controller para obter a lista de alunos.
    $alunoCont = new AlunoController();

    $lista = $alunoCont->listar();
    // print_r($lista);

    //Incluir o header.
    include_once(__DIR__ . "/../include/header.php");
?>

    <h2 style="text-align: center;">Listagem de Alunos</h2>

    <div>
        <a href="inserir.php">Inserir</a>
    </div>

    <table border="1">
    <!-- Cabeçalho -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th></th>
        <th></th>
    </tr>

    <!-- Dados -->
    <?php foreach($lista as $aluno): ?>
        <tr>
            <td><?= $aluno->getId() ?></td>
            <td><?= $aluno->getNome() ?></td>
            <td><?= $aluno->getIdade() ?></td>
            <td><?= $aluno->getEstrangeiroTexto() ?></td>
            <td><?= $aluno->getCurso()->getId() ?></td>
            <td></td>
            <td></td>
        </tr>
        <?php endforeach; ?>

    </table>


<?php
    //Incluir o footer.
    include_once(__DIR__ . "/../include/header.php");
