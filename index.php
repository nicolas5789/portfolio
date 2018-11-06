<?php
session_start();

require("controller/Controller.php");

if(isset($_GET["action"])) {
	switch ($_GET["action"]) {
		case "home":
			Controller::home();
			break;
		case "mail":
			Controller::mailToMe();
			break;
		default:
			Controller::home();
			break;
	}
} else {
	Controller::home();
}
