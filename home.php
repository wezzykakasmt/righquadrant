<?php
require 'database.php';




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->


    <title>Cash Flow</title>
</head>
<body>
    <p align="left" class="toggle">
        
    
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
          </svg><br>
          <h style="">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
              </svg><br> -->

              <!--Wallet icon panel-->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z"/>
                <path d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z"/>
              </svg> Balance
              <!--Balance-toggle-icon-->

            
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="toggle-button" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
              </svg><br>

              <!--Balance panel-->

              <!--Naira Sign-icon-->
    <div value="" id="toggle-button" style="background: white; border: none; font-weight: 200; font-size: 0.8rem; margin-left: 10px; width: 15px; ">&#x20A6;</div>
    <input type="button" id="balance-value" style="background: white; margin-left: 0px; border: none; font-weight: 800; font-size: 1.14em;" value="0.00"><br>
           <br>
        </p>   
        
        <br><br>

        <center>
<div class="header-buttons">
   
<a href="#" style="text-decoration: none;">
   <button class="deposit-btn">
       
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="black" font-size="1" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5M8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6"/>
                  </svg>
            </i>
            <br>
             Add<br><br>
        
   </button></a>
   
<br><a href="cashout.html" style="text-decoration: none;">
   <button class="cashout-btn" align="center" >
    
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" color="black" font-size="1" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5m-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5"/>
              </svg>
        </i><br>
        
           Cashout<br><br>
       
    
</button></a>

<br><a href="#" style="text-decoration: none;">
   <button class="other-btn" align="center" >
    
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="black" fill="currentColor" class="bi bi-sort-down-alt" viewBox="0 0 16 16">
                <path d="M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5"/>
              </svg>
        </i>
        <br>
        Upgrage<br><br>
    
</button></a>
   </div></center>
  
    <br>

   <!--Tiers-->
   <center>
        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">VIP 1</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N50 Daily<br>Price N500<br>Total Profit N700<br>Life Span 14Days
            <img src="tier-images/1.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">VIP 2</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N105 Daily<br>Price N1500<br>Total Profit N3150<br>Life Span 30Days
            <img src="tier-images/1.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">VIP 3</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N125 Daily<br>Price N2500<br>Total Profit N5625<br>Life Span 45Days
            <img src="tier-images/1.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">VIP 4</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N250 Daily<br>Price N5000<br>Total Profit N15000<br>Life Span 45Days
            <img src="tier-images/1.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">VIP 5</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N375 Daily<br>Price N7500<br>Total Profit 33750<br>Life Span 90Days
            <img src="tier-images/1.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">AUTO 1</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N500 Daily<br>Price N10000<br>Total Profit N22500<br>Life Span 45Days
            <img src="tier-images/2.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">AUTO 2</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N750 Daily<br>Price N15000<br>Total Profit N33750<br>Life Span 45Days
            <img src="tier-images/2.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>

        <div class="tier"  style="margin-left: 10%; margin-right: 10%; "><h1 align="center" style="color: rgb(116, 121, 119); padding-top: 10px;">AUTO 3</h1>
            <p align="left" style="font-weight: 800; font: bolder; padding-left: 20px; padding-top: 20px;">Earn N833 Daily<br>Price N25000<br>Total Profit N50000<br>Life Span 60Days
            <img src="tier-images/2.jpg" width="75" height="75" style="border-radius: 10px; margin-right: 20px;" align="right" value="N500"><br><br>

            <!-- <p align="center"><i>Lorem ipsum dolor sit amet consectetur, <br>
                adipisicing elit. Cum repellendus sint molestiae culpa expedita<br>
                 provident voluptatibus delectus rerum ab dolores.<br> Repellendus distinctio, ?</p><br> -->
            <a href="https://www.google.com/url?q=https://paystack.com/pay/PRQ_1zhvvm2o1f4epes&source=gmail&ust=1724955137122000&usg=AOvVaw3V_Jipzrp-jGnfxc3N-5y3">
               <center> <button style="border: none; color: black; background: rgb(252, 117, 68); padding: 10px 10px 10px 10px; border-radius: 3px; width: 75px;">
                    Purchase
                </button> </center>
            </a>
            <br><br>          
           
        </div><br><br>
    </center>




























   <!--Footer Navs-->
    <center><fieldset class="footer" align="center">        
                        
        <aside>
            <a href="home.php">
                <span>
                    <button class="tools-btn"><b><i class="bi bi-house-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
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
            <a href="referrel.php">
                <span>
                    <button class="tools-btn">
                        <i class="bi bi-people-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" color="" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
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
            <a href="counttime.php">
                <span>
                    <button class="tools-btn">
                        <i class="bi bi-clock-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                          </svg>
                       <small style="font-weight: bold; font-size: large; color: brown;">Cashback</small>
                            <!-- <small>
                                    <div>
                                        
                                            </div>
                                                </small> -->
                                                    </button>
                                                        </span>
                                                            </a>
                                                                </aside>
       
        <aside>
            <a href="profile.php">
                <span>
                    <button class="tools-btn">
                        <i class="bi bi-person-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
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
                                                            
                
                                                            
                                                               
                                                              
                                                              </fieldset>
    </center></body></html>