<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input type="text" class="form-input" name="name" id="first_name" />
                            </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Birth date</label>
                                <input type="date" class="form-input" name="dob" id="birth_date" placeholder="MM-DD-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label for="other">Other</label>
                                </div>
                            </div>
                        </div>
                            <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="number" class="form-input" name="email" id="email" />
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone number</label>
                                <input type="number" class="form-input" name="phone" id="phone_number" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="pwd" id="password"/>
                            </div>
                            <div class="form-group">
                                <label for="re_password">Repeat your password</label>
                                <input type="password" class="form-input" name="re_password" id="re_password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>


                        
                    </form>
                </div>
            </div>
        </section>

    </div>

    <?php
        if(isset($_POST["submit"])){

            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName= "Ummaconnect";

            $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

            if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

            $sql = "INSERT INTO  User (name, dob, gender, password, email, phone) values ('".$_POST["name"]."', '".$_POST["dob"]."', '".$_POST["gender"]."', '".$_POST["pwd"]."','".$_POST["email"]."', '".$_POST["phone"]."');";

            if (mysqli_query($conn, $sql)) {
                    echo "You have registered!";
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
            $conn->close();

        }
    ?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>