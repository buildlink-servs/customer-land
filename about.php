<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/team members.jpeg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Discover the difference with our commitment to quality, integrity, and customer satisfaction. 
                Our experienced team combines innovative techniques with reliable service to ensure your construction project is completed on time and within budget. 
                From residential builds to commercial renovations, we prioritize your vision and work closely with you every step of the way, delivering exceptional results that stand the test of time.</p>
            <a href="quotation.php" class="btn">Get a quote</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We offer a comprehensive range of construction services tailored to meet your needs. 
                From innovative design solutions to meticulous building of residential, commercial, and industrial projects, our expert team is dedicated to turning your vision into reality. 
                We prioritize quality craftsmanship and attention to detail, ensuring that every project not only meets but exceeds your expectations. 
                Whether you're looking to create your dream home, expand your business, or develop a large-scale industrial facility, we have the expertise and resources to bring your ideas to life.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/workers.jpeg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/workers (2).jpeg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Dream Riser Builders is a trusted name in the construction industry, with over six years of experience delivering exceptional projects. 
                Our team is comprised of highly skilled engineers and professionals who are passionate about building. 
                We pride ourselves on our commitment to innovation, quality, and client satisfaction. 
                With a strong foundation of expertise and a collaborative approach, we work closely with our clients to ensure that every project reflects their unique vision and meets the highest standards. 
                At Dream Riser Builders, we’re not just constructing buildings; we’re building dreams.</p>
        </div>

    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>