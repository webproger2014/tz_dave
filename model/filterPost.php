<?php
    class filterPost {
		public function postFL() {
			foreach ($_POST as $value) {
				if (isset($value) && strip_tags(trim($value)) != '') {
					return true;
				} else return false;
			}
		}
	}
?>