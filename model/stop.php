<?php
    class Stop {
		public $listStop;
		
		//Возвращаем список запрещённых слов
		public function scanDirStop() {
			$this -> listStop =  file($_SERVER['DOCUMENT_ROOT'].'tz/stop.st');
		}
		
		//Ищет стоп слова
		public function searchStop($stop) {
			$this -> scanDirStop();
			$this -> listStop = explode(',', $this -> listStop[0]);
			$strStop = '';
			foreach ($this -> listStop as $val) {
                 if (preg_match("'".$val."'", $stop)) {
                      $strStop .= $val.',';   
				 }
			}
		 
		  if ($strStop == '') {
			  return false;
		  } else return $strStop;	  
		}
        
		//Производит запись в файл
		public function set() {
			file_put_contents($_SERVER['DOCUMENT_ROOT'].'tz/stop.st', $_POST['val']);
			echo 'данные обновлены';
		}
	} 
?>