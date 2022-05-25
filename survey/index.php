<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>

<!-- Latest compiled and minified JavaScript -->
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Quicksand" rel="stylesheet">


<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">


<link rel="stylesheet" href="select-css/bootstrap-select.min.css">
<link rel="stylesheet" href="select-css/bootstrap-select.css">


<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- <script src="select-js/bootstrap-select.min.js"></script> -->


</head>

  <style type="text/css">
  body{
    font-family: 'Quicksand', sans-serif;
  }
    
    #h4{
      
      line-height: 175%;
    }
    .input-group-lg{
      padding-top: 7px;
    }
    #h1{
      
      text-align: center;
       color: #3e8246;
      margin-top: 30px;
    }
    #basic-addon2{
      top:0px;
    }
    #col{
      padding-top:10px;
    }
    
    .input-group-lg{
      width: 550px;
    } 

   #admin_btn{
    z-index: 0;
    margin: 3px;
    padding-top: 0px;

   }
   #popup_login{
    float: center;
   }
.page-header img {
  float: left;
  
}

.page-header h1 {
  font-size: 46px;
  position: relative;
  margin-top: 0px;

  
  
}

  </style>

  

<body>

    
  


  <!-- <h3>Give us your Feedback. It'll help us improve !<span class="label label-default">New</span></h3> -->
  <div class="page-header" style="height: 135px; margin-top: 00px;padding-top: 10px; box-shadow: 0px 2px 10px #888888;"><img src="images/kvlogo.png" width="150" height="120" style="margin-left: 15px;"> 

      <h1 id="h1" style=""> Industrial Assessment for fresher's and Academia</h1>
  </div>
  
  <!-- <h1>Give us your Feedback. It'll help us improve !</h1> -->
  
<div  class="container" id= con style="margin-bottom: 30px; margin-top: 50px;">

    <div class="modal fade" id="popupWindow">
      <div class="modal-dialog">
         <div class="modal-content">
            
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title" style="text-align: center;">Admin Login</h3>
            </div>
                
         <form role="form" action="check.php" method="POST">
             <div class="modal-body">
             
               <div class="row">
                <div class="form-group col-lg-6 col-lg-offset-3">
                  <input type="text" id="username" name="userid" class="form-control" placeholder="Username">
                </div>
                
               </div>
             
              <div class="row">
                <div class="form-group col-lg-6 col-lg-offset-3">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
                
              </div>
                <div class="alert alert-danger alert-dismissible" role="alert" id="warning_msg">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <strong>Warning!</strong> Email or Password cannot be empty!
                </div>
              
            </div>
            
            <div class="modal-footer" style="text-align: center;">
              <input type="submit" name="login" id="popup_login" value="Log In" class="btn btn-primary"/>
            </div>
          
            
          </form>
      </div>
    </div>
</div>

 <form id="feedbackform" method="POST" action="insert.php" onsubmit="return dissubmit()">
  <div class="form-group">

    <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4">Name</h4>
        </div>
       <div class="form-group">
        <div class="col-lg-4 inputGroupContainer">

          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i>
            </span>
             <input type="text" name="name" placeholder="Type your answer here" class="form-control" required="required" style="width: 335px;">
             
          </div>
        </div>
      </div>
     </div>

     <hr>

     <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4">Email</h4>
        </div>
       <div class="form-group">
        <div class="col-lg-4 inputGroupContainer">
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i>
            </span>
             <input type="email" id="email" name="email" placeholder="Type your answer here" class="form-control" style="width: 335px;">

          </div>
          
        </div>
        <h6 id="email_err" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>
      </div>
     </div>

     <hr>

     <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4">Contact</h4>
        </div>
       <div class="form-group">
        <div class="col-lg-4 inputGroupContainer">
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i>
            </span>
             <input type="number" name="contact" placeholder="Type your answer here" class="form-control" style="width: 335px;">

          </div>
        </div>
      </div>
     </div>

      <hr>

    <div class="row">

      <div>      
            <div>
                <h4 class="col-lg-4">Please choose your company</h4>
            </div>   

           
            <div>
               <select name="company" id="op1" class="selectpicker col-lg-4" data-style="btn-primary" title="Choose one of the following..." style="color:white;" onchange="off(1)">
              
                  <?php

                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                      $databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT COMPANY_ID,COMPANY_NAME FROM COMPANY_T";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["COMPANY_ID"].  ">" .$row["COMPANY_NAME"]. "</option>";
                
                        }
                      }
                   ?> 
 
    <!-- Separated HTML and PHP -->
               </select>
            </div>
            <h6 id="err_msg_1" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>
      </div> 
    </div>


    <hr>

 
      <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4">What is your current designation?</h4>
        </div>
       <div class="form-group">
        <div class="col-lg-4 inputGroupContainer">
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i>
            </span>
             <input type="text" name="designation" placeholder="Type your answer here" class="form-control" required="required" style="width: 335px;">

          </div>
        </div>
      </div>
     </div>


   <hr>

      <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4"><span class="label label-info" id="qlabel">1</span>Which domain knowledge would you prefer while hiring freshers?</h4>
        </div>
        <div>
            <select name="ch1[]" class="selectpicker col-lg-4" id="op2" data-style="btn-primary" multiple title="Select multiple options.." onchange="off(2)">
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
        <h6 id="err_msg_2" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>

        <div class="container">
            
              <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#select_input1" style="margin-top: 15px; margin-left: 15px;">If others, Please specify</button>

            <div id="select_input1" class="collapse">  
              <div class="input-group input-group-md col-lg-3" id="others_input_field">
                        <span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon2"></span>
                        <input type="text" class="form-control" name="ch1_others" placeholder="Type your answer here" aria-describedby="basic-addon2">
               </div>
             </div>
        </div>





     </div>


    <hr>


      <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4"><span class="label label-info" id="qlabel">2</span>Which technologies would you prefer while hiring freshers?</h4>
        </div>
        <div>
            <select name="ch2[]" class="selectpicker col-lg-4" id="op3" data-style="btn-primary" multiple title="Select multiple options.." onchange="off(3)">
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
        <h6 id="err_msg_3" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>

          <div class="container">
            
              <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#select_input2" style="margin-top: 15px; margin-left: 15px;">If others, Please specify</button>

            <div id="select_input2" class="collapse">  
              <div class="input-group input-group-md col-lg-3" id="others_input_field">
                        <span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon2"></span>
                        <input type="text" class="form-control" name="ch2_others" placeholder="Type your answer here" aria-describedby="basic-addon2">
               </div>
             </div>
           </div>
       </div>

       
       <hr>

       <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4"><span class="label label-info" id="qlabel">3</span>Which basic five soft skills would you prefer in fresh graduates?</h4>
        </div>
        <div>
            <select class="selectpicker col-lg-4" id="op4" data-style="btn-primary" multiple data-max-options="5" title="Please choose five.." name="ch3[]" onchange="off(4)">
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
        <h6 id="err_msg_4" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>

        <div class="container">
            
              <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#select_input3" style="margin-top: 15px; margin-left: 15px;">If others, Please specify</button>

            <div id="select_input3" class="collapse">  
              <div class="input-group input-group-md col-lg-3" id="others_input_field">
                        <span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon2"></span>
                        <input type="text" class="form-control" name="ch3_others" placeholder="Type your answer here" aria-describedby="basic-addon2">
               </div>
             </div>
        </div>



      </div>

      
      <hr>


      <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4"><span class="label label-info" id="qlabel">4</span>What skills should fresh graduates have beyond Text books?</h4>
        </div>
        <div>
            <select name="ch4[]" class="selectpicker col-lg-4" id="op5" data-style="btn-primary" multiple title="Select multiple options.." onchange="off(5)">
                 <?php

                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                       $databaseName = "knowvic_feedback_info";
            
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT CHOICE_ID,CHOICE FROM CHOICES_T WHERE QUESTION_ID=4";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["CHOICE_ID"].  ">" .$row["CHOICE"]. "</option>";
                
                        }
                      }
                   ?> 
            </select>


        </div>
        <h6 id="err_msg_5" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>

          <div class="container">
            
              <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#select_input4" style="margin-top: 15px; margin-left: 15px;">If others, Please specify</button>

            <div id="select_input4" class="collapse">  
              <div class="input-group input-group-md col-lg-3" id="others_input_field">
                        <span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon2"></span>
                        <input type="text" class="form-control" name="ch4_others" placeholder="Type your answer here" aria-describedby="basic-addon2">
               </div>
             </div>
           </div>
       </div>
 


      <hr>

      
      <div  class="row">
        <div>
            <h4 id="h4" class="col-lg-4"><span class="label label-info" id="qlabel">5</span>Please provide your feedback on the Engineering syllabus.<span style="font-size: 75%;"><br>Please select the relevant topics from engineering syllabus which are currently used in industry</span></h4>
       
        </div>


       <div id="myGroup" style="padding-top: 25px;">
        <a class="btn btn-default" data-toggle="collapse" href="#keys" style="margin-left: 15px;">Computer Science/Information Science</a>
        <a class="btn btn-default" data-toggle="collapse" href="#attrs">Electronics & Communication/Telecommunication</a>
        
            <div class="collapse indent" id="keys" style="margin-top: 7px;">
                <select class="selectpicker col-lg-4 collapse" name="ch5[]" id="op6" data-style="btn-primary" multiple title="Select the topics from CS/IS..." onchange="off(6)">
                 
                  <?php

                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                      $databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT CHOICE_ID,BRANCH_ID,CHOICE FROM CHOICES_T WHERE QUESTION_ID=5 AND BRANCH_ID=1";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["CHOICE_ID"].  ">" .$row["CHOICE"]. "</option>";
                
                        }
                      }
                   ?> 
            </select>
            </div>
            <h6 id="err_msg_1" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>
        
            <div class="collapse indent" id="attrs" style="margin-top: 7px;">
                <select class="selectpicker col-lg-4" data-style="btn-primary" name="ch5[]" id="op7" multiple title="Select the topics from EC/TC...">
                 
                  <?php

                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                      $databaseName = "knowvic_feedback_info";
                              
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $sql_query = "SELECT CHOICE_ID,BRANCH_ID,CHOICE FROM CHOICES_T WHERE QUESTION_ID=5 AND BRANCH_ID=2";

                      $res = $conn->query($sql_query);

                      if($res->num_rows >0){

                        while ($row = $res->fetch_assoc()) {
                
                          echo "<option value="  .$row["CHOICE_ID"].  ">" .$row["CHOICE"]. "</option>";
                
                        }
                      }
                   ?> 
            </select>
            </div>
            <h6 id="err_msg_6" class="col-lg-6 col-lg-offset-4" style="color: red;"></h6>

        </div>
    </div>


   <hr>



     <div class="row">
        <div>
            <h4 id="h4" class="col-lg-4"><span class="label label-info" id="qlabel">6</span>What is the goal of your organization 5 to 10 years down the line?<span style="font-size: 75%;"><br>(Ex. Digital, Next Generation Networks, 5G, Smart Cities, M2M, Machine Learning)</span></h4>
            <br>
            
        </div>

        <div class="input-group input-group col-lg-4" id="q2" style="padding-top: 10px; margin-left: 15px;" >
          <span class="input-group-addon glyphicon glyphicon-briefcase" id="basic-addon2"></span>
              <input type="text" class="form-control" name="ans6" placeholder="Type your answer here" aria-describedby="basic-addon2">
        </div>
     </div>


    <hr>

   </div><!--Form group-->

   <div style="text-align: center;">
        <button id="submitbtn" type="submit" class="btn btn-danger btn-lg" style="margin-right: 5px;" onclick="dissubmit()">Submit</button>
        <button type="reset" class="btn btn-default btn-lg" style="margin-left: 5px;" onclick="cancel()">Cancel</button>
   </div>
   

 </form>
      
</div><!-- Container -->
<button  type="button" class="btn btn-danger btn-xs" id="admin_btn" data-toggle="modal" data-target="#popupWindow" style="float: right;">Admin Login</button>

 



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script type="text/javascript">
  document.getElementById("feedbackform").reset();
</script>

    <!-- Latest compiled and minified CSS -->


<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>



<script src="select-js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<!-- <script src="select-js/i18n/defaults-*.min.js"></script> -->


<style type="text/css">
  
  #qlabel{
    padding-top: 5px;
    margin-right: 10px;
  }
  #q3_buttons{
       margin-right: 10px;
       margin-bottom:15px;
  }


  #op1{
      
       top: 0px;
       padding-top: 0px;
  }
  #popup_login{
       float: center;
  }
  #q2{
    padding-left: 15px;
  }

  #others_input_field {
    padding-top: 10px;
    width: 375px;
    margin-left: 15px;
  }

</style>

<script type="text/javascript">

  var $myGroup = $('#myGroup');
    $myGroup.on('show.bs.collapse','.collapse', function() {
        $myGroup.find('.collapse.in').collapse('hide');
    });


</script>


<script type="text/javascript">
  $(document).ready(function(){
      
      $("#email").focusout(function(){
                 
                 
                 var email = $("#email").val();
        

                 var pattern   = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

                 var z = pattern.test(email);
               
                 if(z == false){
                       var x = document.getElementById("email_err");
                       x.innerHTML = "Invalid email address";
                 }else{
                     var x = document.getElementById("email_err");
                       x.innerHTML = "";
                 }

           });

      
      $('#warning_msg').hide();


  });


</script>

<script type="text/javascript">
  
   function validate(){

      var ddl1 = document.getElementById("op1").value;
      if(ddl1 == "" || ddl1 == null){

        var x = document.getElementById("err_msg_1");
        x.innerHTML = "Please choose a company name";
        return false;
      }

      var ddl2 = document.getElementById("op2").value;
      if(ddl2 == "" || ddl2 == null){

        var x = document.getElementById("err_msg_2");
        x.innerHTML = "Please choose an option";
        
        return false;
      }

      var ddl3 = document.getElementById("op3").value;
      if(ddl3 == "" || ddl3 == null){

        var x = document.getElementById("err_msg_3");
        x.innerHTML = "Please choose an option";

        return false;
      }
      var ddl4 = document.getElementById("op4").value;
      if(ddl4 == "" || ddl4 == null){

        var x = document.getElementById("err_msg_4");
        x.innerHTML = "Please choose an option";

        return false;
      }
      var ddl5 = document.getElementById("op5").value;
      if(ddl5 == "" || ddl5 == null){

        var x = document.getElementById("err_msg_5");
        x.innerHTML = "Please choose an option";

        return false;
      }
      var ddl6 = document.getElementById("op6").value;
      var ddl7 = document.getElementById("op7").value;
      if((ddl6 == "" || ddl6 == null) && (ddl7 == "" || ddl7 == null)){

        var x = document.getElementById("err_msg_6");
        x.innerHTML = "Please choose an option";

        return false;
      }

    }

    function dissubmit(){
      var rtype = validate();
      
     
      return rtype;
      if(rtype != false){

        document.getElementById("submitbtn").disabled = true;
      }

    }

    function off(val){

      switch(val){
        case 1: $('#err_msg_1').hide();
                break;
        case 2: $('#err_msg_2').hide();
                break;
        case 3: $('#err_msg_3').hide();
                break;
        case 4: $('#err_msg_4').hide();
                break;
        case 5: $('#err_msg_5').hide();
                break;
        case 6: $('#err_msg_6').hide();
                break;
      }
    }



    function cancel(){
        window.location = "index.php";
    }

</script>
    
</body>
</html>