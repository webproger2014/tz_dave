<?php
    
	if (isset($adm)) {
		require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/showComments-a.php';
	} else {
		require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/showComments.php';
	}
?>