<?php
$x = explode(".",$_FILES['file']['name']);
$ext = array_pop($x);
$name = implode('.',$x);

move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$name.'_compressed'.'.'.$ext);
print_r($_FILES);
?>
