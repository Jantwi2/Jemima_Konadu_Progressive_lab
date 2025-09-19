<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data

// function add_user_ctr($a,$b,$c,$d,$e,$f,$g){
// 	$adduser=new customer_class();
// 	return $adduser->add_user($a,$b,$c,$d,$e,$f,$g);
// }

function add_customer_ctr($customer_name,$customer_email,$customer_contact,$customer_password,$customer_country,$customer_city, $customer_role){
	$adduser=new customer_class();
	return $adduser->add_customer($customer_name,$customer_email,$customer_contact,$customer_password,$customer_country,$customer_city, $customer_role);
}

function login_customer_ctr($customer_email, $customer_password) {
	$loginUser = new customer_class();
	return $loginUser->login_customer($customer_email, $customer_password);
}

//--INSERT--//

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>