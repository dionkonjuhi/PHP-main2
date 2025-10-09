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

        if($tempSQL->rowCount() > 0)
        {
            echo "Title exists";
            header("refresh:2; url=addProducts.php");
        }
        else{
            $sql = "insert into productsn (title, description, quantity, price) values (:title, :description, :quantity, :price)";
            $insertSql = $conn->prepare($sql);

            $insertSql->bindParam(':title' , $title);
            $insertSql->bindParam(':description' , $description);
            $


        }  

    }
}
?>