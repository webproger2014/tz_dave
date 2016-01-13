<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/stop.php';
   
   class filter extends Stop { 
	   public function filtersStop() {
           $this -> scanDirStop();
		   $str = '';
		   if (is_array($this -> listStop)) {
			   foreach ($this -> listStop as $value) {
				   $str .= $value;
			   }
			  echo $str; 
		   } else echo $this -> listStop;
	    }		   
	}
	
	$flListStop = new filter();
    $flListStop -> filtersStop();
?>