<?php
session_start();
//Connect to the databse
require 'database.php';



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    // $country_code = $_POST['country_code'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   

    // Check for duplicate email, phone, username
    $query = "SELECT * FROM users WHERE phone = '$phone'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Phone already exists, kindly login!');</script>";
    } else {
        // Insert new user into database
        $query = "INSERT INTO users (name, phone, password) VALUES ('$name', '$phone', '$password')";
        if (mysqli_query($conn, $query)) {
            session_start();

            //Set session variables
            $_SESSION['name'] = $name;
            // $_SESSION['country_code'] = $country_code;
            $_SESSION['phone'] = $phone;
            $_SESSION['password'] = $password;

            
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Sign Up</title>
    <link rel="stylesheet" href="style.css"/>
    
   
</head>
<style>

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
    #verify-otp-btn{
        width: 90px;
        margin-right: 20px;
        height: 45px;
        background: rgb(106, 64, 95);
        border-radius: 10px;
        border: none;
        color: white;
    }
    #verify-otp-btn:hover{
        width: 90px;
        margin-right: 20px;
        height: 45px;
        background: rgb(138, 71, 121);
        border-radius: 10px;
        border: none;
        color: white;
        cursor: pointer;
    }
    #generate-otp-btn{
        width: 90px;
        margin-right: 20px;
        height: 45px;
        background: rgb(92, 106, 64);
        border-radius: 10px;
        border: none;
        color: white;
        
    }
    #generate-otp-btn:hover{
        width: 90px;
        margin-right: 20px;
        height: 45px;
        background: rgb(113, 130, 78);
        border-radius: 10px;
        border: none;
        color: white;
        cursor: pointer;
    }
</style>
<body>


    
    <center><fieldset style="width: 370px;">
        <form class="" action="" id="otp-form" method="POST">
            <h3 class="" align="center">Enter Phone Number</h3><br>
            <center><div><h style="color: rgba(0, 0, 0, 0.382);"><small>Provide the necessary details in the fields below</small><br><br>
		
		</div></center>


            <!-- <div class="container-phone"> -->
            <center><div class="name">
			  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
				<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
			  </svg>
			 
			  <h style="color: rgba(65, 65, 65, 0.464);"> 
				<input required class="name" id="name" name="name" type="text" placeholder="  Name"  autocomplete="off"/>
			</div></center>
				<br>
              <!-- <li>
            <center><select class="country-codes" id="coutry_code" name="country_code">
                <option id="" value="NG +234">NG +234</option>
                <option id="" value="ZA +27">ZA +27</option>
                <option id="" value="EG +20">EG +20</option>
                <option id="" value="MA +212">MA +212</option>
                <option id="" value="DZ +213<">DZ +213</option>
                <option id="" value="ET +251">ET +251</option>
                <option id="" value="KE +254">KE +254</option>
                <option id="" value="GH +233">GH +233</option>
                <option id="" value="UG +256">UG +256</option>
                <option id="" value="MZ +258">MZ +258</option>
            </select>
                
        <input type="tel" class="phone-box" phone-number" name="phone" id="phone" /></center></li><br> -->

        <center><div class="name">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
				<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
			  </svg>
					<input type="tel" id="phone" class="name" name="phone" placeholder="  Phone" />
					<h style="color: rgba(65, 65, 65, 0.464);"> 
				</div></center><br>

    
    <!-- </div><center><input type="text" class="otp-box" maxlength="4" placeholder="  OTP" id="otp" name="otp" /></center><br><br>
    <div name="buttons" align="center"><button id="generate-otp-btn" name="buttons">Send</button>
    <button id="verify-otp-btn" name="buttons"> Verify</button>

    </div><br> -->
    
    
      <!--Otp panel-->
    <!-- <div align="center"><input type="tel" maxlength="6" placeholder=" OTP" style="border-top-left-radius: 4px; border-bottom-left-radius: 4px;" class="phone-box"><button class="country-codes" 
      style="background: brown; border-top-left-radius: 0px; border-bottom-left-radius: 0px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; color: silver; letter-spacing: 1px; width: 80px;">Send</button></div><br></li> -->
      <center><div class="name">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
						<path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m0 5.996V14H3s-1 0-1-1 1-4 6-4q.845.002 1.544.107a4.5 4.5 0 0 0-.803.918A11 11 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664zM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
					  </svg>
					<input type="password" id="password" class="name" name="password" placeholder="  Password"  autocomplete="off"/>
					<h style="color: rgba(65, 65, 65, 0.464);"> 
				</div><br></center>

        <center>

			<p align=""><input type="checkbox" checked> I've read and agree to  <a href="#">Terms & Condition</a></p></center><br>

        <br><center><button class="btn">Register</button><br><br></center>
        </form></fieldset></center>
        <p align="center">or</p><br>
	<p align="center">
		<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google"  viewBox="0 0 16 16">
			<path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
		  </svg></a>
		<a href="phoneindex.php" class="phone-icon" style="text-decoration: none;">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" color="red" viewBox="0 0 16 16">
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
    

<script>
            const form = document.getElementById('otp-form');
const phoneNumberInput = document.getElementById('phone-number');
const otpInput = document.getElementById('otp');
const generateOtpBtn = document.getElementById('generate-otp-btn');
const verifyOtpBtn = document.getElementById('verify-otp-btn');

generateOtpBtn.addEventListener('click', generateOtp);
verifyOtpBtn.addEventListener('click', verifyOtp);

function generateOtp() {
  const phoneNumber = phoneNumberInput.value;
  //Api key
  const api_key = 'TLMtMdmkysRToVdeIEbPcTJHZeRMbGWPowzMJpKAjPiplPwWOSdxxBEFErhobY';
  // Api Secret
  const api_secret = 'NUsaibatuh,1998@';
  
  //Base url
  axios.post('(https://v3.api.termii.com)', {
    api_key,
    api_secret,
    number: phoneNumber,
    brand: 'Cashflow',
    code_length: 4
  })
  .then(response => {
    console.log(response.data);
    // Store the request ID for verification
    const requestId = response.data.request_id;
    localStorage.setItem('requestId', requestId);
  })
  .catch(error => {
    console.error(error);
  });
}

function verifyOtp() {
  const otp = otpInput.value;
  const requestId = localStorage.getItem('requestId');
  const api_key = 'YOUR_API_KEY';
  const api_secret = 'YOUR_API_SECRET';
  
  axios.post('(link unavailable)', {
    api_key,
    api_secret,
    request_id: requestId,
    code: otp
  })
  .then(response => {
    if (response.data.status === '0') {
      console.log('OTP verified successfully!');
    } else {
      console.error('OTP verification failed!');
    }
  })
  .catch(error => {
    console.error(error);
  });
}


        </script>
    

</body>
</html>