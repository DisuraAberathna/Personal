<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Disura Chathwara | About</title>

    <link rel="icon" href="resources/img/logo.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/progress.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

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

            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
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
                                    <a class="nav-link active a-animation" href="about.php">About</a>
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


            <!-- Content Start -->

            <div class="col-12 mt-5">

                <div class="row mt-5">
                    <div class="col-6 ms-3 ms-md-5 ps-0 border-bottom border-dark border-1">
                        <span class="heading text-dark">About Me</span>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">

                        <div class="row">

                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="resources/img/profile-img.png"
                                            class="offset-3 col-6 d-block rounded-circle" />
                                    </div>

                                    <div class="col-12 d-lg-block d-none ps-5">
                                        <h3>My Mission</h3>
                                        <p class="fs-5 fw-bold mt-3" style="text-align: justify;">My mission is to
                                            complete my degree within the next four years.</p>
                                        <img src="resources/img/mission.gif"
                                            class="offset-lg-3 col-12 col-lg-6 mt-0 pt-0" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 p-5">

                                <div class="row">

                                    <p class="fs-5 fw-bold" style="text-align: justify;">I am Disura Chathwara
                                        Aberathna, an undergraduate BSc (Hons) software engineer. I am doing my degree
                                        at the Java Institute for Advanced Technology. I am a full-stack developer.
                                        Currently, I have mastered web application
                                        development and cross-platform mobile application Application Development.I am
                                        currently using PHP theories to create web applications and have been studying
                                        Laravel. I am using React-native for cross-platform mobile
                                        app development, and for that, I am learning Flutter. I use MySQL and MongoDB
                                        for databases, and for that, I am learning FireBase.</p>

                                    <div class="col-12">
                                        <div class="about-col-2">
                                            <div class="col-12 col-lg-8 bg-dark text-white rounded-3 ms-2 ms-lg-0 p-5 ps-3 pt-3 ps-lg-5 pt-lg-4 pb-lg-3 mt-3"
                                                style="height: 270px;">
                                                <div class="row">

                                                    <div class="tab-titles">
                                                        <p class="tab-links active-link a-animation fw-bold"
                                                            onclick="opentab('skills')">Skills</p>
                                                        <!-- <p class="tab-links a-animation fw-bold" onclick="opentab('experience')">Experience</p> -->
                                                        <p class="tab-links a-animation fw-bold"
                                                            onclick="opentab('education')">Education</p>
                                                    </div>
                                                    <div class="tab-contents active-tab" id="skills">
                                                        <ul>
                                                            <li><span class="text-danger fw-bold">UI/ UX</span><br>Web/
                                                                React-Native</li>
                                                            <li><span class="text-danger fw-bold">Web
                                                                    Development</span><br>Website and Web Application
                                                                Development</li>
                                                            <li><span class="text-danger fw-bold">React-Native
                                                                    Application Development</span><br>Building Android/
                                                                IOS App</li>
                                                        </ul>
                                                    </div>
                                                    <!-- <div class="tab-contents" id="experience">
                                                        <ul>
                                                            <li><span class="text-danger fw-bold">2021 - Current</span><br> <span class="fw-bold fs-5">DETEC-X</span> Software Company Sri Lanka (PVT).LTD.</li>
                                                        </ul>
                                                    </div> -->
                                                    <div class="tab-contents" id="education">
                                                        <ul>
                                                            <li><span>2021(Dec)</span><br>BSc(Hons) in Software
                                                                Engineering in <br> Java Institute for Advanced
                                                                Technology.</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <div class="col-12 d-block d-lg-none pt-5">
                                        <h3>My Mission</h3>
                                        <p class="fs-5 fw-bold mt-3" style="text-align: justify;">My mission is to
                                            complete my degree within the next four years.</p>
                                        <img src="resources/img/mission.gif"
                                            class="offset-lg-3 col-12 col-lg-6 mt-0 pt-0" />
                                    </div>

                                    <div class="col-12 pt-3">
                                        <h3>My Vision</h3>
                                        <p class="fs-5 fw-bold mt-3 mb-0" style="text-align: justify;">My vision is to
                                            provide high-quality, user-friendly, and low-cost software to the consumer.
                                        </p>
                                        <img src="resources/img/vision.gif"
                                            class="offset-lg-3 col-12 col-lg-6 mt-0 pt-0 mb-0" />
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row p-5 pt-0">

                            <div class="col-12">

                                <h3 class="fw-bold text-decoration-underline">My Knowledge & Skills</h3>
                                <p class="fs-5 fw-bold mt-3" style="text-align: justify;">I have good knowledge and
                                    skills in the following subjects, and I am self-learning to develop my knowledge
                                    based on these.</p>

                                <div class="row g-3 gap-3">
                                    <div class="offset-lg-1 col-lg-10">
                                        <div class="col-12 d-flex flex-row justify-content-center wrapper pt-3 pb-3">
                                            <div class="card col-8 col-lg-2 mt-3 mt-lg-0 me-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">HTML</div>
                                            </div>
                                            <div class="card js col-8 col-lg-2 mt-3 mt-lg-0 me-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">JavaScript</div>
                                            </div>
                                            <div class="card php col-8 col-lg-2 mt-3 mt-lg-0 me-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">PHP</div>
                                            </div>
                                            <div class="card react col-8 col-lg-2 mt-3 mt-lg-0 me-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">React-Native</div>
                                            </div>
                                            <div class="card json col-8 col-lg-2 mt-3 mt-lg-0 me-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">JSON</div>
                                            </div>
                                            <div class="card mysql col-8 col-lg-2 me-3 mt-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">My SQL</div>
                                            </div>
                                            <div class="card mongodb col-8 col-lg-2 me-3 mt-3 pt-5 pb-5">
                                                <div class="circle">
                                                    <div class="bar"></div>
                                                    <div class="box"><span></span></div>
                                                </div>
                                                <div class="text">MongoDB</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Content End -->


            <!-- Footer Start -->

            <?php include "footer.html"; ?>

            <!-- Footer End -->

        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="script.js"></script>

    <script>
        let options = {
            startAngle: -1.55,
            size: 150,
            value: 0.98,
            fill: {
                gradient: ['#dc3545', '#dc3545']
            }
        }
        $(".circle .bar").circleProgress(options).on('circle-animation-progress',
            function (event, progress, stepValue) {
                $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
            });
        $(".js .bar").circleProgress({
            value: 0.90
        });
        $(".php .bar").circleProgress({
            value: 0.95
        });
        $(".react .bar").circleProgress({
            value: 0.80
        });
        $(".json .bar").circleProgress({
            value: 0.95
        });
        $(".react .bar").circleProgress({
            value: 0.80
        });
        $(".mongodb .bar").circleProgress({
            value: 0.75
        });
    </script>


</body>

</html>