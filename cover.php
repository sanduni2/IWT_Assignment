<?php
 include 'connect.php';

    $vNumber = $_POST['vNumber'];
    $cNumber = $_POST['cNumber'];
    $eNumber = $_POST['eNumber'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $fuel = $_POST['fuel'];
    $vType = $_POST['vType'];
    $country = $_POST['country'];
    $vYear = $_POST['vYear'];
    $vcolor = $_POST['vcolor'];
    $eCapacity = $_POST['eCapacity'];
    $cCapacity = $_POST['cCapacity'];



    $stmt = $conn->prepare("INSERT INTO vehicle(Vehicle_No,Chassis_No,Engine_No,Brand,Model,Fuel_Type,Class,Country,V_Year,Colour,Engine_Capacity,Cylinder_Capacity) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->bind_param("ssssssssssss",$vNumber, $cNumber, $eNumber, $brand, $model, $fuel, $vType, $country, $vYear, $vcolor, $eCapacity, $cCapacity);

    $stmt->execute();

    $stmt->close();
    $conn->close();
?>

