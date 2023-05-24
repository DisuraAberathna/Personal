<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Disura Chathwara | Projects</title>

    <link rel="icon" href="resources/img/logo.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
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
                                    <a class="nav-link a-animation" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a class="nav-link a-animation" href="about.php">About</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a class="nav-link a-animation" href="services.php">Services</a>
                                </li>
                                <li class="nav-item me-5">
                                    <a class="nav-link active a-animation" href="project.php">My Projects</a>
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

            <div class="col-12 pt-5 pb-3">

                <div class="row mt-5">
                    <div class="col-6 ms-3 ms-md-5 ps-0 border-bottom border-dark border-1">
                        <span class="heading text-dark">My Projects</span>
                    </div>
                    <div class="col-11 mt-3 ms-md-5 ps-5">
                        <p class="fs-5 fw-semibold" style="text-align: justify;">Here are a few of the several projects I have done. You can see the interface of those projects by clicking on the images below.</p>
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
                                        <p data-lightbox="portfolio" onclick="openModal('React-Native Chat Application');" style="cursor: pointer;">
                                            <i class="fa fa-4x fa-plus text-danger"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 portfolio-item d-none">
                                <div class="position-relative rounded overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="resources/img/portfolio-4.jpg" />
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <p data-lightbox="portfolio" style="cursor: pointer;">
                                            <i class="fa fa-4x fa-plus text-danger"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 portfolio-item d-none">
                                <div class="position-relative rounded overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="resources/img/portfolio-5.jpg" />
                                    <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                        <p data-lightbox="portfolio" style="cursor: pointer;">
                                            <i class="fa fa-4x fa-plus text-danger"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 portfolio-item d-none">
                                <div class="position-relative rounded overflow-hidden mb-2">
                                    <img class="img-fluid w-100" src="resources/img/portfolio-6.jpg" />
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

            <!-- Content End  -->


            <!-- Footer Start -->

            <?php include "footer.html"; ?>

            <!-- Footer End -->

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="script.js"></script>

</body>

</html>