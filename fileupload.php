<?php
 if(isset($_POST['submit'])){
 	   $myPath="upload/";
       $myFile=$_FILES['file'];
       $fileName=$myFile['name'];
       $fileSize=$myFile['size'];
       $fileType=$myFile['type'];
       $fileTmp=$myFile['tmp_name'];
       $ext=explode("/", $fileType);
       $new_name="image".rand().".".$ext[1];
       move_uploaded_file($fileTmp, $myPath.$new_name);


 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <form action="" method="POST" enctype="multipart/form-data">
     	    <input type="file" name="file"></input>
     	    <input type="submit" name="submit" value="Add File"></input>
     </form>
</body>
</html>