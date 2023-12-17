function Add(){
    let date=document.getElementById('date').value;
    let price=document.getElementById('price').value;
    let hotelname=document.getElementById('hotelname').value;
    let location=document.getElementById('location').value;
    let roomtype=document.getElementById('roomtype').value;
  
    let Add=document.getElementById('Add');

    Add.innerHTML="";
    
    let fn=0;
   let fn2=0;

   let N = "123456789";
    let A="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (let i = 0; i < hotelname.length; i++) {
        for (let j = 0; j < N.length; j++) {
            if (hotelname[i] == N[j]) {
                fn = 1;
                break;
            }
        }
    }

    for (let i = 0; i < price.length; i++) {
        for (let j = 0; j < A.length; j++) {
            if (price[i] == A[j]) {
                fn2 = 1;
                break;
            }
        }
    }
    
    if (price=="") {
        alert('Please Enter Price');
       
    }
    else if (fn2==1) {
        alert('Price Cannot contain Alphabet');
        
    }
    
    else if (hotelname=="") {
      alert( 'Please Enter Hotel Name');
       
    }
    else if (fn==1) {
      alert('Hotel Name cannot contain number');
       
    }

    else{

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/AddRooms_validation.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    let data = 'hotelname=' + hotelname + '&roomtype=' + roomtype + '&location=' + location + '&date=' + date+ '&price=' + price ;
    xhttp.send(data);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var response = JSON.parse(this.responseText);
          
            if (response.status === 10) {
                Add.innerHTML = response.message;
            }
           
        }
    }



    }








}