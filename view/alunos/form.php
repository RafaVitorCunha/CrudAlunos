<?php
    require_once(__DIR__ . "/../../controller/CursoController.php");
    $cursoCont = new CursoController();
    $cursos = $cursoCont->listar();
    //print_r($cursos);

    include_once(__DIR__ . "/../include/header.php");
?>

    <h2>Inserir Aluno</h2>
    <form action="" method="POST">
        <div>
            <label for="txtNome">Nome:</label>
            <input type="text" name="nome" id="txtNome" placeholder="nome do aluno..">
        </div>

        <div>
            <label for="txtIdade">Idade:</label>
            <input type="text" name="idade" id="txtIdade" placeholder="informe a idade..">
        </div>

        <div>
            <label for="selEstrang">Estrangeiro:</label>
            <select name="estrangeiro" id="selEstrang">
                <option value="">==Selecione==</option>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
        </div>

        <div>
            <label for="selCurso">Curso:</label>
            <select name="curso" id="selCurso">
                <option value="">==Selecione==</option>
                <?php foreach($cursos as $c): ?>
                    <option value="<?= $c->getId() ?>">
                        <?= $c->getNome() ?>
                    </option>
                <?php endforeach; ?> 

            </select>
        </div>

        <div>
            <br><button type="submit">Gravar</button>
        </div>
    </form>

<?php
    include_once(__DIR__ . "/../include/footer.php");
?>