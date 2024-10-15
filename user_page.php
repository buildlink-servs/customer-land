<?php
/*

use this code if connect na sa may database ng user para it will ask the user to sign in first if di pa or naka sign in na sila bago maccess to
@include 'config.php';

session_start();

$customern_id = $_SESSION['customer_id'];

if(!isset($customer_id)){
   header('location:login.php');
};
*/
?>

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

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">

      <div class="box">
         <p>Quotations</p>
      </div>

      <div class="box">
         <p>Project Update</p>
      </div>

   </div>

</section>













<script src="js/user_script.js"></script>

</body>
</html>