function submitReview() {
  console.log('function called');
  let rating = document.getElementById('rating').value;
  let review = document.getElementById('review').value;
  let serviceType = document.getElementById('service-type').value;

  let xhttp = new XMLHttpRequest();

  xhttp.open('POST', '../view/reviews.php', true);

  xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById('form1').innerHTML = this.responseText;
      }
  }

  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  let params = 'rating=' + rating + '&review=' + review + '&service-type=' + serviceType;

  xhttp.send(params);
}
