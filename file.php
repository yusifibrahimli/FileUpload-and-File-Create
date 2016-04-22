<?php
include "model.php";
if(isset($_POST["add"])){
    $fileName=$_POST["filename"];
    $fileEx=$_POST["file_ex"];
    $newFile=new File($fileName,$fileEx);
}
// $path="files/yuska.txt";
// $file_connect=fopen($path, "w");
// fwrite($file_connect, " Necesen");
?>