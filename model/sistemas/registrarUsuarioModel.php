<?php
echo "	a	".$nombreUsuario." b";

$Ultimoid=0;
$Ultimoid="false";//
	if(!empty($_POST['tipoUsuario'])) {
		foreach($_POST['tipoUsuario'] as $selected) {
			$tipo+=$selected;
			if($selected==8){
				$SupervisorObra="true";
			}
		}
		$consulta="INSERT INTO usuario (nombreUsuario, aPaternoUsuario, aMaternoUsuario, telefonoFijoUsuario, telefonoMovilUsuario, calleUsuario, numInteriorUsuario, numExteriorusuario, coloniaUsuario, ciudadUsuario, estadoUsuario, codigoPostalUsuario, correoElectronicoUsuario, loginUsuario, constrasenaUsuario, tipoUsuario) VALUES('".$nombreUsuario."','".$aPaternoUsuario."','".$aMaternoUsuario."','".$telefonoFijoUsuario."','".$telefonoMovilUsuario."','".$calleUsuario."','".$numInteriorUsuario."',".$numExteriorusuario.",'".$coloniaUsuario."','".$ciudadUsuario."','".$estadoUsuario."','".$codigoPostalUsuario."','".$correoElectronicoUsuario."','".$loginUsuario."','".$constrasenaUsuario."',".$tipo.")";
		$enlace->query($consulta);

	}
	else{
			$errormsg= "<b>Por favor selecciona al menos un perfil.</b>";
		}

?>