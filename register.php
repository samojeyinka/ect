<?php
include("connection.php");

if (isset($_POST["submit"])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $whatsapp_no = $_POST['whatsapp_no'];
    $course = $_POST['course'];
    $experience = $_POST['experience'];

    $sql_email = "SELECT * FROM candidates WHERE email='$email'";
    $result_email = mysqli_query($conn, $sql_email);
    $count_email = mysqli_num_rows($result_email);

    if ($count_email == 0) {
        $sql = "INSERT INTO candidates(full_name, email, home_address, whatsapp_no, course, experience) VALUES('$full_name', '$email', '$home_address', '$whatsapp_no', '$course', '$experience')";
        $result_insert = mysqli_query($conn, $sql);
        if ($result_insert) {
            header("location: welcome.php");
        }
    } else {
        if ($count_email > 0) {
            echo '<script>alert("Email already exists");</script>';
        }
        
    }
}
?>
