<?php

	// Contact
	$to = 'edugamerhdcanal@gmail.com';
    $subject = 'Subject here...';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])){
   		$name    = $_POST['c_name'];
    	$from    = $_POST['c_email'];
    	$message = $_POST['c_message'];

		if (mail($to, $subject, $message, $from)) { 
			$result = array(
				'message' => 'Su mensaje ha sido enviado.',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else { 
			$result = array(
				'message' => 'Ha ocurrido un error',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} 
	}

?>