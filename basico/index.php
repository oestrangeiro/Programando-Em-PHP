<?php
	echo "Olá, estou estudando php! <br>";
	
	//	Este um exemplo de comentário
	
	/*
		Este é outro exemplo de comentário
	*/

	echo "Este é um tipo de saída em php <br>";
	print "Este é um outro tipo de saída <br>";
	print("Veja, este é mais um exemplo de saída! <br><br>");
	
	/*	
		Declaração de variavéis
		$nome = valor;
	*/
	
	$nome = "Fulaninho"; //	Tipo string
	$sobrenome = "Da Silva"; //	Tipo string
	$idade = 20; //	Tipo int
	$funcionarioClt = true; //	Tipo boolean
	$salario; // Sem atribuição de valor
	$peso = 67.8; // Tipo float


	//	funcao que mostra informações de variaveis
	//	var_dump(nomeDaVariavel)
	
	var_dump($nome);
	var_dump($sobrenome);
	var_dump($idade);
	var_dump($funcionarioClt);
	var_dump($peso);

	echo "Olá, meu nome é $nome $sobrenome, tenho atualmente $idade, e peso $peso Kg<br>";
	
	//	Use define para declarar uma constante
	//	define("nomeDaConstante", valorDaConstante);
	//	Uso em uma string: echo "Texto" . constante . "Resto do texto";
	define("PI", 3.14159);
	print("Valor da constante PI: " . PI . "<br>"); 
