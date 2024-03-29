<?php
/*
include("connection.php");
if (isset($_POST["submit"])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $whatsapp_no = $_POST['whatsapp_no'];
    $course = $_POST['course'];
    $experience = $_POST['experience'];
}

$sql = "select * from candidates where whatsapp_no='$whatsapp_no'";
$result = mysqli_query($conn, $sql);
$count_whatsapp_no = mysqli_num_rows($result);

$sql = "select * from candidates where email='$email'";
$result = mysqli_query($conn, $sql);
$count_email = mysqli_num_rows($result);
if ($count_whatsapp_no == 0 && $count_email == 0) {
    $sql = "INSERT INTO candidates(full_name,email,home_address,whatsapp_no,course,experience) VALUES(`$full_name`,`$email`,`$home_address`,`$whatsapp_no`,`$course`,`$experience`)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: welcome.php");
    }
} else {
    if ($count_whatsapp_no > 0) {
        echo `<script>
        window.location.href="index.php";
        alert("whatsapp number already exists");
        </script>`;
    }
    if ($count_email > 0) {
        echo `<script>
        window.location.href="index.php";
        alert("email already exists");
        </script>`;
    }
}

*/

include("connection.php");

if (isset($_POST["submit"])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $whatsapp_no = $_POST['whatsapp_no'];
    $course = $_POST['course'];
    $experience = $_POST['experience'];

    $sql_whatsapp = "SELECT * FROM candidates WHERE whatsapp_no='$whatsapp_no'";
    $result_whatsapp = mysqli_query($conn, $sql_whatsapp);
    $count_whatsapp_no = mysqli_num_rows($result_whatsapp);

    $sql_email = "SELECT * FROM candidates WHERE email='$email'";
    $result_email = mysqli_query($conn, $sql_email);
    $count_email = mysqli_num_rows($result_email);

    if ($count_whatsapp_no == 0 && $count_email == 0) {
        $sql = "INSERT INTO candidates(full_name, email, home_address, whatsapp_no, course, experience) VALUES('$full_name', '$email', '$home_address', '$whatsapp_no', '$course', '$experience')";
        $result_insert = mysqli_query($conn, $sql);
        if ($result_insert) {
            header("location: welcome.php");
        }
    } else {
        if ($count_whatsapp_no > 0) {
            echo '<script>alert("WhatsApp number already exists");</script>';
        }
        if ($count_email > 0) {
            echo '<script>alert("Email already exists");</script>';
        }
        header("location: index.php");
    }
}
?>



