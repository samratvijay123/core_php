<?php
session_start();
$mobile= $_SESSION['mobile'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vijayweb</title>
   
</head>
<body>
      <?php
      include('webhead.php');
      ?>

    <section class="main-home">
        <div class="main-text">
            <h5>Winter Collection</h5>
            <h1>New Winter <br>Collection 2024 </h1>
            <p>There's Nothign like Trend</p>
            <?php
             echo $mobile;
             ?>

            <a href="" class="main-btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>

        </div>
        <div class="down-arrow">
            <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>
        </div>

    </section>
    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Our Trending <span>Products</span></h2>
        </div>

        <div class="products">
            <div class="row">
               <a href=""> <img src="image/1.jpg" alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i> 
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Half Running set</h4>
                    <p>$200 - $300</p>
                </div>
            </div>
        


        <div class="row">
            <img src="image/2.jpg" alt="">
            <div class="product-text">
                <h5>New</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Formal Men Lowers</h4>
                <p>$200 - $300</p>
            </div>
        </div>


        <div class="row">
            <a href="addcart.php"><img src="image/3.jpg" alt=""></a>
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Half Running Suit</h4>
                <p>$200 - $300</p>
            </div>
        </div>


        <div class="row">
            <img src="image/4.jpg" alt="">
            <div class="product-text">
                <h5>Hot</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Half Fancy Lady Dress</h4>
                <p>$200 - $300</p>
            </div>
        </div>


        <div class="row">
            <img src="image/man.webp" alt="">
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Flix Flox Jeans</h4>
                <p>$200 - $300</p>
            </div>
        </div>



        <div class="row">
            <img src="image/b8.webp" alt="">
            <div class="product-text">
                <h5>Hot</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Fancy Salwar Suit</h4>
                <p>$200 - $300</p>
            </div>
        </div>


        <div class="row">
            <img src="image/b6.webp" alt="">
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Printed Straight kurta</h4>
                <p>$200 - $300</p>
            </div>
        </div>


        <div class="row">
            <img src="image/b9.webp" alt="">
            <div class="product-text">
                <h5>Sale</h5>
            </div>
            <div class="heart-icon">
                <i class='bx bx-heart'></i> 
            </div>
            <div class="ratting">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
            <div class="price">
                <h4>Collot Full Dress</h4>
                <p>$200 - $300</p>
            </div>
        </div>
    </div>

    </section>




    <section class="client-reviews">
        <div class="reviews">
            <h3> Client Reviews</h3>
            <img src="image/samrat.jpg" alt="">
            <p>My self Vijay Mourya . I am from Lumbini,Nepal!
             sipw 1 rupandeho ,kothai mai gaupalika !Vel accusantium quod , 
            Ea unde ullam neque quia nihil? Eveniet nulla magni quae
              ipsum assumenda dolorem.</p>

              <h2>Vijay Samrat</h2>
              <p>CEO of Addle</p>
        </div>

    </section>

    <section class="update-news">
        <div class="up-center-text">
            <h2>New Updates</h2>
        </div>

        <div class="update-cart">
            <div class="cart">
                <img src="image/bl-1.png" alt="">
                <h5>24 may 2024</h5>
                <h4>Let's start bring sale  on this summer vacation.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, qui fuga magnam modi
                     laboriosam ea vel dignissimos vitae hic, vero labore optio dolorum impedit quos 
                Cum temporibus officia quo incidunt! Placeat harum ut, dicta temporibus dolorum corrupti veritatis quam.</p>
                <h6>Continue Reading..</h6>
            </div>


            <div class="cart">
                <img src="image/bl-2.png" alt="">
                <h5>24 may 2024</h5>
                <h4>Let's start bring sale  on this summer vacation.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, qui fuga magnam modi
                     laboriosam ea vel dignissimos vitae hic, vero labore optio dolorum impedit quos na
                Cum temporibus officia quo incidunt! Placeat harum ut, dicta temporibus dolorum corrupti veritatis quam.</p>
                <h6>Continue Reading..</h6>
            </div>

            <div class="cart">
                <img src="image/bl-3.png" alt="">
                <h5>24 may 2024</h5>
                <h4>Let's start bring sale  on this summer vacation.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, qui fuga magnam modi
                     laboriosam ea vel dignissimos vitae hic, vero labore optio dolorum impedit quos na
                Cum temporibus officia quo incidunt! Placeat harum ut, dicta temporibus dolorum corrupti veritatis quam.</p>
                <h6>Continue Reading..</h6>
            </div>
        </div>

    </section>

    <section class="contact">
        <div class="contact-info">
         <div class="first-info">
            <img src="image/loogo.jpeg" alt="">
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






    <script scr="">
        const header = document.querySelector("header");

window.addEventListener ("scroll", function(){
    header.classList.toggle ("sticky", this.window.scrolly > 0);
})
let menu = document.querySelector('#menu-icon');
let navmenu = document.querySelector('.navmenu');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navmenu.classList.toggle('open');

}
    </script>
       


</body>
</html>