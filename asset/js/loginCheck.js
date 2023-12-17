
function logIn() {
 
    let userName = document.getElementById('userName').value;
    let password =document.getElementById('password').value;
    if(userName==""){
        let userNameError = "<span style='color:red;'> Warning !!!!Please enter your username.</span>";
        document.getElementById('username').innerHTML=userNameError;
        return false;
    }
    if(password==""){
        let passwordError = "<span style='color:red;'> Warning !!!!Please enter your password.</span>";
        document.getElementById('Password').innerHTML=passwordError;
        return false;
    }

    else{
        let xhttp = new XMLHttpRequest();
        let std = {
            'userName': userName,
            'password': password,
             
    
        }
    
    let data  = JSON.stringify(std);

    xhttp.open('POST', '../controller/loginCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
               
               let result = JSON.parse(this.responseText);
                if (result.status === "success") {
                    alert("Login successful");
                    window.location.href = result.redirect;
                } else if(result.status === "wrongPassword") {
                    document.getElementById('wrongPass').innerHTML="Wrong password !!"
                 
                }
                else{
                    document.getElementById('signUp').innerHTML="Not a valid User Sign Up Now >"

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