<?php
echo $razonSocial." ".$idEmpresa;
	$consulta="UPDATE empresa SET razonSocial='".$razonSocial."',rfc='".$rfc."',telefonoEmpresa='".$telefonoEmpresa."',paginaWebEmpresa='".$paginaWebEmpresa."',calleEmpresa='".$calleEmpresa."',numeroInteriorEmpresa=".$numeroInteriorEmpresa.",numeroExteriorEmpresa='".$numeroExteriorEmpresa."',coloniaEmpresa='".$coloniaEmpresa."',ciudadEmpresa='".$ciudadEmpresa."',estadoEmpresa='".$estadoEmpresa."'  WHERE idEmpresa=".$idEmpresa;
	$enlace->query($consulta);
?>

,,,,,,,,