<?php
namespace glossariodeinformatica;
use glossariodeinformatica;
require_once 'Letra.php';

/**
 * @author Benedito Braimo
 * @version 1.0
 * @created 17-Sep-2020 4:16:32 PM
 */
class Entrada
{

	private $descricao;
	private $termo;

	function __construct($descricao, $termo)
	{
            $this->descricao = $descricao;
            $this->termo = $termo;
	}

	function __destruct()
	{
	}

	/**
	 * 
	 * @param termo
	 */
	public function editarEntrada($termo)
	{
	}

	public function lerDescricao()
	{
	}

}
?>