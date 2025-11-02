<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <!-- header section start -->
    <section class="header">

        <a href="home.php" class="logo"> off-road adventure</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="services.php"> services</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>
    <!-- header section end -->
    <!-- "background: url(https://i.pinimg.com/originals/36/46/c2/3646c2536a46816cdc5bc7863e67787b.jpg) no-repeat;"> -->

    <!-- Terms and Conditions Section -->
    <div class="heading" style="background: url(img/h3.png);">
        <h1>book now </h1>
    </div>

    <div id="termsAndConditions">
        <h2>Terms and Conditions</h2>

        <ol>

            <li>
                <h3>Introduction</h3>
                <p>Welcome to off-road adventure. By accessing our website and booking our adventure activities, you agree to comply with and be bound by the following terms and conditions.</p>
            </li>

            <li>
                <h3>Acceptance of terms</h3>
                <p>By using this website, you signify your agreement to these terms and conditions. If you do not agree with any part of these terms, please do not use our website or services.</p>
            </li>

            <li>
                <h3>Modification of Terms</h3>
                <p>off-road adventure reserves the right to modify these terms at any time. Changes will be posted on this page and take effect immediately. Your continued use of the website signifies your acceptance of the modified terms.</p>
            </li>

            <li>
                <h3>User Responsibilities</h3>

                <ul> Provide accurate, current, and complete information during booking.</ul>
                <ul> Use the website and services in a lawful manner.</ul>
                <ul>Refrain from engaging in any activity that disrupts or interferes with the website's functionality.</ul>

            </li>

            <li>
                <h3>Booking and Cancellation Policies</h3>

                <p>Payment: Full payment is required at the time of booking.</p>

                <p>Cancellation: Cancellations made 30 days before the event receive a full refund. Cancellations made within 30 days receive no refund.</p>
            </li>


            <li>
                <h3>Assumption of Risk</h3>
                <p>By participating in any adventure activity offered on our website, you acknowledge that you are aware of the inherent risks involved in such activities. You agree to assume all risks, whether known or unknown, and to release off-road adventure from any and all liability for injuries, damages, or losses resulting from your participation.</p>
            </li>


            <li>
                <h3>Insurance and Liability</h3>
                <p>You are responsible for carrying appropriate insurance coverage for the adventure activities. off-road adventure is not liable for any injuries, damages, or losses incurred during your participation.</p>
            </li>


            <li>
                <h3>Privacy Policy</h3>
                <p>Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and protect your personal information.</p>
            </li>

            


            </ol>








            
        <!-- </div> -->
        <input type="checkbox" id="acceptTerms" onclick="toggleBook()"> I accept the Terms and Conditions
    </div>
    </div>

    <!-- booking section starts here -->

    <section class="booking">

        <div id="book"
            class="hidden">

            <h1 class="heading-title">book your adventure!</h1>
            <form action="book-form.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>name:</span>
                        <input type="text" placeholder="enter your name " name="name">
                    </div>
                    <div class="inputBox">
                        <span>email:</span>
                        <input type="email" placeholder="enter your email " name="email">
                    </div>


                    <div class="inputBox">
                        <span>aadhaar number:</span>
                        <input type="number" placeholder="enter your aadhaar number " name="aadhaar">
                    </div>

                    <div class="inputBox">
                        <span>phone:</span>
                        <input type="number" placeholder="enter your number " name="phone">
                    </div>
                    <div class="inputBox">
                        <span>address:</span>
                        <input type="text" placeholder="enter your address " name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to:</span>
                        <input type="text" placeholder="place you want to visit " name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many:</span>
                        <input type="number" placeholder="number of  guests " name="guests">
                    </div>

                    <div class="inputBox">
                        <span>arrivals:</span>
                        <input type="date" name="arrivals">
                    </div>

                    <div class="inputBox">
                        <span>leaving:</span>
                        <input type="date" name="leaving">
                    </div>

                </div>
                <input type="submit" value="submit" class="btn" name="send">

            </form>
        </div>
    </section>


    <!-- booking section ends here -->


    <!-- footer section starts -->
    <section class="footer">


        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="t&c.php"> <i class="fas fa-angle-right"></i> terms of use</a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> luffy@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> delhi,india - 400104 </a>

            </div>
            <div class="box">
                <h3> follow us </h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>
        <div class="credit"> created by <span>k.t</span> | all rights reserved! </div>
    </section>





    <!-- footer section end -->


    <!-- swiper js  link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>