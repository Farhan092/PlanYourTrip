function addcontact() {
    let companyName = document.getElementById('companyName').value;
    let email = document.getElementById('email').value;
    let number = document.getElementById('phone').value;
    let data = '&email=' + email +'&companyName=' + companyName +  '&phone=' + number;

    if (companyName === "" || email === "" || number === "") {
        alert("Please fill in all fields");
        return false;
    }

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/addContact.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseText === "Success") {
                    alert("Successfully Added contact info");
                } else {
                    alert("Error adding contact info: " + this.responseText);
                }
            } else {
                alert("Error: " + this.status);
            }
        }
    };
    xhttp.send('data=' + data);
    return false; 
}
