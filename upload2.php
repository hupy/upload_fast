<?php
$x = explode(".",$_FILES['file']['name']);
$name = $x[0];
$ext = $x[1];
move_uploaded_file($_FILES['file']['tmp_name'],$name.'_compressed'.'.'.$ext);
print_r($_FILES);
?>
