<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Posting System | Assignment 1</title>
  <link rel="stylesheet" href="./style.css">
  <script>
      function goBack() {
        window.history.back();
        }
  </script>
</head>

<body>
  <div class="row">
    <div class="col-2 col-s-3 menu mt-1">
      <ul>
        <li><a href="./index.php" class="link">Home</a></li>
        <li class="active"><a href="./postjobform.php" class="link active">Post a job vacancy</a></li>
        <li><a href="./searchjobform.php" class="link">Search for a job vacancy</a></li>
        <li ><a href="./about.php" class="link">About this assignment</a></li>
      </ul>
    </div>

    <div class="col-5 col-s-9">
      <h1 class="h1-slim">Job Vacancy Posting System</h1>
      <hr/>
      <ul class="error-list">
      <?php 
      error_reporting(E_ERROR | E_PARSE);
      // Check the file has submit request
        if(isset($_POST['submit'])){
            $positionId = trim($_POST['positionId']);
            $title = $_POST['title'];
            $description = $_POST['description'];
            $closingDate = $_POST['closingDate'];
            $position = $_POST['position'];
            $contract = $_POST['contract'];
            $applicationBy = isset($_POST['applicationBy'])? $_POST['applicationBy']: '';
            $location = $_POST['location'];

            $positionIdErr =$titleErr =$descriptionErr = $closingDateErr = $positionErr = $contractErr = $applicationByErr = $locationErr = true;

            // positionId validation
            if (empty($_POST["positionId"])) {
                $positionIdErr = false;
                echo "<li>Position Id is required</li>";
            }

            if(!preg_match("/^P\d{4}$/", $positionId)){
                $positionIdErr = false;
                echo "<li>Position Id must be 5 digits long and start with \"P\"</li>";
            }

            // title validation
            if (empty($_POST["title"])) {
                $titleErr = false;
                echo "<li>Title is required</li>";
            }

            if(!preg_match("/^([a-zA-Z0-9 ,.!]){1,20}$/", $title)){
                $titleErr = false;
                echo "<li>The title can only contain a maximum of 20 alphanumeric characters including spaces, comma, period (full stop), and exclamation point</li>";
            }

            // Description validation
            if (empty($_POST["description"])) {
                $descriptionErr = false;
                echo "<li>Description is required</li>";
            }

            if(strlen($description) > 260){
                $descriptionErr = false;
                echo "<li>Description should not be grater than 260 characters</li>";
            }

            // Closing date validation
            if (empty($_POST["closingDate"])) {
                $closingDateErr = false;
                echo "<li>Closing date is required</li>";
            }

            if(!preg_match("/^([1-9]|0[1-9]|[1-2][0-9]|3[0-1])\/([0-9]|0[1-9]|1[0-2])\/[0-9]{2}$/",$closingDate)){
                $closingDateErr = false;
                echo "<li>Date format should follow dd/mm/yy format</li>";
            }

            // Application by validation
            if(!isset($_POST['applicationBy']) || $_POST['applicationBy'] == ""){
                $applicationByErr = false;
                echo "<li>Select any application by method</li>";
            }

            // Application by validation
            if(!isset($_POST['location']) || $_POST['location'] == ""){
                $locationErr = false;
                echo "<li>Select a location</li>";
            }

            // Check all validations
            if($positionIdErr && $titleErr && $descriptionErr &&  $closingDateErr &&  $positionErr &&  $contractErr &&  $applicationByErr &&  $locationErr){

                // process application bu data to one string
                $applicationByStr = '';
                foreach ($_POST['applicationBy'] as $item){ 
                     $applicationByStr .= $item.",";
                }
                $applicationByStr = rtrim($applicationByStr , ",");

                // Remove white space in before and after strings
                $closingDate = str_replace(' ', '', $closingDate);
                $positionId = trim($positionId);
                $title = trim($title);
                $description = trim($description);
                $position = trim($position);
                $contract = trim($contract);
                $applicationByStr = trim($applicationByStr);
                $location = trim($location);

                // Create string for append to file
                $data = "$positionId\t$title\t$description\t$closingDate\t$position\t$contract\t$applicationByStr\t$location\n";

                //open file in append mode
                $fileOpen = fopen('./data/jobposts/jobs.txt', 'a') or die("Unable to open file!");;
                // Append data to file
                fwrite($fileOpen, $data);  
                // Close file
                fclose($fileOpen);  

                echo "<p>Job added successfully !</p> <a href='./index.php'> Back to home</a>";
            }else{
                echo "<br/><a href='./index.php' class='link-mute'> Back to home</a> | <a href='#' onclick='goBack()' class='link-mute'> Post a job vacancy</a>";
                
            }
            

        }
      ?>
      </ul>
    </div>

    <div class="col-3 col-s-12">
      <div class="div-background"></div>
    </div>
  </div>

  <div class="footer">
    <p>Copyright &copy;
      <?php echo date("Y"); ?> Job Posting System
    </p>
  </div>
</body>

</html>