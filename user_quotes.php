<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/user_style.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'user_header.php'; ?>

<section class="heading">
    <h3>your quotations</h3>
    <p> <a href="user_page.php">home</a> / order </p>
</section>

<section class="placed-orders">

    <h1 class="title">Quotation</h1>

    <div class="box-container">


    <div class="box">
        <p> Quotation ID: <span></span> </p>
        <p> Placed on : <span></span> </p>
        <p> Name : <span></span> </p>
        <p> Number : <span></span> </p>
        <p> Email : <span></span> </p>
        <p> Location of Property : <span></span> </p>
        <p> Lot Area : <span></span> </p>
        <p> Classification : <span></span> </p>
        <p> Total Price : <span></span> </p>
        <p> Payment Scheme : <span></span> </p>
    </div>

    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/user_script.js"></script>
<script src="js/script.js"></script>

</body>
</html>