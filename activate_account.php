<?php
require "conn.php";

$id = $_POST['id'];
$account_status = $_POST['account_status'];

$emparray = array();

$mysql_qry = "UPDATE `users` SET `account_status`='$account_status' WHERE `id` = '$id' ";
$result = mysqli_query($conn,$mysql_qry);

if($result)
{
    $emparray['error'] = false;
    $emparray['message'] = "update success";
    echo json_encode($emparray);
}
else
{
    $emparray['error'] = true;
    $emparray['message'] = "update not success";
    echo json_encode($emparray);
}
?>