<?php
include_once 'Config.php';
	// start session
	session_start();

	// initializing variables
	
	$username   = "";
	$email      = "";
	$errors     = array();

	// connect to the database
		include_once 'Config.php';
		$register = '';
	// isset reg_user
	if (isset($_POST['reg_user']))
	{
		// receive all input values from the form
		$username = mysqli_real_escape_string($lk, $_POST['username']);
		$email = mysqli_real_escape_string($lk, $_POST['email']);
		$phone_number = mysqli_real_escape_string($lk, $_POST['phone_number']);
		$password_1 = mysqli_real_escape_string($lk, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($lk, $_POST['password_2']);

		// empty form register
		
		if (empty($username)) 
		{
			array_push($errors, '<div class="alert-danger" role="alert">Name is required</div>');
		}

		if (!preg_match("/^[a-zA-Z]*$/", $username)) 
		{
			array_push($errors, '<div class="alert-danger" role="alert">Name is contain only alphabets.</div>');
		}

		if (empty($email)) 
		{
			array_push($errors,'<div class="alert-danger" role="alert">Email is required</div>');
		}

		if (empty($phone_number))
		{
			array_push($errors, '<div class="alert-danger" role="alert">Phone number is required</div>');
		}

		if (!preg_match("/^[0-9]*$/", $phone_number)) 
		{
			array_push($errors, '<div class="alert-danger" role="alert">Phone number is conatain only number.</div>');
		}

		if (empty($password_1))
		{
			array_push($errors, '<div class="alert-danger" role="alert">Password is required</div>');
		}

		// if (!preg_match("/^[0-9]*$/", $password_1)) 
		// {
		// 	array_push($errors, '<div class="alert-danger" role="alert">Password 1 is only contain number.</div>');
		// }

		// if (!preg_match("/^[0-9]*$/", $password_2)) 
		// {
		// 	array_push($errors, '<div class="alert-danger" role="alert">Password 2 is only contain number.</div>');
		// }

		if ($password_1 != $password_2)
		{
			array_push($errors, '<div class="alert-danger" role="alert">The two passwords do not match.</div>');
		}	

		$usr_chk_qry = "SELECT * FROM COOK WHERE CFNAME ='$username' LIMIT 1";
		$res = mysqli_query($lk, $usr_chk_qry);

		$usr = mysqli_fetch_assoc($res);

		if($usr)
		{
			if ($usr['CFNAME'] === $username) 
			{
				
			}
			
		}
		else 
			{
				array_push($errors, '<div class="alert-danger" role="alert">You Need Insert Proper Username</div>');
			}

		$user_check_query = "SELECT * FROM COOK WHERE CFNAME ='$username'";
		$result = mysqli_query($lk, $user_check_query);
		$user = mysqli_fetch_assoc($res);

	// first check the database to make sure
	// a user does not already exist with the same username and/or email
	
		if ($user)
		{ // if user exists
		if ($usr['USERNAME'] === $username) 
		{
			array_push($errors, '<div class="alert-danger" role="alert">Username already exists</div>');
		}

		if ($user['EMAIL'] === $email)
			{
			array_push($errors, '<div class="alert-danger" role="alert">Email already exists</div>');
		}
		}

	// Finally, register user if there are no errors in the form
	if (count($errors) == 0)
		{
			$password = md5($password_1);//encrypt the password before saving in the database

			// insert file register
			$query = "INSERT INTO `COOKREG`(`USERNAME`,`EMAIL`, `PHONE`, `PASSWD`)
					VALUES('$username', '$email','$phone_number', '$password')";
			mysqli_query($lk, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: login.php');
			$success = "Signup Success ! Please Login to Continue.";
		}
	}

	//**********************

	// login user
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($lk, $_POST['email']);
		$password = mysqli_real_escape_string($lk, $_POST['password']);

		// empty file email and password
		if (empty($email)) {
			array_push($errors, '<div class="alert alert-danger" role="alert">email is required</div>');
		}

		if (empty($password)) {
			array_push($errors, '<div class="alert alert-danger" role="alert">password is required</div>');
		}

		// if (!preg_match("/^[0-9]*$/", $password)) 
		// {
		// 	array_push($errors, '<div class="alert alert-danger" role="alert">Password is only contain number.</div>');
		// }


		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM COOKREG WHERE EMAIL='$email' and PASSWD='$password'";
			$results = mysqli_query($lk, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['EMail'] = $email;
				$_SESSION['success'] = '<h4 class="text-center">You are now logged in<h4>';
				header('location: index.php');
			}else {
				array_push($errors,'<div class="alert alert-danger" role="alert">Wrong email/password, Please login again.</div>');
			}
		}
	}
