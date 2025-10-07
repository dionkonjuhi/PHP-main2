<?php
include_once('config.php');

if(empty($_SESSION['username'])) {
	header('Location: login.php');
}
$sql = "SELECT * FROM users";
$selectProduct = $conn->prepare($sql);
$selectProduct->execute();

$product_data = $selectProduct->fetchAll();
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



