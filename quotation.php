<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quotation</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>get a Quote</h3>
    <p> <a href="home.php">home</a> / checkout </p>
</section>

<section class="checkout">

    <form action="" method="POST">

        <h3>Quotations</h3>

        <div class="flex">

            <div class="inputBox">
                <span>Full Name :*</span>
                <input type="text" name="name" placeholder="enter your name">
            </div>

            <div class="inputBox">
                <span>Contact Number :*</span>
                <input type="number" name="number" min="0" placeholder="enter your number">
            </div>

            <div class="inputBox">
                <span>Email :*</span>
                <input type="email" name="email" placeholder="enter your email">
            </div>

            <div class="inputBox">
                <span>Contact Person :*</span>
                <input type="text" name="name" placeholder="enter name">
            </div>
        </div>

        <h3>Property Information</h3>

        <div class="flex">

            <div class="inputBox">
                <span>Location of Property :</span>
                <input type="text" name="location" placeholder="complete address">
            </div>

            <div class="inputBox">
                <span>Lot Area :</span>
                <input type="text" name="area" placeholder="lot area">
            </div>

            <div class="inputBox">
                <span>Width :</span>
                <input type="number" name="width" placeholder="width">
            </div>

            <div class="inputBox">
                <span>Length :</span>
                <input type="number" name="length" placeholder="length">
            </div>
            </div>

            <h3>Desired Specifications</h3>

            <div class="flex">

            <div class="inputBox">
                <span>Floor Area :</span>
                <input type="number" name="floor-area" placeholder="floor area">
            </div>

            <div class="inputBox">
                <span>Number of Floor Levels :</span>
                <select name="method">
                <option value="zero">Number of Floor Levels:</option>
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5 or more</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Number of Rooms :</span>
                <select name="method">
                <option value="zero">Number of Rooms:</option>
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5 or more</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Classification :</span>
                <select name="method">
                    <option value="zero">Classification:</option>
                    <option value="residential">Residential</option>
                    <option value="commercial">Commercial</option>
                    <option value="industrial">Industrial</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Number of Toilet and Bath :</span>
                <select name="method">
                <option value="zero">Number of Toilet and Bath:</option>
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5 or more</option>
                </select>
            </div>

            <div class="inputBox">
                <span>Preferred Finish :</span>
                <select name="method">
                <option value="zero">Preferred Finish:</option>
                    <option value="basic">Basic</option>
                    <option value="standard">Standard</option>
                    <option value="semi-elegant">Semi Elegant</option>
                    <option value="elegant">Elegant</option>
                </select>
            </div>
            </div>

            <h3>Payment and Date of Construction</h3>

        <div class="flex">

            <div class="inputBox">
                <span>mm/dd/yyyy :</span>
                <input type="date" name="date" placeholder="mm/dd/yyyy">
            </div>

            <div class="inputBox">
                <span>Approximate Budget :</span>
                <input type="text" name="budget" placeholder="Budget">
            </div>

            <div class="inputBox">
                <span>Payment Scheme :</span>
                <select name="method">
                    <option value="payment">Payment Method</option>
                    <option value="cash">Cash</option>
                    <option value="bank">Bank Transfer</option>
                    <option value="E-wallet">E-wallet</option>
                </select>
            </div>

            <div class="inputBox">
                <span>How did you hear about Dream Riser Builders></span>
                <select name="method">
                    <option value="friends">Family/Friends</option>
                    <option value="ads">Social Media Ads</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            </div>

            <h3>Blueprints or file uploads</h3>

            <div class="flex">

            <div class="inputBox">
                <span>Upload File:</span>
                <input type="file" name="fileUpload" id="fileUpload" accept=".jpg, .jpeg, .png, .pdf">
            </div>
            </div>

        </div>

        <input type="submit" name="quotes" value="Submit" class="btn">

    </form>

</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>