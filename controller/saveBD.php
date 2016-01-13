<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/connectDB.php';
    class saveBD extends connectDB {
		
		public function comments($com) {
			$this -> createObjectMysqli();
			$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> prepare("INSERT INTO tz2016(comments) VALUES(?)");
			$stmt -> bind_param('s', $com);
			$stmt -> execute();
			$this -> closeMysqli();	
		}
	}
?>