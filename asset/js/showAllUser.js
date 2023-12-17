function searchUser() {
    let userName = document.getElementById('search').value;
    
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/showALLUser.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let users = JSON.parse(this.responseText);

            let resultHtml = '<table border="1">';
            resultHtml += '<tr>';
            resultHtml += '<td>Name</td>';
            resultHtml += '<td>Email</td>';
            resultHtml += '<td>User Name</td>';
            resultHtml += '<td>Phone</td>';
            resultHtml += '<td>DOB</td>';
            resultHtml += '</tr>';

            for (let i = 0; i < users.length; i++) {
                resultHtml += '<tr>';
       
                resultHtml += '<td>' + users[i].Name + '</td>';
                resultHtml += '<td>' + users[i].Email + '</td>';
                resultHtml += '<td>' + users[i].UserName + '</td>';
                resultHtml += '<td>' + users[i].Phone + '</td>';
                resultHtml += '<td>' + users[i].DOB + '</td>';
                resultHtml += '</tr>';
                resultHtml += '<br>';
                resultHtml += '<br>';
            }
            document.getElementById('result').innerHTML = resultHtml;
        }
    }

    xhttp.send('searchUser=' + userName);
}