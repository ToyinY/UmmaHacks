<?php
						// connects to the database
                  if(isset($_POST["submit"])){
							$dbServername = "localhost";
							$dbUsername = "root";
							$dbPassword = "";
							$dbName= "Ummaconnect";

							$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

                  // tests database connection
						if ($conn->connect_error) {
               				die("Connection failed: " . $conn->connect_error);
            				}
                     // inserts form submittion data into the User table
            		$sql = "INSERT INTO  User (name, dob, gender, password, email, phone) values ('".$_POST["name"]."', '".$_POST["dob"]."', '".$_POST["gender"]."', '".$_POST["pwd"]."','".$_POST["email"]."', '".$_POST["phone"]."');";

                     // is registered, user goes to the thank you page
            		if (mysqli_query($conn, $sql)) {
               					//echo "You have registered!";
               					header ("Location: Thankyou.html");
            				} else {
               					echo "Error: " . $sql . "" . mysqli_error($conn);
            				}

                  /* inserts interests into the User_has_interests Table
                  //$name = $_POST["name"];
                  mysqli_query($conn, $sql);
                  $sql2 = "SELECT User_id from User where name = '".$_POST["name"]."';";
                  $result = mysqli_query($conn, $sql2);
                  $row = mysqli_fetch_array($result);
                  $user_id = $row['User_id'];//fetches the user_is\d based on their name

                  //$interests = $_POST["interests"];
                  $sql3 = "SELECT interests_id from interests where name = '".$_POST["interests"]."';";
                  $result2 = mysqli_query($conn, $sql3);
                  $row2 = mysqli_fetch_array($result2);
                  $interests_id = $row2['interests_id'];//fetches the interest_id based on its name

                  $sql4 = "INSERT INTO User_has_interests (User_id, interests_id) values ('$user_id', '$interests_id');";

                  echo " ".$user_id."".$interests_id." ";*/

						$conn->close();
					}