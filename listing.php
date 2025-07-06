<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing</title>
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
    <?php
    // Read data from database
    $dbConnection = mysqli_connect("localhost", "root", "", "company");

    $readQuery = "SELECT * FROM employees";

    $execQuery = mysqli_query($dbConnection, $readQuery);
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee Name</th>
                            <th>Age</th>
                            <th>Experience</th>
                            <th>Resume</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($val = mysqli_fetch_assoc($execQuery)) {
                            echo "<tr>";
                            echo "<td> {$val['ID']} </td>";
                            echo "<td> {$val['firstName']} {$val['middleName']} {$val['lastName']} </td>";
                            echo "<td> {$val['age']} </td>";
                            echo "<td> {$val['experience']} </td>";
                            echo "<td> {$val['resumePath']} </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>