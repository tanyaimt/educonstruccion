<?php

$servidor="localhost";
$usuario="root";
$contrasena="";
$base_datos="educonstruccion";

if(!$enlace=mysqli_connect($servidor,$usuario,$contrasena,$base_datos))
echo "No se realizó la conexión a la BD";
   

$ventas = "";
$sistemas = "";
$rh = "";
$produccion = "";
$obrero = "";
$logistica = "";
$inventario = "";
$gerencia = "";
$fiscal = "";
$finanzas = "";
$cliente = "";
$calidad = "";
$idUsuario = "";
$tipoUsuario = "";
$tipo = "";
$sesion = "";

$sesioncalidad=(isset($sesioncalidad) ? $sesioncalidad : "1");
$sesioncliente=(isset($sesioncliente) ? $sesioncliente : "1");
$sesionfinanzas=(isset($sesionfinanzas) ? $sesionfinanzas : "1");
$sesionfiscal=(isset($sesionfiscal) ? $sesionfiscal : "1");
$sesiongerencia=(isset($sesiongerencia) ? $sesiongerencia : "1");
$sesioninventario=(isset($sesioninventario) ? $sesioninventario : "1");
$sesionlogistica=(isset($sesionlogistica) ? $sesionlogistica : "1");
$sesionobrero=(isset($sesionobrero) ? $sesionobrero : "1");
$sesionproduccion=(isset($sesionproduccion) ? $sesionproduccion : "1");
$sesionrh=(isset($sesionrh) ? $sesionrh : "1");
$sesionsistemas=(isset($sesionsistemas) ? $sesionsistemas : "1");
$sesionventas=(isset($sesionventas) ? $sesionventas : "1");

if(isset($_GET['view'])){


	if(file_exists('controller/'.strtolower($_GET['view']).'Controller.php')){
//		include('definirPermisosModel.php');
		include('controller/'.strtolower($_GET['view']).'Controller.php');
	}else{
		include('controller/errorController.php');
	}
}else{
	include('controller/indexController.php');
}

function convertirView($view){
	switch($view)
	{	
		case 1:
			$view="ventas";
		break;
		case 2:
			$view="sistemas";
		break;
		case 4:
			$view="rh";
		break;
		case 8:
			$view="produccion";
		break;
		case 16:
			$view="obrero";
		break;
	}
}
?>