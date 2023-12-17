function roomCheck() {
 
    let hotelName = document.getElementById('hotelName').value;
    let roomtype = document.getElementById('roomType').value;
    let location = document.getElementById('location').value;
    let price = document.getElementById('price').value;
    
    let std = {
        'hotelName': hotelName,
        'roomtype': roomtype,
        'location': location ,
        'price': price 

    }

    if(hotelName==""){
        alert('!!!Please provide Hotel Name And also check other information');
        return false;
    }
    if(roomtype==""){
        alert('!!!Please provide RoomType.');
        return false;
    }
    if(location==""){
        alert('!!!Please provide location.');
        return false;
    }
    if(price==""){
        alert('!!!Please provide price');
        return false;
    }
    else{
       
    

    let xhttp = new XMLHttpRequest();

    
    let data  = JSON.stringify(std);

    xhttp.open('POST', '../controller/addHotelRoom.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
               // let std = JSON.parse(this.responseText);
                if (this.responseText === "Success") {
                    alert("Hotel Room added");
                    return true;
                } else {
                    alert("Error adding Room info: " + this.responseText);
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


