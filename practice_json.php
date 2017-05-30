<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	$jsondata = file_get_contents('sample.json');

	var_dump($jsondata);

	$array = json_decode($jsondata,true);

	var_dump($array);

	echo '<br>';
	echo 'お名前:'.$array['name'];

	//genderを表示させる
	echo '<br>';
	echo '性別:'.$array['gender'];
?>
	<!-- 趣味をjsonファイルに追加して、趣味を何個か入れてリスト形式で表示してください<ul>タグ -->
	<ul>
<li><?php echo '趣味:'.$array['hobby'][0];?></li>
<li><? echo '趣味:'.$array['hobby'][1];?></li>

</body>
</html>

