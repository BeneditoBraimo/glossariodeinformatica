<?php
namespace glossario_de_informatica;


require_once ('Entrada.php');



use glossario_de_informatica;
/**
 * @author Benedito Braimo
 * @version 1.0
 * @created 17-Sep-2020 4:16:40 PM
 */
class Entrada_Sugerida extends Entrada
{

	private $palavra;
	private $valido;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param palavra
	 */
	public function rejeitar($palavra)
	{
	}

	/**
	 * 
	 * @param palavra
	 */
	public function sugerir($palavra)
	{
	}

	/**
	 * 
	 * @param palavra
	 */
	public function validar($palavra)
	{
	}

}
?>