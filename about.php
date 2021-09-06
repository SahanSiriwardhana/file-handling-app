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
                <li><a href="./searchjobform.php" class="link">Search for a job vacancy</a></li>
                <li class="active">About this assignment</li>
            </ul>
        </div>

        <div class="col-5 col-s-9">
            <h1 class="h1-slim">Job Vacancy Posting System</h1>
            <hr />
            <div>
                <h2 class="sub-title">About the System</h2>

                <ul>
                    <li>PHP version installed :
                        <?php echo phpversion();?>
                    </li>
                    <li>Completed tasks :
                        <ol>
                            <li>Task 1 – Home Page</li>
                            <li>Task 2 – Post Job Page</li>
                            <li>Task 3 – Process Post Job Page</li>
                            <li>Task 4 – Search Job Vacancy Page</li>
                            <li>Task 5 – Search Job Vacancy Page</li>
                            <li>Task 6 – About Page</li>
                            <li>Task 7 – Advanced Search Job Vacancy Page</li>
                            <li>Task 8 – Order and Display Job Vacancy Result Page</li>
                        </ol>
                    </li>
                    <li>Special features:
                        <ul>
                            <li>Sorting searched job list for display job vacancy from the most future closing date until today’s date. </li>
                            <li>Responsive css design.</li>
                            <li>Common layout for each pages.</li>
                            <li>Regex validations</li>
                            <li>Javascript functions (Get date, History back function)</li>
                        </ul>
                    </li>
                </ul>

                <h3 class="sub-title">Discussions</h3>

            </div>
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