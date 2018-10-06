<?php
echo $idEmpresa.",'".$descripcionObra."','".$precioObra;
			$consulta="INSERT INTO obra (idEmpresa2, descripcionObra, precioObra) VALUES (".$idEmpresa.",'".$descripcionObra."',".$precioObra.")";
			$enlace->query($consulta);
?>