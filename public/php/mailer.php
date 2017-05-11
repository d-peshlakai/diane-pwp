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

}