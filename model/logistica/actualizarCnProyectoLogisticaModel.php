<?php
$consulta="UPDATE contrato SET descripcionContrato='".$descripcionContrato."',precioContrato='".$precioContrato."'WHERE idContrato=".$idContrato;
					$enlace->query($consulta);
?>