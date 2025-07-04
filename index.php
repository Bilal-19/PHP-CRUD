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

    <div class="container-fluid p-4">
        <div class="row">
            <h2 class="fw-light text-center mb-5">Employment <span class="fw-medium">Application Form</span></h2>
        </div>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" autcomplete="off">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="fname" class="form-label mb-0">First Name: </label>
                    <input type="text" id="fname" name="fname" placeholder="Enter your first name" class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="mname" class="form-label mb-0">Middle Name: </label>
                    <input type="text" id="mname" name="mname" placeholder="Enter your middle name"
                        class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="lname" class="form-label mb-0">Last Name: </label>
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name" class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="age" class="form-label mb-0">Age: </label>
                    <input type="number" id="age" name="age" placeholder="Enter your age" class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="experience" class="form-label mb-0">Total Experience: </label>
                    <input type="text" id="experience" name="experience" placeholder="Ex: 2 years" class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="email" class="form-label mb-0">Email Address: </label>
                    <input type="text" id="email" name="email" placeholder="Enter Your Email Address"
                        class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="gender" class="form-label mb-0">Gender: </label>
                    <br>
                    <label for="gender">
                        <input type="radio" id="gender" name="gender"> Male
                    </label>
                    <label for="gender">
                        <input type="radio" id="gender" name="gender"> Femaie
                    </label>
                </div>

                <div class="col-md-4 mb-2">
                    <label for="nationality" class="form-label mb-0">Nationality: </label>
                    <select name="nationality" id="nationality" class="form-select">
                        <option value="" selected></option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="UAE">UAE</option>
                    </select>
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
                </div>

                <div class="col-md-4 mb-2">
                    <label for="resume" class="form-label mb-0">Resume: </label>
                    <input type="file" id="resume" name="resume" class="form-control">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="joinDate" class="form-label mb-0">Expected Joining Date: </label>
                    <input type="date" id="joinDate" name="joinDate" class="form-control">
                </div>

                <div class="col-md-12 mb-2">
                    <label for="coverLetter" class="form-label mb-0">Cover Letter: </label>
                    <textarea id="coverLetter" name="coverLetter" rows="5" class="form-control"></textarea>
                </div>

                <div class="col-md-4 mb-2">
                    <button class="btn btn-primary">Submit Application</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>