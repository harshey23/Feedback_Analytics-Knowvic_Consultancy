<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
        <div style="width: 370px; padding-left: 100px;">
        <table class="table table-bordered table-inverse table-responsive">
        <tr>
        <th>Sno</th>
        <th>COMPANIES</th>
        <th>No of People Survay</th>
        </tr>;

                <?php 
                      $host = "localhost:3306"; 
                      $databaseUser = "knowvic_knowvic";
                      $databasePassword = "knowVic!@#098";
                      $databaseName = "knowvic_feedback_info";
        
                      $conn = new mysqli($host ,$databaseUser ,$databasePassword ,$databaseName);
                      if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                      }

                      $value = $_GET['ch'];
                      
                      $sql_query="SELECT company_t.company_id,company_t.company_name AS COMPANY_NAME,count(*) AS COUNTS FROM company_t INNER JOIN feedback_t ON feedback_t.company_id=company_t.company_id WHERE feedback_t.fb_id IN(SELECT feedback_t.fb_id FROM feedback_t INNER JOIN fb_details_t ON fb_details_t.fb_id=feedback_t.fb_id WHERE choice_id='".$value."') GROUP BY(company_t.company_id)";
                       $i=1;
                       $res = $conn->query($sql_query);
                       if($res->num_rows>0){

        while($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>" . $row["COMPANY_NAME"] . "</td>";
            echo "<td>" . $row["COUNTS"] . "</td>";
            echo "</tr>";
            $i=$i+1;
        }
      
   }else{
    echo "Companies not selected";
   }
        $conn->close();

?>
</table>
</div>
</body>
</html>

