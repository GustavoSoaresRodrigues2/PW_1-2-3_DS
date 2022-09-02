<?php
    class Turma {
        public $nomeTurma;
        public $nota1Turma;
        public $nota2Turma;
        public $nota3Turma;
        public $mediaTurma;

        public function __construct($nomeTurma, $nota1Turma, $nota2Turma, $nota3Turma) {
            $this-> nome = $nomeTurma;
            $this-> nota1 = $nota1Turma;
            $this-> nota2 = $nota2Turma;
            $this-> nota3 = $nota3Turma;
            $this-> media = ($nota1Turma + $nota2Turma + $nota3Turma) / 3;
        }  
    }   
?>