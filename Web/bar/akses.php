<?php

	if (!isset($_SESSION)) {
    session_start();
	}
date_default_timezone_set('Asia/Jakarta');
	 
	if(!isset($_SESSION['admin']))
	{
        $_SESSION['admin']="admin";
	}
?>