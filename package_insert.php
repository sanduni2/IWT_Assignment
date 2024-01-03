<?php

    session_start();

 include 'cover.php';
 include 'connect.php';

    $pNum = $_SESSION["ins-type"];

    $vEmail = $_POST['vEmail'];
    $nulvalue = 0;



 	$stmt = $conn->prepare("INSERT INTO owner_package(Vehicle_No,Package_ID) VALUES(?,?)");

    $stmt->bind_param("ss",$vNumber, $pNum);

    $stmt->execute();
    
 
    $stmt->close();

     $stmt = $conn->prepare("INSERT INTO vehicle_value (Vehicle_No, Estimate_Value) VALUES (?, ?)");

    $stmt->bind_param("sd", $vNumber, $nulvalue);

    $stmt->execute();

    $stmt->close();



    $stmt = $conn->prepare("INSERT INTO vehicle_owner(Email,Vehicle_No) VALUES(?,?)");

    $stmt->bind_param("ss",$vEmail, $vNumber);

    $stmt->execute();

        header("Location: package-confirm.php");
        
    $stmt->close();



    $conn->close();




?>