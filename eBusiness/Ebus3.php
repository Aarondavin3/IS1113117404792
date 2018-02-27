<?php
session_start();
?>
<html>
    <head>
        <title>RECEIPT</title>
         <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css">
             <style type = "text/css">
              #Logo {
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
    background-color: #d966ff ;
}
                 #mainContent {
                                top:8em;
                                left:25em;
                                width:30em;
                                height:30em;
                                position:absolute;
                                border-style:groove;
                 }
             </style>
         </head></PHP>
    </head>
    <body>
       <ul>
        <li><a href = "Ebus1.php">Home</a></li>
        <li><a href ="Interests/cloud_services.html">Cloud Services</a></li>
        <li><a class = "active" href = "#RECEIPT">Purchase Receipt</a></li>
        </ul>
          <div id ="Logo">
        <img src="https://logos.textgiraffe.com/logos/logo-name/Cloud-designstyle-cloud-m.png">
    </div>
        <h1>Purchase Receipt</h1>
        <div id = "mainContent">
        <?php
        //Echo session varaibles that were set to the previous page
        echo "Name: " .$_SESSION["name"] . ".";
        echo "Total Price is $" .$_SESSION["total"] . "."; 
        echo "Name:" .$_SESSION["email"] . ".";
        ?>
        </div>
    </body>
</html>