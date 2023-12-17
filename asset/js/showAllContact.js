
function searchContact() {
    let searchContact = document.getElementById('search').value;
    
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/showContactInfo.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let users = JSON.parse(this.responseText);

            let resultHtml = '<table border="1">';
            resultHtml += '<tr>';
            resultHtml += '<td>Company Name</td>';
            resultHtml += '<td>Email</td>';
            resultHtml += '<td>Phone</td>';
            resultHtml += '</tr>';

            for (let i = 0; i < users.length; i++) {
                resultHtml += '<tr>';
       
                resultHtml += '<td>' + users[i].CompanyName + '</td>';
                resultHtml += '<td>' + users[i].Email + '</td>';
                resultHtml += '<td>' + users[i].Phone + '</td>';
                resultHtml += '</tr>';
                resultHtml += '<br>';
                resultHtml += '<br>';
            }
            document.getElementById('result').innerHTML = resultHtml;
        }
    }

    xhttp.send('searchContact=' + searchContact);
}