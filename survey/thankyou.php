



<?php

  		$host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                      	die("connection failed".$conn->connect_error);
                      }
                      $r1_q = "1";
                      $r1_sql_query = "SELECT CHOICE_ID,COUNT(*) AS COUNTS FROM FB_DETAILS_T WHERE QUESTION_ID='".$r1_q."' GROUP BY(CHOICE_ID)";
                      $r1_sql_query1= "SELECT CHOICE FROM CHOICES_T WHERE QUESTION_ID='".$r1_q."'";
                      $r1_sql_query2= "SELECT DISTINCT(OTHERS) FROM FB_DETAILS_T WHERE OTHERS != 'NULL' AND QUESTION_ID='".$r1_q."' ";
                      $r1_res1 = $conn->query($r1_sql_query1);


                      $r1_arr[]= "Values";
                      $r1_arr1[]="counts";

                      if($r1_res1->num_rows >0){
                        
                        while ($row = $r1_res1->fetch_assoc()) {

                          $r1_arr[]= $row["CHOICE"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                      $r1_res = $conn->query($r1_sql_query);
                      if($r1_res->num_rows >0){
                     		   while ($row = $r1_res->fetch_assoc()) {

                          $r1_arr1[]=(int)$row["COUNTS"];
                        
                      	}
                      }else{

                      	echo "0 results";
                      }

                      $r1_res3 = $conn->query($r1_sql_query2);
                      $r1_num = $r1_res3->num_rows;
                    
                 
                  $r1_arr[]="OTHERS";
                  $r1_arr1[]= (int)$r1_num;

        $r1_a=array_map(null,$r1_arr,$r1_arr1);


 $r1_encoded_data = json_encode($r1_a);

                       $r2_q = "2";
                      $r2_sql_query = "SELECT CHOICE_ID,COUNT(*) AS COUNTS FROM FB_DETAILS_T WHERE QUESTION_ID='".$r2_q."' GROUP BY(CHOICE_ID)";
                      $r2_sql_query1= "SELECT CHOICE FROM CHOICES_T WHERE QUESTION_ID='".$r2_q."'";
                      $r2_sql_query2= "SELECT DISTINCT(OTHERS) FROM FB_DETAILS_T WHERE OTHERS != 'NULL' AND QUESTION_ID='".$r2_q."' ";
                      $r2_res1 = $conn->query($r2_sql_query1);


                      $r2_arr[]= "Values";
                      $r2_arr1[]="counts";

                      if($r2_res1->num_rows >0){
                        
                        while ($row = $r2_res1->fetch_assoc()) {

                          $r2_arr[]= $row["CHOICE"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                      $r2_res = $conn->query($r2_sql_query);
                      if($r2_res->num_rows >0){
                     		   while ($row = $r2_res->fetch_assoc()) {

                          $r2_arr1[]=(int)$row["COUNTS"];
                        
                      	}
                      }else{

                      	echo "0 results";
                      }

                      $r2_res3 = $conn->query($r2_sql_query2);
                      $r2_num = $r2_res3->num_rows;
                    
                 
                  $r2_arr[]="OTHERS";
                  $r2_arr1[]= (int)$r2_num;

        $r2_a=array_map(null,$r2_arr,$r2_arr1);


 $r2_encoded_data = json_encode($r2_a);

                       $r3_q = "3";
                      $r3_sql_query = "SELECT CHOICE_ID,COUNT(*) AS COUNTS FROM FB_DETAILS_T WHERE QUESTION_ID='".$r3_q."' GROUP BY(CHOICE_ID)";
                      $r3_sql_query1= "SELECT CHOICE FROM CHOICES_T WHERE QUESTION_ID='".$r3_q."'";
                      $r3_sql_query2= "SELECT DISTINCT(OTHERS) FROM FB_DETAILS_T WHERE OTHERS != 'NULL' AND QUESTION_ID='".$r3_q."' ";
                      $r3_res1 = $conn->query($r3_sql_query1);


                      $r3_arr[]= "Values";
                      $r3_arr1[]="counts";

                      if($r3_res1->num_rows >0){
                        
                        while ($row = $r3_res1->fetch_assoc()) {

                          $r3_arr[]= $row["CHOICE"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                      $r3_res = $conn->query($r3_sql_query);
                      if($r3_res->num_rows >0){
                     		   while ($row = $r3_res->fetch_assoc()) {

                          $r3_arr1[]=(int)$row["COUNTS"];
                        
                      	}
                      }else{

                      	echo "0 results";
                      }

                      $r3_res3 = $conn->query($r3_sql_query2);
                      $r3_num = $r3_res3->num_rows;
                    
                 
                  $r3_arr[]="OTHERS";
                  $r3_arr1[]= (int)$r3_num;

        $r3_a=array_map(null,$r3_arr,$r3_arr1);


 $r3_encoded_data = json_encode($r3_a);



                      $r4_sql_query = "SELECT ct.choice AS ch, COUNT(*) AS counts FROM fb_details_t AS fbt,choices_t AS ct WHERE ct.choice_id=fbt.choice_id AND fbt.question_id='5' AND (fbt.choice_id BETWEEN 93 AND 129) GROUP BY fbt.choice_id ORDER BY COUNT(*) DESC LIMIT 5";
                     
                      $r4_res = $conn->query($r4_sql_query);


                      $r4_arr[]= "Values";
                      $r4_arr1[]="counts";

                      if($r4_res->num_rows >0){
                        
                        while ($row = $r4_res->fetch_assoc()) {

                          $r4_arr[]= $row["ch"];
                           $r4_arr1[]=(int)$row["counts"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                    
              
        $r4_a=array_map(null,$r4_arr,$r4_arr1);


       $r4_encoded_data = json_encode($r4_a);


       $r5_sql_query = "SELECT ct.choice AS ch, COUNT(*) AS counts FROM fb_details_t AS fbt,choices_t AS ct WHERE ct.choice_id=fbt.choice_id AND fbt.question_id='5' AND (fbt.choice_id BETWEEN 93 AND 129) GROUP BY fbt.choice_id ORDER BY COUNT(*) ASC LIMIT 5";
                     
                      $r5_res = $conn->query($r5_sql_query);


                      $r5_arr[]= "Values";
                      $r5_arr1[]="counts";

                      if($r5_res->num_rows >0){
                        
                        while ($row = $r5_res->fetch_assoc()) {

                          $r5_arr[]= $row["ch"];
                           $r5_arr1[]=(int)$row["counts"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                    
              
        $r5_a=array_map(null,$r5_arr,$r5_arr1);


       $r5_encoded_data = json_encode($r5_a);



                      $r6_sql_query = "SELECT ct.choice AS ch, COUNT(*) AS counts FROM fb_details_t AS fbt,choices_t AS ct WHERE ct.choice_id=fbt.choice_id AND fbt.question_id='5' AND (fbt.choice_id BETWEEN 45 AND 92) GROUP BY fbt.choice_id ORDER BY COUNT(*) DESC LIMIT 5";
                     
                      $r6_res = $conn->query($r6_sql_query);


                      $r6_arr[]= "Values";
                      $r6_arr1[]="counts";

                      if($r6_res->num_rows >0){
                        
                        while ($row = $r6_res->fetch_assoc()) {

                          $r6_arr[]= $row["ch"];
                           $r6_arr1[]=(int)$row["counts"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                    
              
        $r6_a=array_map(null,$r6_arr,$r6_arr1);


       $r6_encoded_data = json_encode($r6_a);



       $r7_sql_query = "SELECT ct.choice AS ch, COUNT(*) AS counts FROM fb_details_t AS fbt,choices_t AS ct WHERE ct.choice_id=fbt.choice_id AND fbt.question_id='5' AND (fbt.choice_id BETWEEN 45 AND 92) GROUP BY fbt.choice_id ORDER BY COUNT(*) ASC LIMIT 5";
                     
                      $r7_res = $conn->query($r7_sql_query);


                      $r7_arr[]= "Values";
                      $r7_arr1[]="counts";

                      if($r7_res->num_rows >0){
                        
                        while ($row = $r7_res->fetch_assoc()) {

                          $r7_arr[]= $row["ch"];
                           $r7_arr1[]=(int)$row["counts"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                    
                    
              
        $r7_a=array_map(null,$r7_arr,$r7_arr1);


       $r7_encoded_data = json_encode($r7_a);

 			 $fbs=0;
 			$fbs_sql ="SELECT FB_ID FROM FEEDBACK_T ORDER BY FB_ID";
          $fbs_result = $conn->query($fbs_sql);
          
         if ($fbs_result->num_rows > 0) {
		   
		    while($row = $fbs_result->fetch_assoc()) {
		      
		        $fbs = $row["FB_ID"];
		    }
		 } else {
		    $fbs=0;
		  }




		   $conn->close();
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Admin | Feedback Management</title>




<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet"> -->



<!-- 
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 -->

<link rel="stylesheet" href="select-css/bootstrap-select.min.css">
<link rel="stylesheet" href="select-css/bootstrap-select.css">

<!-- 
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
	
	function getData_1(str) {
		document.getElementById("data_id_22").innerHTML = "";
		document.getElementById("data_id_33").innerHTML = "";
    if (str == "") {
        document.getElementById("data_id_11").innerHTML = "Please select the any one option";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_id_11").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdata.php?ch="+str,true);
        xmlhttp.send();
    }
}

	function getData_2(str) {
		document.getElementById("data_id_11").innerHTML = "";
		document.getElementById("data_id_33").innerHTML = "";
		
    if (str == "") {
        document.getElementById("data_id_22").innerHTML = "Please select the any one option";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_id_22").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdata.php?ch="+str,true);
        xmlhttp.send();
    }
}

	function getData_3(str) {
		document.getElementById("data_id_11").innerHTML = "";
		document.getElementById("data_id_22").innerHTML = "";
    if (str == "") {
        document.getElementById("data_id_33").innerHTML = "Please select the any one option";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_id_33").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdata.php?ch="+str,true);
        xmlhttp.send();
    }
}

</script>


<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart() 
{
 var r1_data = google.visualization.arrayToDataTable(
 <?php  echo $r1_encoded_data; ?>
 );
 var r1_options = {
  title: "1. Preffered Domains for placement",
  pieHole: 0.4,
 };
 var r1_chart = new google.visualization.PieChart(document.getElementById("piechart1"));
 r1_chart.draw(r1_data, r1_options);

 var r2_data = google.visualization.arrayToDataTable(
 <?php  echo $r2_encoded_data; ?>
 );
 var r2_options = {
  title: "2. Preffered Technologies for placement",
  pieHole: 0.4,
 };
 var r2_chart = new google.visualization.PieChart(document.getElementById("piechart2"));
 r2_chart.draw(r2_data, r2_options);

 var r3_data = google.visualization.arrayToDataTable(
 <?php  echo $r3_encoded_data; ?>
 );
 var r3_options = {
  title: "3. Preffered Soft skills for placement",
  pieHole: 0.4,
 };
 var r3_chart = new google.visualization.PieChart(document.getElementById("piechart3"));
 r3_chart.draw(r3_data, r3_options);

 var r4_data = google.visualization.arrayToDataTable(
 <?php  echo $r4_encoded_data; ?>
 );
 var r4_options = {
  title: "Top 5 subjects which are most relevant to current industry trend:",
  pieHole: 0.4,
 };

 var r4_chart = new google.visualization.PieChart(document.getElementById("piechart4"));
 r4_chart.draw(r4_data, r4_options);


 var r5_data = google.visualization.arrayToDataTable(
 <?php  echo $r5_encoded_data; ?>
 );
 var r5_options = {
  title: "Least 5 subjects which are not relevant to current industry trend:",
  pieHole: 0.4,
 };

 var r5_chart = new google.visualization.PieChart(document.getElementById("piechart5"));
 r5_chart.draw(r5_data, r5_options);


 var r6_data = google.visualization.arrayToDataTable(
 <?php  echo $r6_encoded_data; ?>
 );
 var r6_options = {
  title: "Top 5 subjects which are most relevant to current industry trend:",
  pieHole: 0.4,
 };
 var r6_chart = new google.visualization.PieChart(document.getElementById("piechart6"));
 r6_chart.draw(r6_data, r6_options);

 var r7_data = google.visualization.arrayToDataTable(
 <?php  echo $r7_encoded_data; ?>
 );
 var r7_options = {
  title: "Least 5 subjects which are not relevant to current industry trend:",
  pieHole: 0.4,
 };

 var r7_chart = new google.visualization.PieChart(document.getElementById("piechart7"));
 r7_chart.draw(r7_data, r7_options);
}

</script>
<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
/* font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;*/
 background-color:#FAFAFA;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#585858;
}
#wrapper h1 p
{
 font-size:18px;
}
#employee_piechart
{
 padding:0px;
 width:600px;
 height:400px;
 margin-left:190px;
}

#bttn{
  margin-bottom: 10px;
}
</style>
<style type="text/css">
  #h1{
      
      text-align: center;
       color: black;
       margin-top: 15px;
      
    }
  .page-header img {
    float: left;
  
}

.page-header h1 {
  font-size: 26px;
  position: relative;
  margin-top: 0px;

 body{
    font-family: 'Quicksand', sans-serif;
  } 
  
}
</style>

</head>
<body>
	<div class="page-header" style="height: 80px; margin-top: 00px;padding-top: 10px; box-shadow: 0px 2px 10px #888888;"><img src="images/kvlogo.png" width="70" height="60" style="margin-left: 15px;"> 

      <h1 id="h1" style=""> Industrial Assessment for fresher's and Academia - Report</h1>
  </div>
		
		
    <div id="piechart1" style=" width: 100%; height: 400px;">
      
    </div>
      </div> <!-- .content-wrapper -->
    <div id="piechart2" style=" width: 100%; height: 400px;">
      
    </div>
      </div> <!-- .content-wrapper -->
    <div id="piechart3" style=" width: 100%; height: 400px;">
      
    </div>



    <div style="float: left; padding-top: 20px;">
    <h3>1. Computer Science & Information Science</h3>
    <div id="piechart4" style="padding-left: 320px; width: auto; height: 300px; float: left;">
      
    </div>
    <div id="piechart5" style="width: auto; height: 300px;  float: left; ">
      
    </div>
    </div>
    <div style="float: left; padding-top: 20px;">
    <h3>2. Telecommunication $ Electronics</h3>
    <div id="piechart6" style="padding-left: 320px; width: auto; height: 300px; float: left;">
      
    </div>
    <div id="piechart7" style="width: auto; height: 300px;  float: left; ">
      
    </div>
    </div>

<hr>

<div class="container">
  <div id="get_report" style="padding-top: 20px; padding-left: 250px; float: left;">  
    <div id="table_wrapper1" style=" width: 220px; float: left;">
      <h3>Preffered Domains for placement</h3>
      <table id="list" class="table table-bordered table-inverse table-responsive">
        
        <thead>
        <tr>
          <th>Sl No.</th>
          <th>Domain</th>
          <th>No of Surveys</th>
         
        </tr>
        </thead>
        <tbody>
        <?php
           $host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }
                        $r1_sql_query = "SELECT CHOICE_ID,COUNT(*) AS COUNTS ,(COUNT(*) / (SELECT COUNT(*) FROM FB_DETAILS_T WHERE QUESTION_ID='1')) * 100 AS 'Percentage' FROM FB_DETAILS_T WHERE QUESTION_ID='1' GROUP BY(CHOICE_ID)";
                      $r1_res = $conn->query($r1_sql_query);

                      $r1_sql_query1= "SELECT CHOICE FROM CHOICES_T WHERE QUESTION_ID='1'";
                      $r1_res1 = $conn->query($r1_sql_query1);

                       $r1_sql_query2= "SELECT DISTINCT(OTHERS) FROM FB_DETAILS_T WHERE OTHERS != 'NULL' AND QUESTION_ID='1' ";
                       $r1_res2 = $conn->query($r1_sql_query2);
                        $r1_num = $r1_res2->num_rows;

                      $r1_choies_1[]="CHOICES";
                      if($r1_res1->num_rows >0){
                        
                        while ($row = $r1_res1->fetch_assoc()) {

                          $r1_choies_1[]= $row["CHOICE"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                       $r1_choies_1[]="OTHERS";
                     
         $r1_i=1;
         if($r1_res->num_rows >0){
                        
                        while ($row = $r1_res->fetch_assoc()) {
                          echo "<tr>";
                          echo "<th>".$r1_i."</th>" ;
                          echo "<td>".$r1_choies_1[$r1_i++]."</td>";
                          echo "<td>".$row["COUNTS"]."</td>";
                          
                          echo "</tr>";
                        }

                      }else{

                        echo "0 results";
                      }
                      if($r1_num>0){
                            echo "<tr>";
                          echo "<th>".$r1_i."</th>" ;
                          echo "<td>".$r1_choies_1[$r1_i++]."</td>";
                          echo "<td>".$r1_num."</td>";
                          
                          echo "</tr>";
                      }
                       $conn->close();
        ?>
        
          
        </tbody>
         </table>
        
         
    </div>
    <div id="table_wrapper2" style=" width: 290px; padding-left: 80px;float: left;">
      <h3>Preffered Technologies for placement</h3>
      <table class="table table-bordered table-inverse table-responsive">
        
        <thead>
        <tr>
          <th>Sl No.</th>
          <th>Technology</th>
          <th>No of Surveys</th>
          
        </tr>
        </thead>
        <tbody>
        <?php
           $host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }
                        $r2_sql_query = "SELECT CHOICE_ID,COUNT(*) AS COUNTS ,(COUNT(*) / (SELECT COUNT(*) FROM FB_DETAILS_T WHERE QUESTION_ID='2')) * 100 AS 'Percentage' FROM FB_DETAILS_T WHERE QUESTION_ID='2' GROUP BY(CHOICE_ID)";
                      $r2_res = $conn->query($r2_sql_query);

                      $r2_sql_query1= "SELECT CHOICE FROM CHOICES_T WHERE QUESTION_ID='2'";
                      $r2_res1 = $conn->query($r2_sql_query1);

                       $r2_sql_query2= "SELECT DISTINCT(OTHERS) FROM FB_DETAILS_T WHERE OTHERS != 'NULL' AND QUESTION_ID='2' ";
                       $r2_res2 = $conn->query($r2_sql_query2);
                        $r2_num = $r2_res2->num_rows;

                      $r2_choices_2[]="CHOICES";
                      if($r2_res1->num_rows >0){
                        
                        while ($row = $r2_res1->fetch_assoc()) {

                          $r2_choices_2[]= $row["CHOICE"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                       $r2_choices_2[]="OTHERS";
                     
         $r2_i=1;
         if($r2_res->num_rows >0){
                        
                        while ($row = $r2_res->fetch_assoc()) {
                          echo "<tr>";
                          echo "<th>".$r2_i."</th>" ;
                          echo "<td>".$r2_choices_2[$r2_i++]."</td>";
                          echo "<td>".$row["COUNTS"]."</td>";
                          
                          echo "</tr>";
                        }

                      }else{

                        echo "0 results";
                      }
                      if($r2_num>0){
                            echo "<tr>";
                          echo "<th>".$r2_i."</th>" ;
                          echo "<td>".$r2_choices_2[$r2_i++]."</td>";
                          echo "<td>".$r2_num."</td>";
                          
                          echo "</tr>";
                      }

        ?>
        
          
        </tbody>
         </table>
         
    </div>

    <div id="table_wrapper3" style=" width: 280px; padding-left: 80px;float: left;">
      <h3>Preffered Soft skills for placement</h3>
      <table class="table table-bordered table-inverse table-responsive">
        
        <thead>
        <tr>
          <th>Sl No.</th>
          <th>Soft Skills</th>
          <th>No of Surveys</th>
         
        </tr>
        </thead>
        <tbody>
        <?php
           $host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }
                        $r3_sql_query = "SELECT CHOICE_ID,COUNT(*) AS COUNTS ,(COUNT(*) / (SELECT COUNT(*) FROM FB_DETAILS_T WHERE QUESTION_ID='3')) * 100 AS 'Percentage' FROM FB_DETAILS_T WHERE QUESTION_ID='3' GROUP BY(CHOICE_ID)";
                      $r3_res = $conn->query($r3_sql_query);

                      $r3_sql_query1= "SELECT CHOICE FROM CHOICES_T WHERE QUESTION_ID='3'";
                      $r3_res1 = $conn->query($r3_sql_query1);

                       $r3_sql_query2= "SELECT DISTINCT(OTHERS) FROM FB_DETAILS_T WHERE OTHERS != 'NULL' AND QUESTION_ID='3' ";
                       $r3_res2 = $conn->query($r3_sql_query2);
                        $r3_num = $r3_res2->num_rows;

                      $r3_choies_3[]="CHOICES";
                      if($r3_res1->num_rows >0){
                        
                        while ($row = $r3_res1->fetch_assoc()) {

                          $r3_choies_3[]= $row["CHOICE"];
                        
                        }
                      }else{

                        echo "0 results";
                      }
                       $r3_choies_3[]="OTHERS";
                     
         $r3_i=1;
         if($r3_res->num_rows >0){
                        
                        while ($row = $r3_res->fetch_assoc()) {
                          echo "<tr>";
                          echo "<th>".$r3_i."</th>" ;
                          echo "<td>".$r3_choies_3[$r3_i++]."</td>";
                          echo "<td>".$row["COUNTS"]."</td>";
                          
                          echo "</tr>";
                        }

                      }else{

                        echo "0 results";
                      }
                      if($r3_num>0){
                            echo "<tr>";
                          echo "<th>".$r3_i."</th>" ;
                          echo "<td>".$r3_choies_3[$r3_i++]."</td>";
                          echo "<td>".$r3_num."</td>";
                          
                          echo "</tr>";
                      }
                       $conn->close();
        ?>
        
          
        </tbody>
        </table>
        
    </div>
  </div>

</div><!-- end of container class 1 -->
<hr>

<h2 class="center" style="padding-left: 60px; padding-top: 30px;"><strong>Specific Report</strong></h2>

<div class="container center" style="width: 50%;padding-top: 40px;">
    <div class="row">

      <div>      
             <div>
                <h4 class="col-lg-4">1. Please select the Domain:</h4>
            </div>   
            <form>
            <div>
               <select name="data_id_1" id="data_id_1" class="selectpicker col-lg-4" data-style="btn-primary" title="Choose one of the following..." style="color:white;" onchange="getData_1(this.value)">
              
                   <?php

                    $host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT CHOICE_ID,CHOICE FROM CHOICES_T WHERE QUESTION_ID=1";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["CHOICE_ID"].  ">" .$row["CHOICE"]. "</option>";
                
                        }
                      }
                   ?> 
            </select>
            </div>
            </form>
             
      </div> 
    </div>

<div id="data_id_11" style="padding-left: 100px;"><b></b>
  
</div>
              
<div class="row" style="padding-top: 20px;">

      <div>      
             <div>
                <h4 class="col-lg-4">2. Please select the Technology:</h4>
            </div>   
            <form>
            <div>
               <select name="tech" id="data_id_2" class="selectpicker col-lg-4" data-style="btn-primary" title="Choose one of the following..." style="color:white;" onchange="getData_1(this.value)">
              
                   <?php

                    $host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT CHOICE_ID,CHOICE FROM CHOICES_T WHERE QUESTION_ID=2";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["CHOICE_ID"].  ">" .$row["CHOICE"]. "</option>";
                
                        }
                      }
                   ?> 
            </select>
            </div>
            </form>
             
      </div> 
    </div>
    <div id="data_id_22" style="padding-left: 100px;"><b> </b></div>

 
  <div class="row" style="padding-top: 5px;">

      <div>      
             <div>
                <h4 class="col-lg-4">3. Please select the Soft skill:</h4>
            </div>   

            <div>
               <select name="softskill" id="data_id_3" class="selectpicker col-lg-4" data-style="btn-primary" title="Choose one of the following..." style="color:white; " onchange="getData_3(this.value)">
              
                   <?php

                     $host = "localhost:3306"; 
$databaseUser = "knowvic_knowvic";
$databasePassword = "knowVic!@#098";
$databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT CHOICE_ID,CHOICE FROM CHOICES_T WHERE QUESTION_ID=3";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["CHOICE_ID"].  ">" .$row["CHOICE"]. "</option>";
                
                        }
                      }
                   ?> 
            </select>
            </div>
            
      </div> 
    </div>

<div id="data_id_33" style="padding-left: 100px;"><b></b></div>

</div>

<hr>



	</main> <!-- .cd-main-content -->
	   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->



    <!-- Latest compiled and minified CSS -->


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>



<script src="select-js/bootstrap-select.min.js"></script>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script type="text/javascript">
$(document).ready(function() {
  $("#btnExport1").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper1');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'report_table1_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});

$(document).ready(function() {
  $("#btnExport2").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper2');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'report_table2_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});

$(document).ready(function() {
  $("#btnExport3").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper3');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'report_table3_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});


$(document).ready(function() {
  $("#exportGetdata1").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('data_id_11');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'domain_companies' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});

$(document).ready(function() {
  $("#exportGetdata2").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('data_id_22');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'tech_companies' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});

$(document).ready(function() {
  $("#exportGetdata3").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('data_id_33');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'softskill_companies' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});

</script>

<script type="text/javascript">
	function addcompany(){

		var cn_name= document.getElementById('cn_name').value;
	
		  var doc = document.getElementById("ct_id");
        var ctid= doc.options[doc.selectedIndex].value;
		
		  if (cn_name == "") {
        document.getElementById("successmsg").innerHTML = "Please type the company name";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("successmsg").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","addCompany.php?cn="+cn_name+"&cid="+ctid,true);
        xmlhttp.send();
    }
	}
</script>

<!-- smooth scrolling script -->
<script>
$(function () {

$('a[href^="#"]').click(function(event) {
var id = $(this).attr("href");
var offset = 20;
var target = $(id).offset().top - offset;

$('html, body').animate({scrollTop:target}, 1500);
event.preventDefault();
});

});
</script>
<!-- end smooth scrolling script -->

</body>
</html>