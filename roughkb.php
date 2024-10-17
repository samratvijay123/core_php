<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vijayweb</title>
    <link rel="stylesheet" href="rough.css">
    
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php
   include('webhead.php');
   ?>



    <div class="cart">
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="mb-5">Your Shopping Cart</h2>
            <div class="table-responsive">
                <table id="cartTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th >Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product 1</td>
                            <td>$10.00</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-outline-secondary btn-sm quantity-btn" data-type="minus">-</button>
                                    </span>
                                    <input type="number" value="2" min="1" class="form-control">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-sm quantity-btn" data-type="plus">+</button>
                                    </span>
                                </div>
                            </td>
                            <td>$20.00</td>
                            <td>
                                <button class="btn btn-primary btn-sm buy-btn">Buy</button>
                                <button class="btn btn-danger btn-sm remove-btn">Remove</button>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>Product 1</td>
                            <td>$10.00</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-outline-secondary btn-sm quantity-btn" data-type="minus">-</button>
                                    </span>
                                    <input type="number" value="2" min="1" class="form-control">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-sm quantity-btn" data-type="plus">+</button>
                                    </span>
                                </div>
                            </td>
                            <td>$20.00</td>
                            <td>
                                <button class="btn btn-primary btn-sm buy-btn">Buy</button>
                                <button class="btn btn-danger btn-sm remove-btn">Remove</button>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>Product 1</td>
                            <td>$10.00</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-outline-secondary btn-sm quantity-btn" data-type="minus">-</button>
                                    </span>
                                    <input type="number" value="2" min="1" class="form-control">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-sm quantity-btn" data-type="plus">+</button>
                                    </span>
                                </div>
                            </td>
                            <td>$20.00</td>
                            <td>
                                <button class="btn btn-primary btn-sm buy-btn">Buy</button>
                                <button class="btn btn-danger btn-sm remove-btn">Remove</button>
                            </td>
                           
                        </tr>
                         Add more rows as needed  
                     </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <h2 class="mb-4">Order Summary</h2>
            <div class="card">
                <div class="card-body">
                    <p>Total Items: <span id="totalItems">3</span></p>
                    <p>Total Price: $<span id="totalPrice">35.00</span></p>
                    <button class="btn btn-primary btn-block">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Remove button click event
        $('.remove-btn').click(function() {
            $(this).closest('tr').remove();
            updateSummary();
        });

        // Buy button click event
        $('.buy-btn').click(function() {
            // Add your buy functionality here
            alert('product buy sucessfully');
        });

        // Quantity button click event
        $('.quantity-btn').click(function() {
            var type = $(this).data('type');
            var input = $(this).closest('.input-group').find('input');
            var currentValue = parseInt(input.val());
            if (type === 'minus' && currentValue > 1) {
                input.val(currentValue - 1);
            } else if (type === 'plus') {
                input.val(currentValue + 1);
            }
            updateTotal($(this).closest('tr'));
            updateSummary();
        });

        // Function to update total price for a row
        function updateTotal(row) {
            var quantity = parseInt(row.find('input').val());
            var price = parseFloat(row.find('td:eq(1)').text().replace('$', ''));
            var total = quantity * price;
            row.find('td:eq(3)').text('$' + total.toFixed(2));
        }

        // Function to update order summary
        function updateSummary() {
            var totalItems = 0;
            var totalPrice = 0;
            $('#cartTable tbody tr').each(function() {
                var quantity = parseInt($(this).find('input').val());
                var price = parseFloat($(this).find('td:eq(1)').text().replace('$', ''));
                totalItems += quantity;
                totalPrice += quantity * price;
            });
            $('#totalItems').text(totalItems);
            $('#totalPrice').text(totalPrice.toFixed(2));
        }
    });
</script>


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

    




</body>
</html> 









 
