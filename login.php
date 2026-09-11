<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM students 
            WHERE email = ? OR student_id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $username, $username);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $student = $result->fetch_assoc();

        if (password_verify($password, $student["password"])) {

            $_SESSION["student_id"] = $student["student_id"];
            $_SESSION["full_name"] = $student["full_name"];

            header("Location: welcome.php");
            exit();

        } else {
            $message = "Invalid username or password.";
        }

    } else {
        $message = "Invalid username or password.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CampusConnect 2026 - Student Login</title>
</head>

<body>

<h1>CampusConnect 2026</h1>

<h2>STUDENT LOGIN</h2>

<p><?php echo $message; ?></p>

<form method="POST">

    <label>Email / Student ID</label><br>
    <input type="text" name="username" required>
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">LOGIN</button>

</form>

<br>

<a href="register.php">New Student? Register</a>

</body>
</html>
