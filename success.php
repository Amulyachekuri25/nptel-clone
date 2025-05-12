<?php
session_start();
if (!isset($_SESSION['mail'])) {
    // If the session data is not set, redirect to the registration form
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>
<body>
    <h1>🎉 Registration Successfully Completed!</h1>
    <h3>Your Submitted Details:</h3>
    <ul>
        <li><strong>Email:</strong> <?php echo $_SESSION['mail']; ?></li>
        <li><strong>Name:</strong> <?php echo $_SESSION['name']; ?></li>
        <li><strong>Course:</strong> <?php echo $_SESSION['crse']; ?></li>
        <li><strong>Phone Number:</strong> <?php echo $_SESSION['ph_no']; ?></li>
    </ul>

    <h3>uploaded pdf link</h3>
    <?php
$pdf="uploads/".$_SESSION['pdf'];
echo "<p> pdf Path:$pdf</p>";
if (file_exists($pdf)) {
    echo "<a href='$pdf' target='_blank'>View marks memo</a>";
} else {
    echo "<p>pdf file not found!</p>";
}
?>
    <h3>Uploaded Image:</h3>

<?php
$imagePath = "uploads/" . $_SESSION['img'];
echo "<p>Image Path: $imagePath</p>";
if (file_exists($imagePath)) {
    echo "<img src='$imagePath' alt='Uploaded Image' width='200px'>";
} else {
    echo "<p>Image file not found!</p>";
}
?>
<h3>Uploaded Video</h3>
<?php
$video="uploads/".$_SESSION['video'];
echo "<p> video Path:$video</p>";
if (file_exists($video)) {
    echo "<video src='$video'  width='200px' controls muted loop>";
} else {
    echo "<p>video file not found!</p>";
}
?>
<br>
    <?php session_destroy();  ?>
</body>
</html>