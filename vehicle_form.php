<!DOCTYPE html>
<html>
<head>
    <title>PAckage form</title>

    <link rel="stylesheet" type="text/css" href="styles/ss.css">
    <link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
    <link rel="stylesheet" type="text/css" href="styles/covers.css">

    <script defer src="js/covers.js"></script>

</head>

<body>
    <div class="left_box">
        <form class="data" action="package_insert.php" method="POST">
            <br>
            <p class="instruct">Please fill this form to register a policy.<br>
                (Please refer your <b>ownership book</b> to fill this form)</p>

            <hr>

            <b>Enter your Email:</b><br>
            <input type="email" readonly value="<?php echo $e ?>" name="vEmail" required><br>

            <b>Vehicle Number:</b><br>
            <input type="text" placeholder="Enter vehicle number" name="vNumber" required><br>

            <b>Chassis Number:</b><br>
            <input type="text" placeholder="Enter chassis number" name="cNumber" required><br>

            <b>Engine Number:</b><br>
            <input type="text" placeholder="Enter engine number" name="eNumber" required><br>

            <b>Brand:</b><br>
            <input type="text" placeholder="Enter vehicle brand" name="brand" required><br>

            <b>Model:</b><br>
            <input type="text" placeholder="Enter vehicle model" name="model" required><br>

            <b>Fuel Type:</b><br>
                <div class="radio">
                    <input type="radio" name="fuel" value="Petrol" checked>Petrol
                </div>
                <div class="radio">
                    <input type="radio" name="fuel" value="Diesel">Diesel
                </div><br><br>

            <b>Class of Vehicle:</b><br>
            <div class="left_box">
                <select name="vType" id="vType">
                    <option>Select class</option>
                    <option value="A1">A1</option>
                    <option value="A">A</option>
                    <option value="B1">B1</option>
                    <option value="B">B</option>
                    <option value="C1">C1</option>
                    <option value="C">C</option>
                    <option value="CE">CE</option>
                    <option value="D1">D1</option>
                    <option value="D">D</option>
                    <option value="DE">DE</option>
                    <option value="G1">G1</option>
                    <option value="G">G</option>
                    <option value="J">J</option>
                </select>
            </div>



            <!--Popup Message-->
            
            <div class="popup" id="popup-1">
                <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="togglePopup()">&times;</div>

                        <h1>Vehicle Classes</h1>
                        
                        <div class="tbl">
                            <table>
                                <tr>
                                    <th>Description</th>
                                    <th>Vehicle Class</th>
                                    <th>Pictograph</th>
                                </tr>

                                <tr>
                                    <td>Light motor cycles of which Engine Capacity does not exceeds 100CC</td>
                                    <td>A1</td>
                                    <td><img class="vehicle" src="main-img/90cc_bike.png"></td>
                                </tr>

                                <tr>
                                    <td>Motorcycles of which Engine Capacity exceeds 100CC</td>
                                    <td>A</td>
                                    <td><img class="vehicle" src="main-img/100cc_bike.png"></td>
                                </tr>

                                <tr>
                                    <td>Motor Tricycle</td>
                                    <td>B1</td>
                                    <td><img class="vehicle" src="main-img/theewheel2.png"></td>
                                </tr>

                                <tr>
                                    <td>Dual purpose vehicle of which Gross Vehicle Weight does not exceed 3500kg</td>
                                    <td>B</td>
                                    <td><img class="vehicle" src="main-img/car-3-32.png"></td>
                                </tr>

                                <tr>
                                    <td>Light motor lorry of which Gross Vehicle Weight does not exceed 17000kg. Motor vehicles of this class include a motor ambulance and motor hearses</td>
                                    <td>C1</td>
                                    <td><img class="vehicle" src="main-img/lorry.png"></td>
                                </tr>

                                <tr>
                                    <td>Motor Lorry of which Gross Vehicle Weight is more than 1700kg</td>
                                    <td>C</td>
                                    <td><img class="vehicle1" src="main-img/truck-icon2.jpg"></td>
                                </tr>

                                <tr>
                                    <td>Heavy Motor Lorry</td>
                                    <td>CE</td>
                                    <td><img class="vehicle1" src="main-img/heavy.jpg"></td>
                                </tr>

                                <tr>
                                    <td>Light Motor Coach</td>
                                    <td>D1</td>
                                    <td><img class="vehicle" src="main-img/smallbus.png"></td>
                                </tr>

                                <tr>
                                    <td>Motor Coach</td>
                                    <td>D</td>
                                    <td><img class="vehicle" src="main-img/bus-2-32 (1).png"></td>
                                </tr>

                                <tr>
                                    <td>Heavy Motor Coach</td>
                                    <td>DE</td>
                                    <td><img class="vehicle1" src="main-img/10.png"></td>
                                </tr>

                                <tr>
                                    <td>Hand Tractors</td>
                                    <td>G1</td>
                                    <td><img class="vehicle" src="main-img/5994642.png"></td>
                                </tr>

                                <tr>
                                    <td>Land Vehicle</td>
                                    <td>G</td>
                                    <td><img class="vehicle1" src="main-img/tractor.jpg"></td>
                                </tr>

                                <tr>
                                    <td>Special Purpose Vehicles</td>
                                    <td>J</td>
                                    <td><img class="vehicle1" src="main-img/land.jpeg"></td>
                                </tr>
                            </table>
                        </div>

                    </div>

                <button class="hint" onclick="togglePopup()"><b>i</b></button>

            </div>
            

            <!--Popup Message End-->



            <br><br>        


            <b>Manufactured Country:</b><br>
            <input type="text" placeholder="Enter vehicle manufactured country" name="country" required><br>

            
            <b>Manufactured Year:</b><br><br>
            <select id="vYear" name="vYear" placeholder="Enter vehicle number" required>
                <option value="">-- Select Year --</option>
            </select> <br><br><br>



            <b>Vehicle Color:</b><br>
            <input type="text" placeholder="Enter vehicle color" name="vcolor" required><br>

            <b>Engine Capacity:</b><br>
            <input type="text" placeholder="Enter vehicle engine capacity" name="eCapacity" required><br>

            <b>Cylinder Capacity:</b><br>
            <input type="text" placeholder="Enter cylinder capacity" name="cCapacity" required><br>

            <button class="btn1" onclick="history.back()">Back</button>
            <button class="btn2" type="submit">Submit</button>

        </form>

        <script>
              const selectYear = document.getElementById('vYear');
              const currentYear = new Date().getFullYear();
              const startYear = 1950;
              const endYear = currentYear + 10;

              for (let year = endYear; year >= startYear; year--) {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                selectYear.appendChild(option);
            }
        </script>
    </div>

</body>
</html>


