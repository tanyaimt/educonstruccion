<tr><td colspan="4"><center><h2>Contratos</h2></center><td></tr>
		<tr>
			<td>
				<input type="text" name="idContrato" placeholder="ID Contrato" value="<?php echo $idContrato;?>">
			</td>
			<td>
				<input type="text" name="idObra1" placeholder="ID Obra" disabled="true" value="<?php echo $idObra;?>">
			</td>
			<td colspan="2" align="right">
				<input type="submit" class="button" value="Buscar Contrato" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Buscar Todas Los C" name="btnAdministrarProyectoLogistica" >
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<textarea rows="4" cols="65" name="descripcionContrato" placeholder="Descripcion Contrato"><?php echo $descripcionContrato;?></textarea>
			</td>
			<td>
				<input type="text" name="precioContrato" placeholder="Precio" value="<?php echo $precioContrato;?>">
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" class="button" value="Registrar Contrato" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Actualizar Contrato" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Eliminar Contrato" name="btnAdministrarProyectoLogistica" >
			</td>
		</tr>