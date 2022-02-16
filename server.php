<?php
session_start();


// initializing variables
$name = "";
$amount  = "";
$date   = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'expense_tracker');

$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$amount = $_POST['amount'];
		$date = $_POST['date_'];

		




		$query = "INSERT INTO expense (name, amount, date) VALUES ('$name', '$amount', '$date')";
		$result = mysqli_query($db, $query) or die(mysqli_error($db));

		$_SESSION['message'] = "expense added refresh browser"; 
		header('location:  dashboard.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$date    = $_POST['date_'];

	mysqli_query($db, "UPDATE expense SET name='$name', amount='$amount' ,date='$date' WHERE id=$id");
	$_SESSION['message'] = "expense updated! refresh browser"; 
	header('location: dashboard.php');

	
 }

 if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM expense WHERE id=$id");
	$_SESSION['message'] = "expense deleted! refresh browser"; 
	header('location: dashboard.php');
}