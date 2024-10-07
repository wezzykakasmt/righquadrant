<!DOCTYPE html>
<html lang="en">
<script>
    // Get the input field and buttons
    const linkField = document.getElementById('link');
    const copyBtn = document.getElementById('copy_btn');
    const shareBtn = document.getElementById('share_btn');

    // Add an event listener to copy button
    copyBtn.addEventListener('click', () => {
        // Copy the text to the clipboard

        navigator.clipboard.writeText(linkField.value);
        alert('Copied');

        if (typeof document !== 'unidentified') {
            document.addEventListener('DOMContentLoaded', function() {
                var object = document.getElementById('link');
                if (object !== null) {
                    try {
                        object.innerText = 'text';
                        object.textContent = 'text';
                    } catch (error) {
                        console.log('Error writing text: ', error);
                    }
                } else {
                    console.log('Object is null or unidentified');
                }
            });
        } else {
            console.log('Document object is not available');
        }
    });

    // Add event listener to share the button
    shareBtn.addEventListener('click', () => {
        // Check if web share API is supported
        if (navigator.share) {
            // Share the link to other platforms
            navigator.share({
                title: 'Check out this link!',
                text: linkField.value,
                url: linkField.value,
            })
            .then(() => {
                alert('Link shared successfully');
            })
            .catch((error) => {
                alert('Error sharing the link, retry: ' + error);
            })
        } else {
            // Fallback solution for browsers that dont support web share API
            const shareLink = linkField.value;
            const shareMessage = 'Check out this link ' + shareLink;

            // Open email client
            const emailLink = 'mailto:?subject=' + encodeURIComponent('Check out this link!') + '&body=' + encodeURIComponent(shareMessage);
            window.open(emailLink, '_blank');

            // Open sms client (only works on mobiles devices)
            const smsLink = 'sms:?body=' + encodeURIComponent(shareMessage);
            window.open(smsLink, '_blank');

            alert('Link shared using fallback solution');
        }

    });
</script>


<?php
    // database connection
    include 'database.php';
    // Generate unique url
    $unique_id = "https://cashflow.net/" . substr(md5(uniqid(rand(), true)), 0, 6);

    //Update the user id with the current url
    $sql = "UPDATE users SET referrer = '$unique_id' WHERE id = $_SESSION[user_id]";
    mysqli_query($conn, $sql);

    


// include 'database.php';

// // GENERATE 6 UNIQUE CHARACTERS AS REFRERREL CODE
// $unique_id = "https://cashflow.net/" . substr(md5(uniqid(rand(), true)), 0, 6);

// // Create the link with the unique ID 
// // $link = "https://cashflow.net" . $unique_id;

// // Store the link in the "users" table "referrelLink" row inside the database (rightquadrant)
// $id = 7; // Replace with actual user ID
// $sql = "UPDATE users SET referrelLink = '$unique_id' WHERE $id = user_id";

// // if (mysqli_query($conn, $sql)) {
// //     // Display the link within HTML tags
// //     echo "<a href='" . $unique_id . "'>" . $unique_id . "</a>";
// //    } else {
// //     echo "Error storing link: " . mysqli_error($conn);
// //    }

//     // Close the database connection
//    mysqli_close($conn);
    



?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Refer</title>
</head>
    <style>
        * {
            user-select: none;

        }
        .referallink{
            width: 320px;
            height: 40px;
            background-color: aquamarine;
            color: blue;

        }
        .copy{
            width: 150px;
            height: 36px;
            background: rgb(200, 252, 148);
            color: purple;
            margin-top: 60px;
            margin-right: 20px;
            border-radius: 2px;
            border: none;
            cursor: default;
            
        }
        .copy:hover{
            width: 155px;
            height: 36px;
            background: rgb(128, 210, 47);
            color: orangered;
            margin-top: 60px;
            margin-right: 20px;
            border-radius: 2px;
            border: none;
            cursor: pointer;
            
        }
        .share{
            width: 150px;
            height: 36px;
            background: #f79f3c;
            color: rgb(10, 96, 255);
            margin-top: 60px;
            margin-right: 20px;
            border-radius: 2px;
            border: none;
            cursor: pointer;
        }
        .share:hover{
            width: 155px;
            height: 36px;
            
            background: #ff8800;
            color: rgb(239, 179, 179);
            margin-top: 60px;
            margin-right: 20px;
            border-radius: 2px;
            border: none;
            cursor: pointer;
        }
        .container{
            margin-top: 150px;
        }
        .url-panel {
            user-select: none;
            user-zoom: none;
            width: 320px;
            height: 35px;
            word-wrap: break-word;
            outline: none;
            border: none;
            text-align: center;
            font-family: serif;
            font-weight: 100;
            
            font-style: normal;
            font-size: larger;
            letter-spacing: 2px;
            color: darkcyan;

        }
    </style>
<body>
    <form action="referral.php" method="POST">
<h2 align="center" style="color: purple;"> INVITE YOUR FRIENDS AND EARN MORE VALUE</h2><br>
<center><li>Share your link, Earn a reward of <br> N25</li></center>
    <div align="center" class="container">

        <div align="center">
            <input type="text" name="link" id="link
            " class="url-panel" value=" <?php echo "$unique_id"; ?>" /><br>
            <center><button class="copy" id="copy_btn">Copy</button><button id="share_btn" class="share">Share</button></center></div>
        </div>
    </div>
</form>
    


   



   <!--Footer Navs-->
   <center><fieldset class="footer" align="center">        
                        
    <aside>
        <a href="home.html">
            <span>
                <button class="tools-btn"><b><i class="bi bi-house-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                  </svg></b>
                    
                   <small style="font-weight: bold; font-size: large; color: brown;">Home</small>
                        <!-- <small>
                            <div>
                                Home
                                    </div>
                                        </small> -->
                                            </button>   
                                                </span>
                                                    </a>
                                                        </aside>

    <aside>
        <a href="referrel.html">
            <span>
                <button class="tools-btn">
                    <i class="bi bi-people-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                      </svg>
                   <small style="font-weight: bold; font-size: large; color: brown;">Refer</small>
                        <!-- <small>
                                <div>
                                    Refer
                                        </div>
                                            </small> -->
                                                </button>
                                                    </span>
                                                        </a>
                                                            </aside>


                                                            
    <aside>
        <a href="counttime.html">
            <span>
                <button class="tools-btn">
                    <i class="bi bi-clock-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                      </svg>
                   <small style="font-weight: bold; font-size: large; color: brown;">Count</small>
                        <!-- <small>
                                <div>
                                    
                                        </div>
                                            </small> -->
                                                </button>
                                                    </span>
                                                        </a>
                                                            </aside>
   
    <aside>
        <a href="profile.html">
            <span>
                <button class="tools-btn">
                    <i class="bi bi-person-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                      </svg> <br>   
                <small style="font-weight: bold; font-size: large; color: brown;">Me</small>
                        <!-- <small>
                            <div>
                                Me
                                    </div>
                                        </small> -->
                                            </button>   
                                                </span>
                                                    </a>
                                                        </aside>
                                                        
            
                                                        
                                                           
                                                          
                                                          
                                                          
                                                            
                                               
</body>
</html>