<?php 
	session_start();
	function logged_in() {
		return isset( $_SESSION['person_id'] );
	}
	