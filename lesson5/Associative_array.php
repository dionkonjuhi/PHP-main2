<?php
$grade=array(
    "Math"=> "3",
    "Art"=> "5",
    "HIstory"=> "5",
    "Music"=> "3",
);

foreach($grade as $subject=> $grade){
    echo "Subject:" .$subject . ",Grade:" . $grade;
    echo "<br>";
}
?>