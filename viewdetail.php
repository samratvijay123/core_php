



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
                        <!-- <li><a class="dropdown-item" href="viewdetail.php">View product</a></li> -->
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
                                view product
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


                        <div class="container  ">
                            <div class="shadow p-2 mb-1 bg-primary rounded fs-4 mb-3 fw-bold text-white">View Product Item</div>
                            <div class="table-responsive">
                            <table class="table table-bordered border-black bg-body " style=" justify-content: center; align-items: center;">
            
                                <thead>
                                    <tr>
                                        <th scope="col">Product Id</th>
                                        <th scope="col">Product Title</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product Keyword</th>
                                        <th scope="col">Product Date</th>
                                        <th scope="col">Remove Product</th>
                                        <th scope="col">Edit Product</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Oversized tshirt</td>
                                        <td style="text-align: center; vertical-align: middle;"> <div style=" width: 80px; padding: 1px; display: inline-block;"><img src="image/1.jpg" alt="" style="width: 100%;"></div></td>
                                        <td>Rs 600</td>
                                        <td>Men's Blue & White Ramen</td>
                                        <td>01-02-2024 <br> 14:30:09</td>
                                        <td  style="color: blue;text-decoration: none;"><i class="fa-solid fa-trash "></i><a href="#" style="text-decoration: none;margin-left: 5px;">Remove</a></td>
                                        <td><i class="fa-solid fa-pen" style="color: blue;"></i><a href="#" style="text-decoration: none;margin-left: 5px;">Edit</a></td>
                                     </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>Oversized tshirt</td>
                                        <td style="text-align: center; vertical-align: middle;"> <div style=" width: 80px; padding: 1px; display: inline-block;"><img src="image/2.jpg" alt="" style="width: 100%;"></div></td>
                                        <td>Rs 600</td>
                                        <td>Men's Blue & White Ramen</td>
                                        <td>01-02-2024 <br> 14:30:09</td>
                                        <td  style="color: blue;text-decoration: none;"><i class="fa-solid fa-trash "></i><a href="#" style="text-decoration: none;margin-left: 5px;">Remove</a></td>
                                        <td><i class="fa-solid fa-pen" style="color: blue;"></i><a href="#" style="text-decoration: none;margin-left: 5px;">Edit</a></td>
                                     </tr>
                
                                     <tr>
                                        <td>3</td>
                                        <td>Oversized tshirt</td>
                                        <td style="text-align: center; vertical-align: middle;"> <div style=" width: 80px; padding: 1px; display: inline-block;"><img src="image/3.jpg" alt="" style="width: 100%;"></div></td>
                                        <td>Rs 600</td>
                                        <td>Men's Blue & White Ramen</td>
                                        <td>01-02-2024 <br> 14:30:09</td>
                                        <td  style="color: blue;text-decoration: none;"><i class="fa-solid fa-trash "></i><a href="#" style="text-decoration: none;margin-left: 5px;">Remove</a></td>
                                        <td><i class="fa-solid fa-pen" style="color: blue;"></i><a href="#" style="text-decoration: none;margin-left: 5px;">Edit</a></td>
                                     </tr>
                
                                     <tr>
                                        <td>4</td>
                                        <td>Oversized tshirt</td>
                                        <td style="text-align: center; vertical-align: middle;"> <div style=" width: 80px; padding: 1px; display: inline-block;"><img src="image/4.jpg" alt="" style="width: 100%;"></div></td>
                                        <td>Rs 600</td>
                                        <td>Men's Blue & White Ramen</td>
                                        <td>01-02-2024 <br> 14:30:09</td>
                                        <td  style="color: blue;text-decoration: none;"><i class="fa-solid fa-trash "></i><a href="#" style="text-decoration: none;margin-left: 5px;">Remove</a></td>
                                        <td><i class="fa-solid fa-pen" style="color: blue;"></i><a href="#" style="text-decoration: none;margin-left: 5px;">Edit</a></td>
                                     </tr>
                
                                  </tbody>
            
                              </table>
                            </div>
                    
                        </div>
                    </div>
            
                </div>
                <!-- /#page-content-wrapper -->
            
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
                <script>
                    var el = document.getElementById("wrapper");
                    var toggleButton = document.getElementById("menu-toggle");
            
                    toggleButton.onclick = function () {
                        el.classList.toggle("toggled");
                    };
                </script>
           
            
            
            
            
            
            


                     





                                    </div>
                                
                                    <script>
                                        $(document).ready(function () {
                                            $(".edit").click(function () {
                                                $(".edit").hide();
                                                $(".save-cancel").show();
                                                $("#firstName, #lastName, #email, #mobile, input[name='Gender']").prop("readonly", false).prop("disabled", false);
                                            });
                                
                                            $(".cancel").click(function () {
                                                $(".edit").show();
                                                $(".save-cancel").hide();
                                                $("#firstName, #lastName, #email, #mobile, input[name='Gender']").prop("readonly", true).prop("disabled", true);
                                            });
                                
                                            $(".save").click(function () {
                                                // Perform save operation here
                                                $(".edit").show();
                                                $(".save-cancel").hide();
                                                $("#firstName, #lastName, #email, #mobile, input[name='Gender']").prop("readonly", true).prop("disabled", true);
                                            });
                                
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
                                        });
                                    </script>



                                </div>
                            </div>
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












