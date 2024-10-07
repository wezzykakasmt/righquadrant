<?php
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Connect to database
require 'database.php';

// Update user profile information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $profile_picture = $_FILES['profile_picture']['name'];
    $username = $_POST['username'];
    $date_of_birth = $_POST['date_of_birth'];
    $NIN = $_POST['NIN'];

    // Update user information in database
    $sql = "UPDATE good_users SET profile_picture='$profile_picture', username='$username', date_of_birth='$date_of_birth', NIN='$NIN' WHERE id='$user_id' AND email='".$_SESSION['email']."' AND password='".$_SESSION['password']."'";
    $conn->query($sql);

    // Redirect to updated page
    header('Location: updatedprofile.php');
    exit;
}

// Close connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update your profile</title>
</head>
<style>
     .profile-picture-container{
        position: relative;
        width: 100px;
        height: 100px;
        /* border-radius: 50%; */
        overflow: hidden;
        background: black;
       

        border-top-left-radius: 1120px;
        border-bottom-left-radius: 1120px;
        border-top-right-radius: 1120px;
        border-bottom-right-radius: 1120px;
    }
    #profile-picture {
        width: 70;
        height: 100px;
        object-fit: center;
        backface-visibility: hidden;
        align-self: center;
        background-position: center;
        background-size: fill;
        /* border-radius: 50%; */
        overflow: visible;

        border-top-left-radius: 1120px;
        border-bottom-left-radius: 1120px;
        border-top-right-radius: 1120px;
        border-bottom-right-radius: 1120px;
       color: black;

    }
    #profile-picture-input{
        display: none;
        
    }
    label{
        position:;
        top: 0;
        left: 0;
        width: 50px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: silver;
    }
    img {
        border-top-left-radius: 300px;
        border-top-right-radius: 300px;
        border-bottom-left-radius: 300px;
        border-bottom-right-radius: 300px;
    }
</style>
<body>
    <center>
        <fieldset style="margin-top: 100px;">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h3 align="center" style="color: black; margin-top: 10px;">Profile Update</h3><br>

                <center><div class="profile-picture-container">
            <img id="profile-picture" class="profile-picture-container" src="" alt="Upload profile" title="Upload">
            <input type="file" id="profile-picture-input" name="profile_picture" class="profile-picture-container" accept="image/*">
            <label for="profile-picture-input">Upload</label><br><br>
         </div></center><br><br>   
<script>
    //Get the profile picture input and container
    const profilePictureInput = document.getElementById('profile-picture-input');
    const profilePictureContainer = document.getElementById('profile-picture-container');

    //Add event listener to the input
    profilePictureInput.addEventListener('change', (e) => {
        //Get the uploaded image
        const uploadedImage = e.target.files[0];

        //Display the uploaded image in the container
        const reader = new FileReader();
        reader.onload = (e) => {
            document.getElementById('profile-picture').src = e.target.result;
        };

        reader.readAsDataURL(uploadedImage);
    });
</script>             

                <p align="center">
                        <input type="text" class="name" name="username" id="username" autocomplete="off" placeholder="  Username"
                         style=" background: #F0F8FF; border-radius: 5px; 
                        outline: none; margin-right: 0px; 
                        border: none; letter-spacing: 1px; color: navy;" required ></label>
                    </p><br>

                    
                            <!-- <p align="center">
                                <label for="DOB" style="color: silver;"> Date-of-birth<span></span><br></label>
                                    <!--Day-->
                                 <!-- <select class="DOB" name="day" id="day" required>
                                   
                                    <option id="" value="01">01</option>
                                    <option id="" value="02">02</option>
                                    <option id="" value="03">03</option>
                                    <option id="" value="04">04</option>
                                    <option id="" value="05">05</option>
                                    <option id="" value="06">06</option>
                                    <option id="" value="07">07</option>
                                    <option id="" value="08">08</option>
                                    <option id="" value="09">09</option>
                                    <option id="" value="10">10</option>
                                    <option id="" value="11">11</option>
                                    <option id="" value="12">12</option>
                                    <option id="" value="13">13</option>
                                    <option id="" value="14">14</option>
                                    <option id="" value="15">15</option>
                                    <option id="" value="16">16</option>
                                    <option id="" value="17">17</option>
                                    <option id="" value="18">18</option>
                                    <option id="" value="19">19</option>
                                    <option id="" value="20">20</option>
                                    <option id="" value="21">21</option>
                                    <option id="" value="22">22</option>
                                    <option id="" value="23">23</option>
                                    <option id="" value="24">24</option>
                                    <option id="" value="25">25</option>
                                    <option id="" value="26">26</option>
                                    <option id="" value="27">27</option>
                                    <option id="" value="28">28</option>
                                    <option id="" value="29">29</option>
                                    <option id="" value="30">30</option>
                                    <option id="" value="31">31</option>
                                </select>

                                    Month --> -->
                                <!-- <select class="DOB" id="month" name="month" required>
                                   
                                    <option id="" value="January">January</option>
                                    <option id="" value="February">February</option>
                                    <option id="" value="March">March</option>
                                    <option id="" value="April">April</option>
                                    <option id="" value="May">May</option>
                                    <option id="" value="June">June</option>
                                    <option id="" value="July">July</option>
                                    <option id="" value="August">August</option>
                                    <option id="" value="September">September</option>
                                    <option id="" value="October">October</option>
                                    <option id="" value="November">November</option>
                                    <option id="" value="December">December</option>
                               </select> -->

                               <!--Year-->
                               <!-- <select class="DOB" id="year" name="year" required>
                                   
                                    <option id="" value="">1901</option>
                                    <option id="" value="">1902</option>
                                    <option id="" value="">1903</option>
                                    <option id="" value="">1904</option>
                                    <option id="" value="">1905</option>
                                    <option id="" value="">1906</option>
                                    <option id="" value="">1907</option>
                                    <option id="" value="">1908</option>
                                    <option id="" value="">1909</option>
                                    <option id="" value="">1910</option>
                                    <option id="" value="">1911</option>
                                    <option id="" value="">1912</option>
                                    <option id="" value="">1913</option>
                                    <option id="" value="">1914</option>
                                    <option id="" value="">1915</option>
                                    <option id="" value="">1916</option>
                                    <option id="" value="">1917</option>
                                    <option id="" value="">1918</option>
                                    <option id="" value="">1919</option>
                                    <option id="" value="">1920</option>
                                    <option id="" value="">1921</option>
                                    <option id="" value="">1922</option>
                                    <option id="" value="">1923</option>
                                    <option id="" value="">1924</option>
                                    <option id="" value="">1925</option>
                                    <option id="" value="">1926</option>
                                    <option id="" value="">1927</option>
                                    <option id="" value="">1928</option>
                                    <option id="" value="">1929</option>
                                    <option id="" value="">1930</option>
                                    <option id="" value="">1931</option>
                                    <option id="" value="">1932</option>
                                    <option id="" value="">1933</option>
                                    <option id="" value="">1934</option>
                                    <option id="" value="">1935</option>
                                    <option id="" value="">1936</option>
                                    <option id="" value="">1937</option>
                                    <option id="" value="">1938</option>
                                    <option id="" value="">1939</option>
                                    <option id="" value="">1940</option>
                                    <option id="" value="">1941</option>
                                    <option id="" value="">1942</option>
                                    <option id="" value="">1943</option>
                                    <option id="" value="">1944</option>
                                    <option id="" value="">1945</option>
                                    <option id="" value="">1946</option>
                                    <option id="" value="">1947</option>
                                    <option id="" value="">1948</option>
                                    <option id="" value="">1949</option>
                                    <option id="" value="">1950</option>
                                    <option id="" value="">1951</option>
                                    <option id="" value="">1952</option>
                                    <option id="" value="">1953</option>
                                    <option id="" value="">1954</option>
                                    <option id="" value="">1955</option>
                                    <option id="" value="">1956</option>
                                    <option id="" value="">1957</option>
                                    <option id="" value="">1958</option>
                                    <option id="" value="">1959</option>
                                    <option id="" value="">1960</option>
                                    <option id="" value="">1961</option>
                                    <option id="" value="">1962</option>
                                    <option id="" value="">1963</option>
                                    <option id="" value="">1964</option>
                                    <option id="" value="">1965</option>
                                    <option id="" value="">1966</option>
                                    <option id="" value="">1967</option>
                                    <option id="" value="">1968</option>
                                    <option id="" value="">1969</option>
                                    <option id="" value="">1970</option>
                                    <option id="" value="">1971</option>
                                    <option id="" value="">1972</option>
                                    <option id="" value="">1973</option>
                                    <option id="" value="">1974</option>
                                    <option id="" value="">1975</option>
                                    <option id="" value="">1976</option>
                                    <option id="" value="">1977</option>
                                    <option id="" value="">1978</option>
                                    <option id="" value="">1979</option>
                                    <option id="" value="">1980</option>
                                    <option id="" value="">1981</option>
                                    <option id="" value="">1982</option>
                                    <option id="" value="">1983</option>
                                    <option id="" value="">1984</option>
                                    <option id="" value="">1985</option>
                                    <option id="" value="">1986</option>
                                    <option id="" value="">1987</option>
                                    <option id="" value="">1988</option>
                                    <option id="" value="">1989</option>
                                    <option id="" value="">1990</option>
                                    <option id="" value="">1991</option>
                                    <option id="" value="">1992</option>
                                    <option id="" value="">1993</option>
                                    <option id="" value="">1994</option>
                                    <option id="" value="">1995</option>
                                    <option id="" value="">1996</option>
                                    <option id="" value="">1997</option>
                                    <option id="" value="">1998</option>
                                    <option id="" value="">1999</option>
                                    <option id="" value="">2000</option>
                                    <option id="" value="">2001</option>
                                    <option id="" value="">2002</option>
                                    <option id="" value="">2003</option>
                                    <option id="" value="">2004</option>
                                    <option id="" value="">2005</option>
                                    <option id="" value="">2006</option>
                                    <option id="" value="">2007</option>
                                    <option id="" value="">2008</option>
                                    <option id="" value="">2009</option>
                                    <option id="" value="">2010</option>
                                    <option id="" value="">2011</option>
                                    <option id="" value="">2012</option>
                                    <option id="" value="">2013</option>
                                    <option id="" value="">2014</option>
                                    <option id="" value="">2015</option>
                                    <option id="" value="">2016</option>
                                    <option id="" value="">2017</option>
                                    <option id="" value="">2018</option>
                                    <option id="" value="">2019</option>
                                    <option id="" value="">2020</option>
                                    <option id="" value="">2021</option>
                                    <option id="" value="">2022</option>
                                    <option id="" value="">2023</option>
                                    <option id="" value="">2024</option>
                                    <option id="" value="">2025</option>
                                </select>
                            </p><br>
                                 -->

                                 <center><input type="date" name="date_of_birth" class="name"></center>
                    <center>
                            <select id="gender" class="name" name="gender" style=" background: #F0F8FF; border-radius: 5px; outline: none; 
                             margin-right: 0px; border: none;" required>
                                <option id="null" value="null"> Gender</option>
                                <option id="" value="male">Male</option>
                                <option id="" value="female">Female</option>
                            </select>
                            </center>
                    <br>
                    <center>
                        <!-- <select class="name" style="background: silver; border-bottom-left-radius: none; border-bottom-right-radius: none;" name="identity">
                           
                            <option value="NIN">National Identification Number</option>
                            <!-- <option value="BVN">Bank Verification Number</option> -->
                        <!-- </select><br> --> -->
                        <input type="text" placeholder=" 11-Digits NIN" class="name" maxlength="11" name="NIN" required style="margin-left: 10px; 
                        margin-bottom: 10px; margin-right: 10px;"><br><br>
                        <center><br><button class="btn" name="update" style="width: 170px; background: linear-gradient(180deg, purple, orange); 
                        color: black;
                         margin-bottom: 0px; letter-spacing: none; border: none; opacity: 1.2;">Update</button></center>
                    </center>

                    
            </form><br>
            <script>
                alert("Note, This page contains a means of verification(KYC), Which may help you in future on password retrieval.");
            </script>
        </fieldset>
    </center>
</body>
</html>