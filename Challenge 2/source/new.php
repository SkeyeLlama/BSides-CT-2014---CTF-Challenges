<?php
$allowedExts = array("txt");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if (($_FILES["file"]["type"] == "text/plain")
&& ($_FILES["file"]["size"] < 50000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    #echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    #echo "Type: " . $_FILES["file"]["type"] . "<br>";
    #echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    #echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    $newname = md5(rand(0,1000000000));
    while (file_exists("text/" . $newname . ".txt")) {
    	$newname = md5(rand(0,1000000000));
    }
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "text/" . $newname . ".txt");
    #echo "Stored in: " . "text/" . $newname . ".txt";
   header( 'Location: view.php?file=' . $newname) ;
   }
} else {
  header( 'Location: /chal2' );
}
?>