

function signupCheck() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let userName = document.getElementById('userName').value;
    let phone = document.getElementById('phone').value;
    let password =document.getElementById('password').value;
    let rePassword =document.getElementById('rePassword').value;
    let dob =document.getElementById('dob').value;

let checkUserName= false;
let checkPass=false;

let validUser="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

let validPass="@#*.";

for(let i=0;i<userName.length;i++)
{
    for(j=0;j<validUser.length;j++)
    {
        if(userName[i]==validUser[j])
        {
            checkUserName=true;
        }
   
    }
}

for(i=0;i<password.length;i++)
{
    for(j=0;j<validPass.length;j++)
    {
        if(password[i]==validPass[j])
        {
            checkPass=true;
        }
   
    }

}
if(name==""){
    let nameError = "<span style='color:red;'> Warning !!!! Name is required.</span>";
    document.getElementById("Name").innerHTML = nameError;
    
    return false;
}

    if(name==""||email==""||phone==""||rePassword==""||dob==""||userName==""||password==""){
        alert('Please provide all information.');
        return false;
    }
    if(password!=rePassword){
        alert('!!!Password must be same.');
        return false;
    }
    if (!checkUserName) {
        alert('Write a valid User name');
        return false;
    }
    if(!checkPass){
        alert('!!!Password must be contain @>.');
        return false;
    }
    else{
        return true;
    }
   
}

function checkEmailAvailability() {
    let email = document.getElementById('email').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.send("email=" + email); 
}

function accountCheck(){
    let userName = document.getElementById('userName').value;
    let password = document.getElementById('userName').value;

}

function userNameCheck(){
    let userName = document.getElementById('userName').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                document.getElementById('checkUserName').innerHTML = this.responseText;
               
            } else {
                alert("Error: " + this.status);
            }
        }
    };
    xhttp.send('userName=' + userName);
    return false; 
}
