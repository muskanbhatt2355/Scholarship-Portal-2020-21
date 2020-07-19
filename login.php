<?php
session_start();
require_once 'sso_handler.php';

//$CLIENT_ID='262P0mKNnWQqW1ENnmimezCBV2brMWoVXtvDnBdI';
$CLIENT_ID='xtTPUzjWo6VaK443bMyA7oR5fY8wsuUlJWfhk7lt';
//$CLIENT_SECRET='sNKdeXzu2VPaNxr1jdymqsJ8zxaQVb25qdHKHRDXS1UAVjFP3NDRGCFp35cevSGhbiOMaXjKSBkzG3HdRnDysKVFukhvuE7kw8xQ7vsKdeJOTWJmEHbTgLOw19wy9baA';
$CLIENT_SECRET='aQemegPSJ9lcRTRFd5TxjOdQoMWhPxwhAq1BVir0Uc8QKrtP0amQFXw95XXmGSDylXE2EYSV1W2XVapk56aH5zNYfeFy8cywgH3j3FAOuTAOWNmRKqGIjXJv3QkMBWiR';
echo "hi";
//$required_fields = array('username', 'email', 'roll_number');
//$state = 'user_login';
$response_type = 'code';
$permissions = 'basic profile ldap';
$REDIRECT_URI = 'https://gymkhana.iitb.ac.in/~ugacademics/sch_temp/login.php';
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
$required_scopes=array('basic','profile','ldap');
$required_fields = array('username', 'email', 'roll_number', 'first_name','last_name');

if ($sso_handler->validate_code($_GET) && $sso_handler->validate_state($_GET)) {
echo "hello";
  $response = $sso_handler->default_execution($_GET, $REDIRECT_URI,$required_scopes,$required_fields);
}
 
 if (!isset($response['error']) && isset($response['access_information']) && isset($response['user_information'])) {
    echo "hello";
	//echo $response['user_information'][0];
echo '<pre>'; print_r($response['access_information']); echo '</pre>';
echo '<pre>'; print_r($response['user_information']); echo '</pre>';

$access_token=$response['access_information']['access_token'];
echo $access_token;

	$admin_username = $response['user_information']['username'];

	/*$servername = "localhost";
	$username = "root";
	$password = "";

	$con = mysqli_connect($servername, $username, $password,'scholarship_portal1');

	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}*/
	$con = mysqli_connect ('10.105.177.5', 'ugacademics', 'ug_acads', 'ugacademics') or die ('Error connecting to mysqli sever');
	$sql = "SELECT * FROM admin WHERE admin_username = $admin_username";
 	$result = mysqli_query($con,$sql);

    if(mysqli_fetch_array($result) !== false){
        header('Location:add_scholarship.php');
    }
    else{
	echo '<script language="javascript">';
	echo 'alert("You are not an admin! Contact the web team to get admin rights!")';
	echo '</script>';

    	mysqli_close($con);
    	session_destroy();
    	header('Location:index_bts.php');

    }

    
}
?>
