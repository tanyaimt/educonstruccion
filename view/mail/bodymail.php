	<body>
<?php 
include('topnaverror.php');
	$nombre= (isset($_POST['nombre']) ? $_POST['nombre'] : "");
	$correo= (isset($_POST['correo']) ? $_POST['correo'] : "");
	$telefono= (isset($_POST['telefono']) ? $_POST['telefono'] : "");
	$Comentario= (isset($_POST['Comentario']) ? $_POST['Comentario'] : "");
	$message="<br>Nombre:".$nombre."<br>Correo:".$correo."<br>Telefono:".$telefono."<br>Comentario:".$Comentario;
	$subject="Educonstruccion Web Contact";
	mail('tanyaimt@gmail.com', $subject, $message);
?><a name="m1"></a>
<div class="sect sectOne"></div>
	<div class="subSection">
		<a name="m2"></a>
		<h2><center>
			<br>
						<h1><br><br><br>Tu correo ha sido enviado a la brevedad uno de nuestros asesores de comunicara<br>
ERROR </h1></center>
		</h2></div>




