<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/connectDB.php';
    class admin extends connectDB {
		
		public function data() {
			if (isset($_POST['login']) && isset($_POST['psw'])) {
				//Проверяем данные
				if ($this -> login() == true) {
			        return true;
				} else return false;
			} else return false;
		}
		
		public function login() {
			$this -> createObjectMysqli();
		 	$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> prepare("SELECT login FROM tzadmin WHERE login=? AND psw=?");
			$login = $_POST['login'];
			$psw = md5(md5($_POST['psw']));
			$stmt -> bind_param('ss', $login, $psw);
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
		
		public function entranceToAccount() {
			$hash = $this -> generateHash();
			$this -> createObjectMysqli();
		 	$this -> mysqli -> query("SET NAMES 'utf8'");
			$stmt = $this -> mysqli -> prepare("UPDATE tzadmin SET hash=? WHERE login=?");
			$stmt -> bind_param('ss', $hash, $_POST['login']);
			$stmt -> execute();
			$stmt -> close();
			$this -> closeMysqli();		
            
            setcookie('hash', $hash, time() + 3600, '/');
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/tz');			
		} 
		
        public function generateHash($hash = 20) {
		    $str = '1234567890qwertyuiopasdfghjklzxcvbnm';
		    $result = '';
            for ($s = 0; $s < $hash; $s++) {
		        $result .= $str[mt_rand(1, $hash)];		  
		    }
		
		    return $result;
	    }		
		
	}
?>