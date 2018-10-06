<?php
			$consulta="INSERT INTO `obra`(`idEmpresaCliente`, `descripcionObra`, `precioObra`) VALUES (".$idEmpresa.",'".$descripcionObra."','".$precioObra."')";
			$enlace->query($consulta);
?>