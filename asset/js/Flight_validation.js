function Flight(){
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    fe=0;
    fn=0;
    let N=  "123456789";

    for (i = 0; i < name.length; i++) {
        for (j = 0; j < N.length; j++) {
            if (name[i] == N[j]) {
                fn = 1;
                break;
            }
        }
    }
    for (i = 0; i < email.length; i++) {
        if (email[i] == '@') {
            fe = 1;
        }
    }
    

    if (name=="") {
        alert('Please enter your Name!');
        return false;
   }
   else if (fn == 1) {
    alert('Name cant contain numbers.');
      return false;
   }
   

   else if(email==""){
    alert('Please Enter your Email'); 
    return false;
   }
//    if(from==""){
//     alert('Please provide information about your starting location'); 

//    }
//    if(to==""){
//     alert('Please provide information about your destination'); 

//    }


else if (fe == 0) {
    alert('Email should contain @');
    return false;

}else{
 return true;
}





}