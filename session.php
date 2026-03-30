<?php
// Create a web page to maintain a session using PHP.
session_start();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    echo "Logged out successfully. <a href='session.html'>Login again</a>";
    exit;
}

$name = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';
///match username and password paswword frome data base...

if ($name !== '' && $pass !== '') {
    $_SESSION['username'] = $name;
}

if (isset($_SESSION['username'])) {
    $safeName = $_SESSION['username'];
    echo "Welcome $safeName";
    echo "<br><a href='session.php?logout=1'>Logout</a>";
} else {
    echo "Please submit the form first. <a href='session.html'>Go to login</a>";
}
?>