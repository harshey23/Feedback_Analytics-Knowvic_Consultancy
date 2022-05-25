<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>

</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark" style="color: #2486b6;"></i>
		<p class="main-content__body" data-lead-id="main-content-body" style="margin-bottom: 20px; font-size: 150%">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today.</p>

		<hr>
		<a href="../feedback/thankyou.php" class="btn btn-primary" style="margin-top: 20px; color: white;">View Report</a>
	</div>


	<footer class="site-footer" id="footer">
		
	</footer>
</body>
</html>

<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>


<?php


		$host = "localhost:3306"; 
		$databaseUser = "knowvic_knowvic";
		$databasePassword = "knowVic!@#098";
		$databaseName = "knowvic_feedback_info";

	      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
	      if($conn->connect_error){
	        die("connection failed".$conn->connect_error);
	      }


		$Name = $_POST['name'];
		$Email = $_POST['email'];
		$contact = $_POST['contact'];
		$company_id = $_POST['company'];
		$designation = $_POST['designation'];

		if(empty($Name)){
		  		$Name ="NULL";
		}
		if(empty($Email)){
		  		$Email ="NULL";
		}
		if(empty($contact)){
		  		$contact ="NULL";
		}
		if(empty($designation)){
		  		$designation ="NULL";
		}

	    $ch1 = $_POST['ch1'];
	    $ch1_others = $_POST['ch1_others'];
	    $ch2 = $_POST['ch2'];
	    $ch2_others = $_POST['ch2_others'];
	    $ch3 = $_POST['ch3'];
	    $ch3_others = $_POST['ch3_others'];
	    $ch4 = $_POST['ch4'];
	    $ch4_others = $_POST['ch4_others'];
	    $ch5 = $_POST['ch5'];

	    $ans6 = $_POST['ans6'];

	    
		 
		  $new_user_id="";
		  $sql ="SELECT USER_ID FROM USER_T ORDER BY USER_ID";
          $result = $conn->query($sql);
          
         if ($result->num_rows > 0) {
		   
		    while($row = $result->fetch_assoc()) {
		      
		        $new_user_id = $row["USER_ID"];
		    }
		 } else {
		    $new_user_id=0;
		   }
         $new_user_id = $new_user_id+1;
		 
		 $date = date('d-m-Y');
		 

		 $new_fb_id="";
		  $sql ="SELECT FB_ID FROM FEEDBACK_T ORDER BY FB_ID";
          $result = $conn->query($sql);
          
         if ($result->num_rows > 0) {
		   
		    while($row = $result->fetch_assoc()) {
		      
		        $new_fb_id = $row["FB_ID"];
		    }
		 } else {
		    $new_fb_id=0;
		  }
         $new_fb_id = $new_fb_id+1;
		 

         $sql_query = "INSERT INTO USER_T VALUES ('$new_user_id','$company_id','$Name','$designation','$Email','$contact')";

	      $conn->query($sql_query);

		  $sql_query = "INSERT INTO FEEDBACK_T VALUES ('$new_fb_id','$company_id','$new_user_id','$date')";

		  $conn->query($sql_query);

		   // question 1 handling begins....//
		    $nch1 = count($ch1);
		  	if(empty($ch1_others)){
		  		$ch1_others ="NULL";
		    }
		    for($i=0; $i < $nch1; $i++)
		    {
		      // echo($ch1[$i] . " <br> ");
		      $sql = "INSERT INTO FB_DETAILS_T VALUES ('$new_fb_id','1','$ch1[$i]','$ch1_others')";
		      $conn->query($sql);
		    }
		     // question 1 handling ends. //
		     // question 2 handling begins....//
		    $nch2 = count($ch2);
		  	if(empty($ch2_others)){
		  		$ch2_others ="NULL";
		    }
		    for($i=0; $i < $nch2; $i++)
		    {
		      $sql = "INSERT INTO FB_DETAILS_T VALUES ('$new_fb_id','2','$ch2[$i]','$ch2_others')";
		      $conn->query($sql);
		    }
		    // question 2 handling ends. //
		    // question 3 handling begins....//

		    $nch3 = count($ch3);
		    if(empty($ch3_others)){
		  		$ch3_others ="NULL";
		    }
		    for($i=0; $i < $nch3; $i++)
		    {
		      
		      $sql = "INSERT INTO FB_DETAILS_T VALUES ('$new_fb_id','3','$ch3[$i]','$ch3_others')";
		      $conn->query($sql);
		    }
		// question 3 handling ends. //    
        // question 4 handling begins....//
		    
		    $nch4 = count($ch4);
		  	if(empty($ch4_others)){
		  		$ch4_others ="NULL";
		    }
		    for($i=0; $i < $nch4; $i++)
		    {
		      $sql = "INSERT INTO FB_DETAILS_T VALUES ('$new_fb_id','4','$ch4[$i]','$ch4_others')";
		      $conn->query($sql);
		    }

		// question 4 handling ends. //    
	    // question 5 handling begins....//

		    $nch5 = count($ch5);

		    for($i=0; $i < $nch5; $i++)
		    {
		      $sql = "INSERT INTO FB_DETAILS_T VALUES ('$new_fb_id','5','$ch5[$i]','NULL')";
		      $conn->query($sql);
		    }
	    // question 5 handling ends. //

		// question 6 handling begins....//

		    $sql = "INSERT INTO ANSWERS_T VALUES ('$new_fb_id','6','$ans6')";
		    $conn->query($sql);

		// question 6 handling ends. //   


         $conn->close();

?>
<script src="css/bootstrap.css"></script>

