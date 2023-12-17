<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAN YOUR TRIP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        #welcome {
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        main {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        nav {
            flex: 1;
        }

        nav a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #f0f0f0;
        }

        fieldset {
            flex: 1;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form {
            margin-top: 10px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Plan Your Trip</h1>
        <div id="welcome">
            <p>Welcome, User!</p>
        </div>
    </header>

    <main>
        <nav>
            <a href="dipositeMoney.php">Deposit Money</a>
            <a href="../controller/showBalance.php">Show Balance</a>
            <a href="../controller/showContactInfo.php">Show Contact</a>
            <a href="../controller/showAllTourPackages.php">Show Tour Packages</a>
            <a href="../view/profile.php">Show profile</a>
            <a href="../view/currency.php">Currency converter</a>
            <a href="../view/reviews.php">Reviews and Rating</a>
            <a href="">Payment</a>
            <a href="../view/transaction.php">Transaction</a>
        </nav>

        <fieldset>
            <legend><b>Book Options</b></legend>

            <form action="Room_Book.php" method="post">
                <input type="submit" name="submit" value="Book Rooms">
            </form><br>

            <form action="Flight_Book.php" method="post">
                <input type="submit" name="submit2" value="Book Flights">
            </form><br>

            <form action="../controller/notification.php" method="post">
                <input type="submit" name="submit2" value="Notifications">
            </form><br>

            <form action="login.php" method="post">
                <input type="submit" name="submit4" value="Logout">
            </form>
        </fieldset>
    </main>
</body>
</html>
