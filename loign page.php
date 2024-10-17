<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vijayweb</title>
    <link rel="stylesheet" href="website.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js" 
integrity="sha512-FQhYy81HuzbT39wBG8y9yrU/7KMBT6IxfsPE6f5WUpDQygNpNODONEIEq4GXJNnoC+aiVKB/y98E+8EREOb/FA==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<style>
  
    body {
        /* display: flex; */
        justify-content: center;
        align-items: center;
        height: 50vh;
        /* margin: 0; */
    }

    .form-container {
        margin-top:10% ;
        text-align: center;
        width:30%;
        margin-left: 38%;
        margin-bottom: 25px;

        border: 2px solid black; /* Adding black border to the form */
        padding: 20px; /* Adding padding for better spacing */
    }

    .error {
        color: red;
    }

    /* Styling the login button */
    button[type="submit"] {
        background-color: green;
        color: white;
        border: none;
        margin-top: 6px;
        padding: 10px 15px;
        cursor: pointer;
        /* margin-bottom: 8px; */
    }
    label{
      font-size:x-large;

    }
    input{
      width:60%;
      height:50%;
    }

</style>
</style>
</head>
<body>
    <header class="sticky">
        <a href="#" class="logo"><img src="image/loogo.jpeg" alt=""></a>
        <ul class="navmenu">
            <li><a href="website.php">home</a></li>
            <li><a href="clothes.php">products</a></li>
           
            <!-- <li><a href="">registration</a></li> -->
            <!-- <li><a href="">contacts</a></li> -->
            <li><a href="loign page.php">login</a></li>
        </ul>
        <div class="nav-icon">
            <!-- <a href="#"><i class='bx bx-search-alt-2'></i></a> -->
            <input type="text" placeholder="search" id="" class="IN">
             <!-- <a href="#"><i class='bx bx-user'></i></a>  -->
            <a href="cart.php"><i class='bx bx-cart'></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    
    </header>


    
<div class="form-container">
  <h2>Login Form</h2>

  <form id="loginForm" onsubmit="return validateForm()">
      <div>
          <label for="email">Email:</label><br>
          <input type="email" id="email" placeholder="Enter Email"   name="email" required>
      </div>
      <br>
      <div>
          <label for="password">Password:</label><br>
          <input type="password" id="password"   placeholder="Enter password" name="password" required><br>
      </div>
      <button type="submit">Login</button>
  </form>

  <div id="loginMessage" style="display: none;"></div>
</div>

<script>
function validateForm() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var errorMessage = "";

  if (email === "") {
      errorMessage += "Email is required.<br>";
  }
  if (password === "") {
      errorMessage += "Password is required.<br>";
  }

  if (errorMessage !== "") {
      document.getElementById("loginMessage").innerHTML = '<div class="error">' + errorMessage + '</div>';
      document.getElementById("loginMessage").style.display = "block";
      return false;
  } else {
      // Simulate successful login, you can replace this with your actual authentication logic
      document.getElementById("loginMessage").innerHTML = "Login successful!";
      document.getElementById("loginMessage").className = "";
      document.getElementById("loginMessage").style.display = "block";
      return false; // Prevent form submission for this example
  }
}
</script>
   

  <section class="contact">
      <div class="contact-info">
       <div class="first-info">
          <img src="loogo.jpeg" alt="">
          <p>3245 lumbini street road <br>NP Nepal 765378</p>
          <p>vsamrat702@gmail.com</p>
          <div class="social-icon">
              <a href="#"><i class='bx bxl-facebook-circle'></i></a>
              <a href="#"><i class='bx bxl-twitter'></i></a>
              <a href="#"><i class='bx bxl-instagram-alt'></i></a>
              <a href="#"><i class='bx bxl-linkedin'></i></a>
              <a href="#"><i class='bx bxl-youtube'></i></a>

          </div>
       </div>   

       <div class="second-info">
          <h4>Support </h4>
          <p>contact us</p>
          <p>About page</p>
          <p>Size Guide</p>
          <p>Shooping $ returns</p>
          <p>Pirvacy</p>
       </div>
       <div class="third-info">
          <h4>Shop</h4>
          <p>Men's Shopping</p>
          <p>Wome's Shopping</p>
          <p>Kid's Shopping</p>
          <p>Furniture</p>
          <p>Discount</p>

       </div>
       <div class="fourth-info">
          <h4>Company</h4>
          <p>About</p>
          <p>Blog</p>
          <p>Affiliate</p>
          <p>Login</p>

       </div>
       <div class="five">
          <h4>Subscibe</h4>
          <p>Receive Updates, Hot Deals, DDaily</p>
          <p>Lorem ipsum dolor sit amet  dolor odit.</p>
          <p>Receive Updates, Hot Deals, </p>
       </div>
      </div>
  </section>

  <div class="end-text">
      <p>copyright @2024. All Rights Reserved.Designd By Vsmaratji.</p>
  </div>






  <script src="java.js"></script>


</body>
</html>