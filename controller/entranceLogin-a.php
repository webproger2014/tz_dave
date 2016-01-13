<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/filterPost.php';
	$filter = new filterPost();
	
    if ($filter -> postFL() == true) {
		require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/admin.php';
        class login extends admin {
		
		    public function entrance() {
			     //Если всё впорядке с логином то входим
		         if ($this -> data() == true) {
					 echo 'afafafaf';
				     $this -> entranceToAccount();
			     } else {
				 //Выдаём ошибку
				 echo 'opoooooooooooooo';
			     }
		    }
	    }
		
		$lg = new login();
		$lg -> entrance();
	} else return false;//вот
	

?>