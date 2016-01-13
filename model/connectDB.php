<?php
    class connectDB {
		public $mysqli;

		//Возвращает объект mysqli - подключает к бд
		public function createObjectMysqli($host = 'localhost', $login = 'root', $psw = '', $bd = 'tz') {
			       $this -> mysqli = new mysqli($host, $login, $psw, $bd);
			       if ($this -> mysqli -> connect_error) {
				       exit($this -> mysqli -> connect_errno);
			        } 
					
		       }

		public function closeMysqli() {
		    $this -> mysqli -> close();
	    }
	}
?>