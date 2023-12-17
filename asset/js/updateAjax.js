// function updateAjax() {
//   console.log('Function called');
//   let name = document.getElementById('name').value;
//   let email = document.getElementById('email').value;
//   let phone = document.getElementById('phone').value;
//   let dob = document.getElementById('dob').value;

//   let xhttp = new XMLHttpRequest();

//   xhttp.open('POST', '../view/updateUser.php', true);

//   xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById('form1').innerHTML = this.responseText;
//     }
//   }

//   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

//   let params = 'name=' + name + '&email=' + email + '&phone=' + phone + '&dob=' + dob;

//   xhttp.send(params);
// }