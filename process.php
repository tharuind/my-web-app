<?php
// 1. Check if the website page submitted data using the secure POST channel
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Grab the text string from the input field using its unique 'name' attribute
    $comment = $_POST['userComment'];
    
    // 3. Output a structured HTML response page back from the server
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head><title>Server Response</title></head>";
    echo "<body style='background-color: lightyellow; font-family: sans-serif; padding: 20px;'>";
    
    echo "<h1 style='color: green;'>Data Received by Server!</h1>";
    echo "<p>The backend server successfully processed your input string: <strong>" . htmlspecialchars($comment) . "</strong></p>";
    echo "<p><a href='index.html'>← Go Back to Main Page</a></p>";
    
    echo "</body>";
    echo "</html>";
} else {
    // Prevent direct browser access to process.php if no form data was sent
    echo "Direct access not allowed.";
}
?>
