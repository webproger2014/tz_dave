<?php
   require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/connectDB.php';
   
   class coms extends connectDB {
	   public function delComments($id) {
			$this -> createObjectMysqli();
			$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> prepare("DELETE FROM tz2016 WHERE id=?");
			$stmt -> bind_param('i', $id);
			$stmt -> execute();
			$this -> closeMysqli();			   
	   }
   }
?>