<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .btn-container {
            text-align: center;
            margin-top: 50px;
        }
        .btn-option {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="btn-container">
        <a href="addPatient.php" class="btn btn-primary btn-lg btn-option">
            <img src="path/to/patient-image.jpg" alt="Patient" width="100" height="100"><br>
            Patient
        </a>
        <a href="addMedecin.php" class="btn btn-success btn-lg btn-option">
            <img src="path/to/medecin-image.jpg" alt="Médecin" width="100" height="100"><br>
            Médecin
        </a>
    </div>

    <!-- Include Bootstrap and other scripts at the end of the body for better performance -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
