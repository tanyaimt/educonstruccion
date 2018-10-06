<tr><td colspan="4"><center><h2>Obras</h2></center><td></tr>
		<tr>
			<td>
				<input type="text" name="idObra" placeholder="ID Obra" value="<?php echo $idObra;?>">
			</td>
			<td>
				<input type="text" name="idEmpresa" placeholder="ID Empresa" disabled="true" value="<?php echo $idEmpresa?>">
			</td>
			<td colspan="2" align="right">
				<input type="submit" class="button" value="Buscar Obra" name="btnAdministrarProyectoLogistica" >
				<input type="submit" class="button" value="Buscar Todas Las O" name="btnAdministrarProyectoLogistica" >
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<textarea rows="4" cols="65" name="descripcionObra" placeholder="Descripcion Obra"><?php echo $descripcionObra;?></textarea>
			</td>
			<td>
				<input type="text" name="precioObra" placeholder="Precio" value="<?php echo $precioObra;?>">
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
		</tr>