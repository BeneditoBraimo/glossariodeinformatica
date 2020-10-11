<?php
namespace glossariodeinformatica;


require_once ('Entrada.php');
require_once ('EntradaSugerida.php');



use glossariodeinformatica;
use glossariodeinformatica;
/**
 * @author Benedito Braimo
 * @version 1.0
 * @created 17-Sep-2020 4:16:47 PM
 */
class Utilizador
{

	private $enderecoEmail;
	private $nomeUtilizador;
	private $m_Entrada;
	private $m_Entrada_Sugerida;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getEntrada()
	{
		return $m_Entrada;
	}

	public function getEntrada_Sugerida()
	{
		return $m_Entrada_Sugerida;
	}

	/**
	 * 
	 * @param enderecoEmail
	 * @param nomeUtilizador
	 */
	public function inserirDados($enderecoEmail, $nomeUtilizador)
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

	/**
	 * 
	 * @param newVal
	 */
	public function setEntrada_Sugerida(Entrada_Sugerida $newVal)
	{
		$m_Entrada_Sugerida = $newVal;
	}

}
?>