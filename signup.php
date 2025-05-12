<!DOCTYPE HTML>
<html>
<head>
    <title>Sign In</title>
    <style>
        body {
            background-color: rgb(235,240,240);
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        form {
            background-color: rgb(246, 252, 248);
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            padding: 30px;
            width: 300px;  
        }
        label {
            display: block;
            font-size: 20px;
        }
        input {
            font-size: 20px;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }
        .sub {
            background-color: rgb(25,140,240);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .sub:hover {
            background-color: rgb(7, 97, 176);
        }
    </style>
</head>
<body>

<form onsubmit="return validate()" method="POST">
    <label for="mai">Email:</label>
    <input id="mai" type="email" placeholder="Enter the email" name="mail" required>

    <label for="npw">New Password:</label>
    <input id="npw" type="password" name="password" required>

    <label for="cpw">Confirm Password:</label>
    <input id="cpw" type="password" name="conpw" required>

    <input type="submit" class="sub" value="Register">
</form>

<script>
function validate() {
    let pw1 = document.getElementById("npw").value;
    let pw2 = document.getElementById("cpw").value;
    if (pw1 !== pw2) {
        alert("New Password and Confirm Password are not the same.");
        return false;
    }
    return true;
}
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Database connection
    $con = new mysqli('localhost', 'root', '', 'reg_database');

    if ($con->connect_error) {
        die('Connection Failed: ' . $con->connect_error);
    } else {
        $stmt = $con->prepare("INSERT INTO signup (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $mail, $hashedPassword);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successfully completed.');</script>";
        } else {
            echo "<script>alert('Error during registration.');</script>";
        }
        $stmt->close();
        $con->close();
    }
}
?>

</body>
</html>
