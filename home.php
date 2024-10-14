<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>DREAM RISER BUILDERS</h3>
      <p>Welcome to Dream Riser Builders Inc., where your vision transforms into reality. 
         Specializing in innovative construction solutions, we combine quality craftsmanship with a commitment to excellence. 
         Whether you're planning a residential renovation or a commercial project, our expert team is dedicated to bringing your dreams to life, 
         ensuring every detail exceeds your expectations. Let us build your future together!
</p>
   </div>

</section>

<section class="products">

    <h1 class="title">Our Projects</h1>

    <div class="box-container">
      
        <form action="" class="box">

            <img src="images/kanlaon site.jpeg" alt="" class="image">
            <div class="name">
                <h3>Kanlaon Site</h3>
            </div>

         </form>

         <form action="" class="box">

            <img src="images/province sites (7).jpeg" alt="" class="image">
            <div class="name">
                <h3>Province Site</h3>
            </div>

         </form>

         <form action="" class="box">

            <img src="images/qc site.jpeg" alt="" class="image">
            <div class="name">
                <h3>Quezon City Site</h3>
            </div>

         </form>

         <form action="" class="box">
            <img src="images/tondo site.jpg" alt="" class="image">
            <div class="name">
                <h3>Tondo Site</h3>
            </div>

         </form>

         <form action="" class="box">

            <img src="images/valenzuela site.jpg" alt="" class="image">
            <div class="name">
                <h3>Valenzuela Site</h3>
            </div>

         </form>
         
         <form action="" class="box">

            <img src="images/bulacan site.jpg" alt="" class="image">
            <div class="name">
                <h3>Bulacan Site</h3>
            </div>

         </form>

    </div>
</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Contact us today to discuss your dream project and turn your ideas into a wonderful reality!</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>