		<tr>
			<td colspan="4">
				<center><h2>Empresas</h2></center>
			<td>
		</tr>
		<tr>
			<td >
				<input type="text" name="idEmpresa" placeholder="ID Empresa" value="<?php echo $idEmpresa;?>" >
			</td>
			<td>
			<?php
				if (!$_POST){ 
				?> 
							<select name="tipoEmpresa" >
							  	<option value="Cliente" selected>Cliente</option>
							  	<option value="Proveedor">Proveedor</option>
				  			</select>
				<?php
				}else{ 
					switch($tipoEmpresa){
						case 'Cliente':
						?> 
							<select name="tipoEmpresa" >
							  	<option value="Cliente" selected>Cliente</option>
							  	<option value="Proveedor">Proveedor</option>
				  			</select>
				<?php
						break;
						default:
						?> 
							<select name="tipoEmpresa" >
							  	<option value="Cliente" >Cliente</option>
							  	<option value="Proveedor" selected >Proveedor</option>
				  			</select>
				<?php
						break;
					}
				 

				   } 
				?>
 			</td>
			<td colspan="2" align="right">

			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="text" name="razonSocial" placeholder="Razon Social" size="50" value="<?php echo $razonSocial;?>" >
			</td>
			<td>
				<input type="text" name="rfc" placeholder="R.F.C." value="<?php echo $rfc;?>" >
			</td>
			<td>
				<input type="text" name="telefonoEmpresa" placeholder="telefono" value="<?php echo $telefonoEmpresa;?>" >
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="paginaWebEmpresa" placeholder="Pagina Web" value="<?php echo $paginaWebEmpresa;?>" >
			</td>
			<td colspan="2">
				<input type="text" name="calleEmpresa" placeholder="Calle" value="<?php echo $calleEmpresa;?>" size="48" >
			</td>
			<td>
				<input type="text" name="numInteriorEmpresa" placeholder="Numero Interior" value="<?php echo $numInteriorEmpresa;?>" >
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="numExteriorEmpresa" placeholder="Numero Exterior" value="<?php echo $numExteriorEmpresa;?>" >
			</td>
			<td>
				<input type="text" name="coloniaEmpresa" placeholder="Colonia" value="<?php echo $coloniaEmpresa;?>" >
			</td>
			<td>
				<input type="text" name="ciudadEmpresa" placeholder="Ciudad" value="<?php echo $ciudadEmpresa;?>" >
			</td>
			<td>
				<input type="text" name="estadoEmpresa" placeholder="Estado" value="<?php echo $estadoEmpresa;?>" >
			</td>
		</tr>
		<tr>
			<td colspan="4">

			</td>
		</tr>
		<tr>
			<td colspan="4">
				<center>
					<input type="submit" class="button" value="Cambiar" name="btnAdministrarProyectoLogistica">
				</center>
			</td>
		</tr>

		
