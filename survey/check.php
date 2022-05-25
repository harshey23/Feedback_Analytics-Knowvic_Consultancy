<?php
      
        session_start();

                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                      $databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

      
      $user = $_POST['userid'];
      $password = $_POST['password'];

       $sql_query = "SELECT *  FROM ADMIN_T WHERE USER_ID='".$user."' AND PASSWORD='".$password."'";

      $res = $conn->query($sql_query);
      $num = $res->num_rows;

     if($num>0){
      $_SESSION['username'] = $_POST['userid'];
      header('Location:adminMgmt.php');

       }else if($num <= 0) {
        // Jump to login page
        echo '<script> alert("Invalid Login Credentials !"); window.location.href = "index.php";</script>';
       }

?>