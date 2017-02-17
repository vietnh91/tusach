<?php



if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) {

	die('You are not allowed to call this page directly.');

}



if( (isset($_GET['es'])) && ($_GET['es'] == "donate") ) {


	$name = "";
	$phone = "";
	$recipient_type = "";
	$recipient_name = "";
	$recipient_address = "";
	$desciption = "";
	$email = "";

	// get name and email value
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
	$recipient_type = isset($_POST['recipient_type']) ? $_POST['recipient_type'] : '';
	$recipient_name = isset($_POST['recipient_name']) ? $_POST['recipient_name'] : '';
	$recipient_address = isset($_POST['recipient_address']) ? $_POST['recipient_address'] : '';
	$desciption = isset($_POST['desciption']) ? $_POST['desciption'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';

	// trim querystring value
	$name = trim($name);
	if($name == ""){
		echo "name-is-requied";
		die('exit');
	}
	$phone = trim($phone);
	$recipient_type = trim($recipient_type);
	$recipient_name = trim($recipient_name);
	$recipient_address = trim($recipient_address);
	$email = trim($email);
	if($recipient_address == "" && $recipient_type != 2 && $recipient_type != 3){
		echo "recipient-address-is-requied";
		die('exit');
	}
	$desciption = trim($desciption);

	$form = array(
		'name' => '',
		'phone' => '',
		'recipient_type' => '',
		'recipient_name' => '',
		'recipient_address' => '',
		'desciption' => '',
		'email' => ''
	);

	global $wpdb;
	$action = "";
	$form['name'] = $name;
	$form['phone'] = $phone;
	$form['recipient_type'] = $recipient_type;
	$form['recipient_name'] = $recipient_name;
	$form['recipient_address'] = $recipient_address;
	$form['desciption'] = $desciption;
	$form['email'] = $email;

	$action = es_cls_dbquery::update_donate($form);
	echo $action;

}

die();