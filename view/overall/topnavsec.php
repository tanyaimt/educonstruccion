	
	<div class="menu2">
	<?php
$consulta="SELECT tipoUsuario FROM sesion inner join usuario on usuario.idUsuario=sesion.idUsuario5";
	$resultado = mysqli_query($enlace,$consulta);
		if (mysqli_num_rows($resultado) > 0) {
	    while($row = mysqli_fetch_assoc($resultado)) {
	        $tipo=$row["tipoUsuario"];
	    }

$bin=decbin($tipo);//Convierte el dato del perfil 
	$sbin=substr("000000000000",0,12 - strlen($bin)) . $bin; // Define fomrato del binario a 12 digitospara evitar valores nulos en las variabes de perfil
	$ventas = substr($sbin, 11  , 12 ); 
	$sistemas = substr($sbin, 10  , -1 );
	$rh = substr($sbin, 9  , -2 ); 
	$produccion = substr($sbin, 8  , -3 );
	$obrero = substr($sbin, 7  , -4 ); 
	$logistica = substr($sbin, 6  , -5 );
	$inventario = substr($sbin, 5  , -6 ); 
	$gerencia = substr($sbin, 4  , -7 ); 
	$fiscal = substr($sbin, 3  , -8 ); 
	$finanzas = substr($sbin, 2  , -9 );
	$cliente = substr($sbin, 1  , -10 );
	$calidad = substr($sbin, 0  , -11 );

	if($calidad==1){$sesioncalidad="1";}
	if($cliente==1){$sesioncliente="1";}
	if($finanzas==1){$sesionfinanzas="1";}
	if($fiscal==1){$sesionfiscal="1";}
	if($gerencia==1){$sesiongerencia="1";}
	if($inventario==1){$sesioninventario="1";}
	if($logistica==1){$sesionlogistica="1";}
	if($obrero==1){$sesionobrero="1";}
	if($produccion==1){$sesionproduccion="1";}
	if($rh==1){$sesionrh="1";}
	if($sistemas==1){$sesionsistemas="1";}
	if($ventas==1){$sesionventas="1";}
	
	$sesion=1;

	if($ventas==1){
		echo "<a href='?view=ventas'>VENTAS</a>		";
	}
	if($sistemas==1){
		echo "<a href='?view=sistemas'>SISTEMAS</a>		";
	}
	if($rh==1){
		echo "<a href='?view=rh&tipo='>RH</a>";
	}
	if($produccion==1){
		echo "<a href='?view=produccion'>PRODUCCION</a>		";
	}
	if($obrero==1){
		echo "<a href='?view=obrero'>OBRERO</a>		";
	}
	if($logistica==1){
		echo "<a href='?view=logistica'>LOGISTICA</a>		";
	}
	if($inventario==1){
		echo "<a href='?view=inventario'>INVENTARIO</a>		";
	}
	if($gerencia==1){
		echo "<a href='?view=gerencia'>GERENCIA</a>		";
	}
	if($fiscal==1){
		echo "<a href='?view=fiscal'>FISCAL</a>		";
	}
	if($finanzas==1){
		echo "<a href='?view=finanzas'>FINANZAS</a>		";
	}
	if($cliente==1){
		echo "<a href='?view=cliente'>CLIENTE</a>		";
	}
	if($calidad==1){
		echo "<a href='?view=calidad'>CALIDAD</a>		";	
	}
	else{
	}
	} else {
		
			echo "<script>window.location = 'http://localhost/educonstruccion/'</script>";
	}
	?>
	</div>