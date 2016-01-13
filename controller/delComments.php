<?php
        
    require_once $_SERVER['DOCUMENT_ROOT'].'tz/controller/post.php'; //Сразу фильтруем данные
		
	if ($post -> filtersPost == true){ 
	    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/delComments.php'; //Сразу фильтруем данные
        class del extends coms {
            public function comments() {
			    $this -> delComments((int)$_POST['val']);
		    }
        }
		
		$dl = new del();
		$dl -> comments();
	}
?>