function Flight(){
    let from=document.getElementById('from').value;
    let to=document.getElementById('to').value;
    let date=document.getElementById('date').value;
    let time=document.getElementById('time').value;
    let Booking=document.getElementById('Booking');

    Booking.innerHTML="";

    


    
    
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/MyFlightBookings.php', true);

   
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    let data = 'from=' + from + '&to=' + to + '&date=' + date + '&time=' + time ;

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