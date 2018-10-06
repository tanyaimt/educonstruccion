<form action="?view=administrarProyectoProduccion#m2" method="post">
	<div id='form1'>
		<table >
		<!--Formulario Empresas -->
			<?php if($ConfirmarEmpresa=="true"){
				include('formularioEmpresaProduccion1.php');
		//<!--Formulario Obras -->
				include('formularioObraProduccion.php');
		//<!--Formulario Contratos -->
				include('formularioContratoProduccion.php');
		//<!--Formulario Cotizaciones -->
				include('formularioCotizacionProduccion.php');
		//<!--Formulario Estimaciones -->
				include('formularioEstimacionProduccion.php');
			}
			else{
				include('formularioEmpresaProduccion.php');

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
    