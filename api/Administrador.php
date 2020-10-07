<?php
//namespace glossario_de_informatica;


require_once ('Entrada.php');
require_once ('Utilizador.php');



//use glossario_de_informatica;
//use glossario_de_informatica;
/**
 * @author Benedito Braimo
 * @version 1.0
 * @created 17-Sep-2020 4:16:15 PM
 */
class Administrador extends Utilizador
{

	private $palavraPasse;
	private $m_Entrada;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param palavraPasseCorrente
	 * @param novaPalavraPasse
	 */
	public function alterarPalavraPasse($palavraPasseCorrente, $novaPalavraPasse)
	{
	}

	/**
	 * 
	 * @param palavraPasse
	 * @param enderecoEmail
	 */
	public function entrar($palavraPasse, $enderecoEmail)
	{
	}

	public function getEntrada()
	{
		return m_Entrada;
	}

	public function sair()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setEntrada(Entrada $newVal)
	{
		$m_Entrada = $newVal;
	}

}
?>