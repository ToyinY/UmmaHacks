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
            			//$sql2 = "INSERT INTO User_has_interests (User_id, inerests_id) values ();";

            			if (mysqli_query($conn, $sql)) {
               					//echo "You have registered!";
               					header ("Location: Thankyou.html");
            				} else {
               					echo "Error: " . $sql . "" . mysqli_error($conn);
            				}
						$conn->close();
					}