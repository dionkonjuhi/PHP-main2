<?php
foreach ($images as $img) {
    $file = basename($img);
    echo "<div style='display:inline-block; text-align:center;'>";
    echo "<img src='$img' style='width:150px; margin:10px;' /><br>";
    echo "<form method='post' action='delete.php' style='margin-top:5px;'>
            <input type='hidden' name='file' value='$file'>
            <button type='submit'>Delete</button>
          </form>";
    echo "</div>";
}
?>
