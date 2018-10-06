<?php 
include("conexioModel.php");

$loginSupervisorObra=(isset($_POST['loginSupervisorObra']) ? $_POST['loginSupervisorObra'] : null);
$idEstimacionDestajo=(isset($_POST['idEstimacionDestajo']) ? $_POST['idEstimacionDestajo'] : null);
$idCotizacion=(isset($_POST['idCotizacion']) ? $_POST['idCotizacion'] : null);
$idSupervisorObra1=(isset($_POST['idSupervisorObra1']) ? $_POST['idSupervisorObra1'] : null);
$idFacturaVenta2=(isset($_POST['idFacturaVenta2']) ? $_POST['idFacturaVenta2'] : null);
$estadoEstimacion=(isset($_POST['estadoEstimacion']) ? $_POST['estadoEstimacion'] : null);
$descripcionEstimacion=(isset($_POST['descripcionEstimacion']) ? $_POST['descripcionEstimacion'] : null);
$precioEstimacion=(isset($_POST['precioEstimacion']) ? $_POST['precioEstimacion'] : null);
$fechaInicio=(isset($_POST['fechaInicio']) ? $_POST['fechaInicio'] : null);
$fechaTermino=(isset($_POST['fechaTermino']) ? $_POST['fechaTermino'] : null);
$fechaUltimaActualizacion=(isset($_POST['fechaUltimaActualizacion']) ? $_POST['fechaUltimaActualizacion'] : null);
$idCotizacion=(isset($_POST['idCotizacion']) ? $_POST['idCotizacion'] : null);
$idContrato=(isset($_POST['idContrato']) ? $_POST['idContrato'] : null);
$descripcionCotizacion=(isset($_POST['descripcionCotizacion']) ? $_POST['descripcionCotizacion'] : null);
$precioCotizacion=(isset($_POST['precioCotizacion']) ? $_POST['precioCotizacion'] : null);
$idCotizacion1=(isset($_POST['idCotizacion1']) ? $_POST['idCotizacion1'] : null);
$idContrato=(isset($_POST['idContrato']) ? $_POST['idContrato'] : null);
$idObra=(isset($_POST['idObra']) ? $_POST['idObra'] : null);
$descripcionContrato=(isset($_POST['descripcionContrato']) ? $_POST['descripcionContrato'] : null);
$precioContrato=(isset($_POST['precioContrato']) ? $_POST['precioContrato'] : null);
$idObra=(isset($_POST['idObra']) ? $_POST['idObra'] : null);
$idEmpresaCliente=(isset($_POST['idEmpresaCliente']) ? $_POST['idEmpresaCliente'] : null);
$descripcionObra=(isset($_POST['descripcionObra']) ? $_POST['descripcionObra'] : null);
$precioObra=(isset($_POST['precioObra']) ? $_POST['precioObra'] : null);
$idObra1=(isset($_POST['idObra1']) ? $_POST['idObra1'] : null);
$idEmpresa=(isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null);
$idEmpresaCliente=(isset($_POST['idEmpresaCliente']) ? $_POST['idEmpresaCliente'] : null);
$razonSocial=(isset($_POST['razonSocial']) ? $_POST['razonSocial'] : null);
$rfc=(isset($_POST['rfc']) ? $_POST['rfc'] : null);
$telefonoEmpresa=(isset($_POST['telefonoEmpresa']) ? $_POST['telefonoEmpresa'] : null);
$paginaWebEmpresa=(isset($_POST['paginaWebEmpresa']) ? $_POST['paginaWebEmpresa'] : null);
$calleEmpresa=(isset($_POST['calleEmpresa']) ? $_POST['calleEmpresa'] : null);
$numInteriorEmpresa=(isset($_POST['numInteriorEmpresa']) ? $_POST['numInteriorEmpresa'] : null);
$numExteriorEmpresa=(isset($_POST['numExteriorEmpresa']) ? $_POST['numExteriorEmpresa'] : null);
$coloniaEmpresa=(isset($_POST['coloniaEmpresa']) ? $_POST['coloniaEmpresa'] : null);
$ciudadEmpresa=(isset($_POST['ciudadEmpresa']) ? $_POST['ciudadEmpresa'] : null);
$estadoEmpresa=(isset($_POST['estadoEmpresa']) ? $_POST['estadoEmpresa'] : null);
$tipoEmpresa=(isset($_POST['tipoEmpresa']) ? $_POST['tipoEmpresa'] : null);
$idCotizacion1=(isset($_POST['idCotizacion1']) ? $_POST['idCotizacion1'] : null);
$ConfirmarEmpresa=(isset($_POST['idCotizacion1']) ? $_POST['idCotizacion1'] : null);
$btnAdministrarProyectoLogistica=$_POST['btnAdministrarProyectoLogistica'];

$tipo=0;
$tableresult="<table border='1' class='table1' >";

switch($btnAdministrarProyectoLogistica){
	case "Buscar Empresa":
	include("buscarEProyectoLogisticaModel.php");
	break;
	case "Actualizar Empresa":
		include("actualizarEProyectoLogisticaModel.php");
	break;
	case "Eliminar Empresa":
		include("EliminarEProyectoLogisticaModel.php");
	break;
	case "Registrar Empresa":
		include("registrarEProyectoLogisticaModel.php");
	break;
	case "Limpiar":
		include("limpiarProyectoLogisticaModel.php");
	break;
	case "Buscar Todas Las E":
		include("buscarTodoEProyectoLogisticaModel.php");
	break;
	case "Confirmar":
		include("confirmarEProyectoLogisticaModel.php");
	break;
	case "Cambiar":
		include("cambiarEProyectoLogisticaModel.php");
	break;
//Formulario Obras
	case "Buscar Obra":
		$ConfirmarEmpresa="true";
		include("buscarOProyectoLogisticaModel.php");
	break;
	case "Actualizar Obra":
		$ConfirmarEmpresa="true";
		include("actualizarOProyectoLogisticaModel.php");
	break;
	case "Eliminar Obra":
		$ConfirmarEmpresa="true";
		include("EliminarOProyectoLogisticaModel.php");
	break;
	case "Registrar Obra":
		$ConfirmarEmpresa="true";
		include("registrarOProyectoLogisticaModel.php");
	break;
	case "Buscar Todas Las O":
		$ConfirmarEmpresa="true";
		include("buscarTodoOProyectoLogisticaModel.php");
	break;
//Formulario Contratos
	case "Buscar Contrato":
		$ConfirmarEmpresa="true";
		include("buscarCnProyectoLogisticaModel.php");
	break;
	case "Actualizar Contrato":
		$ConfirmarEmpresa="true";
		include("actualizarCnProyectoLogisticaModel.php");
	break;
	case "Eliminar Contrato":
		$ConfirmarEmpresa="true";
		include("EliminarCnProyectoLogisticaModel.php");
	break;
	case "Registrar Contrato":
		$ConfirmarEmpresa="true";
		include("registrarCnProyectoLogisticaModel.php");
	break;
	case "Buscar Todas Los C":
		$ConfirmarEmpresa="true";
		include("buscarTodoCnProyectoLogisticaModel.php");
	break;
//Formulario Cotizaciones
	case "Buscar Cotizacion":
		$ConfirmarEmpresa="true";
		include("buscarCtProyectoLogisticaModel.php");
	break;
	case "Actualizar Cotizacion":
		$ConfirmarEmpresa="true";
		include("actualizarCtProyectoLogisticaModel.php");
	break;
	case "Eliminar Cotizacion":
		$ConfirmarEmpresa="true";
		include("EliminarCtProyectoLogisticaModel.php");
	break;
	case "Registrar Cotizacion":
		$ConfirmarEmpresa="true";
		include("registrarCtProyectoLogisticaModel.php");
	break;
	case "Buscar Todas Las Ct":
		$ConfirmarEmpresa="true";
		include("buscarTodoCtProyectoLogisticaModel.php");
	break;
//Formulario Estimaciones
	case "Buscar Estimacion":
		$ConfirmarEmpresa="true";
		include("buscarEsProyectoLogisticaModel.php");
	break;
	case "Actualizar Estimacion":
		$ConfirmarEmpresa="true";
		include("actualizarEsProyectoLogisticaModel.php");
	break;
	case "Eliminar Estimacion":
		$ConfirmarEmpresa="true";
		include("EliminarEsProyectoLogisticaModel.php");
	break;
	case "Registrar Estimacion":
		$ConfirmarEmpresa="true";
		include("registrarEsProyectoLogisticaModel.php");
	break;
	case "Buscar Todas Las Es":
		$ConfirmarEmpresa="true";
		include("buscarTodoEsProyectoLogisticaModel.php");
	break;
	default:
		$ConfirmarEmpresa="true";
		include("defaultProyectoLogisticaModel.php");
	break;
}
$tableresult=$tableresult."</table>";
include('controller/logisticaController2.php');
?>

