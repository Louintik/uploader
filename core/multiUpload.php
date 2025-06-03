<?php

$images = $_FILES["image"];

$normalizeImages = [];

foreach($images as $key_name => $value){
    foreach($value as $key=>$item){
	    $normalizeImages[$key][$key_name] = $item;
    }
}

foreach($normalizeImages as $image){
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
		continue; //чтобы если один файл большой все остальные загрузились
	}

	$extention = pathinfo('$image["name"]', PATHINFO_EXTENSION);

	$fileName = time() . $image["name"];
	move_uploaded_file($image["tmp_name"],"../uploads/" . $fileName );
}





