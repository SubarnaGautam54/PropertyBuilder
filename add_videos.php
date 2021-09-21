<?php
require_once "conn.php";
$response=array();

//  $image_array = $_REQUEST['id'];
//  echo $image_array	;

//  $response = $image_array;


	// echo json_encode($response);
?>




<?php

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['myFile']['name'], PATHINFO_EXTENSION);

// if ((($_FILES["myFile"]["type"] == "video/mp4")
// || ($_FILES["myFile"]["type"] == "audio/mp3")
// || ($_FILES["myFile"]["type"] == "audio/wma")
// || ($_FILES["myFile"]["type"] == "image/pjpeg")
// || ($_FILES["myFile"]["type"] == "image/gif")
// || ($_FILES["myFile"]["type"] == "image/jpeg"))

// && ($_FILES["myFile"]["size"] < 20000)
// && in_array($extension, $allowedExts))

//   {
  if ($_FILES["myFile"]["error"] > 0)
    {
    // echo "Return Code: " . $_FILES["myFile"]["error"] . "<br />";
    }
  else
    {
    // echo "Upload: " . $_FILES["myFile"]["name"] . "<br />";
    // echo "Type: " . $_FILES["myFile"]["type"] . "<br />";
    // echo "Size: " . ($_FILES["myFile"]["size"] / 1024) . " Kb<br />";
    // echo "Temp file: " . $_FILES["myFile"]["tmp_name"] . "<br />";

    // if (file_exists("uploadVideos/" . $_FILES["myFile"]["name"]))
    //   {
    //   echo "already exists.";
    //   }
    // else
    //   {
      move_uploaded_file($_FILES["myFile"]["tmp_name"],
      "uploadVideos/" . $_FILES["myFile"]["name"]);
    //   echo "Stored in: " . "upload/" . $_FILES["myFile"]["name"];
      echo  $_FILES["myFile"]["name"];

    //   }
    }
//   }
// else
//   {
//   echo "Invalid file";
//   }
?>
