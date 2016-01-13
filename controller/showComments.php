<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/connectDB.php';
	class comments extends connectDB {
         public function show() {
			$this -> createObjectMysqli();
			$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> query("SELECT comments FROM tz2016");
			while ($row = $stmt -> fetch_assoc()) {
               require $_SERVER['DOCUMENT_ROOT'].'tz/views/showComments.php'; 
			}
			$this -> closeMysqli();		 
		}	
	}
	
	$comm = new comments();
	$comm -> show();
?>