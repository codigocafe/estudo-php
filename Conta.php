<?php

class Conta {
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
		
		public function __construct($nome, $cpf){
			$this->saldo = 0;
			$this->nomeTitular = $nome;
			$this->cpfTitular = $cpf;
		}
		
		public function pegaSaldo()
		{
			return $this->saldo;
		}
		
		public function depositar($valor)
		{
			$this->saldo += $valor;
		}
		
		public function sacar($valor)
		{
			if( $valor <= $this->saldo)
			{
				$this->saldo -= $valor;
				echo "Foi sacado " . $valor . PHP_EOL;
			}else{
				echo "Saldo insuficiente." . PHP_EOL;
			}
		}
}

$conta1 = new Conta("Gustavo Mathias", "123.456.789-10");
echo $conta1->pegaSaldo() . PHP_EOL;
$conta1->depositar(100);
echo $conta1->pegaSaldo() . PHP_EOL;
$conta1->sacar(20);
echo $conta1->pegaSaldo() . PHP_EOL;