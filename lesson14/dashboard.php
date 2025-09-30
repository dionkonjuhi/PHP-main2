<?php
include_once('config.php');

if(empty($_SESSION['user'])) {
	header('Location: login.php');
}
$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();

$users_data = $selectUsers->fetchAll();
?>

<?php include("header.php");?>

<style>
	table{
		border: 1px solid black;
	}

	tr, th, td{
		border: 1px solid black;
	}

	table,tr,td{
		border-collapse: collapse;
	}

	td{
		padding: 10px;
	}
</style>

