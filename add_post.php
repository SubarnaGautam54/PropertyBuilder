<?php
require_once "conn.php";
// error_reporting(0);
$response=array();
$error=array();

 $name=$_POST['name'];
 $description=$_POST['description'];
 $developer_id=$_POST['developer_id'];
 $image_array =$_POST['images'];



 

// print_r($arry[0]);
 

// for($i=0 ; $i<count($arry);$i++){

	// file_put_contents("uploads/".$file_name,base64_decode($arry[$i]));
// 
// }


//  $type=strtolower($type1);
 
//  $area=$_POST['area'];
// $price=$_POST['price'];
// $property_type1=$_POST['property_type'];

// $property_type=strtolower($property_type1);

// $sub_type=$_POST['sub_type'];
// $size=$_POST['size'];
// $description=$_POST['description'];
// $parking=$_POST['parking'];
// $internet=$_POST['internet'];
// $cctv=$_POST['cctv'];
// $gas=$_POST['gas'];
// $water=$_POST['water'];
// $electricity=$_POST['electricity'];
// $phone=$_POST['phone'];
// $extra_phone=$_POST['extra_phone'];
// if(empty($phone))
// {
// 	$error['error']=" Phone is required";
// 	echo json_encode($error);
// }
// else
// {
// 	if($type=='sell')
// 		{
//             if($property_type=='residential')
// 				{
// 					$bedroom=$_POST['bedroom'];
// 			        $bathroom=$_POST['bathroom'];
					$insert="INSERT INTO posts (name,description,developer_id)
					VALUES
					 ('$name','$description','$developer_id')";
							 $que=mysqli_query($conn,$insert);
								if($que==true)
									{
									 	$response['status']=true;
									}
// 				}
// 			else if($property_type=='plot')
// 				{
// 					$insert="INSERT INTO addproperty (type,title,propert_type,sub_type,size,price,description,gas,electricity,water,internet,parking,cctv,city,area,phone,extra_phone,dat)

// 					 VALUES ('$type','$title','$property_type','$sub_type','$size','$price','$description','$gas','$electricity','$water','$internet','$parking','$cctv','$city','$area','$phone','$extra_phone',NOW())";
// 							 $que=mysqli_query($con,$insert);
// 								if($que==true)
// 									{ 

// 										$response['status']=true;
// 									}
								
// 				}
// 			else if($property_type=='commercial')
// 				{
// 					$year_built=$_POST['year_built'];
// 					$floor=$_POST['floor'];
// 					$insert="INSERT INTO addproperty (type,title,propert_type,sub_type,size,price,description,year_built,floor,gas,electricity,water,internet,parking,cctv,city,area,phone,extra_phone,dat)

// 					 VALUES ('$type','$title','$property_type','$sub_type','$size','$price','$description','$year_built',
// 							 '$floor','$gas','$electricity','$water','$internet','$parking','$cctv','$city','$area',
// 							 '$phone',$extra_phone,NOW())";
// 							 $que=mysqli_query($con,$insert);
// 								if($que==true)
// 									 { 

// 										$response['status']=true;
										
// 									}

// 				}
// 		}		


// 		// FOR REnt 
// 		if($type=='rent_out')
// 		{
//             if($property_type=='residential')
// 				{
// 					$bedroom=$_POST['bedroom'];
// 			        $bathroom=$_POST['bathroom'];
// 					$insert="INSERT INTO addproperty (type,title,propert_type,sub_type,size,price,description,bedroom,bathroom,gas,electricity,water,internet,parking,cctv,city,area,phone,extra_phone,dat)

// 					 VALUES ('$type','$title','$property_type','$sub_type','$size','$price','$description','$bedroom',
// 							 '$bathroom','$gas','$electricity','$water','$internet','$parking','$cctv','$city','$area',
// 							 '$phone','$extra_phone',NOW())";
// 							 $que=mysqli_query($con,$insert);
// 								if($que==true)
// 									{
// 										$response['status']=true;
// 									}

// 				}
// 			else if($property_type=='plot')
// 				{
// 					$insert="INSERT INTO addproperty (type,title,propert_type,sub_type,size,price,description,gas,electricity,water,internet,parking,cctv,city,area,phone,extra_phone,dat)

// 					 VALUES ('$type','$title','$property_type','$sub_type','$size','$price','$description','$gas','$electricity','$water','$internet','$parking','$cctv','$city','$area','$phone','$extra_phone',NOW())";
// 							 $que=mysqli_query($con,$insert);
// 								if($que==true)
// 									{ 

// 										$response['status']=true;
// 									}
									
// 				}
// 			else if($property_type=='commercial')
// 				{
// 					$year_built=$_POST['year_built'];
// 					$floor=$_POST['floor'];
// 					$insert="INSERT INTO addproperty (type,title,propert_type,sub_type,size,price,description,year_built,floor,gas,electricity,water,internet,parking,cctv,city,area,phone,extra_phone,dat)

// 					 VALUES ('$type','$title','$property_type','$sub_type','$size','$price','$description','$year_built',
// 							 '$floor','$gas','$electricity','$water','$internet','$parking','$cctv','$city','$area',
// 							 '$phone',$extra_phone,NOW())";
// 							 $que=mysqli_query($con,$insert);
// 								if($que==true)
// 									 { 

// 										$response['status']=true;
									
// 									}

// 				}
// 	    }		
				
// }
///////////////////////////////////////////////////////////multiple images
$post_id=mysqli_insert_id($conn);
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