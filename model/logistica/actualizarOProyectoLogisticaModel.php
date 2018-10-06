<?php
$consulta="UPDATE obra SET idEmpresa2='".$idEmpresa."',descripcionObra='".$descripcionObra."',precioObra='".$precioObra."'	WHERE idObra=".$idObra;
					$enlace->query($consulta);
?>