<?php
require_once "conn.php";
// error_reporting(0);
$response=array();
$error=array();

//  $name=$_POST['name'];
//  $description=$_POST['description'];
 $post_id=$_POST['post_id'];
 $image_array =$_POST['images'];

// $insert="INSERT INTO posts (name,description,developer_id)
// 		VALUES
// 	('$name','$description','$developer_id')";		 
// 	$que=mysqli_query($conn,$insert);
// 	if($que==true)
// 	{
// 		$response['status']=true;
// 	}
// $post_id=mysqli_insert_id($conn);

$arry = json_decode($image_array,true);

$length = count($arry);
for ($i = 0; $i < $length; $i++) {
//   print $arry[$i];
	$file_name = "IMG".rand().".jpg";
  file_put_contents("uploads/".$file_name,base64_decode($arry[$i]));

  $insert="INSERT INTO post_images (image,post_id)
					VALUES
					 ('$file_name','$post_id')";
							 $que=mysqli_query($conn,$insert);
								if($que==true)
									{
									 	$response['status']=true;
									}
}

	echo json_encode($response);
?>