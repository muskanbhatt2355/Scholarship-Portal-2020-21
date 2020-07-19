<?php
session_start();
$pid=$_GET['param'];


/*
session_start();
require_once("functions.php");
if (isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(ldap_auth($username,$password)){
	$_SESSION['ldap_id']=$username;
	header("location: apply.php");
}
}

	*/

?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>Project Information | SURP</title>

  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>

    <link rel="stylesheet" href="css/style_apply.css">

    <!--<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>-->
	<script src="extra/js/jquery.js" type="text/javascript"></script>
    <script src="extra/js/i18n/grid.locale-en.js" type="text/javascript"></script>
    <script src="extra/js/jquery.jqGrid.min.js" type="text/javascript"></script>
    <script src="extra/js/jquery-ui-custom.min.js" type="text/javascript"></script>
   
	<!--<script src="js/jquery-ui.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="extra/js/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="extra/css/jquery-ui-1.8.18.custom.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="extra/css/ui.jqgrid.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="extra/css/ui.multiselect.css" />
    <link rel="stylesheet" href="extra/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.ui-jqgrid tr.jqgrow td {
    white-space: normal !important;
}
</style>
    <script>
		var count_1=0;
		var count_2=0;
		var count_3=0;
		// var count_4=0;
		var err=0;
		
		var preference_1="-1"
		var preference_2="-1";
		var preference_3="-1";
		var preference_4="-1";
		</script>
		<script >

    function mySubmit(){
    	//alert("tp");
			$(".preference").each(function(i){
				val = $(this).val();
						
				if (val==1){
					var temp1=$(this).attr('name');
					if(preference_1 == "-1"){
						preference_1=temp1;
						count_1+=1;
					}
					else if(preference_1!=temp1)
						err=1;
				}
				else if (val==2){
					var temp2=$(this).attr('name');
					if(preference_2 == "-1"){
						preference_2=temp2;
						count_2+=1;
					}
					else if(preference_2!=temp2)
						err=2;
				}
				else if (val==3){
					var temp3=$(this).attr('name');
					if(preference_3 == "-1"){
						preference_3=temp3;
						count_3+=1;
					}
					else if(preference_3!=temp3)
						err=3;
				}
				// else if (val==4){
				// 	var temp4=$(this).attr('name');
				// 	if(preference_4 == "-1"){
				// 		preference_4=temp4;
				// 		count_4+=1;
				// 	}
				// 	else if(preference_4!=temp4)
				// 		err=4;
				// }

			});

			if(err){
				alert(err+" is selected more than once. Please fill all the choices again.");
				location.reload(true);
			}			
				
		}
		
    $(document).ready(function(){
		$("a#single_image").fancybox();
		$("a#single_image2").fancybox();

		var department = 'CIVIL';
		var username = '150040096';
			$(table1).hide();
		$("#type1").click(function(){
			
			$(table1).show();
		});	
		

		$("#check").click(function(){	
		mySubmit();
		// if (count_1<=0){
		//  alert("Please choose  Preference 1 ");
		//  err=1;
		 
		// }
		// else if (count_2<=0 && count_3>=1){
		// 	alert("Preference 2 not specified");
		// 	err=1;
		// }
		// else if (count_3<=0 && count_4>=1){
		// 	alert("Preference 3 not specified");
		// 	err=1;
		// }
			
	 if (err==0){
		//alert(preference_1);
		 $.ajax({
			type: 'POST',
			url: 'savedata.php',
			data : "user="+username+"&preference_1="+preference_1+"&preference_2="+preference_2+"&preference_3="+preference_3,
			success:function(){
				alert("Your preferences have been saved. You may check by pressing 'My preferences'. Note : If you leave the project in middle for another internship then you can't write that internship project in your resume either.");
				location.reload(true);
				},
            		error: function(jqXHR, textStatus, thrownError) {
				alert("err "+thrownError+" "+textStatus+" "+jqXHR.responseText);
			      }
			});
		 }
		//return err; 
			
		});
		
		
		
		/*jQuery("#toolbar").jqGrid({
			url:'projects.php?department='+department,
			datatype: "json",
			height: 455,
			width: 700,
			autowidth: true,
			colNames:['Prof. Name','Project Title ', 'Project Description','Eligibility Criteria','Preference'],
			colModel:[
					
					{name:'prof_name',index:'prof_name', width:35, sorttype:'text'},
					{name:'title',index:'title', width:50, sorttype: 'text'},
					{name:'description',index:'description', width:100},
					{name:'eligibility',index:'eligibility', width:100},
					{name:'apply',index:'apply', width:25,formatter:format}
				],
			rowNum:70,
			rownumbers:true,
			rowTotal: 2000,
			rowList : [20,30,70],
			loadonce:true,
			mtype: "GET",
			ignoreCase:true,
			gridview: true,
			pager: '#ptoolbar',
			sortname: 'prof_name',
			viewrecords: true,
			sortorder: "asc",
			onSelectRow: function(id){
		$.ajax({
		  url: 'expanded.php?id='+id,
		  success: function(data) {
		   
		    $("#data").html(data);
		    $("#hidden-href").hide();
		    
		    $("a#single_image").trigger('click');
		    
		  }
		});
			},
					
			
				caption: ""	
		});

		jQuery("#toolbar").jqGrid('navGrid','#ptoolbar',{del:false,add:false,edit:false,search:false});
		jQuery("#toolbar").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false});

		*/
		$("#choose-dep").change(function(){
			//alert("clicked");
			mySubmit();
			department=$(this).val();
			//jQuery("#toolbar").jqGrid().setGridParam({url : 'projects.php?department='+department}).trigger("reloadGrid");
			gridSearch(department);
			
		
			});



		/*jQuery("#toolbar2").jqGrid({
			url:'projects2.php?department='+department,
			datatype: "json",
			height: 455,
			width: 700,
			autowidth: true,
			colNames:['Prof. Name','Interests/Tentative Problems','Eligibility Criteria','Preference'],
			colModel:[
					
					{name:'prof_name',index:'prof_name', width:35, sorttype:'text'},
					{name:'interests',index:'interests', width:100},
					{name:'eligibility',index:'eligibility', width:100},
					{name:'apply',index:'apply', width:25,formatter:format}
				],
			rowNum:70,
			rownumbers:true,
			rowTotal: 2000,
			rowList : [20,30,70],
			loadonce:true,
			mtype: "GET",
			ignoreCase:true,
			gridview: true,
			pager: '#ptoolbar2',
			sortname: 'prof_name',
			viewrecords: true,
			sortorder: "asc",
			onSelectRow: function(id){
		$.ajax({
		  url: 'expanded.php?id='+id,
		  success: function(data) {
		   
		    $("#data2").html(data);
		    $("#hidden-href2").hide();
		    
		    $("a#single_image2").trigger('click');
		    
		  }
		});
			},
					
			
			caption: "Type 2 Projects (Come up with your own idea)"	
		});

		jQuery("#toolbar2").jqGrid('navGrid','#ptoolbar2',{del:false,add:false,edit:false,search:false});
		jQuery("#toolbar2").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false});

	*/
		$("#choose-dep2").change(function(){
			mySubmit();
			department=$(this).val();
			//jQuery("#toolbar").jqGrid().setGridParam({url : 'projects.php?department='+department}).trigger("reloadGrid");
			gridSearch2(department);
			});

	});

	function gridSearch(department)
    {
	    $('#toolbar').jqGrid('GridUnload');	
        
        $('#toolbar').trigger("reloadGrid");
       jQuery("#toolbar").jqGrid({
			url:'projects.php?department='+department,
			datatype: "json",
			height: 455,
			width: 700,
			autowidth: true,
			colNames:['Prof. Name','Project Title ', 'Preference'],
			colModel:[
					
					{name:'prof_name',index:'prof_name', width:35, sorttype:'text'},
					{name:'title',index:'title', width:50, sorttype: 'text'},
					{name:'apply',index:'apply', width:25,formatter:format}
				],
			rowNum:70,
			rownumbers:true,
			rowTotal: 2000,
			rowList : [20,30,70],
			loadonce:true,
			mtype: "GET",
			ignoreCase:true,
			gridview: true,
			pager: '#ptoolbar',
			sortname: 'prof_name',
			viewrecords: true,
			sortorder: "asc",
			onSelectRow: function(id){
		$.ajax({
			  url: 'expanded.php?id='+id,
			  success: function(data) {

			    
			    $("#data").html(data);
			    $("#hidden-href").hide();
			    
			    $("a#single_image").trigger('click');
			    
			  }
			});
				},
						
				
				caption: "Click on the project for details "	
			});

			$("#toolbar").trigger("reloadGrid");
			jQuery("#toolbar").jqGrid('navGrid','#ptoolbar2',{del:false,add:false,edit:false,search:false});
			jQuery("#toolbar").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false});
			 
 
    }


	function format(cellvalue, options, rowObject){
		rowid=options['rowId'];
		if(cellvalue=='1'){
		return "<select name='projectid-"+rowid+"' class='preference'><option value='0' ></option><option value='1' selected='selected'>1</option><option value='2'>2</option><option value='3'>3</option></select>";
		}
		else if(cellvalue=='2'){
			return "<select name='projectid-"+rowid+"' class='preference'><option value='0' ></option><option value='1' >1</option><option value='2' selected='selected'>2</option><option value='3'>3</option></select>";
		}
		else if(cellvalue=='3'){
			return "<select name='projectid-"+rowid+"' class='preference'><option value='0' ></option><option value='1'>1</option><option value='2'>2</option><option value='3'  selected='selected'>3</option></select>";
		}
		// else if(cellvalue=='4'){
		// 	return "<select name='projectid-"+rowid+"' class='preference'><option value='0' ></option><option value='1'>1</option><option value='2'>2</option><option value='3' >3</option><option value='4' selected='selected'>4</option></select>";
		// }
			
		else
		{
			return "<select name='projectid-"+rowid+"' class='preference'><option value='0' selected='selected' ></option><option value='1'>1</option><option value='2'>2</option><option value='3'  >3</option></select>";
		};
	}
	
    </script>

</head>





<body id="body1">
  <div class="page-header">
    <h1>Scholarship Information | <a href="template_edited.php" style="color:#ff9933;">Scholarship Portal</a><small>				2020-21</small></h1>
</div></div>
<!--<table align="center" border="solid 1px">
<tr>
	<th>Preference ID</th>
	<th>Name of the Professor</th>
	<th>Name of the Department</th>
	<th>Title of Project</th>
	<th>SOP</th>
</tr>
-->


<?php 
//echo $pid;
/*
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password,'scholarship_portal1');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
*/
//$select = 'SELECT *';
//$from = ' FROM scholarship_portal2020_db';
$con = mysqli_connect ('10.105.177.5', 'ugacademics', 'ug_acads', 'ugacademics') or die ('Error connecting to mysqli sever');
$query = "SELECT * FROM scholarship_portal2020_db WHERE name='$pid'";
$result = mysqli_query($con, $query) or die ('Error connecting to database');
//echo mysqli_num_rows($result);  
while($row = mysqli_fetch_array($result)){
    /*$id = $row['Project_ID'];
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
*/
echo "<div class='container' style='overflow:auto;'>";
echo "<h1 style='font-size:30px;'>Name:</h1><h4 style='color:#75a3a3'>".$row['name']."</h4>";
if($row['details']!=''){
	echo "<h1 style='font-size:30px;'>Details:</h1><h4 style='color:#75a3a3'>".$row['details']."</h4>";
}
else{
	echo "<h1 style='font-size:30px;'>Details:</h1><h4 style='color:#75a3a3'>Refer to the website for further details.</h4>";
}

if($row['incentives']!=''){
	echo "<h1 style='font-size:30px;'>Incentives:</h1><h4 style='color:#75a3a3'>".$row['incentives']."</h4>";
}
else{
	echo "<h1 style='font-size:30px;'>Incentives:</h1><h4 style='color:#75a3a3'>Refer to the website for further details.</h4>";
}

if($row['link']!=''){
	echo "<h1 style='font-size:30px;'>Link:</h1><h4 style='color:#75a3a3'><a href='".$row['link']."'>".$row['link']."</a></h4>";
	if($row['link2']!=''){
		echo "<h4 style='color:#75a3a3'><a href='".$row['link2']."'>".$row['link2']."</a></h4>";
	}
	if($row['link3']!=''){
		echo "<h4 style='color:#75a3a3'><a href='".$row['link3']."'>".$row['link3']."</a></h4>";
	}
}
if($row['procedure']!=''){
	echo "<h1 style='font-size:30px;'>Procedure:</h1><h4 style='color:#75a3a3'>".$row['proc']."</h4>";
}
//echo "<h1 style='color:#428bca;'>Prerequisites</h1><h4>".$other_prereq."</h4>";

//echo "<h1 style='color:#428bca;'>Selection Process</h1><h4>".$selection."</h4>";
/*echo "<h1 style='color:#428bca;'>Other Information</h1>
		<ul>".
			"<li>Minimum Year of Study - ".$year."</li>".
			"<li>CPI Eligibility - ".$eligibility."</li>".
			"<li>Duration - ".$duration."</li>".
			"<li>Number of Students - ".$students_req."</li>"."</ul";*/	

  }

?>  
  <form>
  <input type="button" class="btn btn-warning"  value="Go back!" style="margin-top:50px;" onclick="history.back()">
</form>   
  
 	
 </header><!-- /header -->     
			 
		
    
</body>
</html>

