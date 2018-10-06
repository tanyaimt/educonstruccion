
<?php 
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
		
		include('controller/ventasController.php');
	}else{
		if($sistemas==1){
			$sesionsistemas="1";
			include('controller/sistemasController.php');
		}else{
			if($rh==1){
				$sesesionrh="1";
				include('controller/rhController.php');
			}else{
				if($produccion==1){
					$sesionproduccion="1";
					include('controller/produccionController.php');
				}else{
					if($obrero==1){
						$sesionobrero="1";
						include('controller/obreroController.php');
					}else{
						if($logistica==1){
							$sesionlogistica="1";
							include('controller/logisticaController.php');
						}else{
							if($inventario==1){
								$sesioninventario="1";
								include('controller/inventarioController.php');
							}else{
								if($gerencia==1){
									$sesiongerencia="1";
									include('controller/gerenciaController.php');
								}else{
									if($fiscal==1){
										$sesionfiscal="1";
										include('controller/fiscalController.php');
									}else{
										if($finanzas==1){
											$sesionfinanzas1;
											include('controller/finanzasController.php');
										}else{
											if($cliente==1){
												$sesioncliente="1";
												include('controller/clienteController.php');
											}else{
												if($calidad==1){
													$sesioncalidad="1";
													include('controller/calidadController.php');	
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
?>
