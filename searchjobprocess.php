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
        <li ><a href="./postjobform.php" class="link">Post a job vacancy</a></li>
        <li class="active"><a href="./searchjobform.php" class="link active">Search for a job vacancy</a></li>
        <li><a href="./about.php" class="link">About this assignment</a></li>
      </ul>
    </div>

    <div class="col-5 col-s-9 mb-2">
      <h1 class="h1-slim">Job Vacancy Information</h1>
      <hr/>
      <?php
      error_reporting(E_ERROR | E_PARSE);
        if(isset($_POST['submit'])){
            
            if(strlen($_POST['key']) > 0){
                $key = $_POST['key'];
                echo "Search Key : ".$key;

                // Open file to read
                $fileOpen = fopen("./data/jobposts/jobs.txt", "r") or die("<br/><p class='error-msg'>Unable to open file!</p>");
                $jobList = []; 
                //echo fgets($fileOpen);
                while(!feof($fileOpen)) {
                    $row = fgets($fileOpen);

                    $criteriaIndex = 0;
                    switch ($_POST['criteria']) {
                        case 'position':
                            $criteriaIndex = 1;
                            break;
                        case 'con':
                            $criteriaIndex = 5;
                            break;
                        case 'apType':
                            $criteriaIndex = 6;
                            break;
                        case 'loc':
                            $criteriaIndex = 7;
                            break;
                        
                        default:
                            $criteriaIndex = 0;
                            break;
                    }

                    // Split string from \t
                    $pieces = explode("\t", $row);

                    // check if 1st index is exist
                    if(array_key_exists(1, $pieces)){
                        if($criteriaIndex !== 0){
                            $searchFrom = $pieces[$criteriaIndex];
                        }else{
                            $searchFrom = $row;
                        }

                        if (strpos(strtolower($searchFrom), strtolower($key)) !== false) {
                            array_push($jobList, (object)[
                                "title"=> $pieces[1],
                                "description"=> $pieces[2],
                                "closingDate"=> $pieces[3],
                                "position"=> $pieces[5].' - '.$pieces[4],
                                "applicationBy"=> $pieces[6],
                                "location"=> $pieces[7]
                            ]);
                           
                        }
                    }
                }
                fclose($fileOpen);

                // Sort job list according to closing date
                usort($jobList, function($a, $b) {
                    return (abs(strtotime('today') - strtotime(date_format(date_create_from_format("d/m/y",$a->closingDate),"Y/m/d")))
                        > (abs(strtotime('today') - strtotime(date_format(date_create_from_format("d/m/y",$b->closingDate),"Y/m/d")))));
                });
                
                foreach($jobList as $item){
                    ?>
                    <div class="card">
                        <p> 
                            <strong>Job Title:</strong> <?php echo $item->title; ?><br/>
                            <strong>Description:</strong> <?php echo $item->description; ?><br/>
                            <strong>Closing Date :</strong> <?php echo $item->closingDate; ?><br/>
                            <strong>Position:</strong> <?php echo $item->position; ?><br/>
                            <strong>Application by:</strong> <?php echo $item->applicationBy; ?><br/>
                            <strong>Location:</strong> <?php echo $item->location; ?>
                        </p>
                    </div>
                    <?php 
                }
            }else{
                echo "<p class='error-msg'>Please enter search key</p>";
            }
            echo "<br/><a href='#' onclick='goBack()' class='link-mute'>Back to search</a>";
        }
      ?>
    </div>

    <div class="col-3 col-s-12">
      <div class="div-background"></div>
    </div>
  </div>

  <div class="footer">
    <p>Copyright &copy; <?php echo date("Y"); ?> Job Posting System
    </p>
  </div>
</body>

</html>