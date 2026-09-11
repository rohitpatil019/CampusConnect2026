<?php
session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CampusConnect 2026</title>
</head>

<body>

<h1>Welcome to CampusConnect!</h1>

<p>
Welcome, <?php echo htmlspecialchars($_SESSION["full_name"]); ?>.
</p>

<p>
Your Student ID:
<?php echo htmlspecialchars($_SESSION["student_id"]); ?>
</p>

<a href="logout.php">Logout</a>

</body>
</html>
