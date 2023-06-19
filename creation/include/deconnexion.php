<?php
	session_start();
	//fonction qui permet de suppimer une variable session
	unset($_SESSION["user"]);

	header("Location: index.php");

?>