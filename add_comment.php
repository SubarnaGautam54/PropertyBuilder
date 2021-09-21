<?php
require_once "conn.php";
// error_reporting(0);
$response=array();
$error=array();

 $name=$_POST['name'];
 $message=$_POST['message'];
 $id_post=$_POST['id_post'];
 $user_id=$_POST['user_id'];


		$insert="INSERT INTO comments (name,message,id_post,user_id)
		VALUES
		('$name','$message','$id_post','$user_id')";
			$que=mysqli_query($conn,$insert);
				if($que==true)
				{
					$response['status']=true;
				}
				
	echo json_encode($response);
?>