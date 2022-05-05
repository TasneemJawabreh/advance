<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="sky">
            <div class="trees"></div>
            <div class="track"></div>

            <div class="car">
                <div class="wheel wheel1">
                    <img src="car_wheel_left.png" alt="">
                </div>
                <div class="wheel wheel2">
                    <img src="car_wheel_right.png" alt="">
                </div>
            </div>

            <div class="car1">
                <div class="wheel wheel1">
                    <img src="car_wheel_left1.png" alt="">
                </div>
                <div class="wheel wheel2">
                    <img src="car_wheel_right1.png" alt="">
                </div>
            </div>


            <div class="box">

                <h1 style="font-size: 20;font-family: Curlz MT; color: white;">Uber</h1>

                <div class="page">
                    <div class="header">
                        

                        <a id="login" class="active" href="#login" style="font-family: Cursive;">login</a>
                        <a id="signup" href="#signup" style="font-family: Cursive;">signup</a>
                    </div>
                    <div id="errorMsg"></div>
                    <div class="content">
                        <form class="login" name="loginForm"  method="POST" action="log.php" >
                            <input type="text" name="logName" id="logName" placeholder="Username" style="font-family: Cursive;">
                            <input type="password" name="logPassword" id="logPassword" placeholder="Password"style="font-family: Cursive;">
                            
                            <br><br>
                            <input type="submit" value="Login"  style="font-family: Cursive;" />

                       
                        
                            
                        </form>
                        <form class="signup" name="signupForm"  method="GET" action="sign.php"  >
                           <input type="text" name="Name" id="Name" placeholder="Username" style="font-family: Cursive;">
                            <input type="password" name="Pass" id="Pass" placeholder="Password" style="font-family: Cursive;"><br>
                            <input type="text" name="phone" id="phone" placeholder="phone number"style="font-family: Cursive;">
                           
                            <input type="submit" value="SignUp" style="font-family: Cursive;">
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>