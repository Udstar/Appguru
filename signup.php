<?php 
session_start();

	include("php/connection.php");
	include("php/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['full_name'];
		$password = $_POST['password'];
        $user_email = $_POST['your_email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into user (user_name,user_email,user_password) values ('$user_name','$user_email','$password')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>