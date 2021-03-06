<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Book Store</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./login_files/simple-line-icons.css">
    <link rel="stylesheet" href="./login_files/flag-icon.min.css">
    <link rel="stylesheet" href="./login_files/vendor.bundle.base.css">

    <link rel="stylesheet" href="./login_files/style.css" >
    <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/stellar-admin-free/jquery/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/assert/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- Font Awesome icons link -->
    <link rel="stylesheet" href="src\assert\fontawesome-free-5.15.4-web\fontawesome-free-5.15.4-web\css\all.css">
    <!-- main css -->
    <link href="style/style.css" rel="stylesheet">

</head>
<!--  only execute in desktop -->

<body>
    <!-- header section 1 -->
    <section class="" id="">
        <header class="header">
            <nav class="navbar navbar-light bg-warning">
                <div class="container">
                    <div class="col-4">
                        <a class="navbar-brand" href="#">
                               
                        <img src="https://ik.imagekit.io/shravanatirtha/pathberries-log-tran_8NsaQ1PfY.png?updatedAt=1640678407413"  width="92" height="92" alt="...">
                        </a>
                    </div>
                    <div class="col-4">
                    <form class="pt-12  " method="post" action="./searchBookValidate.php">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="pid"
                                placeholder="Search for books" aria-label="Search for books"
                                aria-describedby="basic-addon2">
                            <button type="submit" class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></button>
                        </div>
</form>
                    </div>
                    <div class="col-4">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#"><i
                                        class="fas fa-exclamation-circle"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-cart-plus"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d" href="#" aria-disabled="true"><i
                                        class="fa fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

    </section>

    <!-- header section 2-->
    <!-- <section class="" id="">
        <nav class="navbar navbar-light bg-light">
            <div class="container justify-content-center">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">offer Zone</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"> Trending Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fast Filling Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ending Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Deals</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section> -->
 
    <!-- Hero Section -->

    <section class="" id="">
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="src/img/slider imgs/1.png" style="width:20%;height:450px" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="btn-shop">
                                <button class="btn-lg btn-warning ">Shop Now</button>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="src/img/slider imgs/2.png" style="height:450px"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="btn-shop">
                                <button class="btn-lg btn-warning">Shop Now</button>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="src/img/slider imgs/3.png" style="height:450px"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="btn-shop">
                                <button class="btn-lg btn-warning">Shop Now</button>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
    </section>

    <!-- Hero Section end  -->


    <!--Milestone  section  -->
    <!-- <section class="" id="">
        <div class="container fluid  py-lg-5  align-content-center">
            <div class="row">
                <div class="col-lg-4">
                    <div class="milestronecard1 ">
                        <div class="card text-white">
                            <img src="/src/img/card img/mile1.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="">
                        <div class="card  text-white">
                            <img src="/src/img/card img/mile2.png" class="card-img" alt="...">
                            <div class="card-img-overlay"> -->
                                <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                            <!-- </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  text-white">
                        <img src="/src/img/card img/mile3.png" class="card-img" alt="...">
                        <div class="card-img-overlay"> -->
                            <!-- <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p> -->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--Milestone  section  end -->

        <!-- offer section -->
        <!-- <section class=" offer-section" id="">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Offer Zone</span>
                    <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                class="fa fa-angle-double-right"></i></a></span>
                </div>


            </nav>
            <div class="container-fluid py-4">
                <div class="row gx-1">

                    <div class="col-lg-6">
                        <div class="card rounded-3 text-white">

                            <img src="https://ik.imagekit.io/qbkraoafhm32/Mask_Group_32_2x_QDRfj3lrY.png?updatedAt=1639310043590"
                                class="card-img" alt="...">

                            <div class="card-img-overlay p-2">
                                <div class="offer-card">
                                    <h5 class="card-title">Under </h5>
                                    <p class="card-text">??? 999</p>
                                    <p class="card-text">Store</p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">
                                    <div class="card  text-white">
                                        <img src="/src/img/offer section/gp card/clothing-store-with-blurred-ef@2x.png "
                                            class="card-img" alt="...">
                                        <div class="card-img-overlay"> -->
                                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                                        <!-- </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="card  text-white">
                                        <img src="/src/img/offer section/gp card/model-demonstrating-earrings-r@2x.png "
                                            class="card-img" alt="...">
                                        <div class="card-img-overlay"> -->
                                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                                        <!-- </div>
                                    </div>
                                </li>

                            </ul>
                            <ul class="list-group list-group-horizontal-sm">
                                <li class="list-group-item">
                                    <div class="card  text-white">
                                        <img src="/src/img/offer section/gp card/Mask_Group_33@2x.png " class="card-img"
                                            alt="...">
                                        <div class="card-img-overlay"> -->
                                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                                        <!-- </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="card  text-white">
                                        <img src="/src/img/offer section/gp card/Mask_Group_34@2x.png " class="card-img"
                                            alt="...">
                                        <div class="card-img-overlay"> -->
                                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                                        <!-- </div>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>
            </div>


        </section> -->
        <!-- offer section end -->
    </section>
    <!-- register section start -->
    <!-- <section class="resgister-section" id="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class=" float-lg-start carousel-indicators  ">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 4"></button>


                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://ik.imagekit.io/qbkraoafhm32/download__2__OU13wAFRhhP.jfif?updatedAt=1639469455387"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://ik.imagekit.io/qbkraoafhm32/download_o0uJ5rogy.jfif?updatedAt=1639469370470"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://ik.imagekit.io/qbkraoafhm32/download__1__FJeKKM0OZ.jfif?updatedAt=1639469411222"
                                    class="d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="https://ik.imagekit.io/qbkraoafhm32/download__1__FJeKKM0OZ.jfif?updatedAt=1639469411222"
                                    class="d-block w-100" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="https://ik.imagekit.io/qbkraoafhm32/download__1__FJeKKM0OZ.jfif?updatedAt=1639469411222"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section> -->
    <!-- register section  end -->


    <!-- Categories section start -->
    <!-- <section class=" Categories" id="">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Categories</span>
                    <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                class="fa fa-angle-double-right"></i></a></span>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 gx-1"></div>


                    <div class="col-lg-1 gx-1"></div>
                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="52.297" height="42.492"
                                    viewBox="0 0 52.297 42.492">
                                    <path id="Icon_awesome-list-ul" data-name="Icon awesome-list-ul"
                                        d="M4.9,3.375a4.9,4.9,0,1,0,4.9,4.9,4.9,4.9,0,0,0-4.9-4.9Zm0,16.343a4.9,4.9,0,1,0,4.9,4.9,4.9,4.9,0,0,0-4.9-4.9Zm0,16.343a4.9,4.9,0,1,0,4.9,4.9,4.9,4.9,0,0,0-4.9-4.9ZM50.663,37.7H17.977a1.634,1.634,0,0,0-1.634,1.634V42.6a1.634,1.634,0,0,0,1.634,1.634H50.663A1.634,1.634,0,0,0,52.3,42.6V39.329A1.634,1.634,0,0,0,50.663,37.7Zm0-32.686H17.977a1.634,1.634,0,0,0-1.634,1.634V9.912a1.634,1.634,0,0,0,1.634,1.634H50.663A1.634,1.634,0,0,0,52.3,9.912V6.644A1.634,1.634,0,0,0,50.663,5.009Zm0,16.343H17.977a1.634,1.634,0,0,0-1.634,1.634v3.269a1.634,1.634,0,0,0,1.634,1.634H50.663A1.634,1.634,0,0,0,52.3,26.255V22.987A1.634,1.634,0,0,0,50.663,21.352Z"
                                        transform="translate(0 -3.375)" fill="#fff" />
                                </svg>

                            </div>
                            <h4 class="text-center ">All</h4>
                        </a>
                    </div>
                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="61.176" height="46.341"
                                    viewBox="0 0 61.176 46.341">
                                    <path id="Icon_map-clothing-store" data-name="Icon map-clothing-store"
                                        d="M62.94,14.317a1.464,1.464,0,0,1-.259,1.172L55.335,26.42a1.634,1.634,0,0,1-1.323.654,3.8,3.8,0,0,1-.666-.068l-5.888-1.445v25.9a1.31,1.31,0,0,1-1.363,1.363H17.472a1.31,1.31,0,0,1-1.363-1.363v-25.9L10.821,27.02a1.246,1.246,0,0,1-1.486-.586L2.044,15.53a1.374,1.374,0,0,1-.191-1.145,1.329,1.329,0,0,1,.75-.872L17.472,6.48h6.815A1.3,1.3,0,0,1,25.65,7.843c0,2.808,3.939,4.8,6.747,4.8s6.883-1.976,6.883-4.8A1.31,1.31,0,0,1,40.642,6.48h6.815l14.72,6.9A1.466,1.466,0,0,1,62.94,14.317Z"
                                        transform="translate(-1.802 -6.48)" fill="#fff" />
                                </svg>


                            </div>
                            <h4 class="text-center ">Clothing</h4>
                        </a>

                    </div>

                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48.749" height="60.936"
                                    viewBox="0 0 48.749 60.936">
                                    <path id="Icon_material-kitchen" data-name="Icon material-kitchen"
                                        d="M48.655,3.03,12.094,3A6.092,6.092,0,0,0,6,9.094V57.842a6.111,6.111,0,0,0,6.094,6.094H48.655a6.111,6.111,0,0,0,6.094-6.094V9.094A6.066,6.066,0,0,0,48.655,3.03Zm0,54.812H12.094V30.36H48.655Zm0-33.515H12.094V9.094H48.655ZM18.187,12.14h6.094v9.14H18.187Zm0,21.328h6.094V48.7H18.187Z"
                                        transform="translate(-6 -3)" fill="#fff" />
                                </svg>


                            </div>
                            <h4 class="text-center ">Kitchen</h4>
                        </a>

                    </div>

                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37.916" height="54.75"
                                    viewBox="0 0 37.916 54.75">
                                    <path id="Icon_map-beauty-salon" data-name="Icon map-beauty-salon"
                                        d="M37.25,7.18H29.321a1.064,1.064,0,0,0,0,2.127H37.25V10.4H29.321a1.064,1.064,0,0,0,0,2.127H37.25v1.116H29.321a1.064,1.064,0,0,0,0,2.127H37.25v1.063H29.321a1.077,1.077,0,0,0,0,2.152H37.25V20.05H29.321a1.064,1.064,0,0,0,0,2.127H37.25V23.24H29.321a1.064,1.064,0,0,0,0,2.128H37.25v1.089H29.321a1.064,1.064,0,0,0,0,2.127H37.25v1.061H29.321a1.065,1.065,0,0,0,0,2.128H37.25V52.487c0,3.156,4.8,3.1,4.812,0V4.016A3.315,3.315,0,0,0,38.916.746H29.321a1.064,1.064,0,0,0,0,2.127L37.25,2.9V3.961H29.321a1.064,1.064,0,0,0,0,2.128H37.25V7.181ZM28.776,43.9c0-3.684-3.823-7.647-8.386-5.08V24.73L17.439,1.49a.867.867,0,0,0-.933-.77c-.362.01-1.086.155-1.165.77L12.406,24.73V38.821c-4.562-2.566-8.258,1.421-8.259,5.052A5.786,5.786,0,0,0,10,49.749a5.951,5.951,0,0,0,5.829-5.875V29.236h1.141V43.873A5.76,5.76,0,0,0,22.295,49.7c-.047,1.786.536,4.334,1.633,5.345a1.362,1.362,0,0,0,2.19-1.566,5.039,5.039,0,0,1-.719-4.341A5.735,5.735,0,0,0,28.776,43.9ZM10.129,46.8a2.9,2.9,0,1,1,2.88-2.9,2.9,2.9,0,0,1-2.88,2.9Zm9.776-2.9a2.881,2.881,0,1,1,2.881,2.9A2.912,2.912,0,0,1,19.905,43.9Z"
                                        transform="translate(-4.146 -0.72)" fill="#fff" />
                                </svg>


                            </div>
                            <h4 class="text-center ">Beauty</h4>
                        </a>
                    </div>

                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg id="Icon_ionic-ios-fitness" data-name="Icon ionic-ios-fitness"
                                    xmlns="http://www.w3.org/2000/svg" width="60.628" height="34.644"
                                    viewBox="0 0 60.628 34.644">
                                    <path id="Path_10" data-name="Path 10"
                                        d="M37.753,22.808H11.77a1.086,1.086,0,0,1-1.083-1.083V17.4a1.086,1.086,0,0,1,1.083-1.083H37.753A1.086,1.086,0,0,1,38.836,17.4v4.331A1.086,1.086,0,0,1,37.753,22.808Z"
                                        transform="translate(5.552 -2.238)" fill="#fff" />
                                    <path id="Path_11" data-name="Path 11"
                                        d="M26.578,40.667V11.977A2.986,2.986,0,0,1,29.555,9h0a2.986,2.986,0,0,1,2.977,2.977v28.69a2.986,2.986,0,0,1-2.977,2.977h0A2.986,2.986,0,0,1,26.578,40.667Z"
                                        transform="translate(20.246 -9)" fill="#fff" />
                                    <path id="Path_12" data-name="Path 12"
                                        d="M33.644,13.5H32.02a1.086,1.086,0,0,0-1.083,1.083V29.74a1.086,1.086,0,0,0,1.083,1.083h1.624a2.715,2.715,0,0,0,2.707-2.707V16.207A2.715,2.715,0,0,0,33.644,13.5Z"
                                        transform="translate(24.277 -4.839)" fill="#fff" />
                                    <path id="Path_13" data-name="Path 13"
                                        d="M12.283,40.667V11.977A2.986,2.986,0,0,0,9.305,9h0a2.986,2.986,0,0,0-2.977,2.977v28.69a2.986,2.986,0,0,0,2.977,2.977h0A2.986,2.986,0,0,0,12.283,40.667Z"
                                        transform="translate(1.521 -9)" fill="#fff" />
                                    <path id="Path_14" data-name="Path 14"
                                        d="M6.581,13.5H4.957A2.715,2.715,0,0,0,2.25,16.207V28.116a2.715,2.715,0,0,0,2.707,2.707H6.581A1.086,1.086,0,0,0,7.663,29.74V14.583A1.086,1.086,0,0,0,6.581,13.5Z"
                                        transform="translate(-2.25 -4.839)" fill="#fff" />
                                </svg>


                            </div>
                            <h4 class="text-center ">Fitness</h4>
                        </a>
                    </div>


                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="65.087" height="65.087"
                                    viewBox="0 0 65.087 65.087">
                                    <path id="Icon_ionic-ios-airplane" data-name="Icon ionic-ios-airplane"
                                        d="M42.382,17.146c-.384,0-1.669.011-2.03.034l-7.321.192a.209.209,0,0,1-.192-.1L21.863.835A1.813,1.813,0,0,0,20.341,0H17.667c-.632,0-.846.632-.62,1.218L22.7,17.326a.221.221,0,0,1-.2.3l-13.807.2a.909.909,0,0,1-.744-.35L3.77,12.408a1.79,1.79,0,0,0-1.421-.688H.454a.449.449,0,0,0-.429.6L2.27,20.067a1.838,1.838,0,0,1,0,1.342L.025,29.159a.449.449,0,0,0,.429.6H2.338a1.824,1.824,0,0,0,1.421-.688l4.253-5.155a.924.924,0,0,1,.744-.35l13.728.3a.224.224,0,0,1,.2.3L17.036,40.292c-.226.587-.011,1.218.62,1.218h2.673a1.8,1.8,0,0,0,1.523-.835L32.839,24.252a.222.222,0,0,1,.192-.1l7.321.192c.372.023,1.647.034,2.03.034,5,0,8.155-1.613,8.155-3.61S47.39,17.146,42.382,17.146Z"
                                        transform="translate(0 35.735) rotate(-45)" fill="#fff" />
                                </svg>


                            </div>
                            <h4 class="text-center ">Travel</h4>
                        </a>
                    </div>

                    <div class="col-lg-1 gx-1">
                        <a href="#">
                            <div class="cate-card-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="53.646" height="49.66"
                                    viewBox="0 0 53.646 49.66">
                                    <g id="hourse-icon" transform="translate(500.25 -145.871)">
                                        <path id="Path_673" data-name="Path 673"
                                            d="M-497.914,197.264c1.54-1.471,3.026-3,4.538-4.5a4.763,4.763,0,0,1,7.234.291q3,3.5,6.008,6.992a1.317,1.317,0,0,1,.335.942q-.015,6.391-.006,12.783c0,1.356.583,1.932,1.952,1.933h2.736v6.287c-.853,0-1.7.008-2.55,0a7.8,7.8,0,0,0-3.215.611,7.775,7.775,0,0,0-4.344,4.507c-.385,1-.7,2.032-1.073,3.139,1.458.227,2.827.472,4.205.648a69.12,69.12,0,0,0,14.322.3c1.633-.132,3.254-.4,4.883-.59.288-.034.367-.143.378-.426A7.871,7.871,0,0,0-470.259,222c-.539-.007-1.077,0-1.651,0v-6.253c.132-.011.28-.034.428-.034.821,0,1.642,0,2.462,0a1.594,1.594,0,0,0,1.787-1.768q.005-5.056,0-10.111v-.691c1.113,0,2.2-.079,3.261.021a15.848,15.848,0,0,1,3.483.612,10.818,10.818,0,0,1,7.389,10.157c.038,4.4.011,8.8.012,13.2v.755c1.274-.757,2.465-1.4,3.588-2.148,1.349-.9,2.076-.794,2.895.558v.838a18.721,18.721,0,0,1-1.867,1.848,20.488,20.488,0,0,1-6.2,2.97,57.811,57.811,0,0,1-13.253,2.39,68.8,68.8,0,0,1-21.214-1.553,26.634,26.634,0,0,1-8.8-3.5,5.631,5.631,0,0,1-2.321-2.256V226.4c.717-1.444,1.615-1.629,2.9-.649.656.5,1.368.925,2.059,1.388a1.476,1.476,0,0,0,.133-.213c1.3-3.977,2.66-7.933,3.858-11.939a24.1,24.1,0,0,0,1.1-8.786c-.07-.908-.263-1.807-.4-2.71l-.217-.074c-.521.557-1,1.156-1.569,1.663a4.748,4.748,0,0,1-7.086-.97C-500.766,201.34-499,198.3-497.914,197.264Z"
                                            transform="translate(0 -39.031)" fill="#fff" />
                                        <path id="Path_674" data-name="Path 674"
                                            d="M-181.525,271.546a2.41,2.41,0,0,0-.135.205,1.585,1.585,0,0,1-1.765.9,1.578,1.578,0,0,1-1.241-1.6c-.009-.908,0-1.815,0-2.723a13.971,13.971,0,0,0-7.147-12.561c-.088-.054-.174-.111-.309-.2a6.084,6.084,0,0,1,5.1-1.679,6.229,6.229,0,0,1,5.4,5.161,1.289,1.289,0,0,0,.095.234Z"
                                            transform="translate(-265.079 -92.877)" fill="#fff" />
                                        <path id="Path_675" data-name="Path 675"
                                            d="M-500.25,152.055a12.217,12.217,0,0,1,.886-1.139c.816-.836,1.623-1.691,2.512-2.446a10.905,10.905,0,0,1,14.639.459q1.794,1.721,3.509,3.525a1.948,1.948,0,0,1,.545,1.133c.062,1.55.025,3.1.025,4.657l-.179.164A1.624,1.624,0,0,0-478.5,158q-2.634-3.086-5.281-6.162a7.883,7.883,0,0,0-11.468-.554c-1.138,1.1-2.219,2.264-3.435,3.51l-1.566-2Z"
                                            fill="#fff" />
                                        <path id="Path_676" data-name="Path 676" d="M-324.95,276.693v9.35h-6.237v-9.35Z"
                                            transform="translate(-145.444 -112.546)" fill="#fff" />
                                    </g>
                                </svg>


                            </div>
                            <h4 class="text-center ">Toys</h4>
                        </a>
                    </div>





                </div>
            </div>

        </div>




    </section> -->
    <!-- Categories section end  -->

    <!-- tending section start -->
    <section class=" tending-section" id="">
        <div class="container-fluid">
            <div class="row">
                <!-- <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Offer Zone</span>
                        <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                    class="fa fa-angle-double-right"></i></a></span>
                    </div>
                </nav> -->
                <div class="col-lg-12">
                    <div class="slider">
                        <button id="prev" class="btn">
                            <i class="fas fa-angle-left"></i>
                        </button>
                        <div class="card-content">
                            <!-- Card -->
                            <div class="card11">
                                <div class="tags">
                                    <h6 class="tag-title">
                                        <span class="fa fa-user px-lg-3"></span>914/1K
                                    </h6>
                                </div>
                                <div class="tag-text">
                                    <h5 class="tag-text px-4 ">Ends in</h5>
                                    <p class="timer">10:32:49</p>
                                </div>
                                <div class="card-img">
                                    <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/half-girlfriend-500x500-removebg-preview_rdaGYsVYN.png?updatedAt=1640079095331" width="200px" height="200px"
                                        alt="">

                                </div>
                                <div class="card-text">
                                    <h4 class="text-center">
                                        <span class="rate1">???1200</span>
                                        <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                    </h4>
                                    <p class="card-para">Cerra Black Oxford Leather Shoes
                                    <p>
                                    <div class="cart-button text-center ">
                                        <button class="Add-to-Cart ">Add to Cart</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Card End -->

                            <!-- Card -->
                            <div class="card11">
                                <div class="tags">
                                    <h6 class="tag-title">
                                        <span class="fa fa-user px-lg-3"></span>914/1K
                                    </h6>
                                </div>
                                <div class="tag-text">
                                    <h5 class="tag-text px-4 ">Ends in</h5>
                                    <p class="timer">10:32:49</p>
                                </div>
                                <div class="card-img">
                                    <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/rt_php_Du0lQoLsA.jpg?updatedAt=1640079418632" width="200px" height="200px"
                                        alt="">

                                </div>
                                <div class="card-text">
                                    <h4 class="text-center">
                                        <span class="rate1">???1200</span>
                                        <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                    </h4>
                                    <p class="card-para">Cerra Black Oxford Leather Shoes
                                    <p>
                                    <div class="cart-button text-center ">
                                        <button class="Add-to-Cart ">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card End -->

                            <!-- Card -->
                            <div class="card11">
                                <div class="tags">
                                    <h6 class="tag-title">
                                        <span class="fa fa-user px-lg-3"></span>914/1K
                                    </h6>
                                </div>
                                <div class="tag-text">
                                    <h5 class="tag-text px-4 ">Ends in</h5>
                                    <p class="timer">10:32:49</p>
                                </div>
                                <div class="card-img">
                                    <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/mc_php_mhzBdeYya.jpg?updatedAt=1640079595829" width="200px" height="200px"
                                    alt="">

                                </div>
                                <div class="card-text">
                                    <h4 class="text-center">
                                        <span class="rate1">???1200</span>
                                        <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                    </h4>
                                    <p class="card-para">Cerra Black Oxford Leather Shoes
                                    <p>
                                    <div class="cart-button text-center ">
                                        <button class="Add-to-Cart ">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card End -->

                            <!-- Card -->
                            <div class="card11">
                                <div class="tags">
                                    <h6 class="tag-title">
                                        <span class="fa fa-user px-lg-3"></span>914/1K
                                    </h6>
                                </div>
                                <div class="tag-text">
                                    <h5 class="tag-text px-4 ">Ends in</h5>
                                    <p class="timer">10:32:49</p>
                                </div>
                                <div class="card-img"> 
                                    <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ng_php_1yxIwObKt.jpg?updatedAt=1640079688533"  width="200px"  height="200px"
                                        alt="">

                                </div>
                                <div class="card-text">
                                    <h4 class="text-center">
                                        <span class="rate1">???1200</span>
                                        <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                    </h4>
                                    <p class="card-para">Cerra Black Oxford Leather Shoes
                                    <p>
                                    <div class="cart-button text-center ">
                                        <button class="Add-to-Cart ">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card End -->

                            <!-- Card -->
                            <div class="card11">
                                <div class="tags">
                                    <h6 class="tag-title">
                                        <span class="fa fa-user px-lg-3"></span>914/1K
                                    </h6>
                                </div>
                                <div class="tag-text">
                                    <h5 class="tag-text px-4 ">Ends in</h5>
                                    <p class="timer">10:32:49</p>
                                </div>
                                <div class="card-img">
                                    <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ce_php_pDU4iPi6g.jpg?updatedAt=1640080527998" width="200px" height="200px"
                                        alt="">

                                </div>
                                <div class="card-text">
                                    <h4 class="text-center">
                                        <span class="rate1">???1200</span>
                                        <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                    </h4>
                                    <p class="card-para">Cerra Black Oxford Leather Shoes
                                    <p>
                                    <div class="cart-button text-center ">
                                        <button class="Add-to-Cart ">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card End -->

                            <!-- Card -->
                            <div class="card11">
                                <div class="tags">
                                    <h6 class="tag-title">
                                        <span class="fa fa-user px-lg-3"></span>914/1K
                                    </h6>
                                </div>
                                <div class="tag-text">
                                    <h5 class="tag-text px-4 ">Ends in</h5>
                                    <p class="timer">10:32:49</p>
                                </div>
                                <div class="card-img">
                                    <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ls_php_RWjUZ9lEF.jpg?updatedAt=1640080654527" width="200px" height="200px"
                                        alt="">

                                </div>
                                <div class="card-text">
                                    <h4 class="text-center">
                                        <span class="rate1">???1200</span>
                                        <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                    </h4>
                                    <p class="card-para">Cerra Black Oxford Leather Shoes
                                    <p>
                                    <div class="cart-button text-center ">
                                        <button class="Add-to-Cart ">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card End -->

                        </div>
                        <button id="next" class="btn">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- tending section end -->
    <section class="Banner" id=" ">
        <div class="container-fluid">
            <div class="row py-lg-3">
                <div class=" card card55">
                    <div class="card-text">
                        <h3 class="banner-text py-lg-4">
                            <span class="ban-high-light1">Super discount for your <span class="ban-high-light2"><a
                                        href="#">First purchase</a></span>
                                <span class="coupon-code">FREE25BAC</span>
                                <span class="ban-high-light3">Use discount code in checkout!</span></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section" id="">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Popular Category</span>
                    <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                class="fa fa-angle-double-right"></i></a></span>
                </div>
            </nav>
            <div class="row py-lg-4">
                <div class="col-lg-12 py-lg-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                        data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container py-lg-3">
                                    <div class="row">-->
                                        <!-- slider set one -->
                                        <!-- <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg> -->

                                                    <!-- </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>
                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container py-lg-3">
                                    <div class="row">-->
                                        <!-- slider set 2 -->
                                        <!-- <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div> -->
                                       <!-- <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a> -->

                                        <!-- </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="carousel-item">
                                <div class="container py-lg-3">
                                    <div class="row">-->
                                        <!-- slider set 3 -->
                                      <!--  <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#">
                                                <div class="py-lg-4 card pop-btn-1">
                                                    <h3 class="text-center text-white">Clothing</h3>
                                                    <div class="text-center py-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="79.711"
                                                            height="70.38" viewBox="0 0 79.711 60.38">
                                                            <path id="Icon_map-clothing-store"
                                                                data-name="Icon map-clothing-store"
                                                                d="M81.464,16.691a1.908,1.908,0,0,1-.337,1.527L71.554,32.461a2.129,2.129,0,0,1-1.724.852,4.953,4.953,0,0,1-.868-.089l-7.672-1.882V65.084a1.707,1.707,0,0,1-1.776,1.776H22.22a1.707,1.707,0,0,1-1.776-1.776V31.342l-6.89,1.9a1.624,1.624,0,0,1-1.936-.764l-9.5-14.207a1.79,1.79,0,0,1-.249-1.492,1.732,1.732,0,0,1,.977-1.137L22.22,6.48H31.1a1.7,1.7,0,0,1,1.776,1.776c0,3.658,5.132,6.251,8.791,6.251s8.968-2.575,8.968-6.251A1.707,1.707,0,0,1,52.41,6.48h8.879l19.18,8.986A1.911,1.911,0,0,1,81.464,16.691Z"
                                                                transform="translate(-1.802 -6.48)" fill="#fff" />
                                                        </svg>

                                                    </div>
                                                    <h6 class=" text-center pop-txt-color">20 - 30% OFF</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <!--    </div>
                        </div>
                        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon  bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
            </div>
        </div>



    </section> -->
    <!-- fast fillimg start -->

    <section class="New Deals" id="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <span class="navbar-brand mb-0 h1">Ending Soon</span>
                            <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                        class="fa fa-angle-double-right"></i></a></span>
                        </div>
                    </nav> -->
                    <div class="col-lg-12">
                        <div class="slider">
                            <button id="#" class="btn">
                                <i class="fas fa-angle-left"></i>
                            </button>
                            <div class="card-content">
                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/qbkraoafhm32/PHP_project_/91_4ShnL4TL_uk4GVd18a8f.jpg?updatedAt=1640078861562" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ra_php_4YxJmuu28.jpg?updatedAt=1640081218811" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/mm_php_J75FIvgx-.jpg?updatedAt=1640081347160" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/qbkraoafhm32/PHP_project_/131898933-removebg-preview_lCKtR6KMIe2.png?updatedAt=1640078280354" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ym_php_a0xHnxt5VSR.jpg?updatedAt=1640081487568" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ds_php_huVn0RHLb.jpg?updatedAt=1640081587196" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                            </div>
                            <button id="#" class="btn">
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


    </section>
    <!-- Mid Banner End -->
    <!-- New Deals Start -->

    <section class="New Deals" id="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <span class="navbar-brand mb-0 h1">New Deals</span>
                            <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                        class="fa fa-angle-double-right"></i></a></span>
                        </div>
                    </nav>
                    <div class="col-lg-12">
                        <div class="slider">
                            <button id="#" class="btn">
                                <i class="fas fa-angle-left"></i>
                            </button>
                            <div class="card-content">
                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/mf_php_HId3e4wux.jpg?updatedAt=1640081877053" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/cd_php_47FN1Oun79k.jpg?updatedAt=1640082458971" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/wf_php_SrCn41p6W.jpg?updatedAt=1640082622240" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/at_php_os4gGaBrz.jpeg?updatedAt=1640082813517" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/ts_php_V3ZvI8cdW.jpg?updatedAt=1640083119227" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                                <!-- Card -->
                                <div class="card11">
                                    <div class="tags">
                                        <h6 class="tag-title">
                                            <span class="fa fa-user px-lg-3"></span>914/1K
                                        </h6>
                                    </div>
                                    <div class="tag-text">
                                        <h5 class="tag-text px-4 ">Ends in</h5>
                                        <p class="timer">10:32:49</p>
                                    </div>
                                    <div class="card-img">
                                        <img src="https://ik.imagekit.io/u4bnxj6pvo4/php-/wn_php_yPZDNGXbH.jpg?updatedAt=1640083249770" width="200px" height="200px"
                                            alt="">

                                    </div>
                                    <div class="card-text">
                                        <h4 class="text-center">
                                            <span class="rate1">???1200</span>
                                            <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                        </h4>
                                        <p class="card-para">Cerra Black Oxford Leather Shoes
                                        <p>
                                        <div class="cart-button text-center ">
                                            <button class="Add-to-Cart ">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card End -->

                            </div>
                            <button id="#" class="btn">
                                <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


    </section>
    <!-- New Deals End -->

    <!-- Mid Banner Start 2 -->
    <!-- <section class=" Mid-Banner-Start-2" id="">
        <div class="container fluid  py-lg-5  align-content-center">
            <div class="row">
                <div class="col-lg-4">
                    <div class="milestronecard1 ">
                        <div class="card text-white">
                            <img src="https://ik.imagekit.io/qbkraoafhm32/Base_h_2x_vAteqWGnZuR.png?updatedAt=1639460151110"
                                class="card-img" alt="...">
                            <div class="card-img-overlay">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="">
                        <div class="card  text-white">
                            <img src="https://ik.imagekit.io/qbkraoafhm32/Base_lv5kqtV8f.png?updatedAt=1639310041685"
                                class="card-img" alt="...">
                            <div class="card-img-overlay">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  text-white">
                        <img src="https://ik.imagekit.io/qbkraoafhm32/Base_ic_2eNphSkZH.png?updatedAt=1639310042139"
                            class="card-img" alt="...">
                        <div class="card-img-overlay">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Mid Banner End 2 -->
    <!-- start  Ending Soon-->
    <section class="section" id="">
        <section class="New Deals" id="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <nav class="navbar navbar-light bg-light">
                            <div class="container-fluid">
                                <span class="navbar-brand mb-0 h1">Ending Soon</span>
                                <span class="navbar-brand mb-0 h1 align-content-lg-end"> <a href="#">View More<i
                                            class="fa fa-angle-double-right"></i></a></span>
                            </div>
                        </nav> -->
                        <div class="col-lg-12">
                            <div class="slider">
                                <button id="#" class="btn">
                                    <i class="fas fa-angle-left"></i>
                                </button>
                                <div class="card-content">
                                    <!-- Card -->
                                    <div class="card11">
                                        <div class="tags">
                                            <h6 class="tag-title">
                                                <span class="fa fa-user px-lg-3"></span>914/1K
                                            </h6>
                                        </div>
                                        <div class="tag-text">
                                            <h5 class="tag-text px-4 ">Ends in</h5>
                                            <p class="timer">10:32:49</p>
                                        </div>
                                        <div class="card-img">
                                            <img src="https://ik.imagekit.io/qbkraoafhm32/boots_2x_R1vjuf-lzCh.png?updatedAt=1639310042491"
                                                alt="">

                                        </div>
                                        <div class="card-text">
                                            <h4 class="text-center">
                                                <span class="rate1">???1200</span>
                                                <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                            </h4>
                                            <p class="card-para">Cerra Black Oxford Leather Shoes
                                            <p>
                                            <div class="cart-button text-center ">
                                                <button class="Add-to-Cart ">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card End -->

                                    <!-- Card -->
                                    <div class="card11">
                                        <div class="tags">
                                            <h6 class="tag-title">
                                                <span class="fa fa-user px-lg-3"></span>914/1K
                                            </h6>
                                        </div>
                                        <div class="tag-text">
                                            <h5 class="tag-text px-4 ">Ends in</h5>
                                            <p class="timer">10:32:49</p>
                                        </div>
                                        <div class="card-img">
                                            <img src="https://ik.imagekit.io/qbkraoafhm32/boots_2x_R1vjuf-lzCh.png?updatedAt=1639310042491"
                                                alt="">

                                        </div>
                                        <div class="card-text">
                                            <h4 class="text-center">
                                                <span class="rate1">???1200</span>
                                                <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                            </h4>
                                            <p class="card-para">Cerra Black Oxford Leather Shoes
                                            <p>
                                            <div class="cart-button text-center ">
                                                <button class="Add-to-Cart ">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card End -->

                                    <!-- Card -->
                                    <div class="card11">
                                        <div class="tags">
                                            <h6 class="tag-title">
                                                <span class="fa fa-user px-lg-3"></span>914/1K
                                            </h6>
                                        </div>
                                        <div class="tag-text">
                                            <h5 class="tag-text px-4 ">Ends in</h5>
                                            <p class="timer">10:32:49</p>
                                        </div>
                                        <div class="card-img">
                                            <img src="https://ik.imagekit.io/qbkraoafhm32/boots_2x_R1vjuf-lzCh.png?updatedAt=1639310042491"
                                                alt="">

                                        </div>
                                        <div class="card-text">
                                            <h4 class="text-center">
                                                <span class="rate1">???1200</span>
                                                <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                            </h4>
                                            <p class="card-para">Cerra Black Oxford Leather Shoes
                                            <p>
                                            <div class="cart-button text-center ">
                                                <button class="Add-to-Cart ">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card End -->

                                    <!-- Card -->
                                    <div class="card11">
                                        <div class="tags">
                                            <h6 class="tag-title">
                                                <span class="fa fa-user px-lg-3"></span>914/1K
                                            </h6>
                                        </div>
                                        <div class="tag-text">
                                            <h5 class="tag-text px-4 ">Ends in</h5>
                                            <p class="timer">10:32:49</p>
                                        </div>
                                        <div class="card-img">
                                            <img src="https://ik.imagekit.io/qbkraoafhm32/boots_2x_R1vjuf-lzCh.png?updatedAt=1639310042491"
                                                alt="">

                                        </div>
                                        <div class="card-text">
                                            <h4 class="text-center">
                                                <span class="rate1">???1200</span>
                                                <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                            </h4>
                                            <p class="card-para">Cerra Black Oxford Leather Shoes
                                            <p>
                                            <div class="cart-button text-center ">
                                                <button class="Add-to-Cart ">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card End -->

                                    <!-- Card -->
                                    <div class="card11">
                                        <div class="tags">
                                            <h6 class="tag-title">
                                                <span class="fa fa-user px-lg-3"></span>914/1K
                                            </h6>
                                        </div>
                                        <div class="tag-text">
                                            <h5 class="tag-text px-4 ">Ends in</h5>
                                            <p class="timer">10:32:49</p>
                                        </div>
                                        <div class="card-img">
                                            <img src="https://ik.imagekit.io/qbkraoafhm32/boots_2x_R1vjuf-lzCh.png?updatedAt=1639310042491"
                                                alt="">

                                        </div>
                                        <div class="card-text">
                                            <h4 class="text-center">
                                                <span class="rate1">???1200</span>
                                                <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                            </h4>
                                            <p class="card-para">Cerra Black Oxford Leather Shoes
                                            <p>
                                            <div class="cart-button text-center ">
                                                <button class="Add-to-Cart ">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card End -->

                                    <!-- Card -->
                                    <div class="card11">
                                        <div class="tags">
                                            <h6 class="tag-title">
                                                <span class="fa fa-user px-lg-3"></span>914/1K
                                            </h6>
                                        </div>
                                        <div class="tag-text">
                                            <h5 class="tag-text px-4 ">Ends in</h5>
                                            <p class="timer">10:32:49</p>
                                        </div>
                                        <div class="card-img">
                                            <img src="https://ik.imagekit.io/qbkraoafhm32/boots_2x_R1vjuf-lzCh.png?updatedAt=1639310042491"
                                                alt="">

                                        </div>
                                        <div class="card-text">
                                            <h4 class="text-center">
                                                <span class="rate1">???1200</span>
                                                <spa class="rate2">??? 960</spa> <span class="rate3">30% OFF</span>
                                            </h4>
                                            <p class="card-para">Cerra Black Oxford Leather Shoes
                                            <p>
                                            <div class="cart-button text-center ">
                                                <button class="Add-to-Cart ">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card End -->

                                </div>
                                <button id="#" class="btn">
                                    <i class="fas fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


        </section>
        <!-- start  Ending Soon -->
    </section>
    <!-- 
    
    
   
    
    <section class="section" id=""></section>
    <section class="section" id=""></section>
    <section class="section" id=""></section> -->


    <script src="scriptJS/card slider.js">
    </script>
    <script src="src/assert/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js " crossorigin=" "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js "></script>


</body>

</html>