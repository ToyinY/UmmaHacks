<?php
	if(isset($_POST["submit"])){

							//starts a session
							session_start();

							//connects to database
							$dbServername = "localhost";
							$dbUsername = "root";
							$dbPassword = "";
							$dbName= "Ummaconnect";

							$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

							//tests database connection
						if ($conn->connect_error) {
               				die("Connection failed: " . $conn->connect_error);
            				}

            				//searches for the user in the User table in database
            				$name = $_POST["name"];
            				$password = $_POST["password"];
            				$sql = "SELECT * from User where name='$name' and password='$password';";
            				$result = mysqli_query($conn, $sql);

            				// goes to the user's dashboard page if login is successful
							$row = mysqli_fetch_array($result);
							if ($row['name'] == $name && $row['password'] == $password) {
								$user_id=$row['User_id'];
								$_SESSION['user_id']=$user_id; // saves the user's User_id so it can be used on other pages
								header("Location: Dashboard/examples/Dashboard.php");
								} else {
									echo "Failed to log in. Please check your name and password or sign up!";
								}
						$conn->close();
					}