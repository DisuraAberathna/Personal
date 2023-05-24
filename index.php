<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Disura Chathwara</title>

    <link rel="icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

</head>

<body class="background dark-scheme">

    <div id="spinner" class="show bg-dark loader">
        <img src="resources/img/logo.png" class="position-absolute" width="50px" />
        <div class="spinner-border text-danger" style="width: 5rem; height: 5rem;" role="status">
            <span class="sr-only"></span>
        </div>
    </div>

    <div class="container-fluid d-none" id="body">
        <div class="row">

            <!-- Header Start -->

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                <div class="container-fluid mt-1 mb-1">

                    <a class="navbar-brand ms-3 me-5" href="index.php">
                        <img src="resources/img/logo.png" alt="Logo" width="30" height="24"
                            class="d-inline-block align-text-top me-5" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="offset-lg-6 offset-xl-8 col-12 col-lg-4">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item me-5">
                                    <a class="nav-link active a-animation" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a class="nav-link a-animation" href="about.php">About</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a class="nav-link a-animation" href="services.php">Services</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a class="nav-link a-animation" href="project.php">My Projects</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="col-12">
                <div class="row">
                    <div class="offset-lg-4 col-12 col-lg-4 justify-content-center d-flex mt-5 pt-4 fixed-top">

                        <div class="alert alert-success alert-dismissible d-flex align-items-center fade d-none"
                            id="success_alert">
                            <i class="bi-check-circle-fill fs-5"></i><strong class="mx-2">Success! </strong> Email Has
                            Been Sent Successfully.
                            <button type="button" class="btn-close my-1" onclick="hideAlert('success_alert');"></button>
                        </div>

                        <div class=" alert alert-danger alert-dismissible d-flex align-items-center fade d-none"
                            id="error_alert">
                            <i class="bi-exclamation-triangle-fill fs-4"></i>
                            <strong class="mx-2">Error!</strong><span id="error_msg"></span>
                            <button type="button" class="btn-close my-1" onclick="hideAlert('error_alert');"></button>
                        </div>

                        <div class="alert alert-info alert-dismissible d-flex align-items-center fade d-none ps-5"
                            id="loading_alert">
                            <div class="spinner-border spinner-border-sm" role="status"></div>
                            <strong class="mx-2">Loading!</strong> Please Wait.
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header End -->


            <!-- Content Start  -->

            <div class="col-12 mt-5 pt-5">
                <div class="row">

                    <div class="col-12 pt-5 pb-5">
                        <div class="row">
                            <div class="col-md-5 d-none d-md-block">
                                <img src="resources/img/profile-img.png" class="offset-3 d-block w-50 rounded-circle" />
                            </div>
                            <div class="col-12 col-md-7 pt-lg-5">
                                <div class="row">
                                    <div class="col-12 ps-3 ps-lg-0 mt-lg-4">
                                        <h1 class="text-dark heading home-heading">Hello World</h1>
                                        <h1 class="text-dark heading">I'm Disura Chathwara</h1>
                                        <p class="fw-semibold fs-5 me-4" style="text-align: justify;">My name is Disura
                                            Chathwara Aberathna, and I am an undergraduate BSc (hons) Software Engineer.
                                            Welcome to my personal website.
                                        </p>
                                        <div class="row gap-4 g-3 ms-2">
                                            <div class="col-2" style="padding-top: 1px;">
                                                <button onclick="window.location='about.php';"
                                                    class="custom-btn btn-11 services">
                                                    <i class="bi bi-person-vcard-fill"></i>&nbsp;&nbsp;About Me
                                                    <div class="dot"></div>
                                                </button>
                                            </div>
                                            <div class="offset-3 offset-xl-0 col-2">
                                                <a href="cv.html" target="_blank"
                                                    class="custom-btn btn-9 services text-center text-decoration-none">
                                                    <i class="bi bi-file-earmark-person-fill"></i>&nbsp;&nbsp;View CV
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">

                        <div class="row">
                            <div class="col-6 ms-3 ms-md-5 ps-0 border-bottom border-dark border-1">
                                <a href="services.php" class="heading text-decoration-none text-dark">Services</a>
                            </div>
                            <div class="col-11 mt-3 ms-md-5 ps-5">
                                <p class="fs-5 fw-semibold" style="text-align: justify;">I do my best to provide
                                    high-quality and customer-friendly service, and if a customer receiving the service
                                    calls at any time and wants to make a change in the service he or she receives, it
                                    can be changed without payment. I will provide that service as well.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-1 col-10 justify-content-center d-flex pt-5 pb-5">
                                <div class="row gap-4 justify-content-center">

                                    <div class="col-10 col-md-2 col-lg-2 card services bg-dark text-white"
                                        style="width: 20rem;">
                                        <div class="card-body">
                                            <img src="resources/img/web-development.png" class="mt-2 mb-2"
                                                style="width: 50px;" />
                                            <h5 class="card-title">Website Development</h5><br />
                                            <p class="card-text" style="text-align: justify;">The website design is responsive and has the ability to add animations as per the customer's needs.</p>
                                            <a href="services.php#website"
                                                class="custom-btn btn-11 text-decoration-none text-center">
                                                More Details
                                                <div class="dot"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-10 col-md-2 col-lg-2 card services bg-dark text-white"
                                        style="width: 20rem;">
                                        <div class="card-body ">
                                            <img src="resources/img/programmer.png" class="mt-2 mb-2"
                                                style="width: 50px;" />
                                            <h5 class="card-title">Web Application Development</h5>
                                            <p class="card-text" style="text-align: justify;">My SQL is used as a database for web applications, and MongoDB can also be used as per the customer's requirements.</p>
                                            <a href="services.php#webapplication"
                                                class="custom-btn btn-11 text-decoration-none text-center">
                                                More Details
                                                <div class="dot"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-10 col-md-2 col-lg-2 card services bg-dark text-white"
                                        style="width: 20rem;">
                                        <div class="card-body ">
                                            <img src="resources/img/react.png" class="mt-2 mb-2" style="width: 50px;" />
                                            <h5 class="card-title">React-Native Application Development</h5>
                                            <p class="card-text" style="text-align: justify;">React Native apps are developed for Android and iOS devices as per unique designs and customer requirements.</p>
                                            <a href="services.php#reactnativeapplication"
                                                class="custom-btn btn-11 text-decoration-none text-center">
                                                More Details
                                                <div class="dot"></div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-10 col-md-2 col-lg-2 card services bg-dark text-white"
                                        style="width: 20rem;">
                                        <div class="card-body">
                                            <img src="resources/img/cv-icon.png" class="mt-2 mb-2"
                                                style="width: 50px;" />
                                            <h5 class="card-title">Create CV</h5>
                                            <p class="card-text" style="text-align: justify;">The design used in the creation of a CV varies from person to person, and the customer has the ability to change it at the time of need.</p>
                                            <a href="services.php#cv"
                                                class="custom-btn btn-11 text-decoration-none text-center">
                                                More Details
                                                <div class="dot"></div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">

                        <div class="row">
                            <div class="col-6 ms-3 ms-md-5 ps-0 border-bottom border-dark border-1">
                                <a href="project.php" class="heading text-decoration-none text-dark">My Projects</a>
                            </div>
                            <div class="col-11 mt-3 ms-md-5 ps-5">
                                <p class="fs-5 fw-semibold" style="text-align: justify;">Here are a few of the several projects I have done. You can see the interface of those projects by clicking on the image below.</p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="offset-2 col-8">
                                <div class="row portfolio-container">
                                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                                        <div class="position-relative rounded overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="resources/img/e-commerce.png" style="height: 400px;"/>
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <p data-lightbox="portfolio" onclick="openModal('E-Commerce Web Application');" style="cursor: pointer;">
                                                    <i class="fa fa-4x fa-plus text-danger"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                                        <div class="position-relative rounded overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="resources/img/portal-web-application.png" style="height: 400px;"/>
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <p data-lightbox="portfolio" onclick="openModal('Portal Web Application');" style="cursor: pointer;">
                                                    <i class="fa fa-4x fa-plus text-danger"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                                        <div class="position-relative rounded overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="resources/img/chat-application.png" style="height: 400px;"/>
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <p href="#" data-lightbox="portfolio" onclick="openModal('React-Native Chat Application');" style="cursor: pointer;">
                                                    <i class="fa fa-4x fa-plus text-danger"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item d-none">
                                        <div class="position-relative rounded overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="resources/img/portfolio-4.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <p data-lightbox="portfolio" style="cursor: pointer;">
                                                    <i class="fa fa-4x fa-plus text-danger"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item d-none">
                                        <div class="position-relative rounded overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="resources/img/portfolio-5.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <p data-lightbox="portfolio" style="cursor: pointer;">
                                                    <i class="fa fa-4x fa-plus text-danger"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item d-none">
                                        <div class="position-relative rounded overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="resources/img/portfolio-6.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <p data-lightbox="portfolio" style="cursor: pointer;">
                                                    <i class="fa fa-4x fa-plus text-danger"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Modal Start -->

                        <div class="modal modal-lg fade" id="projectModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark text-white">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalHeading"></h1>
                                        <button type="button" class="btn text-danger" data-bs-dismiss="modal">
                                            <i class="bi bi-x-lg fs-4"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="" class="w-75" id="image" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal End -->

                    </div>

                    <!-- <div class="col-12">

                        <div class="row">
                            <div class="col-6 ms-3 mt-3 ms-md-5 ps-0 border-bottom border-dark border-1">
                                <a href="#" class="heading text-decoration-none text-dark">Testimonial</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">

                                    <div class="offset-lg-3 col-12 col-lg-6 rounded-3 bg-dark mt-5 mb-5 p-5">

                                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">

                                                <div class="carousel-item active" data-bs-interval="8000">
                                                    <div class="row">
                                                        <div class="col-12 text-center text-white">
                                                            <img class="img-fluid rounded-circle mx-auto mb-4" src="resources/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                                                            <h5 class="mb-1">Client Name</h5>
                                                            <p class="text-danger">Profession</p>
                                                            <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <div class="row">
                                                        <div class="col-12 text-center text-white">
                                                            <img class="img-fluid rounded-circle mx-auto mb-4" src="resources/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                                                            <h5 class="mb-1">Client Name</h5>
                                                            <p class="text-danger">Profession</p>
                                                            <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <div class="row">
                                                        <div class="col-12 text-center text-white">
                                                            <img class="img-fluid rounded-circle mx-auto mb-4" src="resources/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                                                            <h5 class="mb-1">Client Name</h5>
                                                            <p class="text-danger">Profession</p>
                                                            <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item" data-bs-interval="3000">
                                                    <div class="row">
                                                        <div class="col-12 justify-content-center align-items-center d-flex text-white view-more">
                                                            <a class="link-light text-decoration-none" href="#">View More&nbsp;&nbsp;&rAarr;</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 justify-content-center d-flex">
                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item text-center">
                                                    <a class="btn bg-danger text-white fs-6" style="width: 90px; border-top-right-radius: 0px; border-bottom-right-radius: 0px;" href="#" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">Previous</a>
                                                </li>
                                                <li class="page-item text-center bg-dark border-start border-end border-1 border-white" style="width: 35px;">
                                                    <a class="btn bg-dark text-white" href="#" data-bs-target="#carouselExampleInterval" class="active" aria-current="true" data-bs-slide-to="0" aria-label="Slide 1">1</a>
                                                </li>
                                                <li class="page-item text-center bg-dark border-end border-1 border-white" style="width: 35px;">
                                                    <a class="btn bg-dark text-white" href="#" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2">2</a>
                                                </li>
                                                <li class="page-item text-center bg-dark border-end border-1 border-white" style="width: 35px;">
                                                    <a class="btn bg-dark text-white" href="#" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3">3</a>
                                                </li>
                                                <li class="page-item text-center bg-dark border-end border-1 border-white" style="width: 35px;">
                                                    <a class="btn bg-dark text-white" href="#" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4">4</a>
                                                </li>
                                                <li class="page-item text-center">
                                                    <a class="btn bg-danger text-white fs-6" style="width: 90px; border-top-left-radius: 0px; border-bottom-left-radius: 0px;" href="#" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div> -->

                </div>
            </div>

            <!-- Content End  -->


            <!-- Footer Start -->

            <?php include "footer.html"; ?>

            <!-- Footer End -->

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>

</body>

</html>