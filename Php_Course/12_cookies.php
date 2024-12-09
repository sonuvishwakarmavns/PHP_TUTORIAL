<!-- <?php
// Set a cookie
setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Cookie 'user' is set!<br>";
echo "Value is: John Doe<br>";
?> -->


<!-- <?php
// Check if the cookie is set
if (isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value is: " . $_COOKIE["user"] . "<br>";
} else {
    echo "Cookie 'user' is not set!";
}
?> -->


<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JaneDoe";
$_SESSION["email"] = "jane@example.com";

echo "Session variables are set.<br>";
?>
