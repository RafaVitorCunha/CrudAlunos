<?php
    require_once(__DIR__ . "/../model/Aluno.php");
    class AlunoService {
        public function validarAluno(Aluno $aluno) {
            $erros = array();

            if($aluno->getNome() == NULL) { // (! $aluno->getNome)...
                array_push($erros, "Informe o nome do aluno!");
            }

            if(! $aluno->getIdade()) {
                array_push($erros, "Informe a idade do aluno!");
            }

            if(! $aluno->getEstrangeiro()) {
                array_push($erros, 'Informe o campo "Estrangeiro"!');
            }

            if(! $aluno->getCurso()->getId()) {
                array_push($erros, "Informe um curso!");
            }

            return $erros;
        }

    }