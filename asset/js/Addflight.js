function Flight() {
    let price = document.getElementById('price').value;
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    let date = document.getElementById('date').value;
    let time = document.getElementById('time').value;
    let Add = document.getElementById('Add');

    Add.innerHTML = "";

    let fn = 0;
    let A = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for (let i = 0; i < price.length; i++) {
        for (let j = 0; j < A.length; j++) {
            if (price[i] == A[j]) {
                fn = 1;
                break;
            }
        }
    }

    if (price == "") {
        alert('Please enter price');
    } else if (fn == 1) {
        alert('Price can\'t contain alphabet');
    } else {
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/AddFlights_validation.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        let data = 'from=' + from + '&to=' + to + '&date=' + date + '&time=' + time + '&price=' + price;
        xhttp.send(data);

        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                if (response.status === 10) {
                    Add.innerHTML = response.message;
                }
            }
        }
    }
}
