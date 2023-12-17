<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
 require_once('db.php');

// if (!isset($_SESSION['username'])) {

//     exit();
// }

// $action = isset($_POST['action']) ? $_POST['action'] : '';

// switch ($action) {
//     case 'insertReview':
//         handleInsertReview();
//         break;
//     case 'getAllReviews':
//         handleGetAllReviews();
//         break;

// }

// function handleInsertReview() {
//     $username = $_SESSION['username'];
//     $rating = $_POST['rating'];
//     $review = $_POST['review'];
//     $serviceType = $_POST['service-type'];

//     if ($review == "") {
//         echo "Null review";
//     } else {
//         $result = insertReview($username, $rating, $review, $serviceType);
//         echo $result;
//     }
// }

// function handleGetAllReviews() {
//     $reviews = getAllReviews();
    
//     foreach ($reviews as $review) {
//         echo $review['username'] . ': ' . $review['review'] . '<br>';
//     }
// }

function insertReview($username, $rating, $review, $serviceType) {
    $con = getConnection();

    $sql = "INSERT INTO reviews (username, rating, review, service_type, created_at) 
            VALUES ('$username', $rating, '$review', '$serviceType', NOW())";

    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        return "Your review has been submitted.";
    } else {
        mysqli_close($con);
        return "Failed to submit the review. Please try again later.";
    }
}

function getAllReviews() {
    $con = getConnection();

    $sql = "SELECT * FROM reviews";
    $result = mysqli_query($con, $sql);
    $reviews = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $reviews[] = $row;
        }
    }

    mysqli_close($con);

    return $reviews;
}
?>
