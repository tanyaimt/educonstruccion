<form action="?view=administrarProyectoLogistica#m2" method="post">
	<div id='form1'>
		<table >
		<!--Formulario Empresas -->
			<?php if($ConfirmarEmpresa=="true"){
				include('formularioEmpresaLogistica1.php');
		//<!--Formulario Obras -->
				include('formularioObraLogistica.php');
		//<!--Formulario Contratos -->
				include('formularioContratoLogistica.php');
		//<!--Formulario Cotizaciones -->
				include('formularioCotizacionLogistica.php');
		//<!--Formulario Estimaciones -->
				include('formularioEstimacionLogistica.php');
			}
			else{
				include('formularioEmpresaLogistica.php');

			}

			?>
		</table>
		<center>
			<?php 
				if (isset($errormsg)){
					echo $errormsg;
				}
			?>
		</center>
	</div>
		<a name="m3"></a>
		<div id="form1">

		<br><br>
			<?php 
					
				if (isset($tableresult)){
					echo $tableresult;}
			?>
		</div>
</form>
    