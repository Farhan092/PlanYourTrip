function Booking(){
    
    let hotelname=document.getElementById('hotelname').value;
    let roomtype=document.getElementById('roomtype').value;
    let location=document.getElementById('location').value;
    let date=document.getElementById('date').value;
    let Booking=document.getElementById('Booking');

    Booking.innerHTML="";

    


    
    
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/MyBookings.php', true);

   
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
   
    let data = 'hotelname=' + hotelname + '&roomtype=' + roomtype + '&location=' + location + '&date=' + date ;

    xhttp.send(data);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var response = JSON.parse(this.responseText);
            // console.log(response);

            if (response.status === 10) {
                Booking.innerHTML = response.message;
            }
           
        }
    }
}
































