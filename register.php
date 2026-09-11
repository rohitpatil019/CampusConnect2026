<?php
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $student_id = $_POST["student_id"];
    $email = $_POST["email"];
    $college_name = $_POST["college_name"];
    $location = $_POST["location"];
    $event = $_POST["event"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students 
            (full_name, student_id, email, college_name, location, event, password)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {

        $stmt->bind_param(
            "sssssss",
            $full_name,
            $student_id,
            $email,
            $college_name,
            $location,
            $event,
            $password
        );

        if ($stmt->execute()) {
            $message = "Registration successful! <a href='login.php'>Login here</a>";
        } else {
            $message = "Registration failed. Student ID or Email may already exist.";
        }

        $stmt->close();

    } else {
        $message = "Database error.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CampusConnect 2026 - Registration</title>
</head>

<body>

<h1>CampusConnect 2026</h1>

<h2>Student Registration</h2>

<p><?php echo $message; ?></p>

<form method="POST">

    <label>Full Name</label><br>
    <input type="text" name="full_name" required>
    <br><br>

    <label>Student ID</label><br>
    <input type="text" name="student_id" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" required>
    <br><br>

    <label>College Name</label><br>
    <input type="text" name="college_name" required>
    <br><br>

    <label>Location</label><br>
    <input type="text" name="location" required>
    <br><br>

    <label>Event</label><br>
    <input type="text" name="event" required>
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">REGISTER</button>

</form>

<br>

<a href="login.php">Already registered? Login</a>

</body>
</html>
