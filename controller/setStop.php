<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/filterPost.php';
    $filter = new filterPost();
	
	if ($filter -> postFL() == true) {
		require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/stop.php';
        class getStop extends Stop {
		    public function st() {
				$this -> set();
		    }
	    }
	
       $gt = new getStop();
       $gt -> st();	   
    }
?>