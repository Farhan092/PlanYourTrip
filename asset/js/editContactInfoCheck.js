function check() {
 
    let companyName = document.getElementById('company').value;
    let email = document.getElementById('email').value;
    let number = document.getElementById('phone').value;
    if (companyName === "" || email === "" || number === "") {
        alert("Please fill in all fields");
        return false;
    }
    else{
        return true;
    }
   
}