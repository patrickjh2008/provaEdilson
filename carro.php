<?php

class carro
{
    public $marca = "Fiat";
    public $modelo = "Fastback";
    public $motor = "1.3 turbo";
    public $tipoCombustivel = "FLEX";
    public $tipoVeiculo = "SUV";

    public function dados()
    {
        echo "Marca: {$this-> marca} <br>";
        echo "Modelo: {$this-> modelo} <br>";
        echo "Motor: {$this-> motor} <br>";
        echo "Tipo Combustivel: {$this->tipoCombustivel} <br>";
        echo "TipoVeiculo: {$this->tipoVeiculo} <br> ";

    }

    public function andar()
    {
        echo "Carro anda muito";
    }

    public function ronco()
    {
        echo " vrum,vrum,vrum";
    }

}

$carro1 = new carro();
$carro1 -> dados();
$carro1 -> andar();
$carro1 -> ronco();

?>