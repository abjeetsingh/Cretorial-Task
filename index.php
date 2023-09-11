<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cretorial: Task</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- navbar sections starts  -->
    <header class="header">
        <div class="logo">
            <img src="images/logo-main.svg" alt="logo-Cretorial">
        </div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#download">Download</a>
            <a href="#footer">Contact</a>
            <a href="#" class="btn">Log in</a>
        </nav>


        <div class="fas fa-bars" id="menu-btn"></div>
    </header>
    <!-- navbar sections starts  -->

   
    <!-- home section stars  -->

    <section class="home" id="home">
        <div class="content">
            <h1>The Smartest AI Research Tool for Creating</h1>
            <p>Experience the difference with ad-ready slogans that make your brand different from the rest.</p>

            <a href="#" class="home-btn">Try now</a>
        </div>


        <div class="image">
            <img src="images/girl1.png">
        </div>
    </section>

    <!-- home section ends -->

    <!-- features sectin starts  -->

    <section class="features" id="features">
        <div class="heading">
            <h1>Steer clear from one-dimensional content.</h1>
        </div>


        <div class="row">
            <!-- 1 Tab  -->
            <div class="image">
                <img src="images/girl2.png" alt="illustration-features-tab-1">
            </div>


            <div class="content">
                <h1>Blog Content</h1>
                <p>Write well optimized, premium blog content in a fraction of the time.</p>
                <a href="#" class="all-btn">more info</a>
            </div>

            <!-- 1 Tab  -->

            <!-- 2 Tab  -->
            <div class="content">
                <h1>Digital Ad Copy</h1>
                <p>Create powerful ad copy that engages the audience and increases conversions.</p>
                <a href="#" class="all-btn">more info</a>
            </div>

            <div class="image">
                <img src="images/girl1.png" alt="illustration-features-tab-2">
            </div>

            <!-- 2 Tab  -->

            <div class="image">
                <img src="images/girl2.png" alt="illustration-features-tab-3">
            </div>

            <div class="content">
                <h1>E-commerce Copy</h1>
                <p>Generate SEO-optimized E-commerce copy that powers up sales.</p>
                <a href="#" class="all-btn">more info</a>
            </div>


            <!-- 3 Tab  -->

        </div>
    </section>


    <!-- features sectin ends -->


    <!-- downloads section starts  -->

    <section class="download" id="download">
        <div class="heading">
            <h1>Download Cretorial</h1>
            <p>Download Cretorial for all the following platforms</p>
        </div>  

        <div class="box-container">
            <div class="box">
                <img src="images/apple-logo-svgrepo-com.svg" alt="logo-apple">

                <h3>Download For MAC</h3>
                <p>Over 10M Downloads</p>
                <a href="#" class="all-btn">install</a>
            </div>

            <div class="box">
                <img src="images/Windows.svg" alt="logo-windows">

                <h3>Download For Windows</h3>
                <p>over 50M Downloads</p>
                <a href="#" class="all-btn">install</a>
            </div>

            <div class="box">
                <img src="images/linux.svg" alt="logo-linux">

                <h3>Download For Linux</h3>
                <p>over 40M Downloads</p>
                <a href="#" class="all-btn">install</a>
            </div>
        </div>
    </section>


    <!-- downloads section ends -->
    <div class="heading">
        <h1 >Get In Contact With US!</h1>
    </div>
    
    <?php include("form.php")?>


    <!-- footer section starts  -->

   <section class="footer" id="footer">
       <div class="box-container">
           <div class="box">
               <h3>quick links</h3>
               <a href="#"><i class="fas fa-chevron-right"></i>home</a>
               <a href="#"><i class="fas fa-chevron-right"></i>features</a>
               <a href="#"><i class="fas fa-chevron-right"></i>download</a>
               <a href="#"><i class="fas fa-chevron-right"></i>contact</a>
            </div>
            
            
            <div class="box">
                <h3>our services</h3>
                <a href="#"><i class="fas fa-chevron-right"></i>Cretorial themes</a>
                <a href="#"><i class="fas fa-chevron-right"></i>AI Tech</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Upcoming Projects</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Other extension</a>
           </div>

           <div class="box">
               <h3>contact info</h3>
               <a href="#"><i class="fas fa-phone"></i>+123-456-789</a>
               <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
               <a href="#"><i class="fas fa-envelope"></i>abjeet@cretorial.com</a>
               <a href="#"><i class="fas fa-envelope"></i>marketing@cretorial.com</a>
               <a href="#"><i class="fas fa-map-marker-alt"></i>Advant Navis Business Park, Sec-142
            
            Noida - 201305, Uttar Pradesh, India</a>
           </div>

           <div class="box">
               <h3>follow us</h3>
               <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
               <a href="#"><i class="fab fa-twitter"></i>facebook</a>
               <a href="#"><i class="fab fa-instagram"></i>instagram</a>
               <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
               <a href="#"><i class="fab fa-pinterest"></i>pinterest</a>
           </div>
       </div>
       <div class="credit">created by
           <span>Abjeet Singh</span> | all rights reserved</a>
       </div>
   </section>

    <!-- footer section ends -->


    <script src="js/main.js"></script>
</body>

</html>