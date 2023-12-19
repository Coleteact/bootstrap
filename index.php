<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script&effect=emboss' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbprofile";
    $conn = new mysqli($hostname, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM profile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output data for each row
            $name = $row["name"];
            $description = $row["description"];
            $education = $row["education"];
            $work_experience = $row["work_experience"];
            $photo = $row["photo"];

            // Use the fetched data in your HTML as needed
        }
    } else {
        echo "No data found.";
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top" style="font-family: 'Dancing Script';">
                <font color="#E9B384">My </font>
                <font color="#F4F2DE">Portfolio</font>
            </a>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="edit.php">Edit</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mydiv d-flex" style="height: 100vh;">
        <div class="container d-flex flex-row align-items-center">
            <div class="container picture">
                <div class="polaroid">
                    <img src="<?php echo $photo; ?>" alt="mypicture" class="mypicture" style="width: 100%; z-index: 1;">
                </div>
            </div>
            <div class="container">
                <div class="polaroid container" style="height: 40vh; width: 70vh; background-color: #F4F2DE; padding: 20px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; position: relative; overflow: hidden;">
                    <img src="<?php echo $photo; ?>" alt="mypicture" class="mypicture" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -1; border-radius: 15px;">
                    <div>
                        <p class="h1 name mb-0" style="color:#B46060;"><?php echo $name; ?></p>
                        <p class="description mt-1"><?php echo $description; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid mydiv d-flex" style="height: 100vh; background-color:#c4c2ae
;">
        <div class="container d-flex flex-row align-items-center">
            <div class="container">
                <h1 class="h1 " style="font-size: 5rem;">Skills</h1>
            <p  style="font-size: 3rem; "><?php echo $skills; ?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid mydiv d-flex" style="height: 100vh; background-color:#ddaba0;">
        <div class="container d-flex flex-row align-items-center">
            <div class="container">
                <h1 class="h1 " style="font-size: 5rem;">Educational Attainment</h1>
            <p  style="font-size: 3rem; "><?php echo $education; ?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid mydiv d-flex" style="height: 100vh;">
        <div class="container d-flex flex-row align-items-center">
            <div class="container">
                <h1 class="h1 mt-5">Work Experience</h1>
            <p class=" mt-2" style="font-size: 3rem;"><?php echo $work_experience; ?></p>
            </div>
        </div>
    </div>

</body>

</html>