<?php 
if($_POST){
    $name = $_POST['txtName'];
    $lastName = $_POST['txtLastName'];

    echo "Te amo mucho " . $name . " " . $lastName . " <3!!";
}
?>