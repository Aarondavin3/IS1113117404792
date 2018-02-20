<?php
session_start();
?>
<html>
    <head>
        <title>RECEIPT</title>
         <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css"></head></PHP>
    </head>
    <body>
        <h4>RECEIPT</h4>
        <?php
        //Echo session varaibles that were set to the previous page
        echo "Total Price is $" .$_SESSION["total"] . "."; 
        echo "Name:" .$_SESSION["email"] . ".";
        ?>
    </body>
</html>