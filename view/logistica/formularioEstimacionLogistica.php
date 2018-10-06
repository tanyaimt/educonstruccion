<?php 
$fechaUltimaActualizacion=(new \DateTime())->format('Y-m-d H:i:s');
?>
<tr>
			<td colspan="4">
				<center><h2>Estimaciones</h2></center>
			<td>
		</tr>
		<tr>
			<td>
				<input type="text" name="idEstimacionDestajo" placeholder="ID Estimacion / Destajo" value="<?php echo $idEstimacionDestajo;?>">
			</td>
			<td>
				<input type="text" name="idCotizacion" placeholder="ID Cotizacion" disabled="true" value="<?php echo $idCotizacion;?>">
			</td>
			<td colspan="2" align="right">
				<input type="submit" class="button" value="Buscar Estimacion" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Buscar Todas Las Es" name="btnAdministrarProyectoLogistica" >
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="text" name="loginSupervisorObra" placeholder="login Supervisor Obra" size="47" value="<?php echo $loginSupervisorObra;?>">
			</td>
			<td>
				<input type="text" name="idFacturaVenta2" placeholder="id Factura" value="<?php echo $idFacturaVenta2;?>">
			</td>
			<td>
				<input type="text" name="estadoEstimacion" placeholder="status" value="<?php echo $estadoEstimacion;?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea rows="4" cols="49" name="descripcionEstimacion" placeholder="Descripcion Estimacion"><?php echo $descripcionEstimacion;?></textarea>
			</td>
			<td>
				<input type="text" name="precioEstimacion" placeholder="Monto" value="<?php echo $precioEstimacion;?>" >
			</td>
			<td>
				<input type="text" name="fechaInicio" placeholder="Fecha Inicio" value="<?php echo $fechaInicio;?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="fechaTermino" placeholder="Fecha Termino" value="<?php echo $fechaTermino;?>">
			</td>
			<td>
				<input type="text" name="fechaUltimaActualizacion" placeholder="fecha Ultima Actualizacion" value="<?php echo $fechaUltimaActualizacion;?>">
			</td>
			<td>
				
			</td>
			<td>
				
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" class="button" value="Registrar Estimacion" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Actualizar Estimacion" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Eliminar Estimacion" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Limpiar Estimacion" name="btnAdministrarProyectoLogistica">
			</td>
		</tr>
