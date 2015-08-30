<?php
	function login(){
		if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
			return true;
		}
		else{
			return false;
		}
	}

	function redirect($url){
		header("Location: {$url}");
	}

?>