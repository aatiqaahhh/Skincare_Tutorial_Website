<?php
// delete_feedback.php

// Include your database configuration
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the delete button is clicked
    if (isset($_POST['delete_feedback'])) {
        $feedbackID = $_POST['feedback_id'];

        // Prepare and execute SQL query to delete feedback
        $stmt = $conn->prepare("DELETE FROM feedback WHERE id = ?");
        $stmt->bind_param("i", $feedbackID);
        $stmt->execute();
        $stmt->close();
    }
}

// Redirect back to the main page after deleting
header("Location: feedback.php");
exit();
?>
