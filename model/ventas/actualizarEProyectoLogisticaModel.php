<?php
$consulta="UPDATE empresa SET razonSocial='".$razonSocial."',rfc='".$rfc."',telefonoEmpresa='".$telefonoEmpresa."',paginaWebEmpresa='".$paginaWebEmpresa."',calleEmpresa='".$calleEmpresa."',numInteriorEmpresa='".$numInteriorEmpresa."',numExteriorEmpresa=".$numExteriorEmpresa.",coloniaEmpresa='".$coloniaEmpresa."',ciudadEmpresa='".$ciudadEmpresa."',estadoEmpresa='".$estadoEmpresa."'	WHERE idEmpresa=".$idEmpresa;
					$enlace->query($consulta);
?>