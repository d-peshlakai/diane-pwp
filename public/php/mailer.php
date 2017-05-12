<?php

/**
 * require all composer dependencies; requiring the autoload file loads all composer packages at once
 */
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

/*
 * require mailer-config.php
 */
require_once("mailer-config.php");

//verify user's reCAPTCHA input
$repcaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp =$recaptcha->verify($_POST["g-recaptcha-response"], $SERVER['REMOTE_ADDR']);

try {

		//if reCAPTCHA error, output the error code to the user
		if (!$resp->isSuccess()) {
				throw(new Exception("reCAPTCHA error!"));

	}

	// sanitize the inputs from the form: name, email, subject, and message
	// this assumes jQuery (use of $_POST superglobal

	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create Swift message
	$swiftMessage = Swift_Message::newInstance();

	//attach the sender to the message
	//this takes the form of an associative array where the email is the key for the real name
	$swiftMessage->setFrom([$email => $name]);

	/**
	 * attach the recipients to the message
	 * $MAIL_RECIPIENTS is set in mail-config.php
	 */
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	// attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * attach the actual message to the message
	 * here, we set two versions of the message: the HTML formatted message and a special filter_var()ed
	 * version of the message that generates a plain text version of the HTML content
	 * notice one tactic used is to display the entire $confirmLink to palin text; this lets users
	 * who aren't viewing HTML content in Emails still access your links
	 */



}