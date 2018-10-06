<?php
	if($sesioncliente=1){
		include('view/cliente/index.php');
	}
	else{
		include('view/index/index.php');
	}
?>