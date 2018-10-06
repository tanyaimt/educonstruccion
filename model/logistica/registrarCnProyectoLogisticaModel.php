<?php
			$consulta="INSERT INTO contrato(idObra1,descripcionContrato,precioContrato)VALUES(".$idObra.",'".$descripcionContrato."','".$precioContrato."')";
			$enlace->query($consulta);
?>