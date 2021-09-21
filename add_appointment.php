<?php
require_once "conn.php";
// error_reporting(0);
$response=array();
$error=array();

 $date = $_POST['date'];
 $time = $_POST['time'];
 $type = $_POST['type'];
 $developer_id = $_POST['developer_id'];
 $user_id = $_POST['user_id'];
 $post_id = $_POST['post_id'];
 $status = $_POST['status'];

//  $date = "date";
//  $time = "time";
//  $type = "type";
//  $developer_id = "developer_id";
//  $user_id = "user_id";
//  $post_id = "post_id";

		$insert="INSERT INTO appointment(date,time,type,developer_id,user_id,post_id,status)
		VALUES
		('$date','$time','$type','$developer_id','$user_id','$post_id','$status')";
			$que=mysqli_query($conn,$insert);
				if($que==true)
				{
					$response['status']=true;
				}
				
	echo json_encode($response);
?>