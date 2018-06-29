<?php
	// requires php5
	define('UPLOAD_DIR', 'images/');
	$img = $_POST['img'];
	$file=$_POST['filename'];
	$file=iconv("UTF-8","gb2312",$file);//解决保存中文文件名时乱码问题，目前只在win7里测试
	//var_dump($img)
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . $file . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';
?>
