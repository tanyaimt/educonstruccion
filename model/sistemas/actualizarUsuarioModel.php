<?php
$consulta="UPDATE usuario SET 
	nombreUsuario='".$nombreUsuario."', 
	aPaternoUsuario='".$aPaternoUsuario."', 
	aMaternoUsuario='".$aMaternoUsuario."', 
	telefonoFijoUsuario='".$telefonoFijoUsuario."', 
	telefonoMovilUsuario='".$telefonoMovilUsuario."', 
	calleUsuario='".$calleUsuario."', 
	numInteriorUsuario='".$numInteriorUsuario."', 
	numExteriorusuario=".$numExteriorusuario.", 
	coloniaUsuario='".$coloniaUsuario."', 
	ciudadUsuario='".$ciudadUsuario."', 
	estadoUsuario='".$estadoUsuario."', 
	codigoPostalUsuario='".$codigoPostalUsuario."', 
	correoElectronicoUsuario='".$correoElectronicoUsuario."', 
	loginUsuario='".$loginUsuario."', 
	constrasenaUsuario='".$constrasenaUsuario."' 

	WHERE idUsuario='".$idUsuario."'";
					$enlace->query($consulta);
?>