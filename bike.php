<!DOCTYPE html>
<html>
<head>
    <title>Motor Bike Cover</title>

    <link rel="stylesheet" type="text/css" href="styles/ss.css">
    <link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
    <link rel="stylesheet" type="text/css" href="styles/covers.css">

    <script defer src="js/covers.js"></script>

</head>

<body>
    

    <?php

        session_start();

        $e = $_SESSION["username"];

        $_SESSION["ins-type"] = "P001";


    
    ?>

    <?php include 'navigation.php'; ?>

    <br>

    <h1 align="center"><u>Motor Bike Cover</u></h1>
    
    <div class="form">
        
        <?php include 'vehicle_form.php' ?>

        <span class="right_text"><p class="details"><br><br>Motorbike insurance provides coverage for motorcycles, scooters, and other two-wheeled vehicles. <br><br>It offers financial protection against various risks and damages associated with owning and operating a motorbike.</p><br><br><br>

        <img src="main-img/bike(1)1.png"><br><br>
        <img src="main-img/fz-250(1).png">  


        </span> 
    </div>
    
    <br><br><br>

    <?php include 'footer.php'; ?>
    
    </body>

</html>