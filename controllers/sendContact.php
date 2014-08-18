<?php 
include ("../config/database.php");
require '../vendor/autoload.php';
use Mailgun\Mailgun;

if (!empty($_POST)) {
	# Instantiate the client.
	$mgClient = new Mailgun('key-6xkatx3szus2qa7nqu855-27fg6kvoo7');
	$domain = "mmoscosa.com";

	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$date 		= date('Y-m-d');
	$code 		= md5(date_timestamp_get($date).' '.$email);

	$query = "INSERT INTO `business_card`.`contacts` (`id`, `name`, `email`, `code`, `created`) VALUES (NULL, '".$name."', '".$email."', '".$code."', '".$date."')";

	$insert = mysqli_query($db, $query);

	if($insert){
		$defaultMessage = "
		Dear {$name},

		It was a pleasure meeting you earlier. I am attaching my contact details in this email; however I would appreciate it if you could visit the following website as it is here where you will be able to see my Business Card:

		http://{$_SERVER['HTTP_HOST']}/?code={$code}

		Please if there was anything I could do for you, do not hesitate in contacting me. 

		Sincerely,

		Martin Moscosa
		";

		$message 	= (!empty($_POST['message'])) ? $_POST['message'] : $defaultMessage;

		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
		    'from'    => 'Martin Moscosa <martin.moscosa@mmoscosa.com>',
		    'to'      => $name.'<'.$email.'>',
		    'subject' => 'Hello '.$name,
		    'text'    => $message
		), array(
	    	'attachment' => array('../vcard/Martin Moscosa.vcf')
		));

		if($result){
			echo "sent";
		}
	}
}
