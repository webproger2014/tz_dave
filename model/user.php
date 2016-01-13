<?php
    
	require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/connectDB.php';
    class user extends connectDB {
		
		public function isAdm() {
		    if ($this -> isHash() == true) {
				if ($this -> isHashBD() == true) {
					return true;
				} else return false;
			} else return false;
		}
		
		public function isHash() {
			if (isset($_COOKIE['hash'])) {
				return true;
			} else return false;
		}
		
		public function isHashBD() {
			$this -> createObjectMysqli();
		 	$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> prepare("SELECT login FROM tzadmin WHERE hash=?");
			$hash = $_COOKIE['hash'];
			$stmt -> bind_param('s', $hash);
			$stmt -> execute();
			$stmt -> bind_result($result);
			$result = $stmt -> fetch();
			$stmt -> close();
			$this -> closeMysqli();
			if (!empty($result)) {
				return true;
			}else {
				return false;
			}				
		}
	}
?>