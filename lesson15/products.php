<?php
include_once('config.php');

if(isset($_POST['sumbit']))

{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantinity'];
    $price = $_POST['price'];

    if(empty($title) || empty($description) || ($quantity) || empty($price))
    {
        echo "You need to fill all the fields";
    }
    else{
        $sql = "SELECT title FROM products WHERE title =:title ";

        $tempSQL = $conn->prepare($sql);
        $tempSQL -> bindParam(':title', $title);
        $tempSQL ->execute();
    }
}
?>