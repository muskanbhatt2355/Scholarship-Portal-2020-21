<?php

$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$sss =  "isaa.sss.iitb@gmail.com";
$cc = "isaa.careercell.iitb@gmail.com";

$header = "From".$email."\r\n";
$header .= "Cc:isaa.careercell.iitb@gmail.com \r\n";

$muskan = "muskanbhatt2355@gmail.com";

//mail(to, subject, message, headers, parameters);
$retval = mail($muskan, $subject, $message, $header, "Name: ".$name );
if($retval){
	//header("Location:https://gymkhana.iitb.ac.in/~ugacademics/sch_temp/template_edited.php");
	echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
}
else{
	//header("Location:https://gymkhana.iitb.ac.in/~ugacademics/sch_temp/template_edited.php");
	echo '<script language="javascript">';
	echo 'alert("message could not be sent")';
	echo '</script>';
}	

?>
