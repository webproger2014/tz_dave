<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/post.php'; //Сразу фильтруем данные
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/saveBD.php';	
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/stop.php';

 
 if ($post -> filtersPost == true){   
   class filter extends Stop { 
	  public function filtersStop() {
		  $stop = $this -> searchStop($_POST['val']);
		  if ($stop == false) {
        	 $save = new saveBD();		  
        	 $save -> comments($_POST['val']);	 
		 } else {
			 echo  $stop;
		  }
	  }
	}
	
	$flStop = new filter();
	$flStop -> filtersStop();
 }	
?>