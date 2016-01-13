<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/connectDB.php';
	class comments extends connectDB {
         public function show() {
			$this -> createObjectMysqli();
			$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> query("SELECT id,comments FROM tz2016");
			require_once $_SERVER['DOCUMENT_ROOT'].'tz/views/panel-a.php';
			while ($row = $stmt -> fetch_assoc()) {
               require $_SERVER['DOCUMENT_ROOT'].'tz/views/showComments-a.php'; 
			}
			$this -> closeMysqli();		 
		}	
	}
	
	$comm = new comments();
	$comm -> show();
?>