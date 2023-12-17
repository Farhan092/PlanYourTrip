function depositeMoneyCheck(){
    let paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
    let accountNo = document.getElementById('acNo').value;

    if(!paymentMethod){
    alert("Please select a payment method");
      return false;
    }
    if(accountNo==""){
        alert("Please Enter your account number");
      return false;

    }
    else{
        return true;
    }
}

function depositeMoney(){
  let amount = document.getElementById('amount').value;
  let password = document.getElementById('password').value;
  
  if(amount==""){
    let Amount = "<span style='color:red;'> Warning !!!!Please enter your password.</span>"
    document.getElementById('Amount').innerHTML= Amount;
    return false;
    }
    if(password==""){
      let Password = "<span style='color:red;'> Warning !!!!Please enter your password.</span>"
      document.getElementById('Password').innerHTML= Password;
      return false;

    }
    else{

      let xhttp = new XMLHttpRequest();
      let std = {
          'amount': amount,
          'password': password,
      }
      
       
    let data  = JSON.stringify(std);

    xhttp.open('POST', '../controller/depositeMoneyValidation.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
               
               let result = JSON.parse(this.responseText);
                if (result.status === "success") {
                   
                    let msg ="<span style='color:red;'> Deposited Amount :" + amount + ".</span>";
                    document.getElementById("result").innerHTML = msg ;
                } else if(result.status === "unsuccessful") {
                    document.getElementById('unsuccessful').innerHTML="Wrong password !!"
                    alert("success");
                 
                }
              
            } else {
                alert("Error: " + this.status);
            }
        }
    };
    xhttp.send('std=' + data);
    return false; 
          
     

        
    }


}
