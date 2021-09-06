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
                <li class="active"><a href="./postjobform.php" class="link active">Post a job vacancy</a></li>
                <li><a href="./searchjobform.php" class="link">Search for a job vacancy</a></li>
                <li><a href="./about.php" class="link">About this assignment</a></li>
            </ul>
        </div>

        <div class="col-5 col-s-9">
            <h1 class="h1-slim">Job Vacancy Posting System</h1>
            <hr />
            <p class="text-red">* Required field</p>
            <form action="./postjobprocess.php" method="post" class="mb-2">
                <div class="row">
                    <div class="col-4">
                        <label for="positionId">Position ID <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="positionId" name="positionId" placeholder="e.g. P0001">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="title">Title <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="title" name="title" placeholder="Title">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="title">Description <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <textarea id="description" name="description" placeholder="Enter the description.."
                            style="height:200px"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="title">Closing Date <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="datePicker" name="closingDate" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="position">Position <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <input type="radio" name="position" id="fullTime" value="Full Time" checked><label
                            for="fullTime">Full
                            Time</label>
                        <input type="radio" name="position" id="partTime" value="Part Time"><label for="partTime">Part
                            Time</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="contract">Contract <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <input type="radio" name="contract" id="onGoing" value="On-going" checked><label
                            for="onGoing">On-going</label>
                        <input type="radio" name="contract" id="fixedTerm" value="Fixed Term"><label
                            for="fixedTerm">Fixed
                            Term</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="applicationBy">Application by: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <input type="checkbox" name="applicationBy[]" id="post" value="Post"><label
                            for="post">Post</label>
                        <input type="checkbox" name="applicationBy[]" id="mail" value="Mail"><label
                            for="mail">Mail</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="location">Location: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-8">
                        <select id="location" name="location">
                            <option value="">---</option>
                            <option value="ACT">ACT</option>
                            <option value="NSW">NSW</option>
                            <option value="NT">NT</option>
                            <option value="QLD">QLD</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="VIC">VIC</option>
                            <option value="WA">WA</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit" name="submit">
                    <input type="reset" value="Reset">&nbsp;

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
<script>
    const dateObj = new Date();
    const month = String(dateObj.getMonth()+1).padStart(2, '0');
    const day = String(dateObj.getDate()).padStart(2, '0');
    const year = dateObj.getFullYear().toString().substr(-2);
    const currentDate = day + '/' + month + '/' + year;
    document.getElementById('datePicker').value = currentDate;
</script>

</html>