<?php
function get_connection_to_db()
{
    $con=mysqli_connect("localhost","root","", "hospital");
	return $con;
}

function print_security_token($token_name)
{
    $_SESSION[$token_name]=mt_rand();
    echo '<input type="hidden" name="'.$token_name.'" value="'.$_SESSION[$token_name].'" />';
}

function is_valid_security_token($token_name, $token_submitted)
{
    $stored_token = $_SESSION[$token_name];
	unset($_SESSION[$token_name]);

	if($token_submitted == $stored_token)
	{
	   return true;
	}
    return false;
}
?>