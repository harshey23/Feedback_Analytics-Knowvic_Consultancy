<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php 
                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                      $databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $company = $_GET['cn'];
                      $ct_id=$_GET['cid'];

                       $new_c_id="";
						  $sql ="SELECT COMPANY_ID FROM COMPANY_T ORDER BY COMPANY_ID";
					      $result = $conn->query($sql);
					      
					     if ($result->num_rows > 0) {
						   
						    while($row = $result->fetch_assoc()) {
						      
						        $new_c_id = $row["COMPANY_ID"];
						    }
						 } else {
						    $new_c_id=0;
						   }
					     $new_c_id = $new_c_id+1;

                      $sql1="INSERT INTO COMPANY_T VALUES('$new_c_id','$ct_id','$company','NULL','NULL')";
                   	  if($conn->query($sql1)){
                   		echo "New company was added.";
                   	}else{
                   		echo "Not added";
                   	}

            ?>

</body>
</html>