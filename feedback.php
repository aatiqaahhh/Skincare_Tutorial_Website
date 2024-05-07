<?php
// feedback.php

// Include your database configuration
include 'config.php';

function generatefeedbackId() {
    global $conn;

    // Attempt to generate a unique participantId
    for ($i = 0; $i < 10; $i++) {
        $candidateId = 'F' . sprintf("%05d", mt_rand(1, 99999));

        // Check if the generated ID already exists in the database
        $checkQuery = "SELECT COUNT(*) as count FROM feedback WHERE id = '$candidateId'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['count'] == 0) {
                // ID is unique
                return $candidateId;
            }
        }
    }

    // If no unique ID is found after 10 attempts, return an error
    die("Error: Unable to generate a unique feedbackId.");
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $rating = $_POST['rating'];
    $feedbackText = $_POST['feedback'];
    $id= generateFeedbackId();

    // Prepare and execute SQL query to insert feedback
    $stmt = $conn->prepare("INSERT INTO feedback (id,rating, feedback_text) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $id, $rating, $feedbackText);
    $stmt->execute();
    $stmt->close();
}

// Retrieve all feedback from the database
$result = $conn->query("SELECT * FROM feedback");
$feedbackData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $feedbackData[] = $row;
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skincare Tutorial</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  <style>

        h2{
          font-family:  serif;
        }
    body {
        font-family: Arial, sans-serif;
        background-color: #faf0e6;
        margin: 0;
        padding: 0;
    }

    .container {
        position: relative;
        max-width: 1200px;
        margin: 80px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        font-family:  serif;
    }

    #commentIcon {
      font-size: 60px;
      cursor: pointer;
      position: fixed;
      bottom: 100px;
      right: 80px;
      width: 60px; /* Equal width and height */
      height: 60px; /* Equal width and height */
      padding: 0; /* Remove padding */
      border: black;
      border-radius: 100%; /* Border-radius 50% for a circle */
      color: #987654;
    }

    #commentIcon:hover {
      color: #483c32;
    }

    .star-rating {
        display: flex;
        align-items: center;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        cursor: pointer;
        font-size: 24px;
        color: #ddd;
        transition: color 0.3s ease-in-out;
    }

    .star-rating label:hover,
    .star-rating input:checked ~ label {
        color: #ffca28;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .feedback-list {
        margin-top: 20px;
    }

    .feedback-item {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }

    .rating-stars i {
        color: #ffca28;
    }
    .background{
      background-color:#deb887;
    }

    /*style for header and footer*/
    header {
            padding: 20px;
            min-height: 100px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/backMain.png) center/cover no-repeat fixed;
            color: #ffffff;
        }
        footer {
            background-color: #483c32;
            padding: 10px;
            color: #ffffff;
            text-align: center;
        }
        .marginT{
            margin-top: 20px;
        }

        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }

        .card-text1 {
            overflow: hidden; /* Hide overflow to create typing effect */
            white-space: nowrap; /* Prevent text from wrapping */
            animation: typewriter 3s steps(40) 1s 1 normal both; /* Adjust duration and steps as needed */
        }
        .image-container {
            position: relative;
            overflow: hidden;
        }
        .image-container img {
            transition: transform 0.3s ease-in-out;
        }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #c9c0bb;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Skincare Routine</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav justify-content-end" style="--bs-scroll-height: 100px;">
            <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Skincare
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="cleanser.php">cleanser</a></li>
                    <li><a class="dropdown-item" href="exfoliate.php">exfoliate</a></li>
                    <li><a class="dropdown-item" href="toner.php">toner</a></li>
                    <li><a class="dropdown-item" href="serum.php">serum</a></li>
                    <li><a class="dropdown-item" href="moisturiser.php">moisturiser</a></li>
                    <li><a class="dropdown-item" href="sunscreen.php">sunscreen</a></li>
                </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-dark" href="feedback.php">Rating & Feedback</a>
            </li>
          </ul>
    </div>
</nav>

<div class="container">
  <h1>Feedback & Rating</h1>

  <!-- Comment icon to open the modal -->
  <i class="fas fa-comment"  id="commentIcon" data-toggle="modal" data-target="#addFeedbackModal"></i>
  <!-- Bootstrap Modal for the feedback form -->
  <div class="modal fade" id="addFeedbackModal" tabindex="-1" aria-labelledby="addFeedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addFeedbackModalLabel">Feedback Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form for submitting new rating and feedback -->
          <form action="feedback.php" method="post">
            <label for="rating">Rating:</label>
            <div class="star-rating">
              <input type="radio" name="rating" id="star5" value="5"><label for="star5" ><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="star4" value="4"><label for="star4" ><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="star3" value="3"><label for="star3" ><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="star2" value="2"><label for="star2" ><i class="fas fa-star"></i></label>
              <input type="radio" name="rating" id="star1" value="1"><label for="star1" ><i class="fas fa-star"></i></label>
            </div>
            <br>
            <label for="feedback">Feedback:</label>
            <textarea name="feedback" rows="4" required></textarea>
            <br>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Display feedback list -->
  <!-- Display feedback list -->
<div class="feedback-list">
    <h2>Feedback List</h2>
    <?php foreach ($feedbackData as $feedbackItem) : ?>
        <div class="feedback-item">
                <p><strong>Rating:</strong> <?php echo str_repeat('<i class="fas fa-star" style="color: #ffca28;"></i>', $feedbackItem['rating']); ?></p>
                <p><strong>Feedback:</strong> <?php echo $feedbackItem['feedback_text']; ?></p>
                
                <!-- Edit button to open the modal for editing -->
                <button class="btn btn-warning edit-button background"  data-toggle="modal" data-target="#editFeedbackModal<?php echo $feedbackItem['id']; ?>" >Edit</button>
                <!-- Delete button and form -->
                <form method="post" action="delete_feedback.php" style="display:inline">
                    <input type="hidden" name="feedback_id" value="<?php echo $feedbackItem['id']; ?>">
                    <button type="submit" name="delete_feedback" class="btn btn-danger">Delete</button>
                </form>
            <!-- Bootstrap Modal for editing feedback -->
            <div class="modal fade" id="editFeedbackModal<?php echo $feedbackItem['id']; ?>" tabindex="-1" aria-labelledby="editFeedbackModalLabel<?php echo $feedbackItem['id']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editFeedbackModalLabel<?php echo $feedbackItem['id']; ?>">Edit Feedback</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for editing rating and feedback -->
                            <form action="edit_feedback.php" method="post">
                                <!-- You can include hidden input for feedback ID -->
                                <input type="hidden" name="feedback_id" value="<?php echo $feedbackItem['id']; ?>">
                                
                                <label for="rating">Rating:</label>
                                <div class="star-rating">
                                    <?php for ($i = 5; $i >= 1; $i--) : ?>
                                        <input type="radio" name="rating" id="editStar<?php echo $feedbackItem['id']; ?>_<?php echo $i; ?>" value="<?php echo $i; ?>" <?php echo ($feedbackItem['rating'] == $i) ? 'checked' : ''; ?>>
                                        <label for="editStar<?php echo $feedbackItem['id']; ?>_<?php echo $i; ?>"><i class="fas fa-star"></i></label>
                                    <?php endfor; ?>
                                </div>


                                <br>
                                <label for="feedback">Feedback:</label>
                                <textarea name="feedback" rows="4" required><?php echo $feedbackItem['feedback_text']; ?></textarea>
                                <br>
                                <input type="submit" value="Save Changes">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
<footer class="text-center py-3">
    <p>&copy; 2024 Skincare Tutorial. All rights reserved.</p>
</footer>


<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  var commentIcon = document.getElementById('commentIcon');
  commentIcon.addEventListener('click', function() {
    $('#addFeedbackModal').modal('show');
  });
</script>

</body>
</html>