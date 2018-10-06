<div id='form1'>
<form action="?view=administrarUsuario#m2" method="post">
	<table >
		<tr>
			<td>
				<input type="text" name="idUsuario" placeholder="ID Usuario" value="<?php echo $idUsuario;?>">
			</td>
			<td colspan="3" align="right">
				<input type="submit" class="button" value="Buscar" name="btnAdministrarUsuario" >
				<input type="submit" class="button" value="Buscar Todo" name="btnAdministrarUsuario" >
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="text" name="nombreUsuario" placeholder="Nombre" size="49" value="<?php echo $nombreUsuario;?>">
			</td>
			<td>
				<input type="text" name="aPaternoUsuario" placeholder="Apellido Paterno" value="<?php echo $aPaternoUsuario;?>">
			</td>
			<td>
				<input type="text" name="aMaternoUsuario" placeholder="Apellido Materno" value="<?php echo $aMaternoUsuario;?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="telefonoFijoUsuario" placeholder="Telefono Fijo" value="<?php echo $telefonoFijoUsuario;?>">
			</td>
			<td>
				<input type="text" name="telefonoMovilUsuario" placeholder="Telefono Movil" value="<?php echo $telefonoMovilUsuario;?>">
			</td>
			<td>
				<input type="text" name="calleUsuario" placeholder="Calle" value="<?php echo $calleUsuario;?>">
			</td>
			<td>
				<input type="text" name="numExteriorusuario" placeholder="Numero Exterior" value="<?php echo $numExteriorusuario;?>">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="numInteriorUsuario" placeholder="Numero Interior" value="<?php echo $numInteriorUsuario;?>">
			</td>
			<td>
				<input type="text" name="coloniaUsuario" placeholder="Colonia" value="<?php echo $coloniaUsuario;?>">
			</td>
			<td>
				<input type="text" name="ciudadUsuario" placeholder="Ciudad" value="<?php echo $ciudadUsuario;?>">
			</td>
			<td>
				<input type="text" name="estadoUsuario" placeholder="Estado" value="<?php echo $estadoUsuario;?>"
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="text" name="correoElectronicoUsuario" placeholder="Correo Electronico" value="<?php echo $correoElectronicoUsuario;?>" size="101">
			</td>
		</tr>
		<tr>
			<td >
				<input type="text" name="codigoPostalUsuario" placeholder="Codigo Postal" value="<?php echo $codigoPostalUsuario;?>">
			</td>
			<td >
				<input type="text" name="loginUsuario" placeholder="Login" value="<?php echo $loginUsuario;?>">
			</td>
			<td >
				<input type="password" name="constrasenaUsuario" placeholder="Password" value="<?php echo $constrasenaUsuario;?>">
			</td>
			<td >
				<input type="password" name="constrasenaUsuario" placeholder="Confirma Password" value="<?php echo $constrasenaUsuario;?>">
			</td>
		</tr><tr><td><br></td></tr>
		<tr >
			<td colspan="2" bgcolor="grey"><center>Empleado</center></td>
			<td colspan="2" bgcolor="grey"><center>Externo</center></td>
		</tr>
		<tr>
			<td bgcolor="#555555"><center>Indirecto</center></td>
			<td bgcolor="#555555"><center>Directo</center></td>
			<td bgcolor="#555555"><center>Proveedor</center></td>
			<td bgcolor="#555555"><center>Cliente</center></td>
		</tr>
		<tr >
			<td > 
				<input type="checkbox" name="tipoUsuario[]" value="1">ventas<br>
				<input type="checkbox" name="tipoUsuario[]" value="2">sistemas<br>
				<input type="checkbox" name="tipoUsuario[]" value="4">rh<br>
				<input type="checkbox" name="tipoUsuario[]" value="32">logistica<br>
				<input type="checkbox" name="tipoUsuario[]" value="64">inventario<br>
				<input type="checkbox" name="tipoUsuario[]" value="512">finanzas<br>
				<input type="checkbox" name="tipoUsuario[]" value="128">gerencia<br>
				<input type="checkbox" name="tipoUsuario[]" value="2048">calidad

			</td>
			<td>
				<input type="checkbox" name="tipoUsuario[]" value="16">obrero<br>
				<input type="checkbox" name="tipoUsuario[]" value="8">Supervisor de Obra<br><br><br><br><br><br><br>
			</td>
			<td>
				<input type="checkbox" name="tipoUsuario[]" value="256">fiscal<br><br><br><br><br><br><br><br>
			</td>
			<td>
				<input type="checkbox" name="tipoUsuario[]" value="1024">cliente<br><br><br><br><br><br><br><br>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" class="button" value="Registrar" name="btnAdministrarUsuario" >
				<input type="submit" class="button" value="Actualizar" name="btnAdministrarUsuario" >
				<input type="submit" class="button" value="Eliminar" name="btnAdministrarUsuario" >
				<input type="submit" class="button" value="Limpiar" name="btnAdministrarUsuario">
			</td>
		</tr>
	</table>
<center>
<?php 
	if (isset($errormsg)){
		echo $errormsg;}
?>
</center>
</div>
<a name="m3"></a>
<div id="form1">

	<?php 
		if (isset($tableresult)){
			echo $tableresult;}
	?>
</div>
</form>
<br>    