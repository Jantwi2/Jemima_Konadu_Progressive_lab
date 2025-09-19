<?php
//connect to database class
require("../settings/db_class.php");



//  public function add_brand($a,$b)
// 	{
// 		$ndb = new db_connection();	
// 		$name =  mysqli_real_escape_string($ndb->db_conn(), $a);
// 		$desc =  mysqli_real_escape_string($ndb->db_conn(), $b);
// 		$sql="INSERT INTO `brands`(`brand_name`, `brand_description`) VALUES ('$name','$desc')";
// 		return $this->db_query($sql);
// 	}
class customer_class extends db_connection
{
    public function email_exists($customer_email) {
        $ndb = new db_connection();	
        $email = mysqli_real_escape_string($ndb->db_conn(), $customer_email);

        $sql = "SELECT customer_id FROM customer WHERE customer_email = '$email' LIMIT 1";
        $result = $this->db_query($sql);

        return ($this->db_count() > 0); 
    }

    public function add_customer($customer_name, $customer_email, $customer_contact, $customer_password, $customer_country, $customer_city, $customer_role)
    {
        $ndb = new db_connection();	

        $name     = mysqli_real_escape_string($ndb->db_conn(), $customer_name);
        $email    = mysqli_real_escape_string($ndb->db_conn(), $customer_email);
        $contact  = mysqli_real_escape_string($ndb->db_conn(), $customer_contact);
        $password = mysqli_real_escape_string($ndb->db_conn(), $customer_password);
        $country  = mysqli_real_escape_string($ndb->db_conn(), $customer_country);
        $city     = mysqli_real_escape_string($ndb->db_conn(), $customer_city);
        $user_role= mysqli_real_escape_string($ndb->db_conn(), $customer_role);

       
        if ($this->email_exists($customer_email)) {
            return "duplicate"; 
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO `customer`
                (`customer_name`, `customer_email`, `customer_contact`, `customer_pass`, `customer_country`, `customer_city`, `user_role`) 
                VALUES ('$name','$email','$contact','$hashedPassword','$country','$city','$user_role')";

        return $this->db_query($sql);
    }

    public function login_customer($customer_email, $customer_password)
    {
        $ndb   = new db_connection();
        $email = mysqli_real_escape_string($ndb->db_conn(), $customer_email);
        $password = mysqli_real_escape_string($ndb->db_conn(), $customer_password);

        // Fetch customer by email
        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email' LIMIT 1";
        $result = $this->db_fetch_one($sql);

        if ($result) {
            // Verify password
            if (password_verify($password, $result['customer_pass'])) {
                // Optionally start session here
                $_SESSION['customer_id']   = $result['customer_id'];
                $_SESSION['customer_name'] = $result['customer_name'];
                $_SESSION['customer_email']= $result['customer_email'];
                $_SESSION['user_role']     = $result['user_role'];

                return "success"; 
            } else {
                return "invalid_password";
            }
        } else {
            return "not_found"; // Email not in DB
        }
    }

}

	//--INSERT--//
	

	//--SELECT--//



	//--UPDATE--//



	//--DELETE--
	// Classes folder = Model//
	



?>