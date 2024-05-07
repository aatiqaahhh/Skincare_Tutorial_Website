<?php
// edit_feedback.php

// Include your database configuration
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $feedbackID = $_POST['feedback_id'];
    $newRating = $_POST['rating'];
    $newFeedbackText = $_POST['feedback'];

    // Prepare and execute SQL query to update feedback
    $stmt = $conn->prepare("UPDATE feedback SET rating = ?, feedback_text = ? WHERE id = ?");
    $stmt->bind_param("isi", $newRating, $newFeedbackText, $feedbackID);
    $stmt->execute();
    $stmt->close();
}

// Redirect back to the feedback page after editing
header("Location: feedback.php");
exit();
?>
