<?
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	header('Content-Type: text/html; charset=utf-8');

	$headers = "Content-type: text/plain; charset = \"utf-8\"";
        //set here your email addess
	$to = 'youremail@email.com';
	//$to = 'aklima.iren@gmail.com';

	$subject = "Contact Form";

	if (!empty($_POST["contactUsName"])) {
		$contactusname = htmlspecialchars($_POST["contactUsName"]);
	}
	if (!empty($_POST["contactUsEmail"])) {
		$contactusemail = htmlspecialchars($_POST["contactUsEmail"]);
	}
	if (!empty($_POST["contactUsPhone"])) {
		$contactusphone = htmlspecialchars($_POST["contactUsPhone"]);
	}
	if (!empty($_POST["contactUsMsg"])) {
		$contactusmsg = htmlspecialchars($_POST["contactUsMsg"]);
	}
	$ip = $_SERVER["REMOTE_ADDR"];

	$message = '';
	$message .= 'Contact Form';
	if (!empty($contactusname)) {
		$message .= "\nName - ".$contactusname;
	}
	if (!empty($contactusemail)) {
		$message .= "\nE-mail - ".$contactusemail;
	}
	if (!empty($contactusphone)) {
		$message .= "\nPhone - ".$contactusphone;
	}
	if (!empty($contactusmsg)) {
		$message .= "\nMessage - ".$contactusmsg;
	}
	if (!empty($ip)) {
		$message .= "\nIP - ".$ip;
	}

	mail($to, $subject, $message, $headers);

} else {
	header('Location: /');
	exit();
}
?>