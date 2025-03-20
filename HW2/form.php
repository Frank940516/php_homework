<?php
session_start(); 

if (!isset($_SESSION["check"])) {
    echo "You are not logged in, redirecting to login page...<br>";
    header("Refresh:2; url=login.php");
    exit;
}
?>

<html>
<head></head>
<body>
<?php
if ($_SESSION["check"] == "Admin") {
    echo "Welcome! Noble Admin <br>";
    echo "<a href='logout.php'><button type='button'>Log out</button></a><br>";
} else if ($_SESSION["check"] == "User") {
    echo "Welcome! Common User <br>";
    echo "<a href='logout.php'><button type='button'>Log out</button></a><br>";
} else {
    echo "Illegal user, will send you back to login again...<br>";
    header("Refresh:2; url=login.php");
}
?>
</body>
</html>