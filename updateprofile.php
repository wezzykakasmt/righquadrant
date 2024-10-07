<?php
session_start();
require 'database.php';



//Query to select data from databse



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<style>
    form{
        margin-top: 4rem;
    }
    .profile-picture-container{
        position: relative;
        width: 50px;
        height: 100px;
        /* border-radius: 50%; */
        overflow: hidden;
        background: slategrey;

        border-top-left-radius: 360px;
        border-bottom-left-radius: 360px;
        border-top-right-radius: 360px;
        border-bottom-right-radius: 360px;
    }
    #profile-picture {
        width: 50px;
        height: 100px;
        object-fit: cover;
        /* border-radius: 50%; */

    }
    #profile-picture-input{
        display: none;
    }
    label{
        position: absolute;
        top: 0;
        left: 0;
        width: 50px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
</style>
<body>
   
    <center style="margin-top: 150px;">

            
           <li><div class="form-group-profile"><a href="signout.php" style="text-decoration: none;">
                <!-- <i class="bi bi-box-arrow-right"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-box-arrow-right" color="purple" opacity="0.6" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg><span class="profile"><small>Sign Out</small></span> <h style="opacity: 0.6; color: purple;" ></a>
            </div> </li>
        </ul>
       </div>
    </center>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

    




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
    
</body>
</html>