<?php
//Connect to the databse
require 'database.php';

// $mysqli = require __DIR__ . "/database.php";
// $sql = sprintf("SELECT * FROM users WHERE email = '%s'", $mysqli->real_escape_string($_POST['email']));

// $result = $mysqli->query($sql);

// $is_available = $result->num_rows === 0;

// header("Content-Type: application/json");

// echo json_encode(["available => $is_available"]);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // $username = $_POST["username"];
    // $phone = $_POST['phone'];

    // Check for duplicate email, phone, username
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists, kindly login!');</script>";
    } else {
        // Insert new user into database
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            session_start();

            //Set session variables
            // $_SESSION['name'] = $name;
            // $_SESSION['email'] = $email;
            // $_SESSION['password'] = $password;

            
            echo "<script>alert('You are successfully been registered!');
                setTimeout(function() {
                    window.location.href='home.php';
                    }, 2000);
            </script>";
            exit;
    
        } else {
            echo "Error, We are having issue registering you. retry: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

?> 




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" />
	
	
	<title>Sign Up</title>
</head>
	<style type="text/css">
		div{
    color: rgb(13, 13, 13);
/*    background-color: rgb(235, 235, 235);*/
    
    border: 0px solid rgb(248, 177, 239);
    margin-top: 0px;
    /* width: 280px;
    
    height: 35px; */
   background: none;
   margin-left: 0;
   border-radius: 20px;
}
.nameentry{
    width: 200px;
    height: 33px;
    border: 0px solid rgb(248, 177, 239);
    margin-top: 0px;
    color: rgb(13, 13, 13);
    background-color: rgb(235, 235, 235);
    /* border-radius: 4px; */
    /* border-radius: 20px;  */
    border-top-right-radius: 14px;
    border-bottom-right-radius: 14px;
    border-bottom-left-radius: 1px;
    border-top-left-radius: 1px;
    
    text-decoration: none;
    outline: none;
}
.form-group {
    border-top-right-radius: 18px;
    border-bottom-right-radius: 18px;
    border-bottom-left-radius: 18px;
    border-top-left-radius: 18px;
    width: 260px;
    height: 35px;
    background-color: rgb(235, 235, 235);
}


	</style>
<body>

	<!-- <p align="left" class="arrow">&#8592;</p> -->
	<center><fieldset style="width: 370px;"><form action=" ?php echo $_SERVER['PHP_SELF'];?" method="post" style="margin-right: 10px; margin-left: 10px;">
	<div><br>
		<h3 align="center" style="color: black;">Create An Account</h3><br>
		<center><div><h style="color: rgba(0, 0, 0, 0.382);"><small>Provide the necessary details in the fields below</small><br>
		
		</div></center>

		<!-- <center><p class="field" align="left">Name<br></p>
			<input type="text" name="fullName" class="name"></div><br> -->

			<!-- <p align="left"><label for="username"> Name <span></span><br>
				<input type="text" class="name" name="name" id="name" autocomplete="off" required></label>
			   </p> --><br>
			   <div class="name">
			  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
				<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
			  </svg>
			 
			  <h style="color: rgba(65, 65, 65, 0.464);"> 
				<input required class="name" id="name" name="name" type="text" placeholder="  Name" />
			</div>
				<br>
			

			<!-- <p align="left"><label for="email"> Email <span></span><br>
				<input type="email" class="name" name="email" id="email" autocomplete="off" required ></label>
			</p> -->
			<div class="name">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
					<path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
					<path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
				  </svg>

				<h style="color: rgba(65, 65, 65, 0.464);"> 
				<input type="email" class="name" id="email" name="email" placeholder="  Email" />
 			</div><br>

             <!-- <p align="center">
                        <input type="text" class="name" name="username" id="username" autocomplete="off" placeholder="Username" style=" background: #F0F8FF; border-radius: 5px; outline: none;
    height: 40px;
    width: 315px;
    margin-right: 0px;
    border: none;
;" required ></label>
                    </p> -->
                    

                    <!-- <div class="phonenumberx" align="left">Phone Number
                        <input type="tel" maxlength="26" value="&#x1F1F3;&#x1F1EC; | +234" id="phone-number" name="phone_number" class="name" required align="center" />
                            </div> -->

                            
 
                                
                                    
                                   
                                    
                                    
                                    
                                    

                                
                               
                            
                            

                            

                    <!-- <div class="container-phone">
                                <select class="country-codes">
                                    <option id="" value="">NG +234</option>
                                    <option id="" value="">ZA +27</option>
                                    <option id="" value="">EG +20</option>
                                    <option id="" value="">MA +212</option>
                                    <option id="" value="">DZ +213</option>
                                    <option id="" value="">ET +251</option>
                                    <option id="" value="">KE +254</option>
                                    <option id="" value="">GH +233</option>
                                    <option id="" value="">UG +256</option>
                                    <option id="" value="">MZ +258</option>
                                </select>
                                    
                            <input type="tel" class="phone-box" /><br><br>
                        </div>
                            <br> -->

                    
                    

			<!-- <p align="left"><label for="email"> Password<span></span><br>
				<input type="password" class="name" name="password" id="password" autocomplete="off" required ></label>
				<br> -->
				<div class="name">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
						<path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m0 5.996V14H3s-1 0-1-1 1-4 6-4q.845.002 1.544.107a4.5 4.5 0 0 0-.803.918A11 11 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664zM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
					  </svg>
					<input type="password" id="password" class="name" name="password" placeholder="  Password" />
					<h style="color: rgba(65, 65, 65, 0.464);"> 
				</div>
				<p ><small style="color: rgb(164, 138, 189); font-size: 13px; color: indianred;">Note: <i style="font-size: small; color: orangered;">Password must not be the one attached to email.</small></i></p>
			</p><br>

			<p align="left"><input type="checkbox" checked> I've read and agree to  <a href="#">Terms & Condition</a></p><br><br>
			<center><button class="btn">Register</button></center><br><br>
</center>
			
	</div><br>
	<p align="center">or</p><br>
	<p align="center">
		<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
			<path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
		  </svg></a>
		<a href="phoneindex.php" class="phone-icon" style="text-decoration: none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
				<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
			  </svg>
		</a>
		<a href="iphoneindex.php" class="phone-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
				<path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
				<path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
			  </svg>
		</a>
		<br>
	</p>
	<br>
	<br>
	<p align="center" style="color: black;"> Already have an Acoount? <a href="login.php" style="text-decoration: none;"> Login </a><br><br>
	</p>
</form>
</fieldset></center>
</body>
</html>