<?php
$image = $_FILES['image'];
//var_dump($image);

if (!is_dir('../uploads')){
	mkdir('../uploads', 0777, true);
}
$extention = pathinfo('$image["name"]', PATHINFO_EXTENSION); //получение исключительно расширения файла без его имени если нужно

$fileName = time() . $image["name"];
move_uploaded_file($image["tmp_name"],"../uploads/" . $fileName );
