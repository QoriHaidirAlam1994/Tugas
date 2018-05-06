
<?php
function randStrGen($len=300){
	$result = "";
	$chars = "abcdefghijklmnopqrstuwxyz0123456789";
	$charArray = str_split($chars);
	for($i = 0; $i < $len; $i++){
		$randItem = array_rand($charArray);
		$result .= "".$charArray[$randItem];
	}
	return $result;
}
?>


<?php
	$randstr = randStrGen(16);
	echo $randstr;
?>

