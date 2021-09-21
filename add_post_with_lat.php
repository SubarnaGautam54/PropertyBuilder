<?php
require_once "conn.php";
// error_reporting(0);
$response=array();
$error=array();

 $name = $_POST['name'];
 $description = $_POST['description'];
 $developer_id = $_POST['developer_id'];
 $lat = $_POST['lat'];
 $long = $_POST['long'];

//  $name = "ahmed don";
//  $description = "dddddd";
//  $developer_id = "786";
//  $lat = "3333";
//  $long = "4444";
 
 $insert="INSERT INTO posts (name,description,latitude,longitude,developer_id)
 	VALUES
	('$name','$description','$lat','$long','$developer_id')";
	
	$que=mysqli_query($conn,$insert);
			if($que==true)
			{
			 	$response['status']=true;
			}
///////////////////////////////////////////////////////////multiple images
// $post_id=mysqli_insert_id($conn);
// $arry = json_decode($image_array,true);

// $length = count($arry);
// for ($i = 0; $i < $length; $i++) {
////   print $arry[$i];
	// $file_name = "IMG".rand().".jpg";
//   file_put_contents("uploads/".$file_name,base64_decode($arry[$i]));
// 
//   $insert="INSERT INTO post_images (image,post_id)
					// VALUES
					//  ('$file_name','$post_id')";
							//  $que=mysqli_query($conn,$insert);
								// if($que==true)
									// {
									 	// $response['status']=true;
									// }
// }
///////////////////////////////////////////////////// other way
// $target_file;
// $target_dir = $_SERVER['DOCUMENT_ROOT'].'uploads/';
// $extensions = array("gif", "jpeg", "jpg", "png");

// if(!empty($_FILES['filetoupload']['name'] != ""))
// {
// foreach ($_FILES["filetoupload"]["tmp_name"] as $key => $tmp_name)
//  {
// 	$file_name = $_FILES["filetoupload"]["name"][$key];
// 	$file_tmp = $_FILES["filetoupload"]["tmp_name"][$key];
// 	$ext=pathinfo($file_name,PATHINFO_EXTENSION);
// 	$target_file = $target_dir . $file_name;
// 	if(in_array($ext,$extensions))
// 	{
// 		if(!file_exists($target_file))
// 		{
// 			move_uploaded_file($file_tmp=$_FILES["filetoupload"]["tmp_name"][$key],"uploads/".$file_name);
// 			$filelocation = 'uploads/'.$file_name;
// 			$insert="INSERT into post_images (image,post_id) VALUES('$filelocation','$post_id')";
// 			$qry2 = mysqli_query($conn,$insert);
// 			if(!$qry2)
// 			{
// 				echo mysqli_error($conn);
// 			}
// 			else
// 			{
// 				// $response['img'][]=$file_name;
// 				// $response['propeerty_id'][]=$property_id;
// 				// $response['Data']="Your Data";
// 				$response['status']=true;
// 			}
			
// 		}
// 		else
// 		{
// 			$filename=basename($file_name,$ext);
// 			$newfilename=$filename.time().".".$ext;
// 			$target_file=$target_dir.$newfilename;
			
// 			move_uploaded_file($file_tmp=$_FILES["filetoupload"]["tmp_name"][$key],"uploads/".$newfilename);
// 			$filelocation = 'uploads/'.$newfilename;
// 			$insert="INSERT into image (image,post_id) VALUES('$filelocation','$post_id')";
// 			$qry2 = mysqli_query($conn,$insert);
// 			if(!$qry2)
// 			{
// 				echo mysqli_error($conn);
// 			}
// 			else
// 			{
// 				 $response['status']=true;
// 				// $error=$error+1;
// 				// $response['propeerty_id'][]=$property_id;
// 			}
			
// 		}
// 	}
// 	else
// 	{
// 		array_push($response, "$file_name, ");
// 	}
// }
// }

// else{

// $response['data'] = array();
// $response['status'] = 'fail';
// $response['message'] = 'Please passed image';
// }



/////////////////////////////////////////multiple image code
// if($status==0)
// {
// 	$response=false;
// }
// echo json_encode($res); //all API response send from here

	echo json_encode($response);
?>