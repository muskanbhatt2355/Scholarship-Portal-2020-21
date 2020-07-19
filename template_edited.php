<!DOCTYPE html>
<html>
<head>
<title>Scholarship Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" rel="stylesheet"/>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js" charset="utf-8"></script>

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>

</head>
<body class="w3-content" style="max-width:1300px;">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:320px;" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <img src="ugac.png" style="width:150px;"></img>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold;padding-left:1vw;line-height:20px;">
  	<form method="post">
      <!--<p><input type="checkbox" name="filter[]" value="international" <?php if(in_array('international',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'";?> International</input></p>-->
      <!--<p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>          
      <p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>         
      <p><label><i class="fa fa-male"></i> Adults</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">              
      <p><label><i class="fa fa-child"></i> Kids</label></p>
      <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">-->
	<p></p>
      <p style="color:black;font-weight:bold;"><label><i></i> Select Either or both:</label></p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="international" <?php if(in_array('international',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> />  International</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="national" <?php if(in_array('national',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?>/>   National</p>
	<p></p>
        <p style="color:black;font-weight:bold;"><label><i></i> Select Categorgy:</label></p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="merit" <?php if(in_array('merit',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Merit-based for all</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="girls" <?php if(in_array('girls',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Only for Girls</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="scst" <?php if(in_array('scst',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Only for SC/ST students</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="bs" <?php if(in_array('bs',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Only for BS students</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="first" <?php if(in_array('first',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Only for first year students</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="final" <?php if(in_array('final',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Only for final year students</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="minority" <?php if(in_array('minority',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?>/>  For minorities</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="special" <?php if(in_array('special',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> For Specially-abled students</p>
	<p style="font-size:16px;"></p>
        <p style="color:black;font-weight:bold;"><label><i></i> Select additional filters:</label></p>	
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="financial" <?php if(in_array('financial',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?>/>  With Financial Constraints</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="sports" <?php if(in_array('sports',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?>/>  Sports</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="highed" <?php if(in_array('highed',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> />  Higher Education</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="state" <?php if(in_array('state',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> State Scholarships</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="research" <?php if(in_array('research',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Research & Internship abroad</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="exchange" <?php if(in_array('exchange',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?> /> Exchange Program</p>
        <p style="font-size:16px;"><input type="checkbox" name="filter[]" value="ent" <?php if(in_array('ent',isset($_POST['filter'])? $_POST['filter'] : array('allent'))) echo "checked='checked'"; ?>/>  Entrepreneurship</p>
      <p><input class="w3-button w3-block w3-green w3-center-align" type="submit" name="submit" value="Search"></input></p>
    </form>

   <!-- <a href="#" class="w3-bar-item w3-button">Shirts</a>
    <a href="#" class="w3-bar-item w3-button">Dresses</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Jeans <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>
      <a href="#" class="w3-bar-item w3-button">Relaxed</a>
      <a href="#" class="w3-bar-item w3-button">Bootcut</a>
      <a href="#" class="w3-bar-item w3-button">Straight</a>
    </div>
    <a href="#" class="w3-bar-item w3-button">Jackets</a>
    <a href="#" class="w3-bar-item w3-button">Gymwear</a>
    <a href="#" class="w3-bar-item w3-button">Blazers</a>
    <a href="#" class="w3-bar-item w3-button">Shoes</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>-->
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">UGAC</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-filter"></i></a>
  <?php

echo '<script type="text/javascript">
	if(window.innerWidth < 992){
		window.onload = function () { alert("You can apply filters to the scholarships by clicking on the filter-icon in the top-right corner!"); }
	}        

</script>';

?>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left"></p>
    <p class="w3-right">
    	<p><a href="admin_login.php" class="w3-button w3-black w3-padding-large w3-medium w3-right">ADMIN</a></p>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container" style="padding-left:10px;margin-left:4vw;">
    <img src="sch2.jpg" alt="Scholarship Portal" style="width:100%;height:auto;max-height:400px;opacity:0.6;">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small" style="color:black;">Scholarship Portal</h1>
      <h1 class="w3-hide-large w3-hide-medium" style="color:black;">Scholarship Portal</h1>
      <h1 class="w3-hide-small" style="color:black;">2020-2021</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">VIEW SCHOLARSHIPS</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p></p>
  </div>

  <!-- Product grid -->
  <div class="container" style="width:100%;overflow-x:auto;padding-left:10px;margin-left:4vw;">
  <h2>Scholarship details</h2>
  <p>Click on the name to get a detailed description of the selected scholarship.</p>


  <table id="example" class="table display" cellspacing="0" width="100%">


<?php 


    /*$link = mysqli_connect ('10.105.177.5', 'ugacademics', 'ug_acads', 'ugacademics') or die ('Error connecting to mysqli sever');
    $query = "SELECT * FROM SURP_2020_Projects";
    $result = mysqli_query($link, $query) or die ('Error connecting to database');
  while($row = mysqli_fetch_array($result)){
    $id = $row['Project_ID'];
    $department =$row['Department'] ;
    $prof = $row['Professor_Name'];
    $title =$row['Title'];
    $description=$row['Description'];
    $eligibility=$row['CPI_Eligibility'];
    $students_req=$row['Number_Of_Students'];
    $year=$row['Minimum_Year_Of_Study'];      
    $other_prereq=$row['Prerequisites'];
    $duration = $row['Duration'];
    $what_to_learn = $row['Learning_Outcome'];
    $selection = $row['Selection_Process'];	
    echo '<tr>
      <td><strong>'.$department.'</strong></td>
      <td>'.$id.'</td>
      <td>'.$prof.'</td>
      <td><a style="color:#D2691E;" href="project.php?param='.$id.'">'.$title.'</a></td>      
        <td>'.$eligibility.'</td>
        <td>'.$students_req.'</td>
        <td>'.$year.'</td>
      <td>'.$other_prereq.'</td>   
      <td>'.$duration.'</td>     
	<td>'.$selection.'</td>
    </tr>';
  }
*/
  $arr = array();
if(isset($_POST["submit"])){
    if(!empty($_POST["filter"])){
        //echo"<h3>Your Scholarships</h3>";
        //echo "<br>";  
        foreach($_POST["filter"] as $filter){
            array_push($arr,$filter);
            //echo $filter." ";
        }
    }
    else{
        //echo 'All Scholarships';
    }
}
$servername = "10.105.177.5";
$username = "ugacademics";
$password = "ug_acads";

$con = mysqli_connect($servername, $username, $password,'ugacademics');
/*
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password,'scholarship_portal1');
*/
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$select = 'SELECT *';
$from = ' FROM scholarship_portal2020_db';
$where = ' WHERE (allent = 1';
$opts = isset($_POST['filter'])? $_POST['filter'] : array('allent');

$a = 0;
$b = 0;
$c = 0;

if (in_array('international', $opts)){
    if($a==0){
        $where .= ") AND (international = 1";
        $a = $a + 1;
    }
    else{
        $where .= " OR international = 1";
        $a = $a + 1;
    }
    
 }
 if (in_array('national', $opts)){
    if($a==0){
        $where .= ") AND (national = 1";
        $a = $a + 1;
    }
    else{
        $where .= " OR national = 1";
        $a = $a + 1;
    }
 }
 if (in_array('merit', $opts)){
    if($b==0){
        $where .= ") AND (merit = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR merit = 1";
        $b = $b + 1;
    }
 }
 if (in_array('girls', $opts)){
    if($b==0){
        $where .= ") AND (girls = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR girls = 1";
        $b = $b + 1;
    }
 }
 if (in_array('scst', $opts)){
    if($b==0){
        $where .= ") AND (scst = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR scst = 1";
        $b = $b + 1;
    }
 }
 if (in_array('bs', $opts)){
    if($b==0){
        $where .= ") AND (bs = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR bs = 1";
        $b = $b + 1;
    }
 }
 if (in_array('first', $opts)){
    if($b==0){
        $where .= ") AND (first = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR first = 1";
        $b = $b + 1;
    }
 }
 if (in_array('final', $opts)){
    if($b==0){
        $where .= ") AND (final = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR final = 1";
        $b = $b + 1;
    }
 }
 if (in_array('minority', $opts)){
    if($b==0){
        $where .= ") AND (minority = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR minority = 1";
        $b = $b + 1;
    }
 }
 if (in_array('special', $opts)){
    if($b==0){
        $where .= ") AND (special = 1";
        $b = $b + 1;
    }
    else{
        $where .= " OR special = 1";
        $b = $b + 1;
    }
 }
 if (in_array('financial', $opts)){
    if($c==0){
        $where .= ") AND (financial = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR financial = 1";
        $c = $c + 1;
    }
 }
 if (in_array('sports', $opts)){
    if($c==0){
        $where .= ") AND (sports = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR sports = 1";
        $c = $c + 1;
    }
 }
 if (in_array('highed', $opts)){
    if($c==0){
        $where .= ") AND (highed = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR highed = 1";
        $c = $c + 1;
    }
 }
 if (in_array('state', $opts)){
    if($c==0){
        $where .= ") AND (state = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR state = 1";
        $c = $c + 1;
    }
 }
 if (in_array('research', $opts)){
    if($c==0){
        $where .= ") AND (research = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR research = 1";
        $c = $c + 1;
    }
 }
 if (in_array('exchange', $opts)){
    if($c==0){
        $where .= ") AND (exchange = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR exchange = 1";
        $c = $c + 1;
    }
 }
 if (in_array('ent', $opts)){
    if($c==0){
        $where .= ") AND (ent = 1";
        $c = $c + 1;
    }
    else{
        $where .= " OR ent = 1";
        $c = $c + 1;
    }
 }
 

 $sql = $select . $from . $where.")";
 $result = mysqli_query($con,$sql);
 //echo $where;

 $number = 1;



    echo "<thead>
    <tr>
    <th>Sr.No.</th>
    <th>Name</th>
    <th>Tags</th>
    </tr>
    </thead>
    <tbody>";

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        /*        
        echo "<td>" . $number . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['details'] . "</td>";
        echo "<td>" . $row['incentives'] . "</td>";
        echo "<td><a href='". $row['link'] ."'>"  . $row['link'] . "</a></td>";
        //echo "<td>" . $row['link'] . "</td>";
        echo "</tr>";
        */
        
        echo '<tr>
          <td><strong>'.$number.'</strong></td>
          <td><a style="color:#D2691E;" href="project.php?param='.$row['name'].'">'.$row['name'].'</a></td>      
            <td>'.$row['tags'].'</td>
        </tr>';
        $number = $number + 1;
    }
    echo "</tbody>
    </table>";

echo '<script type="text/javascript">

          $(document).ready(function() {
    $("#example").DataTable( {
        "pagingType": "full_numbers"
    } );
} );

</script>';
	 
    mysqli_close($con);

  ?>

  <!--  <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="cursor:pointer;"><a data-toggle="modal" data-target="#myModal">Default</a></td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
    </tbody>
  </table>
-->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!--
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans1.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans2.jpg" style="width:100%">
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="/w3images/jeans2.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans3.jpg" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans3.jpg" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="/w3images/jeans4.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans4.jpg" style="width:100%">
        <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans1.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
    </div>
  </div>
 -->

  <!-- Subscribe section -->
  <!--
  <div class="w3-container w3-black w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
  </div>
  -->
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer" style="padding-left:10px;margin-left:4vw;">
    <div class="w3-row-padding w3-hide-small">
      <!--<div class="w3-col s4">
        <h4>Questions?</h4>
        <p>Go ahead!</p>
        <form action="sendmail.php" method="post">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>-->
	<h3 style="padding-top:0px;margin-top:0px;"> Contact </h3>
     <div class="w3-col s4 ">
	<br>
        <p style="font-weight:bold;font-size:17px;">Priyanka Bagade</p>
        <p style="color:grey;font-size:15px;">Institute Secretary Academic Affairs (SSS)</p>
        <p style="font-size:13px;"><i class="fa fa-fw fa-envelope"></i> isaa.sss.iitb@gmail.com</p>
        <!--<p> </p>
        <p style="font-weight:bold;font-size:17px;">Kirti Agrawal</p>
        <p style="color:grey;font-size:15px;">Institute Secretary Academic Affairs (Career Cell)</p>
        <p style="font-size:13px;"><i class="fa fa-fw fa-envelope"></i> isaa.careercell.iitb@gmail.com</p>
        <br>
	<a href="https://www.facebook.com/iitb.ugacads"><i class="fa fa-facebook-official w3-hover-opacity w3-large"></i></a>-->
      </div>
	<div class="w3-col s4 ">
        <br>
        <p style="font-weight:bold;font-size:17px;">Kirti Agrawal</p>
        <p style="color:grey;font-size:15px;">Institute Secretary Academic Affairs (Career Cell)</p>
        <p style="font-size:13px;"><i class="fa fa-fw fa-envelope"></i> isaa.careercell.iitb@gmail.com</p>
   <a href="https://www.facebook.com/iitb.ugacads"><i class="fa fa-facebook-official w3-hover-opacity w3-large"></i></a>

      </div>

	<div class="w3-col s4 ">
        <br>
        <p style="font-weight:bold;font-size:17px;">Web Team | UGAC</p>
        <p style="font-size:13px;"><i class="fa fa-fw fa-envelope"></i> web.nom.ug@gmail.com</p>
   
      </div>

     <!--<div class="w3-col s4 w3-justify" style>
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>-->
    </div>
<div class="w3-row-padding w3-hide-large w3-hide-medium">
      <!--<div>
        <h4>Questions?</h4>
        <p>Go ahead!</p>
        <form action="/sendmail.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>-->
	<div>
	<br>
	<h4> Contact </h4>
	<br>
        <p style="font-weight:bold;font-size:15px;">Priyanka Bagade</p>
        <p style="color:grey;font-size:13px;">Institute Secretary Academic Affairs (SSS)</p>
        <p style="font-size:12px;align:left;"> isaa.sss.iitb@gmail.com</p>
   	<br>
        <p style="font-weight:bold;font-size:15px;">Kirti Agrawal</p>
        <p style="color:grey;font-size:13px;">Institute Secretary Academic Affairs (Career Cell)</p>
        <p style="font-size:12px;align:left;"> isaa.careercell.iitb@gmail.com</p>
        <br>
        <p style="font-weight:bold;font-size:15px;">Web Team | UGAC</p>
        <p style="font-size:12px;align:left;">web.nom.ug@gmail.com</p>
	<a href="https://www.facebook.com/iitb.ugacads"><i class="fa fa-facebook-official w3-hover-opacity w3-large"></i></a>
      </div>
</div>
  </footer>

  <div class="w3-black w3-center w3-padding-24" style="padding-left:10px;margin-left:4vw;">Powered by the <a href="https://gymkhana.iitb.ac.in/~ugacademics/app" title="W3.CSS" target="_blank" class="w3-hover-opacity">Undergraduate Academic Council | IIT Bombay</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>

