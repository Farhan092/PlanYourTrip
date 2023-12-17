function FAQ(id) {
    let faq = document.getElementById('faq');

    faq.innerHTML = "";

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/FaqAnsr.php', true);

    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    let data = 'id=' + id;

    xhttp.send(data);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);

            if (response.status === 10) {
                faq.innerHTML = response.message;
            }
        }
    }
}
