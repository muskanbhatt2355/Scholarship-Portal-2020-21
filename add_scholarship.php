<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body  class="container" style="background-image: linear-gradient(rgba(255,255,255,.8),rgba(255,255,255,.8)),url('login_sch.jpg');background-position:center;" >
	<div><button type="button" class="btn btn-warning" style="float:right;"><a href="logout.php">Logout</a></button></div>
	
	<div class="container" style="max-width: 800px;background-color:white;" >
	<h2 style="font-family: Arial, Helvetica, sans-serif;letter-spacing: 1px;word-spacing:4px;color: black;text-align: center;">ADD A NEW SCHOLARSHIP</h2>
		<form method="post">
			<div class="form-group">
				<label for="sch_name">Name:*</label><br>
	  			<input type="text" class="form-control" id="sch_name" name="sch_name"  required><br>
			</div>
			<div class="form-group">
				<label for="details">Details/Eligibility:*</label><br>
	  			<textarea class="form-control" id="details" name="details" ></textarea><br>
			</div>
			<div class="form-group">
				<label for="incentives">Incentives:*</label><br>
	  			<textarea class="form-control" id="incentives" name="incentives" ></textarea><br>
			</div>
			<div class="form-group">
				<label for="proc">Procedure:*</label><br>
	  			<textarea class="form-control" id="proc" name="proc" ></textarea><br>
			</div>
	  		<div class="form-group">
	  			<label for="link">Link:*</label><br>
	  			<input type="text" class="form-control" id="link" name="link"><br>
			</div>
			<div class="form-group">
	  			<label for="link2">Other link:</label><br>
	  			<input type="text" class="form-control" id="link2" name="link2"><br>
			</div>
			<!--<div class="form-group">
				<label for="procedure">Procedure:</label><br>
	  			<textarea class="form-control" id="procedure" name="procedure" ></textarea><br>
			</div>
	  		-->
			<h5 style="font-family:Arial;padding-top: 0px;"><b>Select tags:*</b></h5>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			    <p><input type="checkbox" name="filter[]" value="international" /> International</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="national" /> National</p>
			  </label>
			</div>

			<h5 style="font-family:Arial;padding-top: 0px;"><b> Select additional filters:</b></h5>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="merit" /> Merit-based for all</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="girls" /> Only for Girls</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="scst" /> Only for SC/ST students</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="bs" /> Only for BS students</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="first" /> Only for first year students</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="final" /> Only for final year students</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="minority" /> For minorities</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="special" /> For Specially-abled students</p>
			  </label>
			</div>

			<h5 style="font-family:Arial;padding-top: 0px;"><b> Select additional filters:</b></h5>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="financial" /> With Financial Constraints</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="sports" /> Sports</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="highed" /> Higher Education</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="state" /> State Scholarships</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="research" /> Research and Internship abroad</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="exchange" /> Exchange Program</p>
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label" style="color:grey;">
			   	<p><input type="checkbox" name="filter[]" value="ent" /> Entrepreneurship</p>
			  </label>
			</div>
				
			
			
			
						
						
			
			
			<!--<h3>Is it active?</h3>
			<input type="checkbox" name="act[]" value="active" />Yes<br>
			<input type="checkbox" name="act[]" value="inactive" />No<br>-->

			<input type="submit" style="align-self: center;" name="submit" value="Submit" />
		</form>
	</div>
	<?php
/*
	$servername = "localhost";
	$username = "root";
	$password = "";

	$con = mysqli_connect($servername, $username, $password,'scholarship_portal1');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}

*/
	$con = mysqli_connect ('10.105.177.5', 'ugacademics', 'ug_acads', 'ugacademics') or die ('Error connecting to mysqli sever');
	
	$tags_list = "";

	if(isset($_POST["submit"])){
		$sch_name = $_POST['sch_name'];
		$details = $_POST['details'];
		$incentives = $_POST['incentives'];
		$proc = isset($_POST['proc'])? $_POST['proc'] : "";
		$link = $_POST['link'];
		$link2 = isset($_POST['link2'])? $_POST['link2'] : '';
		

		$insert = "INSERT";
		$into = " INTO scholarship_portal2020_db (name,details,incentives,link,proc";
		$values = " VALUES ('$sch_name','$details','$incentives','$link','$proc'";	

		$opts = isset($_POST['filter'])? $_POST['filter'] : array('');
		$stat = isset($_POST['act'])? $_POST['act'] : array('');

		if (in_array('international', $opts)){
		    $into .= ",international";
		    $values .= ",1";
	            $tags_list .= "International";
		 }
		 if (in_array('national', $opts)){
		    $into .= ",national";
		    $values .= ",1";
		    $tags_list .= "National";
		 }
		 if (in_array('merit', $opts)){
		    $into .= ",merit";
		    $values .= ",1";
		    $tags_list .= ",Merit";
		 }
		 if (in_array('girls', $opts)){
		    $into .= ",girls";
		    $values .= ",1";
		    $tags_list .= ",Girls";
		 }
		 if (in_array('scst', $opts)){
		    $into .= ",scst";
		    $values .= ",1";
		    $tags_list .= ",SC/ST Students";
		 }
		 if (in_array('bs', $opts)){
		    $into .= ",bs";
		    $values .= ",1";
		    $tags_list .= ",BS Students";
		 }
		 if (in_array('first', $opts)){
		    $into .= ",first";
		    $values .= ",1";
		    $tags_list .= ",First-year students";
		 }
		 if (in_array('minority', $opts)){
		    $into .= ",minority";
		    $values .= ",1";
		    $tags_list .= ",Minority";
		 }
		 if (in_array('special', $opts)){
		    $into .= ",special";
		    $values .= ",1";
		    $tags_list .= ",Specially-abled students";
		 }
		 if (in_array('financial', $opts)){
		    $into .= ",financial";
		    $values .= ",1";
		    $tags_list .= ", Financial constraint";
		 }
		 if (in_array('sports', $opts)){
		    $into .= ",sports";
		    $values .= ",1";
		    $tags_list .= ",Sports";
		 }
		 if (in_array('highed', $opts)){
		    $into .= ",highed";
		    $values .= ",1";
		    $tags_list .= ",Higher Education";
		 }
		 if (in_array('state', $opts)){
		    $into .= ",state";
		    $values .= ",1";
		    $tags_list .= ",State- based";
		 }
		 if (in_array('research', $opts)){
		    $into .= ",research";
		    $values .= ",1";
		    $tags_list .= ",Research and internship abroad";
		 }
		 if (in_array('exchange', $opts)){
		    $into .= ",exchange";
		    $values .= ",1";
		    $tags_list .= ",Exchange program";
		 }
		if (in_array('enr', $opts)){
		    $into .= ",ent";
		    $values .= ",1";
		    $tags_list .= ",Entrepreneurship";
		 }

		 /*if (in_array('inactive', $stat)){
		    $into .= ",active";
		    $values .= ",0";
		 }*/

			
		if($link2!=''){
			$into .= ",link2";
			$values .= ",'".$link2."'";

		}
		
		$into .= ",tags";
		$values .= ", ";
		$values .= "'".$tags_list."'";

		 $into .= ") ";
		 $values .= ")";

		$sql = $insert . $into . $values;
	 	$result = mysqli_query($con,$sql);

		echo $tags_list;

	 	if ($result) {
		echo '<script language="javascript">';
		echo 'alert("New scholarship added successfully!")';
		echo '</script>';

	 	} else {
		echo "Error: " . $sql . " " . mysqli_error($con);
		echo '<script language="javascript">';
		echo 'alert("Error occurred while adding scholarship! Please try again!")';
		echo '</script>';
	 }
	
		mysqli_close($con);


	}


	

?>
</body>
</html>
