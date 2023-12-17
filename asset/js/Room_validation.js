function Room(){
    
   
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let single = document.getElementById('single').value;
    let double = document.getElementById('double').value;
    let location = document.getElementById('location').value;
    fn=0;
    fe = 0;
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
        alert('please enter your  name');
        return false;
   }
   else if (fn === 1) {
    alert('Name cannot contain number');
     
       return false;
   }

   else if (email=="") {
    alert('Please Enter your email');
    return false;
}


else if (fe == 0) {
    alert('Email should contain @');
    return false;

}else{

return true;
}

}