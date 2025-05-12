<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', '', 'reg_database');

    if ($con->connect_error) {
        die('Connection failed: ' . $con->connect_error);
    }
    $stmt = $con->prepare("SELECT password FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if email exists
    if ($stmt->num_rows === 0) {
        echo "<script>alert('Email does not exist');</script>";
    } else {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user'] = $email;
            $stmt->close();
            $con->close();
            header("Location: mainpage.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    }

    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <style>
        form {
            width: 400px;
            background-color: rgb(246, 252, 248);
            box-shadow: 0px 10px 10px rgba(150, 120, 120, 0.1);
            padding: 20px;
        }
        body {
            background-color: rgb(240, 240, 240);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        label {
            display: block;
            margin: 15px;
            font-size: 20px;
            padding: 10px;  
        }
        input {
            display: block;
            margin-left: 50px;
            padding: 10px;   
            width: 80%;
        }
        .sm {
            background-color: rgb(100, 200, 130);
            color: white;
            font-size: 20px;
            margin: 20px 50px;
            cursor: pointer;
            border: none;
        }
        .sm:hover {
            background-color: rgb(130, 250, 130);
        }
    </style>
</head>
<body>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="mail" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="submit" class="sm" value="Login">

        <label>
            <a href="signup.php">Create new account</a>
        </label>
    </form>
</body>
</html>
