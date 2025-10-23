<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <h1>Upload an Image</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit" name="upload">Upload</button>
    </form>

    <h2>Gallery</h2>
    <?php
    $images = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
    foreach ($images as $img) {
        echo "<img src='$img' style='width:150px; margin:10px;' />";
    }
    ?>
</body>
</html>
