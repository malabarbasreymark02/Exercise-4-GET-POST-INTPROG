
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="urComment.css">
    <title>Ur Comment</title>
</head>
<body>
    
    <!--Our GET method-->
    <!-- Comment structure starts here -->
    <div class="popup-urComment">
        <a href="ideaProfile.php"><div class="close-comment-btn">&times;</div></a>
        <h1>🌷🌷🌷🌷🌷🌷</h1>
        <h2>Your Comment</h2>
        <div class="box-content">
        <p>
        <?php 
            if (isset($_GET["comment"]) && !empty($_GET["comment"])) {
                echo htmlspecialchars($_GET["comment"]); // Display the comment safely
            } else {
                echo "No comment added yet."; // Display a default message or nothing
            }
        ?>
        </p>
        </div>
        <h1>🌷🌷🌷🌷🌷🌷</h1>
    </div>
   
    <!-- Comment structure ends here -->
</body>
</html>
