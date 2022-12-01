<?php

class escola
{

    public $aluno = "Patrick";
    public $professor = "Edilson";
    public $disciplina = "Programação para internet";
    public $nomeEscola = "ETSSA";
    public $curso = "Tecnico em informática";

    public function dadosEscola()
    {
        echo "Aluno: {$this-> aluno} <br>";
        echo "professor: {$this-> professor} <br>";
        echo "Disciplina: {$this-> disciplina} <br>";
        echo "Nome Escola: {$this->nomeEscola} <br>";
        echo "Curso: {$this->curso} <br> ";
    }

    public function sobreEscola()
    {
        echo "A escola é muito boa!";
    }
    
    public function sobreDisciplina()
    {
        echo " A matéria é muito top.";
    }

}
$escola1 = new escola();
$escola1 -> dadosEscola();
$escola1 -> sobreEscola();
$escola1 -> sobreDisciplina();

?>