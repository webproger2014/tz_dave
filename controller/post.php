<?php
     require_once $_SERVER['DOCUMENT_ROOT'].'tz/model/filterPost.php';
     class post extends filterPost {
		public $filtersPost;
		
		//Фильтруем post значения
		public function  __construct() {
		   $this -> filtersPost = $this -> postFL();
		} 
	 }
	 
	 $post = new post();

?>