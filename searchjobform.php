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
                <li><a href="./index.php" class="link">Home</a></li>
                <li><a href="./postjobform.php" class="link">Post a job vacancy</a></li>
                <li class="active"><a href="./searchjobform.php" class="link active">Search for a job vacancy</a></li>
                <li><a href="./about.php" class="link">About this assignment</a></li>
            </ul>
        </div>

        <div class="col-5 col-s-9">
            <h1 class="h1-slim">Job Vacancy Posting System</h1>
            <hr />
            <form action="./searchjobprocess.php" method="post" class="mb-1">
                <div class="row">
                    <div class="col-2">
                        <label for="positionId">Search criteria: </label>
                    </div>
                    <div class="col-8">
                        <select id="criteria" name="criteria">
                            <option value="">-- Select a criteria --</option>
                            <option value="position">By position</option>
                            <option value="con">By contract</option>
                            <option value="apType">By application type</option>
                            <option value="loc">By location</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <label for="positionId">Key: </label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="positionId" name="key" placeholder="Enter your key word.....">
                    </div>
                    <div class="col-2">
                        <input type="submit" value="Search" name="submit">
                    </div>
                </div>
            </form>
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