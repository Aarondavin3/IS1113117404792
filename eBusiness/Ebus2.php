<?php
// start the session
session_start();

?>

<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript" src="ebus2_validator.js"></script>
         <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css">
         <style type = "text/css">
             #content {
                  top:8em;
                  left:25em;
                  width:30em;
                  height:30em;
                  position:absolute;
                  border-style:ridge;
             }
             #Logo2 {
                top:4em;
                left:2em;
                position: absolute;
        }
              ul{
                list-style-type:none;
                margin:0;
                padding:0;
                width:100%;
                overflow:hidden;
                background-color:#42d7f4 ;
}

                li{
                    float: left;
                }
                
                li a{
                    display: block;
                    color:black;
                    text-align:center;
                    padding: 16px 18px;
                    text-decoration: none;
                }
                
                li a:hover {
                    background-color:#d966ff ;
                }
                .active {
                    background-color: #d966ff;
                }
                input[type=text] {
                                           border: 2px solid blue;
                                           border-radius: 4px;
                                           text-align:center;
                }
                input[type=email] {
                                           border: 2px solid blue;
                                           border-radius: 4px;
                                           text-align:center;
                }
                input[type=password] {
                                           border: 2px solid blue;
                                           border-radius: 4px;
                                           text-align:center;
                }
                 button[type=submit]:disabled {
                                           background-color: grey;
                                           border-radius: 2px;
                                           border:none;
                                           color: black;
                                           padding: 5px;
                                           cursor: pointer;
                                           
                       }
                        button[type=submit]:enabled {
                                           background-color: #42d7f4;
                                           border-radius: 2px;
                                           border:none;
                                           color: black;
                                           padding: 5px;
                                           cursor: pointer;
                                           
                       }
                       button[onclick] {
                           background-color: #d966ff;
                                           border-radius: 2px;
                                           border:none;
                                           color: black;
                                           padding: 5px;
                                           cursor: pointer;
                       }
         </style>
         
         
         
         </head></PHP>
    </head>
    <body>
      <ul>
        <li><a href = "Ebus1.php">Home</a></li>
        <li><a href ="../Interests/cloud_services.html">The Cloud Vendors</a></li>
        <li><a href ="../cloud.html">Cloud Services</a></li>
        <li><a class = "active" href = "#PAYMENT">Payment Details</a></li>
        <li style ="float:right"><a href ="../cloud_homepage.html">Cloud Home</a></li>
        </ul>
          <div id ="Logo2">
        <img src="https://logos.textgiraffe.com/logos/logo-name/Cloud-designstyle-cloud-m.png">
    </div>
        <h2>Please enter your payment details</h2>
        <div id ="content">
            <form name = "myForm"  method="POST" action="Ebus3.php">
                    <br>
                    <label for = "name">
                        <strong> &nbsp; Name:</strong>
                        <br>
                        &nbsp;<input type ='text' id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for "email">
                        <strong>&nbsp; Email:</strong>
                        <br>
                        &nbsp;<input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    &nbsp;&nbsp;<label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   &nbsp;<input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                &nbsp;&nbsp;&nbsp;<button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onClick="validateDetails()">Validate</button>
            
        </div>
        
       
        
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        
        ?>
        
        </body>
</html>