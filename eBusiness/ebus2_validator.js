/* global $ */
function validateDetails(){
    
    var pin;
    
    
    pin = document.getElementById("user_pin").value;
  
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    function nameValidate() {
        
    var Firstname;
    Firstname = document.getElementById("Firstname").value;
    
    if (Firstname == ""){
        alert("Please enter your Name to continue");
    }
        else{
            enablebtnPurchase();
            
        }
    }
    


function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}