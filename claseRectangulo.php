//OBJETOS
<?php
require "claseFiguraGeometrica.php";
public class Rectangulo :: FiguraGeometrica
{
	protected $_ladoDos;
	protected $_ladoUno;

	public function __construct($ladoUno, $ladoDos)
	{
		base::__construct();
		$this->_ladoUno = $ladoUno;
		$this->_ladoDos = $ladoDos;
	}
	function ColorSetter($color)
	{
		$this ->_color = $color;
	}
	function ColorGetter()
	{
		return $this->_color;
	}
	function PerimetroGetter($perimetro)
	{
		$this->_perimetro = $perimetro;

	}
	function PerimetroSetter($perimetro)
	{
		$this->_perimetro = $perimetro;
	}
	function PerimetroGetter()
	{
		return $this->_perimetro;
	}
	function SuperficieSetter($superficie)
	{
		$this->_superficie = $superficie;
	}
	function SuperficieGetter()
	{
		return $this->_superficie;
	}

	public function  ToString()
	{
		parent::ToString();
		return echo  $this->_color. $this->_perimetro . $this->_superficie . $this->_ladoUno . $this->_ladoDos; 
	
	}
}


?>