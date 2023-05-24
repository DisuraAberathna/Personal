<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Disura Chathwara | Services</title>

    <link rel="icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />

</head>

<body class="background dark-scheme">

    <div id="spinner" class="show bg-dark loader">
        <img src="resources/img/logo.png" class="position-absolute" width="50px"/>
        <div class="spinner-border text-danger" style="width: 5rem; height: 5rem;" role="status">
            <span class="sr-only"></span>
        </div>
    </div>

    <div class="container-fluid d-none" id="body">
        <div class="row">

            <!-- Header Start -->

            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <div class="container-fluid mt-1 mb-1">

                    <a class="navbar-brand ms-3 me-5" href="index.php">
                        <img src="resources/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-5" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link active a-animation" href="services.php">Services</a>
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

                        <div class="alert alert-success alert-dismissible d-flex align-items-center fade d-none" id="success_alert">
                            <i class="bi-check-circle-fill fs-5"></i><strong class="mx-2">Success! </strong> Email Has Been Sent Successfully.
                            <button type="button" class="btn-close my-1" onclick="hideAlert('success_alert');"></button>
                        </div>

                        <div class=" alert alert-danger alert-dismissible d-flex align-items-center fade d-none" id="error_alert">
                            <i class="bi-exclamation-triangle-fill fs-4"></i>
                            <strong class="mx-2">Error!</strong><span id="error_msg"></span>
                            <button type="button" class="btn-close my-1" onclick="hideAlert('error_alert');"></button>
                        </div>

                        <div class="alert alert-info alert-dismissible d-flex align-items-center fade d-none ps-5" id="loading_alert">
                            <div class="spinner-border spinner-border-sm" role="status"></div>
                            <strong class="mx-2">Loading!</strong> Please Wait.
                        </div>

                    </div>
                </div>
            </div>

            <!-- Header End -->


            <!-- Content Start -->

            <div class="col-12 mt-5">

                <div class="row mt-5">
                    <div class="col-6 ms-3 ms-md-5 ps-0 border-bottom border-dark border-1">
                        <span class="heading text-dark">Services</span>
                    </div>
                    <div class="col-11 mt-3 ms-md-5 ps-5">
                        <p class="fs-5 fw-semibold" style="text-align: justify;">I do my best to provide high-quality and customer-friendly service, and if a customer receiving the service calls at any time and wants to make a change in the service he or she receives, it can be changed without payment. I will provide that service as well.</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12 mt-3" id="website">
                        <div class="row">
                            <div class="offset-1 col-10 border-bottom border-dark border-1 pb-5">
                                <div class="row">

                                    <div class="col-12">
                                        <h3 class="text-decoration-underline">Website Development</h3>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12">
                                                <p class="fs-5 fw-semibold" style="text-align: justify;">The website design is responsive and has the ability to add animations as per the customer's needs.<br/> Types of website develop by me.</p>
                                                <ul class="fw-semibold">
                                                    <li>Blog Website</li>
                                                    <li>Portfolio Website</li>
                                                    <li>Event Website</li>
                                                    <li>Personal Website</li>
                                                    <li>Etc.</li>
                                                </ul>
                                                <p class="fs-5 fw-semibold">You can choose any version for build your website.</p>

                                                <div class="row">
                                                    <div class="col-12 col-lg-8 bg-dark text-white rounded-3 p-4 pb-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-3"></div>
                                                                    <div class="col-9">
                                                                        <div class="tab-titles">
                                                                            <p class="tab-links active-link a-animation" onclick="opentab('wsnormalVersion')" id="wsnt">Normal Version</p>
                                                                            <p class="tab-links a-animation" onclick="opentab('wspremiumVersion')" id="wspt">Premium Version</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="list-unstyled">
                                                                            <li class="mt-2 pb-2">Resource Files</li>
                                                                            <li class="mt-3 pb-2">Framworks</li>
                                                                            <li class="mt-2 pb-2">Design</li>
                                                                            <li class="mt-2 pb-2">Pages</li>
                                                                            <li class="mt-2 pb-2">Hosted</li>
                                                                            <li class="mt-2 pb-2">Price</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-9">

                                                                        <div class="tab-contents active-tab" id="wsnormalVersion">
                                                                            <ul class="list-unstyled">
                                                                                <li class="mt-2 mt-lg-1 ms-4 ms-lg-0 pb-4 pb-lg-1"><span class="ps-5"><i class="bi bi-x fs-4 text-danger"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Bootstrap and jQuery</li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Responsive Design</li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">0 to 5 Pages</li>
                                                                                <li class="mt-0 ms-4 ms-lg-0 pb-1"><span class="ps-5"><i class="bi bi-x fs-4 text-danger"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to <b>$80</b></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-4 text-danger fs-5 fw-bold">Price will increased or decrease with the requirements.</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="tab-contents" id="wspremiumVersion">
                                                                            <ul class="list-unstyled">
                                                                                <li class="mt-2 mt-lg-1 ms-4 ms-lg-0 pb-4 pb-lg-1"><span class="ps-5"><i class="bi bi-check fs-4 text-success"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Bootstrap, Materialize, jQuery, and React Js</li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Responsive Design with Animations</li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to 5 Pages</li>
                                                                                <li class="mt-0 ms-4 ms-lg-0 pb-1"><span class="ps-5"><i class="bi bi-check fs-4 text-success"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to <b>$100</b></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-4 text-danger fs-5 fw-bold">Price will increased or decrease with the requirements.</li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5" id="webapplication">
                        <div class="row">
                            <div class="offset-1 col-10 border-bottom border-dark border-1 pb-5">
                                <div class="row">

                                    <div class="col-12">
                                        <h3 class="text-decoration-underline">Web Application Development</h3>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12">
                                                <p class="fs-5 fw-semibold" style="text-align: justify;">My SQL is used as a database for web applications, and MongoDB can also be used as per the customer's requirements.<br/> Types of web application develop by me.</p>
                                                <ul class="fw-semibold">
                                                    <li>E-Commerce Web Application</li>
                                                    <li>Business Web Application</li>
                                                    <li>Portal Web Application</li>
                                                    <li>Animated Web Application</li>
                                                    <li>Etc.</li>
                                                </ul>
                                                <p class="fs-5 fw-semibold">You can choose any version for build your web application.</p>

                                                <div class="row">
                                                    <div class="col-12 col-lg-8 bg-dark text-white rounded-3 p-4 pb-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-3"></div>
                                                                    <div class="col-9">
                                                                        <div class="tab-titles">
                                                                            <p class="tab-links active-link a-animation" onclick="opentab('wanormalVersion')" id="want">Normal Version</p>
                                                                            <p class="tab-links a-animation" onclick="opentab('wapremiumVersion')" id="wapt">Premium Version</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="list-unstyled">
                                                                            <li class="mt-2 pb-2">Resource Files</li>
                                                                            <li class="mt-2 pb-4 pb-lg-2">Design</li>
                                                                            <li class="mt-2 pb-3 pb-lg-2">Hosted</li>
                                                                            <li class="mt-2 pb-2">Price</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-9">

                                                                        <div class="tab-contents active-tab" id="wanormalVersion">
                                                                            <ul class="list-unstyled">
                                                                                <li class="mt-2 mt-lg-1 ms-4 ms-lg-0 pb-4 pb-lg-1"><span class="ps-5"><i class="bi bi-x fs-4 text-danger"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Responsive Design with Animations</li>
                                                                                <li class="mt-0 ms-4 ms-lg-0 pb-1"><span class="ps-5"><i class="bi bi-x fs-4 text-danger"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to <b>$230</b></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-4 text-danger fs-5 fw-bold">Price will increased or decrease with the requirements.</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="tab-contents" id="wapremiumVersion">
                                                                            <ul class="list-unstyled">
                                                                                <li class="mt-2 mt-lg-1 ms-4 ms-lg-0 pb-4 pb-lg-1"><span class="ps-5"><i class="bi bi-check fs-4 text-success"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Responsive Design with Animations</li>
                                                                                <li class="mt-0 ms-4 ms-lg-0 pb-1"><span class="ps-5"><i class="bi bi-check fs-4 text-success"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to <b>$350</b></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-4 text-danger fs-5 fw-bold">Price will increased or decrease with the requirements.</li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5" id="reactnativeapplication">
                        <div class="row">
                            <div class="offset-1 col-10 border-bottom border-dark border-1 pb-5">
                                <div class="row">

                                    <div class="col-12">
                                        <h3 class="text-decoration-underline">React-Native Application Development</h3>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12">
                                                <p class="fs-5 fw-semibold" style="text-align: justify;">React Native apps are developed for Android and iOS devices as per unique designs and customer requirements.<br/> Types of react-native develop by me.</p>
                                                <ul class="fw-semibold">
                                                    <li>React-Native E-Commerce Application</li>
                                                    <li>React-Native Blog Application</li>
                                                    <li>React-Native Portal Application</li>
                                                    <li>React-Native Animated Application</li>
                                                    <li>Etc.</li>
                                                </ul>
                                                <p class="fs-5 fw-semibold">You can choose any version for build your react-native application.</p>

                                                <div class="row">
                                                    <div class="col-12 col-lg-8 bg-dark text-white rounded-3 p-4 pb-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-3"></div>
                                                                    <div class="col-9">
                                                                        <div class="tab-titles">
                                                                            <p class="tab-links active-link a-animation" onclick="opentab('ranormalVersion')" id="rant">Normal Version</p>
                                                                            <p class="tab-links a-animation" onclick="opentab('rapremiumVersion')" id="rapt">Premium Version</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul class="list-unstyled">
                                                                            <li class="mt-2 pb-2">Resource Files</li>
                                                                            <li class="mt-2 pb-2">Design</li>
                                                                            <li class="mt-2 pb-2">Server Side</li>
                                                                            <li class="mt-2 pb-2">Price</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-9">

                                                                        <div class="tab-contents active-tab" id="ranormalVersion">
                                                                            <ul class="list-unstyled">
                                                                                <li class="mt-2 mt-lg-1 ms-4 ms-lg-0 pb-4 pb-lg-1"><span class="ps-5"><i class="bi bi-x fs-4 text-danger"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Responsive Design with Animations</li>
                                                                                <li class="mt-0 ms-4 ms-lg-0 pb-1"><span class="ps-5"><i class="bi bi-x fs-4 text-danger"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to <b>$230</b></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-4 text-danger fs-5 fw-bold">Price will increased with the requirements.</li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="tab-contents" id="rapremiumVersion">
                                                                            <ul class="list-unstyled">
                                                                                <li class="mt-2 mt-lg-1 ms-4 ms-lg-0 pb-4 pb-lg-1"><span class="ps-5"><i class="bi bi-check fs-4 text-success"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Responsive Design with Animations</li>
                                                                                <li class="mt-0 ms-4 ms-lg-0 pb-1"><span class="ps-5"><i class="bi bi-check fs-4 text-success"></i></span></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-2">Up to <b>$400</b></li>
                                                                                <li class="mt-2 ms-4 ms-lg-0 pb-4 text-danger fs-5 fw-bold">Price will increased with the requirements.</li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5 mb-5" id="cv">
                        <div class="row">
                            <div class="offset-1 col-10 border-bottom border-dark border-1 pb-5">
                                <div class="row">

                                    <div class="col-12">
                                        <h3 class="text-decoration-underline">Create CV</h3>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12 col-lg-9">
                                                <p class="fs-5 fw-semibold" style="text-align: justify;">The design used in the creation of a CV varies from person to person, and the customer has the ability to change it at the time of need. Fill out the form given below to get the required data while creating your CV. <a href="download.php?file=resources/doc/cv_form.docx" class="fs-5 text-decoration-none">Download Form <i class="bi bi-download fs-5"></i></a><br/>Types of cv create by me.</p>
                                                <ul class="fw-semibold">
                                                    <li>Chronological CV</li>
                                                    <li>Functional or Skills-Based CV</li>
                                                    <li>Combination CV</li>
                                                    <li>Etc.</li>
                                                </ul>
                                                <p class="fw-semibold">Price Up to <b>$20</b></p>
                                                <p class=" text-danger fs-5 fw-bold" style="text-align: justify;">Price will increased with the requirements.</p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

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