<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/user_style.css">

</head>
<body>
   
<?php @include 'user_header.php'; ?>

<section class="users">

   <h1 class="title">Projects</h1>

   <div class="box-container">
      <div class="box">
         <p>Project ID : </p>
         <p> Placed on : <span></span> </p>
         <p> Location of Property : <span></span> </p>
         <p> Lot Area : <span></span> </p>
         <p> FLoor Area : <span></span> </p>
         <p> Floor Levels : <span></span> </p>
         <p> Number of Rooms : <span></span> </p>
         <p> Number of Toilet and Bath : <span></span> </p>
         <p> Classification : <span></span> </p>
         <p> Preferred Finish : <span></span> </p>
      </div>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>