<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>expansioncybertechnologies</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <main class="index">
        <section class="introduction_section">
            <div class="introduction_section_flex">
                <h1>EXPANSION CYBER TECH ACADEMY</h1>
                <div class="banner">
                    <?php
                    echo '<img src="./images/banner.jpg" alt="EXPANSION CYBER TECH ACADEMY"/>';
                    ?>
                </div>
                <div class="content_flex_container">
                    <p>Welcome to <strong>Expansion Cyber Technologies</strong> - Your sure path to advancing your tech skills and achieving Financial Success. We offer comprehensive training in Product design (UI/UX), Web design, Front-end development, Back-end development, and Full stack/Software development</p>
                    <p>Our experienced instructors are industry experts, passionate about helping our students succeed. With a focus on practical learning and hands-on experience in a dynamic learning environment, we ensure that our students are well-equipped to excel in the ever-evolving tech landscape.</p>
                    <p>We aim to empower our students to level up their tech skills and become competent professionals in a matter of months, ultimately landing their Tech jobs and earning in Foreign Currencies.</p>
                </div>
            </div>
        </section>
        <hr class="styled-hr">
        <section class="cohort-section">
            <h2>Join our next cohort that is coming up on 29th of April 2024</p>
        </section>

        <section class="available_courses">
            <div class="available_courses_flex">
                <div class="image">
                    <?php
                    echo '<img src="./images/coursesimg.jpg" alt="Available Courses (Duration/Fees)"/>';
                    ?>
                </div>
                <div class="content">
                    <h3>Available Courses (Duration/Fees)</h3>
                    <div class="courses_box">
                        <h4>✅Full Stack Development (8 Months course/N400,000)</h4>
                        <h4>✅ Frontend Development (4 Months Course/N200,000)</h4>
                        <h4>✅Backend Development (4 Months Course/N200,000)</h4>
                        <h4>✅Web Design (2 Months Course/N100,000)</h4>
                        <h4>✅(UI/UX)Product Design (2 Months Course/75,000)</h4>
                    </div>
                </div>
            </div>
        </section>
        <hr class="styled-hr">
        <section class="message_section">
            <h4>Limited Slots Available. Register Now!!!</h4>
        </section>
        <section class="registration_form_section">
            <div class="registration_form_con">
                <div class="date_instruction">
                    <div class="date">
                        <h4>EXPANSION CYBER TECH ACADEMY<strong> APRIL 2024 TECH TRAINING COHORT</strong></h4>
                    </div>
                    <div class="instruction">
                        <b>Fill the form below with your correct information to register for the Next Training Session starting on 29th April 2024.</b>
                    </div>
                </div>
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
                        <input type="submit" id="btn" value="Submit" name="submit" class="btn" />
                    </div>


                </form>

                <div class="greetings">
                    <p>Thank You for your enrollment! We will be in touch. In the meantime, Click on the icons below to follow us on all our social media platforms and stay updated be on all our activities and programs.

                    </p>
                </div>
                <div class="social_links">
                    <a href="https://twitter.com/expansiontech?t=3LthX52PbDOY5dDgkA8hVw&s=08" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://web.facebook.com/expansioncybertech?mibextid=ZbWKwL&_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/@expansion.cyber.t?_t=8ktOR9KV0fm&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="sponsor">
                <?php
                echo '<img src="./images/sponsor.png" alt="powered by getresponse"/>';
                ?>
            </div>
        </footer>
    </main>

</body>

</html>