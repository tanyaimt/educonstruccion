		<tr><td colspan="4"><center><h2>Cotizaciones</h2></center><td></tr>
		<tr>
			<td>
				<input type="text" name="idCotizacion" placeholder="ID Cotizacion" value="<?php echo $idCotizacion;?>">
			</td>
			<td>
				<input type="text" name="idContrato" placeholder="ID Contrato" disabled="true" value="<?php echo $idContrato;?>">
			</td>
			<td colspan="2" align="right">
				<input type="submit" class="button" value="Buscar Cotizacion" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Buscar Todas Las Ct" name="btnAdministrarProyectoLogistica" >
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<textarea rows="4" cols="65" name="descripcionCotizacion" placeholder="Descripcion Obra"><?php echo $descripcionCotizacion;?></textarea>
			</td>
			<td>
				<input type="text" name="precioCotizacion" placeholder="Precio" value="<?php echo $precioCotizacion;?>">
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" class="button" value="Limpiar Cotizacion" name="btnAdministrarProyectoLogistica">
			</td>
		</tr>