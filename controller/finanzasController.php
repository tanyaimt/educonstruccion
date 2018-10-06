<?php
	if($sesionfinanzas=1){
		include('view/finanzas/index.php');
	}
	else{
		include('view/index/index.php');
	}
?>