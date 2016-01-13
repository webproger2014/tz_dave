<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/user.php';
    class filter extends user {
		
		public function admin() {
			if ($this -> isAdm() == true) {
				return true;
			} else return false;
		}
	}
	
	$fl = new filter();
	if ($fl -> admin() == true) {
		$adm = true;
	};
?>