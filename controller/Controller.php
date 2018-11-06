<?php

abstract class Controller 
{
	public static function home()
	{
		require("views/front/frontHomeView.php");
	}

	public static function mailToMe()
	{	
		$name = $_POST["name"];
		$mail = $_POST["mail"];
		$message = $_POST["message"];

		if(isset($name) && isset($mail) && isset($message) && ($name !="") && ($mail !="") && ($message !="")){
			if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)){
				
				$to = "nicolas5789@gmail.com";
				$subject = 'Portfolio'.' - '.$name.' - '.$mail ;
				$messageToSend = wordwrap($message, 70, "\r\n");
				$headers = 'From: admin@nicolaschaperon.fr' . "\r\n" .'Reply-To:' . $mail . "\r\n" . 'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, $messageToSend, $headers);

				$_SESSION["mail_alert"] = "Votre message a bien été envoyé";
				
			} else {
				$_SESSION["mail_alert"] = "Vous devez entrer une adresse email valide";	
			}
		} else {
			$_SESSION["mail_alert"] = "Tous les champs doivent être remplis";
		}
		header("Location: index.php?action=home#ancre_contact");
	}
}