<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Posting System | Assignment 1</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="row">
    <div class="col-2 col-s-3 menu mt-1">
      <ul>
        <li class="active">Home</li>
        <li><a href="./postjobform.php" class="link">Post a job vacancy</a></li>
        <li><a href="./searchjobform.php" class="link">Search for a job vacancy</a></li>
        <li><a href="./about.php" class="link">About this assignment</a></li>
      </ul>
    </div>

    <div class="col-5 col-s-9">
      <h1 class="h1-slim">Job Vacancy Posting System</h1>
      <hr />
      <p class="display-1">Name: John Smith<br/>
        Student ID: 1234567r <br/>
        Email: 1234567@swin.edu.au</p>
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