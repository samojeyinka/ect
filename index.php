<?php 
    include("connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>
</head>

<body>
    <section class="registration_form_section">
        <form name="form" action="register.php" method="POST">
            <div class="input_box">
                <label for="full_name">Full Name *</label>
                <input type="text" name="full_name" id="full_name" />
            </div>
            <div class="input_box">
                <label for="email">Email Address *</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="input_box">
                <label for="home_address">Home Address *</label>
                <input type="text" name="home_address" id="home_address" />
            </div>
            <div class="input_box">
                <label for="whatsapp_no">WhatsApp Phone number *</label>
                <input type="number" name="whatsapp_no" id="whatsapp_no" />
            </div>
            <div class="input_box">
                <label for="course">Course interested- UI/UX, Web design, Fontend, Backend, Fullstack *</label>
                <input type="text" name="course" id="course" />
            </div>
            <div class="input_box">
                <label for="experience">Any previous experience (Yes/No) *</label>
                <textarea name="experience" id="experience">
                   
                </textarea>
            </div>
            <div class="input_box">
            <input type="submit" id="btn" value="Submit" name="submit"/>
            </div>
        </form>
    </section>

</body>

</html>