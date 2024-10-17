


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
                    /*  CSS styles here */
        .profile_image img {
            width: 100vw;
            height: 50vh;
        }

        input[type="text"],
        input[type="email"] {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid var(--background-color);
            width: 100%;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            background-color: transparent;
            outline: none;
            border-bottom: 2px solid var(--background-color);
        }

        input.readonly {
            pointer-events: none;
            /* Make the input unclickable */
        }

        .invalid {
            border-color: red !important;
        }

        .error {
            color: red;
            font-size: 12px;
        }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Vijay products</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profile.php">profile</a></li>
                        <!-- <li><a class="dropdown-item" href="insertproduct.php">insert product</a></li> -->
                        <!-- <li><a class="dropdown-item" href="viewdetail.php">view product</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.php">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="insertproduct.php">insert product</a>
                                            <!-- <a class="nav-link" href="password.php">Forgot Password</a> -->
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="viewdetail.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                product view
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start shops
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                        </div>


                        <div class="container">
        <p class="fs-1 fw-bold text-success">Here ! vijay samrat</p>
        <div class="row gap-3 ">
            <div class="col-md-4 col-12 p-2 rounded shadow border text-center">
                <div id="imageContainer" class="mb-3 profile_image">
                    <img id="displayedImage" src="samrat.JPG" alt="Image" class="img-fluid rounded">
                </div>
                <input type="file" id="fileInput" style="display: none;">
                <button id="changeImageButton" class="btn btn-outline-success">Change Image</button>
            </div>
            <div class="col-md-7 col-12 shadow rounded border p-3">
                <table id="editableTable" class="px-5" width="100%">
                    <tbody>
                        <tr>
                            <td class="fs-5 fw-bold mt-3">Personal Information
                            </td>
                        </tr>
                        <tr class="mt-3">
                            <td><input id="name" class=" mt-2 w-50 fs-5 p-1 text-secondary readonly" type="text"
                                    placeholder="Enter your full Name" value="Vijay samrat">
                                <br>
                                <span id="name_error" class="error"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5 fw-bold mt-3">Select Gender
                            </td>
                        </tr>
                        <tr class="mt-3 ">
                            <td class="px-3 fs-5 text-secondary"><input class="readonly" type="radio" value="Male"
                                    name="Gender" checked>Male&nbsp;
                                <input class="readonly" type="radio" value="Female" name="Gender">Female&nbsp;
                                <input class="readonly" type="radio" value="Orther" name="Gender">Other&nbsp;

                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5 fw-bold mt-3">Email Address
                            </td>
                        </tr>
                        <tr class="mt-3">
                            <td><input id="newPassword" class=" mt-2 w-50 fs-5 p-1 text-secondary readonly" type="text"
                                    placeholder="Enter your Email " value="example@123.gmail.com">
                                <br>
                                <span id="new_password_error" class="error"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5 fw-bold mt-3">Mobile Number
                            </td>
                        </tr>
                        <tr class="mt-3">
                            <td><input id="confirmPassword" class=" mt-2 w-50 fs-5 p-1 text-secondary readonly"
                                    type="text" placeholder="Enter your Mobile" value="9814446083">
                                <br>
                                <span id="com_password_error" class="error"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="actions mt-2">
                    <span class="edit">
                        <button class="edit btn btn-outline-success w-25">Edit</button>
                    </span>
                    <span class="save-cancel" style="display: none;">
                        <button class="save btn btn-outline-success w-25">Save</button>
                        <button class="cancel btn btn-outline-danger w-25">Cancel</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // for images  #################################################################################
            $("#changeImageButton").click(function () {
                $("#fileInput").click();
            });

            $("#fileInput").change(function () {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#displayedImage").attr("src", e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
            // #####for form validation ##################################################################333
            $(".edit").click(function () {
                $(".readonly").removeAttr("readonly").css("pointer-events", "auto");
                $(".edit").hide();
                $(".save-cancel").show();
            });

            $(".cancel").click(function () {
                $(".readonly").attr("readonly", true).css("pointer-events", "none");
                $(".edit").show();
                $(".save-cancel").hide();
            });

            $(".save").click(function () {
                var name = $("#name").val();
                var email = $("#newPassword").val();
                var mobile = $("#confirmPassword").val();
                var gender = $("input[name='Gender']:checked").val();

                var valid = true;

                if (!validateName(name)) {
                    $("#name").addClass("invalid");
                    $("#name_error").text("Name must have at least 5 to 20 letters and contain only letters");
                    valid = false;
                } else {
                    $("#name").removeClass("invalid");
                    $("#name_error").text("");
                }

                if (!validateEmail(email)) {
                    $("#newPassword").addClass("invalid");
                    $("#new_password_error").text("Please enter a valid email address");
                    valid = false;
                } else {
                    $("#newPassword").removeClass("invalid");
                    $("#new_password_error").text("");
                }

                if (!validateMobile(mobile)) {
                    $("#confirmPassword").addClass("invalid");
                    $("#com_password_error").text("Mobile number must contain only numbers");
                    valid = false;
                } else {
                    $("#confirmPassword").removeClass("invalid");
                    $("#com_password_error").text("");
                }

                if (!gender) {
                    $("#gender_error").text("Please select a gender");
                    valid = false;
                } else {
                    $("#gender_error").text("");
                }

                // Continue with saving...
                if (valid) {
                    $(".readonly").attr("readonly", true).css("pointer-events", "none");
                    $(".edit").show();
                    $(".save-cancel").hide();
                }
            });

            function validateEmail(email) {
                var email_address = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
                return email_address;
            }

            function validateMobile(mobile) {
                var mobile_number = /^[0-9]+$/;
                return mobile_number.test(mobile);
            }

            function validateName(name) {
                var full_name = /^[a-zA-Z]+(?: [a-zA-Z]+)*$/.test(name) && name.length >= 5 && name.length <= 20;
                return full_name;
            }
        });
    </script>








                        

                                   
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid px-4">
    <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; Your Website 2024</div>
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
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>





















