<?php
ini_set('display_errors', 'off');
error_reporting(E_ALL);
define('COMP_EMAIL', 'bbwmatter@gmail.com'); // Testing Email
// define('COMP_EMAIL', 'hannahsplacesalon@gmail.com'); // company email

define('MAIL_METHOD', 'SMTP'); // SMTP or PHPMAIL (PHP Mail Function)
define('SMTP_SERVER', 'smtp.mailgun.org'); // SMTP server
define('SMTP_USER', 'postmaster@mailgun.proweaver.com'); // SMTP username
define('SMTP_PASSWD', '5b7c0c074cf27306ce725201b20afb78'); // SMTP password


define('SMTP_ENCRYPTION', 'off'); // TLS, SSL or off
define('SMTP_PORT', 587); // SMPT port number 587 or default
define('COMP_NAME', 'Big Beautiful Women'); // company name
define('MAIL_TYPE', 2); // 1 - html, 2 - txt
define('MAIL_DOMAIN', 'web2.proweaverlinks.com/tech/bigbeautiful'); // company domain

// do not edit
$subject = COMP_NAME . " [" . $formname . "]";
$template = 'template';
$to_name = NULL;
$from_email = NULL;
$from_name = 'Message From Your Site';
$attachments = array();

// testing here
$testform = true;
if($testform){
	$to_email 	= array('qatest@proweaver.net', 'qa@proweaver.net', 'prospteam@gmail.com');
		// $to_email 	= array('pdqapw5@gmail.com');
	$cc = ''; //empty if wala email
	$bcc = ''; //empty if wala email
}else{
	$to_email 	= array('bbwmatter@gmail.com ');
	$cc = '';
	$bcc = '';
}
