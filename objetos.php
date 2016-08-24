//OBJETOS
<?php
abstract class FiguraGeometrica
{
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	function  __construct ()
	{


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
	
}


?>