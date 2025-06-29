
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
          display:flex;
          flex-direction:column;
          height:100vh;
          width:100%;
        }
        .sidebar{
            height:100%;
            width:30%;
            margin:20px;
        }
        .content{
            height:100%;
            width:70%;
            padding:20px;
            margin:30px;
           
        }
        .logo{
            display:flex;
            align-items:center;
            justify-content:space-between;
            width: 100%;
            height:20%;
        }
        .half{
            display:flex;
            flex-direction:row;
            background-color:rgb(210,250,190);
        }
        button{
            padding:10px;
            margin:20px;
            background-color:blue;
            font-size:20px;
        }
        .crse:hover
        {
          background-color:rgb(10,200,240);
        }
        .mp:hover
        {
          background-color:rgb(10,200,240);
        }
        .cr,.m{
            text-decoration-line:None;
            
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="logo">
        <img src="swayam.jpg" width="170" height="40">
        <h2 style="align-text:centre;">Jan-Apr 2025</h2>
        <p>Profile</p>
        </div>
    <div class="half">
    <div class="sidebar">
    <button class="mp">
        <a href="mainpage.php" style="color:black;" class="m ">
            Home
    </a>
    </button> <br>  <br>
        <button class="crse">
            <a href="courses.html" style="color:black;" class="cr" >
        Go to course </a>
    </button> <br>  <br>
    <button>
        Payment Details
    </button>
      <br>  <br>
      <button>
        Cretificates  
    </button><br>  <br>
    </div>
    <div class="content">
    <h1>Fill the registration form for Nptel Course registration</h1>
    <form method="POST" enctype="multipart/form-data">
        <label>Email</label>
        <input type="email" name="mail" required>
        <br><br>
        <label>Name</label>
        <input type="text" name="name" required>
        <br><br>
        <label>Course</label>
        <input type="text" name="crse">
        <br><br>
        <label>Phone number</label>
        <input type="number" name="ph_no" required>
        <br><br>
        <label>B.Tech marks memo(of this semester)</label>
        <input type="file" accept="application/pdf" name="pdf" >
        <br><br>
        <label>Image:</label>
        <input type="file" accept="image/*" name="imgs" required>
        <br><br>
        <label>About you in video format:</label>
        <input type="file" accept="video/*" name="about">
        <br><br>
        <input type="submit" name="sb">
    </form>
    </div>
    </div>
    </div>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $_POST['mail'];
    $name = $_POST['name'];
    $crse = $_POST['crse'];
    $ph_no = $_POST['ph_no'];
    $pdf=$_FILES['pdf']['name'];
    $tmp_pdf=$_FILES['pdf']['tmp_name'];
    $img = $_FILES['imgs']['name'];
    $tmp_name = $_FILES['imgs']['tmp_name'];
    $video=$_FILES['about']['name'];
    $tmp_video=$_FILES['about']['tmp_name'];
    // Check if the uploads directory exists, if not create it
    if(!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }
    // Generate a unique name for the image to avoid conflicts (optional)
    $uniqueName = uniqid() . '_' . $img;
    $uniqueVideo=uniqid().'_'.$video;
    $uniquePdf=uniqid().'_'.$pdf;
    // Move the uploaded file to the "uploads" folder with a unique name
    move_uploaded_file($tmp_name, "uploads" . $uniqueName);
    move_uploaded_file($tmp_pdf,"uploads".$uniquePdf);
    move_uploaded_file($tmp_video,"uploads".$uniqueVideo);
    // Insert data into the database
    $conn = new mysqli('localhost', 'root', '', 'reg_database');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO nptel_data (email, name, course, ph_number, mage,pdf,video) VALUES (?, ?, ?, ?, ?,?,?)");
        $stmt->bind_param("sssisss", $mail, $name, $crse, $ph_no, $uniqueName,$uniquePdf,$uniqueVideo); // Use $uniqueName
        $stmt->execute();
        echo "Registration is success
        fully completed....";
        $stmt->close();
        $conn->close();

        // Start a session and store data for later use
        session_start();
        $_SESSION['mail'] = $mail;
        $_SESSION['name'] = $name;
        $_SESSION['crse'] = $crse;
        $_SESSION['ph_no'] = $ph_no;
        $_SESSION['img'] = $uniqueName; // Store the unique name of the uploaded image
        $_SESSION['pdf']=$uniquePdf;
        $_SESSION['video']=$uniqueVideo;
        header("Location: success.php"); // Redirect to success page
        exit();
    }
}
?>

</body>
</html>
