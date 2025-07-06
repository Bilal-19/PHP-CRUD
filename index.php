<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body>
    <!-- Backend -->
    <?php
    // Set empty variables
    $fname = "";
    $mname = "";
    $lname = "";
    $age = "";
    $experience = "";
    $email = "";
    $gender = "";
    $nationality = "";
    $designation = "";
    $latestQualification = "";
    $resume = "";
    $joinDate = "";
    $coverLetter = "";

    // Set error variables
    $fnameErr = "";
    $mnameErr = "";
    $lnameErr = "";
    $ageErr = "";
    $experienceErr = "";
    $emailErr = "";
    $genderErr = "";
    $nationalityErr = "";
    $designationErr = "";
    $latestQualificationErr = "";
    $resumeErr = "";
    $joinDateErr = "";
    $coverLetterErr = "";


    //  Check server request method
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $experience = $_POST['experience'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $designation = $_POST['designation'];
        $latestQualification = $_POST['latestQualification'];
        $resume = $_POST['resume'];
        $joinDate = $_POST['joinDate'];
        $coverLetter = $_POST['coverLetter'];

        // Check for empty values
        function validateInput(&$fieldName, $formFieldName, $errorMessage, &$errorFieldName)
        {
            if (empty($_POST[$formFieldName])) {
                $errorFieldName = $errorMessage;
            } else {
                $fieldName = sanitizeInput($_POST[$formFieldName]);
            }
        }

        validateInput($fname, 'fname', "Please enter your first name", $fnameErr);
        validateInput($mname, 'mname', "Please enter your middle name", $mnameErr);
        validateInput($lname, 'lname', "Please enter your last name", $lnameErr);
        validateInput($age, 'age', "Please enter your age", $ageErr);
        validateInput($experience, 'experience', "Please enter your total experience", $experienceErr);
        validateInput($email, 'email', "Please enter your email address", $emailErr);
        validateInput($gender, 'gender', "Please select your gender", $genderErr);
        validateInput($nationality, 'nationality', "Please select your nationality", $nationalityErr);
        validateInput($designation, 'designation', "Please select your designation", $designationErr);
        validateInput($latestQualification, 'latestQualification', "Please select your latest qualification", $latestQualificationErr);
        validateInput($resume, 'resume', "Please upload your resume", $resumeErr);
        validateInput($joinDate, 'joinDate', "Please select expected join date", $joinDateErr);
        validateInput($coverLetter, 'coverLetter', "Please enter why you are the best fit for this role", $coverLetterErr);
        
        // Store data receive from Frontend to Backend
    
        // DB Connection
        $connection = mysqli_connect("localhost", "root", "", "company");
        if ($connection) {
            echo "Connected to database";
            // Store new entry to DB;
            $query = "INSERT INTO employees
        (
        firstName, middleName, lastName, age, experience, emailAddress, gender, nationality,
        designation, lastQualification, resumePath, joinDate, coverLetter
        )
         VALUES (
        '$fname','$mname','$lname',
        '$age',
        '$experience', 
        '$email', '$gender',
        '$nationality','$designation',
        '$latestQualification','$resume',
        '$joinDate','$coverLetter'
        )";

            if (mysqli_query($connection, $query)) {
                echo "New record added successfully";
            } else {
                echo "Failed to add new record.";
            }
        } else {
            echo "Failed to connect with database";
        }
    }

    function sanitizeInput($fieldName)
    {
        $value = trim($fieldName);
        $value = strip_tags($value);
        $value = stripslashes($value);

        // XSS Protection
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        return $value;
    }

    ?>

    <!-- Frontend -->
    <div class="container-fluid p-4">
        <div class="row">
            <h2 class="fw-light text-center mb-5">Employment <span class="fw-medium">Application Form</span></h2>
        </div>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" autcomplete="off">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="fname" class="form-label mb-0">First Name: </label>
                    <input type="text" id="fname" name="fname" placeholder="Enter your first name" class="form-control">
                    <small class="text-danger">
                        <?php echo $fnameErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="mname" class="form-label mb-0">Middle Name: </label>
                    <input type="text" id="mname" name="mname" placeholder="Enter your middle name"
                        class="form-control">
                    <small class="text-danger">
                        <?php echo $mnameErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="lname" class="form-label mb-0">Last Name: </label>
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name" class="form-control">
                    <small class="text-danger">
                        <?php echo $lnameErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="age" class="form-label mb-0">Age: </label>
                    <input type="number" id="age" name="age" placeholder="Enter your age" class="form-control">
                    <small class="text-danger">
                        <?php echo $ageErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="experience" class="form-label mb-0">Total Experience: </label>
                    <input type="text" id="experience" name="experience" placeholder="Ex: 2 years" class="form-control">
                    <small class="text-danger">
                        <?php echo $experienceErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="email" class="form-label mb-0">Email Address: </label>
                    <input type="text" id="email" name="email" placeholder="Enter Your Email Address"
                        class="form-control">
                        <small class="text-danger">
                        <?php echo $emailErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="gender" class="form-label mb-0">Gender: </label>
                    <br>
                    <label for="gender">
                        <input type="radio" id="gender" name="gender" value="Male"> Male
                    </label>
                    <label for="gender">
                        <input type="radio" id="gender" name="gender" value="Female"> Femaie
                    </label>
                    <br>
                    <small class="text-danger">
                        <?php echo $genderErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="nationality" class="form-label mb-0">Nationality: </label>
                    <select name="nationality" id="nationality" class="form-select">
                        <option value="" selected></option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="UAE">UAE</option>
                    </select>
                    <small class="text-danger">
                        <?php echo $nationalityErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="designation" class="form-label mb-0">Designation: </label>
                    <select name="designation" id="designation" class="form-select">
                        <option value="" selected></option>
                        <option value="Frontend Developer">Frontend Developer</option>
                        <option value="Backend Developer">Backend Developer</option>
                        <option value="Database Administrator">Database Administrator</option>
                        <option value="Quality Assurance">Quality Assurance</option>
                        <option value="DevOps">DevOps</option>
                    </select>
                    <small class="text-danger">
                        <?php echo $designationErr ?>
                    </small>
                </div>


                <div class="col-md-4 mb-2">
                    <label for="latestQualification" class="form-label mb-0">Last Qualification: </label>
                    <select name="latestQualification" id="latestQualification" class="form-select">
                        <option value="" selected></option>
                        <option value="Masters">Masters</option>
                        <option value="Graduation">Graduation</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Matric">Matric</option>
                    </select>
                    <small class="text-danger">
                        <?php echo $latestQualificationErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="resume" class="form-label mb-0">Resume: </label>
                    <input type="file" id="resume" name="resume" class="form-control">
                    <small class="text-danger">
                        <?php echo $resumeErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="joinDate" class="form-label mb-0">Expected Joining Date: </label>
                    <input type="date" id="joinDate" name="joinDate" class="form-control">
                    <small class="text-danger">
                        <?php echo $joinDateErr ?>
                    </small>
                </div>

                <div class="col-md-12 mb-2">
                    <label for="coverLetter" class="form-label mb-0">Cover Letter: </label>
                    <textarea id="coverLetter" name="coverLetter" rows="5" class="form-control"></textarea>
                    <small class="text-danger">
                        <?php echo $coverLetterErr ?>
                    </small>
                </div>

                <div class="col-md-4 mb-2">
                    <button class="btn btn-primary">Submit Application</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>