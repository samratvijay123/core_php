<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="website.css" rel="stylesheet" />

        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        function alert_message() {
            alert("First you have to login!");
        }
        function signup() {
            document.getElementById('signup').style.display = "block";
            document.getElementById('login').style.display = "none";
            document.getElementById('loginforget').style.display = "none";
        }
        function backToLogin() {
            document.getElementById('login').style.display = "block";
            document.getElementById('signup').style.display = "none";
            document.getElementById('loginforget').style.display = "none";
        }
        function loginforegtpassword(event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            document.getElementById('login').style.display = "none";
            document.getElementById('signup').style.display = "none";
            document.getElementById('loginforget').style.display = "block";
        }



        function loginforget() {
            // Perform validation here
            if ($('#loginforget').valid()) {
                // For demonstration purposes, simply alert that password reset was successful
                alert("Password reset successfully!");

                // Reset the form and display the login form
                document.getElementById('login').style.display = "block";
                document.getElementById('signup').style.display = "none";
                document.getElementById('loginforget').style.display = "none";

                // Reset the form fields
                document.getElementById('loginforget').reset();
            }
        }
        // become a saller ###########################################################################################################################################################

    



        // validate 
        $(document).ready(function () {
            $.validator.addMethod("validName", function (value, element) {
                return /^[a-zA-Z]+(?: [a-zA-Z]+)*$/.test(value) && value.length >= 5 && value.length <= 20;
            }, "Name must contain only letters");

            $.validator.addMethod("password", function (value, element) {
                var regex = /^(?=.*[a-zA-Z])(?=.*[!@#$%^&*])/;
                return regex.test(value);
            }, "Password must contain at least one capital letter and one special character");

            $.validator.addMethod("mobileNumber", function (value, element) {
                var regex = /^[0-9]+$/;
                return regex.test(value);
            }, "Mobile number must contain only numbers");
            // login validate ----------------------------------------------------------------------------------------------------------------------------------
            $('#login').validate({
                rules: {
                    loginmobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        digits: true
                    },
                    loginpassword: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    loginmobile: {
                        required: "Mobile Number is a required field",
                        minlength: "Mobile number must be 10 digits",
                        maxlength: "Mobile number must be 10 digits",
                        digits: "Mobile number must contain only digits"
                    },
                    loginpassword: {
                        required: "Password is a required field",
                        minlength: "Password must be at least 8 characters long"
                    }
                },
                errorPlacement: function (error, element) {
                    if (element.attr('name') == "loginmobile") {
                        $('#loginmobile_error').html(error);
                    } else if (element.attr('name') == "loginpassword") {
                        $('#loginpassword_error').html(error);
                    }
                },
                submitHandler: function (form) {
                    alert('Login successful!');
                    window.location.href = 'index.php'; // Redirect to home_user.php
                }
            });
            // sing up validate ---------------------------------------------------------------------------------------------------------------------------------------
            $('#signup').validate({
                rules: {
                    registrationname: {
                        required: true,
                        validName: true,
                        minlength: 8,
                        maxlength: 20
                    },
                    registrationmobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        mobileNumber: true
                    },
                    registrationpincode: {
                        required: true,
                        minlength: 8,
                        maxlength: 8
                    },
                    registrationaddress: {
                        required: true,
                        minlength: 5,
                        maxlength: 20
                    },
                    registrationpassword: {
                        required: true,
                        minlength: 8,
                        password: true
                    },
                    registrationconfirm: {
                        required: true,
                        equalTo: "#registrationpassword"
                    }
                },
                messages: {
                    registrationname: {
                        required: "Full name is a required field",
                        validName: "Name must contain only letters",
                        minlength: "Name must be at least 5 letters",
                        maxlength: "Name must be less than 20 letters"
                    },
                    registrationmobile: {
                        required: "Mobile Number is a required field",
                        minlength: "Mobile number must be 10 digits",
                        maxlength: "Mobile number must be 10 digits"
                    },
                    registrationpincode: {
                        required: "Pincode is a required field",
                        minlength: "Pincode must be 8 digits",
                        maxlength: "Pincode must be 8 digits"
                    },
                    registrationaddress: {
                        required: "Address is a required field",
                        minlength: "Address must contain at least 5 characters",
                        maxlength: "Address can contain a maximum of 20 characters"
                    },
                    registrationpassword: {
                        required: "Password is a required field",
                        minlength: "Password must be at least 8 characters long"
                    },
                    registrationconfirm: {
                        required: "Confirm Password is a required field",
                        equalTo: "Confirm Password must match Password"
                    }
                },
                errorPlacement: function (error, element) {
                    var name = element.attr("name");
                    $("#" + name + "_error").html(error);
                }
            });
            // loginforget validate ----------------------------------------------------------------------------------------------------------------------------------
            // loginforget validate
            $('#loginforget').validate({
                rules: {
                    loginforgetmobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        mobileNumber: true
                    },
                    loginforgetpassword: {
                        required: true,
                        minlength: 8,
                        password: true
                    },
                    loginforgetpasswordconfirm: {
                        required: true,
                        equalTo: "#loginforgetpassword"
                    }
                },
                messages: {
                    loginforgetmobile: {
                        required: "Mobile Number is a required field",
                        minlength: "Mobile number must be 10 digits",
                        maxlength: "Mobile number must be 10 digits"
                    },
                    loginforgetpassword: {
                        required: "Password is a required field",
                        minlength: "Password must be at least 8 characters long"
                    },
                    loginforgetpasswordconfirm: {
                        required: "Confirm Password is a required field",
                        equalTo: "Confirm Password must match Password"
                    }
                },
                errorPlacement: function (error, element) {
                    if (element.attr('name') == "loginforgetmobile") {
                        $('#loginforgetmobile_error').html(error);
                    } else if (element.attr('name') == "loginforgetpassword") {
                        $('#loginforgetpassword_error').html(error);
                    } else if (element.attr('name') == "loginforgetpasswordconfirm") {
                        $('#loginforgetpasswordconfirm_error').html(error);
                    }
                }
            });
            //##################
            
        });
    </script>

    <style>
        :root {
            --background-color: rgba(143, 142, 152, 0.57);
            --text-color: black;
            --form-color: rgba(177, 202, 219, 0.779);
            --btn-color: green;
            --body-color: white;
            --icons-color: rgb(194, 175, 35);
            --footer-backgroundcolor: rgb(33, 37, 72, 1);
        }

        .navigation_bar a {
            color: var(--text-color);
        }

        .navigation_bar a:hover {

            background-color: var(--btn-color);
            color: var(--body-color);
        }

        .dropdown.dropdown-menu {
            display: none;
        }

        .dropdown:hover>.dropdown-menu {
            top: 100%;
            display: block;
            margin-top: 0.125em;
        }
        #login{
            background-color:white;
            margin-top:  25vh;
            border:2px solid black;
            width:40vw;
             margin-left:25vw;
             padding: 12px;
        }
        #signup{
            background-color:white;
            margin-top:  25vh;
            border:2px solid black;
            width:40vw;
             margin-left:25vw;
             padding:12px;

        }
       #loginforget{
        background-color:white;
            margin-top:  25vh;
            border:2px solid black;
            width:40vw;
             margin-left:25vw;
             padding:12px;

       }
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
            <li><a href="login.php">login</a></li>
            <li><a href="login.php">admin</a></li>

        </ul>
        <div class="nav-icon">
            <!-- <a href="#"><i class='bx bx-search-alt-2'></i></a> -->
            <input type="text" placeholder="search" id="" class="IN">
             <!-- <a href="#"><i class='bx bx-user'></i></a>  -->
            <a href=""><i class='bx bx-cart'></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    
    </header>
<!-- <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Login</button> -->
    <!-- login form  /--------------------------------------------------------------------------------------------------------->
    <!-- user loin form ###################################################################################################################################################-->
    <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body"> -->
                    <!-- user login form  -->
                    <form action="" id="login">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3 text-success" id="staticBackdropLabel">Welcome To Login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Mobile:</label>
                            <input type="text" class="form-control" name="loginmobile" id="loginmobile">
                            <span id="loginmobile_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="loginpassword" id="loginpassword">
                            <span id="loginpassword_error" class="text-danger"></span>
                            <a href="#" class="text-success float-end" onclick="loginforegtpassword(event)">Forget
                                Password?</a>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input border-2" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn-lg btn btn-outline-success">Login</button>
                            <button type="button" class="btn-lg btn btn-outline-success"
                                onclick="signup()">Signup</button>
                        </div>
                    </form>
                    <!-- user registration form -------------------------------------------------------------------------------------------------------------- -->
                    <form action="" id="signup" style="display: none;">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3 text-success" id="staticBackdropLabel">Welcome To Singup
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Full name</label>
                            <input type="text" class="form-control" name="registrationname" id="registrationname">
                            <span class="text-danger" id="registrationname_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="registrationmobile" id="registrationmobile">
                            <span class="text-danger" id="registrationmobile_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Select Gender</label>
                            <br>
                            <input type="radio" name="gender" value="male">male
                            <input type="radio" name="gender" value="Female">Female
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Pincode</label>
                            <input type="text" class="form-control" name="registrationpincode" id="registrationpincode">
                            <span class="text-danger" id="registrationpincode_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="loginName" class="form-label">Address</label>
                            <input type="text" class="form-control" name="registrationaddress" id="registrationaddress">
                            <span class="text-danger" id="registrationaddress_error"></span>
                        </div>
                        <div class="mb-3 ">
                            <label for="loginName" class="form-label">Password</label>
                            <input type="password" class="form-control" name="registrationpassword"
                                id="registrationpassword">
                            <span class="text-danger" id="registrationpassword_error"></span>
                        </div>
                        <div class="mb-3 ">
                            <label for="loginName" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="registrationconfirm"
                                id="registrationconfirm">
                            <span class="text-danger" id="registrationconfirm_error"></span>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn-lg btn btn-outline-success">Singup</button>
                            <button type="button" class="btn-lg btn btn-outline-success" onclick="backToLogin()">Back to
                                login</button>
                        </div>
                    </form>
                    <!-- forget password -->
                    <form action="" id="loginforget" style="display: none;">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3 text-success" id="staticBackdropLabel">Welcome To Forget
                                Password</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <label for="loginforgetmobile" class="form-label">Mobile:</label>
                            <input type="text" class="form-control" name="loginforgetmobile" id="loginforgetmobile">
                            <span class="text-danger" id="loginforgetmobile_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="loginforgetpassword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="loginforgetpassword"
                                id="loginforgetpassword">
                            <span class="text-danger" id="loginforgetpassword_error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="loginforgetpasswordconfirm" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="loginforgetpasswordconfirm"
                                id="loginforgetpasswordconfirm">
                            <span class="text-danger" id="loginforgetpasswordconfirm_error"></span>
                        </div>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="button" class="btn-lg btn btn-outline-success"
                                onclick="loginforget()">Submit</button>
                            <button type="button" class="btn-lg btn btn-outline-success" onclick="backToLogin()">Back to
                                login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- for become a saller form  *****##########################################################################################################################################################-->
    
</body>

</html> 














 



        <!-- <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script> -->
    </body>
</html>
