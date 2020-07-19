<?php

$connect = mysqli_connect('10.105.177.5', 'ugacademics', 'ug_acads','ugacademics' ) or die("lmao");
//$query = "SELECT * FROM scholarship_portal2020_db";
$query = "UPDATE scholarship_portal2020_db SET tags='International,Merit' WHERE tags='International'";
$result = mysqli_query($connect, $query);

if($result){
	echo "correct";
}
else{
	echo "incorrect";
}
/*
echo "bro";
while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
	echo "'".$row['tags']."'";
	echo "<br>";
	if($row['tags']=='international + higher edu '){
		echo "true!";
		$row['international'] = 1;
		$row['highed'] = 1;
	}
}
echo "out";
*/
mysqli_close($connect);

?>
