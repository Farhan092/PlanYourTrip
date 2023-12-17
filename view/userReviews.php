<?php
session_start();
require_once('../controller/sessionCheck.php');
require_once('../model/reviewsModel.php');

$allReviews = getAllReviews();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Reviews</title>
    <link rel="stylesheet" href="../asset/css/userreview.css">
</head>
<body>
<header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2></h2>
        </div>
    </header>
    <h2>User Reviews</h2>
    <section>
        <fieldset>
            <legend>Reviews</legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Service Type</th>
                        <th>Rating</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allReviews as $review): ?>
                        <tr>
                            <td><?php echo $review['username']; ?></td>
                            <td><?php echo $review['service_type']; ?></td>
                            <td><?php echo $review['rating']; ?></td>
                            <td><?php echo $review['review']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </fieldset>
        <p><a href="reviews.php">Back to Review Page</a></p>
    </section>
</body>
</html>
