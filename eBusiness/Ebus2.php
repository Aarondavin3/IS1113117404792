<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">

                    <label for="user_email">Email</label>
                    <input type="email" id="user_email" name="user_email" placeholder="Email Address">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
        </div>
        
        <?php  
          $_SESSION["total"] = $_POST["total"];
        ?>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>