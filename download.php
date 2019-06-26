<?php

mkdir("download/".$_REQUEST['email'], 0700);

$myfile = fopen("download/".$_REQUEST['email']."/".$_REQUEST['email'].".txt", "w") or die("Unable to open file!");
$txt = $_REQUEST['email'];
fwrite($myfile, $txt);
fclose($myfile);

$file = "file/SchemaBuilder-win32-x64.zip"; 

header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=" . basename($file)); 

readfile ($file);
exit(); 

?>