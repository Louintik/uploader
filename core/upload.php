<?php
$image = $_FILES['image'];

$types = [
	"image/jpeg",
	"image/png",
];

if (!in_array($image["type"],$types)){
	die('Incorrect file type');
}

if (!is_dir('../uploads')){
	mkdir('../uploads', 0777, true);
}

$fileSize = $image["size"] / 1000000;
$maxSize = 0.04; //Mb
if ($fileSize > $maxSize){
	die('Incorrect file size');
}

$extention = pathinfo('$image["name"]', PATHINFO_EXTENSION);

$fileName = time() . $image["name"];
move_uploaded_file($image["tmp_name"],"../uploads/" . $fileName );
