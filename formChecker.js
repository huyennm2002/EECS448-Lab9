function formCheck(){
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let shippingOptions = document.getElementsByName('shipping');
    let q1 = document.getElementById('item1').value;
    let q2 = document.getElementById('item2').value;
    let q3 = document.getElementById('item3').value;
    
    console.log(Number.isInteger(q1));
    console.log(Number.isInteger(q2));
    console.log(Number.isInteger(q3));
    let chosenOption = "";
    if(username === ""){
        alert("Username is required!");
        return false;
    }

    if(password === ""){
        alert("Password is required!");
        return false;
    }
    for(let i = 0; i < shippingOptions.length; i++){
        if(shippingOptions[i].checked){
            chosenOption = shippingOptions[i].value;
            break;
        }
        
    }
    if (chosenOption === "") {
        alert("Please pick a shipping option.");
        return false;
    }
    if(q1 === "" || q2 === "" || q3 === ""){
        alert("Please enter your item quantity!");
        return false;
    }
    else{
        if(isNaN(q1) || isNaN(q2) || isNaN(q3)){
            alert("Please enter number for quantity");
            return false;
        }
        else{
            if(q1 < 0 || q2 < 0 || q3 < 0){
                alert("Please enter a positive quantity");
                return false;
            }
        }
    }
}
