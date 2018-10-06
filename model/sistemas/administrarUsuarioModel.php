<?php 
include("conexioModel.php");

$idUsuario = (isset($_POST['idUsuario']) ? $_POST['idUsuario'] : "");
$nombreUsuario = (isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : "");
$aPaternoUsuario = (isset($_POST['aPaternoUsuario']) ? $_POST['aPaternoUsuario'] : '');
$aMaternoUsuario = (isset($_POST['aMaternoUsuario']) ? $_POST['aMaternoUsuario'] : '');
$telefonoFijoUsuario = (isset($_POST['telefonoFijoUsuario']) ? $_POST['telefonoFijoUsuario'] : '');
$telefonoMovilUsuario = (isset($_POST['telefonoMovilUsuario']) ? $_POST['telefonoMovilUsuario'] : '');
$calleUsuario = (isset($_POST['calleUsuario']) ? $_POST['calleUsuario'] : '');
$numInteriorUsuario = (isset($_POST['numInteriorUsuario']) ? $_POST['numInteriorUsuario'] : '');
$numExteriorusuario = (isset($_POST['numExteriorusuario']) ? $_POST['numExteriorusuario'] : '');
$coloniaUsuario = (isset($_POST['coloniaUsuario']) ? $_POST['coloniaUsuario'] : '');
$ciudadUsuario = (isset($_POST['ciudadUsuario']) ? $_POST['ciudadUsuario'] : '');
$estadoUsuario = (isset($_POST['estadoUsuario']) ? $_POST['estadoUsuario'] : '');
$codigoPostalUsuario = (isset($_POST['codigoPostalUsuario']) ? $_POST['codigoPostalUsuario'] : '');
$correoElectronicoUsuario = (isset($_POST['correoElectronicoUsuario']) ? $_POST['correoElectronicoUsuario'] : '');
$loginUsuario = (isset($_POST['loginUsuario']) ? $_POST['loginUsuario'] : '');
$constrasenaUsuario = (isset($_POST['constrasenaUsuario']) ? $_POST['constrasenaUsuario'] : '');
$tipoUsuario = (isset($_POST['tipoUsuario']) ? $_POST['tipoUsuario'] : '');
$btnAdministrarUsuario = (isset($_POST['btnAdministrarUsuario']) ? $_POST['btnAdministrarUsuario'] : '');

$tipo=0;
$tableresult="<table border='1' class='table1' ><tr><th>id</th><th>Nombre (s)</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Telefono 1 </th><th>Telefono 2 </th><th>Correo Electronico</th></tr>";

switch($btnAdministrarUsuario){
	case "Buscar":
		include("buscarUsuarioModel.php");
	break;
	case "Actualizar":
		include("actualizarUsuarioModel.php");
	break;
	case "Eliminar":
		include("EliminarUsuarioModel.php");
	break;
	case "Registrar":
		include("registrarUsuarioModel.php");
	break;
	case "Limpiar":
		include("limpiarUsuarioModel.php");
	break;
	case "Buscar Todo":
		include("buscarTodoUsuarioModel.php");
	break;
	default:
		include("defaultUsuarioModel.php");
	break;
}
$tableresult=$tableresult."</table>";
include('controller/sistemasController2.php');
?>

