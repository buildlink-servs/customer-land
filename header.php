<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo"><img src="images/logo.png"></a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="#">pages +</a>
                    <ul>
                        <li><a href="about.php">about</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                </li>

                <li><a href="services.php">services</a></li>
                <li><a href="quotation.php">make a quotation</a></li>

                <li><a href="#">account +</a>
                    <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="account-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="user_page.php" class="btn">Manage Account</a>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>

    </div>

</header>