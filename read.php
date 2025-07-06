<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body>

    <?php
    // Get ID value
    // 'id' because we pass this in Action column while listing records.
    if (isset($_GET["id"])) {
        $param_id = $_GET["id"];


        // Connect to DB
        require_once "db-config.php";

        $query = "SELECT * FROM employees WHERE id = " . $param_id;

        // Execute query

        $getSingleRecord = mysqli_fetch_assoc(mysqli_query($dbConnection, $query));
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-2 m-3">
                    <?php
                    echo '<p class="fw-light mb-0"><span class="fw-medium">Candidate Name</span>: ' . $getSingleRecord["firstName"] . '</p>';
                    echo '<p class="fw-light mb-0"><span class="fw-medium">Father Name</span>: ' . $getSingleRecord["middleName"] . " " . $getSingleRecord["lastName"] . '</p>';
                    echo '<p class="fw-light mb-0">Email Address: ' . $getSingleRecord["emailAddress"] . '</p>';
                    echo '<p class="fw-light mb-0">Age: ' . $getSingleRecord["age"] . '</p>';
                    echo '<p class="fw-light mb-0">Experience: ' . $getSingleRecord["experience"] . '</p>';
                    echo '<p class="fw-light mb-0">Gender: ' . $getSingleRecord["gender"] . '</p>';
                    echo '<p class="fw-light mb-0">Nationality: ' . $getSingleRecord["nationality"] . '</p>';
                    echo '<p class="fw-light mb-0">Designation: ' . $getSingleRecord["designation"] . '</p>';
                    echo '<p class="fw-light mb-0">Last Qualification: ' . $getSingleRecord["lastQualification"] . '</p>';
                    echo '<p class="fw-light mb-0">Expected Joining Date: ' . $getSingleRecord["joinDate"] . '</p>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>