<?php
require_once "conn.php";
// error_reporting(0);
$response=array();
$error=array();

 $description = $_POST['description'];
 $post_id = $_POST['post_id'];
 $image_array =$_POST['images'];
  $post_video = $_POST['post_video'];


//  $description = $_POST['description'];
//  $post_id = $_POST['post_id'];
//  $post_video = $_POST['post_video'];
 
 $insert="INSERT INTO post_phases (description,post_id,phase_video)
 	VALUES
	('$description','$post_id','$post_video')";
	
	$que=mysqli_query($conn,$insert);
			if($que==true)
			{
			 	$response['status']=true;
			}
			else{
				$response['status']=false;
				
			}
///////////////////////////////////////////////////////////multiple images
$phase_id=mysqli_insert_id($conn);
$arry = json_decode($image_array,true);

$length = count($arry);
for ($i = 0; $i < $length; $i++) {
////   print $arry[$i];
	$file_name = "IMG".rand().".jpg";
  file_put_contents("uploads/".$file_name,base64_decode($arry[$i]));

  $insert="INSERT INTO post_images (image,phase_id)
					 VALUES
					  ('$file_name','$phase_id')";
							 $que=mysqli_query($conn,$insert);
								if($que==true)
									{
									 	// $response['status']=true;
									}
}
	echo json_encode($response);
?>