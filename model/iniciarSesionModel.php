<?php 
include("conexioModel.php");
$loginUsuario = $_POST['loginUsuario'];
$contrasenaUsuario = $_POST['contrasenaUsuario'];

	
	$consulta="SELECT constrasenaUsuario,tipoUsuario,idUsuario FROM usuario WHERE loginUsuario='".$loginUsuario."'";
	$resultado = mysqli_query($enlace,$consulta);
		if(!mysqli_num_rows($resultado))
			{
				echo "Usuario no existe\n";
				$password="";
			}
		else
			{					
				while ($registro = mysqli_fetch_array($resultado,MYSQLI_BOTH))
					{
						$password=$registro[0];
						$tipo=$registro[1];
						$idUsuario=$registro[2];
					}	
						if($password==$contrasenaUsuario)
						{
							$consulta="INSERT INTO sesion (idUsuario5) VALUES(".$idUsuario.")";
								$enlace->query($consulta);

							include('definirPermisosModel.php');
							//"session iniciada"
						}
		else{
			echo "error de contraseña";
		}
			}

?>