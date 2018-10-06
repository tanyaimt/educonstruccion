<?php
	if($sesionventas=1){
		include('view/ventas/index.php');
	}
	else{
		include('view/index/index.php');
	}
?>