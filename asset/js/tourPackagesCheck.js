function tourPackageCheck() {
 
    let packageNo = document.getElementById('packageNo').value;
    let destination = document.getElementById('destination').value;
    let accomdations = document.getElementById('accomodation').value;
    let meals = document.getElementById('meals').value;
    let days = document.getElementById('days').value;
    let price = document.getElementById('price').value;
    
    let std = {
        'packageNo': packageNo,
        'destination': destination,
        'accomdations': accomdations ,
        'meals': meals ,
        'days': days, 
        'price': price

    }



 

    if (packageNo == "") {
            let packageError = "<span style='color:red;'> Warning !!!!*Package No is required.</span>";
            document.getElementById("packageNoError").innerHTML = packageError;
            return false;
        
    }
    if (destination == "") {
            let destinationError = "<span style='color:red;'> Warning !!!!*Destination is required.</span>";
            document.getElementById("destinationError").innerHTML = destinationError;
            return false;
        
    }
    if (accomdations == "") {
            let accomdationsError = "<span style='color:red;'> Warning !!!!*Accommodations is required.</span>";
            document.getElementById("accomodationError").innerHTML = accomdationsError;
            return false;
        
    }
    if (meals == "") {
            let mealsError = "<span style='color:red;'> Warning !!!!*Meals is required.</span>";
            document.getElementById("mealsError").innerHTML = mealsError;
            return false;
        
    }
    if (days == "") {
            let daysError = "<span style='color:red;'> Warning !!!!days is required.</span>";
            document.getElementById("daysError").innerHTML = daysError;
            return false;
        
    }
    if (price == "") {
            let priceError = "<span style='color:red;'> Warning !!!!*Price is required.</span>";
            document.getElementById("priceError").innerHTML = priceError;
            return false;
        
    }
    
   
     else{
       
    

    let xhttp = new XMLHttpRequest();

    
    let data  = JSON.stringify(std);

    xhttp.open('POST', '../controller/addTourPackages.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
              // let std = JSON.parse(this.responseText);
                if (this.responseText === "Success") {
                    document.getElementById('packageNo').value = '';
                    document.getElementById('destination').value = '';
                    document.getElementById('accomodation').value = '';
                    document.getElementById('meals').value = '';
                    document.getElementById('days').value = '';
                    document.getElementById('price').value = '';
                    alert("Tour package Name : "+ packageNo + " added");
                   // document.getElementById.value("packageNo").innerHTML = "KSNSJ";

                    return true;
                } else {
                    alert("Error adding Tour package info: " + this.responseText);
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


function searchTourPlan() {
    let searchTour = document.getElementById('searchPlan').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/showAllTourPackages.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let users = JSON.parse(this.responseText);

            let resultHtml = '<table border="1">';
            resultHtml += '<tr>';
            resultHtml += '<td>Package Name</td>';
            resultHtml += '<td>Destination</td>';
            resultHtml += '<td>Accomodation</td>';
            resultHtml += '<td>Meals</td>';
            resultHtml += '<td>Days</td>';
            resultHtml += '<td>Price</td>';
            resultHtml += '</tr>';

            for (let i = 0; i < users.length; i++) {
                resultHtml += '<tr>';
       
                resultHtml += '<td>' + users[i].PackageNo + '</td>';
                resultHtml += '<td>' + users[i].Destination + '</td>';
                resultHtml += '<td>' + users[i].Accomodations + '</td>';
                resultHtml += '<td>' + users[i].Meals + '</td>';
                resultHtml += '<td>' + users[i].Days + '</td>';
                resultHtml += '<td>' + users[i].Price + '</td>';
                resultHtml += '</tr>';
                resultHtml += '<br>';
                resultHtml += '<br>';
            }
            document.getElementById('result').innerHTML = resultHtml;
        }
    }

    xhttp.send('searchPlan=' + searchTour);
}
function deleteTourPlan(packageNo){
    let deleteTourPlan = document.getElementById('package').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/showAllTourPackages.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            if (this.status == 200) {
             
                if (this.responseText === "Success") {
                    
                    alert("Package Name : " + packageNo + "  has been deleted");
                   location.reload();

                    return true;
                } else {
                    alert("Error adding Room info: " + this.responseText);
                }
            } else {
                alert("Error: " + this.status);
            }
        }
    };
    xhttp.send('delete=' + packageNo);
    return false; 

    }
    function purchaseTourPlan(price) {
        let confirmation = confirm("Are you sure you want to purchase this package for " + price + "?");
        if (confirmation) {
            // Add your logic for handling the purchase here
            alert('Package purchased successfully. Price: ' + price);
        }
        return false;
    }



