<?php
function biodata ($name, $address, $school) {
	$hobbies = ["renang", "mancing", "naik kuda"];
	$is_meried = true;
	$skill = ["css", "html", "php"];
    echo "Name : $name <br>";
	echo "Address : $address <br>";	
	echo "Hobbies : $hobbies[0], $hobbies[1], $hobbies[2]<br>";
	if ( $is_meried === true){
	echo "status : Belum nikah <br>";
	} else {
		echo "status : sudah menikah <br>";
	}
	echo "School : $school <br>";
	echo "Skill : $skill[0], $skill[1], $skill[2]<br>";	
}
biodata("Qori", "Bekasi", "universitas gunadarma" );
?>

