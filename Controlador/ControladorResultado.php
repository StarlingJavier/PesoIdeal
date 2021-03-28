<?php   

require_once("../Modelo/ModeloMain.php");

$pIdeal= new PesoIdealModel();
$Altura = $_POST["Altura"];
$Edad = $_POST["Edad"];
$rPIdeal=0;

$pIdeal->set_Altura($Altura);
$pIdeal->set_Edad($Edad);

$pIdeal->get_Altura();
$pIdeal->get_Edad();
$rPIdeal=$pIdeal->get_Total();
	
require_once("../Vista/Resultado.php");

?>