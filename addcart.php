<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js" 
integrity="sha512-FQhYy81HuzbT39wBG8y9yrU/7KMBT6IxfsPE6f5WUpDQygNpNODONEIEq4GXJNnoC+aiVKB/y98E+8EREOb/FA==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- <link rel="stylesheet" href="all-iphone.css"> -->
    <link rel="stylesheet" href="website.css">
    <title>Document</title>
</head>
<style>
    *{
    margin:0;
    padding:0;
}

/* cloth */
#cloth
{
    
    height: 655px;
    margin-top: 100px;
    display: flex;
}
.first1
{
    
    width: 30%;
}
#first1
{
    margin-left: 300px;
}
#first11
{
    
    height: 448px;
}
#first12
{
    height: 150px;
    margin-top: 20px;
    margin-left: 7px;
    display: flex;
}
#first11 img{
    width: 100%;
    height: 448px;
}
#first2{
    padding-left: 30px;
}
.orther
{
    width: 33%;
}
.orther img{
    width: 100%;
    height: 150px;
}
#add_to_cart
{
    background-color: blue; 
    border-color:transparent; 
    height: 30px;
    margin-top: 20px; 
    width: 40%; 
    
    color: white;

}
#heart
{
    width: 6%;
    height: 25px;
    
    margin-left: 10px;
    margin-bottom: -10px;
    padding: 2px;
    cursor: pointer;
}
#buy
{
    width: 50%;
    margin-top: 10px;
    height: 30px;
    color: white;
    background-color: black;
    border: transparent;
}
#last
{
    
    display: flex;
    width: 50%;
    margin-left: 25%;
}
.last1
{
    
    width: 25%;
    margin:0px 5px;
    height: 200px;

}
.last1 img
{
    width: 100%;
    height: 200px;
}
#add_to_cart:hover,
#buy:hover{
    opacity: 80%;
    cursor: pointer;
}


</style>
<body>

    <header class="sticky">
        <a href="#" class="logo"><img src="image/loogo.jpeg" alt=""></a>
        <ul class="navmenu">
            <li><a href="website.php">home</a></li>
            <li><a href="clothes.php">products</a></li>
            <!-- <li><a href="">product</a></li> -->
            <!-- <li><a href="">contacts</a></li> -->
            <li><a href="login.php">login</a></li>
            <!-- <li><a href="adminlog.php">admin</a></li> -->

        </ul>
        <div class="nav-icon">
            <!-- <a href="#"><i class='bx bx-search-alt-2'></i></a> -->
            <input type="text" placeholder="search" id="" class="IN">
             <!-- <a href="#"><i class='bx bx-user'></i></a>  -->
            <a href="cart.php"><i class='bx bx-cart'></i></a>
    
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    
    </header>
   
    <!-- m1-cloth -->
    <div id="cloth">
        <div class="first1" id="first1">
            <div id="first11">
                <img id="img" src="image/3.jpg" alt="">
            </div>
          
        </div>
        <div class="first1" id="first2">
            <h3>
                girls new fashion
                <br>
                
            </h3>
            <p>₹1200</p>
            
            <br>
            <p>Quantity</p>
            <input type="number" value="1">
            <br>
            <a href=""><input id="add_to_cart" type="submit" value="Add to cart"></a> <br>
                <img id="heart" src="heart.png" alt="" onclick="heart_empty()" ondblclick="heart_full()">
                <br>
                <!-- <input id="buy" type="submit"> -->
              <!-- product information -->
            <p Style="color:red">Product Details</p>
            <p>
                size:medium  <br> 
                Model Number:MU793HN/A<br>
                Model Name:new  fashion <br> 
                color:Natural fiber <br> 
                Pack of:1 <br>                           
            </p>
        </div>
    </div>




    

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

   
</body>

</html>