<?php
echo "Muskan";
$connect = mysqli_connect('10.105.177.5', 'ugacademics', 'ug_acads','ugacademics' ) or die("lmao");
$query = "SELECT * FROM scholarship_portal2020_newdata";
$result = mysqli_query($connect, $query);
if($result){
	echo "correct";
}
else{
	echo "incorrect";
}

echo "bro";
while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
	echo "m in!";
	$q = "INSERT INTO scholarship_portal2020_db ( name, details, incentives, link, tags )";
	$q = $q . " VALUES ( '" .$row['COL 1']."', '".$row['COL 2']."', '".$row['COL 3']."', '".$row['COL 4']."', '".$row['COL 5']."' )";
	
	echo "<br>";
	echo $q;
	echo "<br>";

	$result2 = mysqli_query($connect,$q); 
	if($result2){
		echo "Done";
	}
	else{
		echo "Not done!";
	}
}
echo "out";
mysqli_close($connect);
echo "getlost";
?>
