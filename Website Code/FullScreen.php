<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Fullscreen Form Interface</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Sign Up to Join Umma#Connect Today </h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="Index.html"><span>Back to Home Page</span>
						</a>
					</div>
				</div>
				
				<!-- This is the form to sign up -->
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" method="POST">
					<ol class="fs-fields">
						<!-- This helps them fill out their name -->
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
							<input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="Toph Bei Fong" required/>
						</li>
						<!-- This helps them fill out their dob -->
                        <li>
							<label class="fs-field-label fs-anim-upper" for="q4" data-info="Tell us more about you...">What's your birth date?</label>
							<input class="fs-anim-lower" id="q4" name="dob" type="date" placeholder="01/01/2020" required/>
						</li>
						<!-- This helps them fill out their gender -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="Tell us more about you...">What is your gender?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q2b" name="gender" type="radio" value="female"/><label for="q2b" class="radio-conversion">female</label></span>
								<span><input id="q2c" name="gender" type="radio" value="male"/><label for="q2c" class="radio-social">male</label></span>
								<span><input id="q2a" name="gender" type="radio" value="other"/><label for="q2a" class="radio-mobile">other</label></span>
							</div>
						</li>
						<!-- This helps them fill out their password -->
						<li>
							<label class="fs-field-label fs-anim-upper" for="q8">Please Choose a password</label>
							<input class="fs-anim-lower" id="q8" name="pwd" type="password" placeholder="Password Here"></textarea>
						</li>
						<!-- This helps them fill out their email -->
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="We won't send you spam, we promise...">What's your email address?</label>
							<input class="fs-anim-lower" id="q3" name="email" type="email" placeholder="drinkcactusjuice@gmail.com" required/>
						</li>
						<!-- This helps them fill out their phone number -->
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5" data-info="Tell us your phone number so we can send a push notification...">What's your phone number?</label>
							<input class="fs-anim-lower" id="q5" name="phone" type="tel" placeholder="1-800-BASINGS" required/>
						</li>
						<!-- This helps them fill out their interests -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q7" data-info="This will help us know what kind of service you need">What are some of your interests?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q7b" name="Avatar the Last Airbender" type="radio" value="Avatar the Last Airbender"/><label for="q7b" class="radio-conversion">Avatar The Last Airbender</label></span>
								<span><input id="q7c" name="Mental Health" type="radio" value="Mental Health"/><label for="q7c" class="radio-social">Mental Health</label></span>
								<span><input id="q7a" name="Islamic Topics" type="radio" value="Islamic Topics"/><label for="q7a" class="radio-mobile">Islamic Topics</label></span>
								<span><input id="q7d" name="Muslim Women" type="radio" value="Muslim Women"/><label for="q7d" class="radio-mobile">Muslim Women</label></span>
								<span><input id="q7e" name="Anime" type="radio" value="Anime"/><label for="q7e" class="radio-mobile">Anime</label></span>
								<span><input id="q7f" name="Cuisine" type="radio" value="Cuisine"/><label for="q7f" class="radio-mobile">Cuisine</label></span>
								<span><input id="q7g" name="Social Justice" type="radio" value="Social Justice"/><label for="q7g" class="radio-mobile">Social Justice</label></span>
								<span><input id="q7h" name="Art and Music" type="radio" value="Art and Music"/><label for="q7h" class="radio-mobile">Art and Music</label></span>
								<span><input id="q7i" name="STEM" type="radio" value="STEM"/><label for="q7i" class="radio-mobile">STEM</label></span>
								<span><input id="q7j" name="Languages" type="radio" value="Languages"/><label for="q7j" class="radio-mobile">Languages</label></span>
							</div>
						</li>
						<!-- This helps them what library they want to be in -->
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="Choose a library to get started">What library would you like to be a part of?</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Pick a Library</option>
								<option value="#588c75" data-class="color-588c75">Muslim Woman</option>
								<option value="#b0c47f" data-class="color-b0c47f">Mental Health</option>
								<option value="#f3e395" data-class="color-f3e395">MCAT Prep</option>
								<option value="#f3ae73" data-class="color-f3ae73">Your College</option>
								<option value="#da645a" data-class="color-da645a">Your Work</option>
								<option value="#79a38f" data-class="color-79a38f">Book Club</option>
								<option value="#c1d099" data-class="color-c1d099">Avatar the Last Airbender and LOK</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">Anime</option>
								<option value="#f5be8f" data-class="color-f5be8f">Sports</option>
								<option value="#e1837b" data-class="color-e1837b">First Generation American Muslims</option>
								<option value="#9bbaab" data-class="color-9bbaab">Islamic Discussions</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">Quaranteen Life</option>
								<option value="#f9eec0" data-class="color-f9eec0">Music</option>
								<option value="#f7cda9" data-class="color-f7cda9">Cuisine</option>
								<option value="#e8a19b" data-class="color-e8a19b">Software Developers</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">Marketing Creatives</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">Muslim Nerds</option>
								<option value="#faf4d4" data-class="color-faf4d4">Social Justice</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">Young Professionals</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">Language Learning</option>
							</select>
						</li>
					</ol><!-- /fs-fields -->
					<a href="Thankyou.html"> <button class="fs-submit" type="submit" name="submit">Send answers</button> </a>
				</form><!-- /fs-form -->

				<!-- this updates the database -->
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

            			mysqli_query($conn, $sql);

            			/*if (mysqli_query($conn, $sql)) {
               					//echo "You have registered!";
               					//header ("Location: Thankyou.html");
            				} else {
               					echo "Error: " . $sql . "" . mysqli_error($conn);
            				}
						$conn->close();*/
					}
					
				?>
				
			</div><!-- /fs-form-wrap -->

			<!-- Related demos
			<div class="related">
				<p>If you enjoyed this demo you might also like:</p>
				<a href="http://tympanus.net/Development/MinimalForm/">
					<img src="img/relatedposts/minimalform1-300x162.png" />
					<h3>Minimal Form Interface</h3>
				</a>
				<a href="http://tympanus.net/Development/ButtonComponentMorph/">
					<img src="img/relatedposts/MorphingButtons-300x162.png" />
					<h3>Morphing Buttons Concept</h3>
				</a>
			</div>
		-->

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>