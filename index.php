<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="css/shadow.png">
    <title>Dev Mode-TodoApp</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bdac33f4cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/effects.css">

    <style>
        .pt-5 a {
            text-decoration: none;
        }

        .h6 {
            text-align: center;
            color: #001B48;
            font-weight: 400;
            font-size: small;
            word-spacing: 1px;
        }
    </style>
</head>

<body>

    <div class="container-fluid fixed-top">
        <div class="container">
            <div class="row mt-2">
                <div class="col-2 d-flex justify-content-end">
                    <img src="css/shadow.png" alt="Dev Mode" height="40px" width="50px">
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav  mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#how">How it works?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#prem">Premium Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#footer">Help</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-5 pt-5">
                <div id="demo" class="carousel slide" data-ride="carousel" data-ride="carousel" data-interval="4000" data-pause="false">

                    <!-- Indicators -->
                    <!-- <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul> -->

                    <!-- Slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="css/Tmask.png" alt="..." class="d-block w-100">
                            <div class="carousel-caption">
                                <h1 style="font-weight:900; color: #001B48;"> DEV MODE </h1><br><br><br>
                                <h3>Think, Plan and Track.</h3>
                                <p>All in One Place.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="css/Tmask.png" alt="..." class="d-block w-100">
                            <div class="carousel-caption">
                                <h1 style="font-weight:900; color: #001B48;"> DEV MODE </h1><br><br><br>
                                <h2>One Tool + One Click</h2>
                                <h4>To Manage the entire day.</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="css/Tmask.png" alt="..." class="d-block w-100">
                            <div class="carousel-caption">
                                <h1 style="font-weight:900; color: #001B48;"> DEV MODE </h1><br><br><br>
                                <h1>The Modern Way<br>To Live.</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a> -->

                </div>
                <div class="d-flex ml-3 pl-5">
                    <a href="Login.php">
                        <button class="btn btn-block mx-2 log">LogIn</button>
                    </a>
                    <div class="p-2"></div>
                    <a href="Signup.php">
                        <button class="btn btn-block mx-2 sign">Register</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="how" class="container-fluid bg-white d-flex justify-content-center align-items-center">
        <div class="container">
            <h3 style="color: #001B48;" class="autoShow">How to get Started?</h3>
            <div class="row">
                <div class="col autoShow">
                    <img src="css/1st.png" alt="..." class="d-block w-100 img-fluid">
                    <h6 class="p-2 pt-4 h6">1. 📝✒️Signup to become a fellow Dev Mode user.</h6>
                </div>
                <div class="col autoShow">
                    <img src="css/2nd.png" alt="..." class="d-block w-100 img-fluid">
                    <h6 class="p-2 pt-4 h6">2. Get Started & enter your ToDo.👨‍💻⌨️</h6>
                </div>
                <div class="col autoShow">
                    <img src="css/3rd.png" alt="..." class="d-block w-100 img-fluid">
                    <h6 class="p-2 pt-4 h6">3. Click Add. <i class="fa-regular fa-hand-pointer"></i></h6>
                </div>
                <div class="col autoShow">
                    <img src="css/4th.png" alt="..." class="d-block w-100 img-fluid">
                    <h6 class="p-2 pt-4 h6">4. And Keep track of all your activities for the day. 🤩🥳📝</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="prem" class="container" style="padding-top: 70px;">
        <h3 style="color: #001B48; text-align: center;">Upgrade your plan</h3>
        <div class="row pt-5">
            <div class="col p-5 pro rounded-lg mx-1 autoShow">
                <h3>Free</h3>
                <h2>NGN 0.00</h2>
                <p>Per month</p>
                <p>Explore how proper planning increases productivity.</p>
                <button class="btn btn-block btn-light text-muted rounded-lg font-weight-bold disabled">Your current Plan</button>
                <ul class="pt-3 pl-3">
                    <li>Access to the basic app features.</li>
                    <li>Manage tasks.</li>
                    <li>Real time reminders.</li>
                    <li>One User, One Device.</li>
                    <li>Standard voice mode.</li>
                    <li>Strictly Web based.</li>
                </ul>
            </div>
            <div class="col p-5 pro rounded-lg mx-1 autoShow">
                <h3>Plus</h3>
                <h2>NGN 2500.00</h2>
                <p>Per month</p>
                <p>Level up productivity and creativity with expanded access.</p>
                <button class="btn btn-block rounded-lg font-weight-bold text-white" style="background-color: #001B48;">Get Plus</button>
                <ul class="pt-3 pl-3">
                    <li>Everything in free.</li>
                    <li>Download tasks and store on your device.</li>
                    <li>Standard and advanced Voice mode.</li>
                    <li>Opportunities to test more features.</li>
                    <li>Limited Access to our AI features.</li>
                </ul>
            </div>
            <div class="col p-5 pro rounded-lg mx-1 autoShow">
                <h3>Pro</h3>
                <h2>NGN 8000.89</h2>
                <p>Per month</p>
                <p>Get the best of Dev Mode with the highest level of access.</p>
                <button class="btn btn-block rounded-lg font-weight-bold" style="background-color: #ffffff;">Get Pro</button>
                <ul class="pt-3 pl-3">
                    <li>Everything in Plus and Lots more.</li>
                    <li>Personal tracker mode.</li>
                    <li>Manage large scale tasks and project in real time.</li>
                    <li>Unlimited access to Advanced voice mode.</li>
                    <li>Unlimited Access to our AI features.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-white my-5 py-5">
        <div class="container">
            <div class="row py-5 autoShow" id="about">
                <div class="col">
                    <h3 style="color: #001B48;">About Us</h3>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center justify-content-end">
                        <img src="css/shadow.png" alt="Dev Mode" height="40px" width="50px">
                        <h3 style="font-weight:900; color: #001B48;" class="px-2"> DEV MODE </h3>
                    </div>
                </div>
            </div>

            <div class="row autoShow">
                <div class="col border-top border-secondary px-0 pt-3">
                    <h5 class="mb-5">The top-ranked productivity app that brings clarity
                        and efficiency to millions of people and teams.</h5>

                    <a href="#">Explore the world of Dev Mode</a>
                </div>
                <div class="p-5 m-5"></div>
                <div class="col border-top border-secondary px-0 pt-3">
                    <h5 class="mb-5">The only asynchronous-first collaboration app that
                        encourages teams to focus, create, and disconnect.</h5>

                    <a href="#">Meet the people of Dev Mode</a>
                </div>
            </div>

            <div class="row autoShow">
                <div class="col border-top border-secondary px-0 pt-3">
                    <h5 class="mb-5">Pioneering async- and remote-first work for over a decade.
                        We’re bootstrapped, profitable, and here for the long-run.</h5>

                    <a href="#">Get the support you need</a>
                </div>
                <div class="p-5 m-5"></div>
                <div class="col border-top border-secondary px-0 pt-3">
                    <h5 class="mb-5">We’re an independent company without plans to sell out or get acquired.
                        We’ll be here for our users and our teammates for decades to come.</h5>

                    <a href="#">Learn about Our values</a>
                </div>
            </div>

            <h6 class="h6 autoShow">Founded In 1983. With only 12 workers.</h6>
            <h6 class="h6 autoShow">Now a company of 5000+ workers around the globe.</h6>
        </div>
    </section>

    <section id="footer" class="container-fluid pt-5 bg-white">
        <div class="row" style="padding-top: 100px;">
            <div class="col-3 autoShow">
                <div class="d-flex align-items-center justify-content-start">
                    <img src="css/shadow.png" alt="Dev Mode" height="30px" width="40px">
                    <h4 style="font-weight:900; color: #001B48;" class="px-2"> DEV MODE </h4>
                </div>

                <p>Join millions of people who organize work and life with Dev Mode.</p>
            </div>
            <div class="col-9">
                <div class="row d-flex justify-content-end">
                    <div class="col-2 autoShow">
                        <h6>Features</h6>
                        <ul class="list-unstyled">
                            <li class="pt-3"><a href="#how">How It Works</a></li>
                            <li class="pt-3"><a href="#footer">For Teams</a></li>
                            <li class="pt-3"><a href="#prem">Pricing</a></li>
                            <li class="pt-3"><a href="#footer">Templates</a></li>
                        </ul>
                    </div>
                    <div class="col-3 autoShow">
                        <h6>Resources</h6>
                        <ul class="list-unstyled">
                            <li class="pt-3"><a href="#footer">Download App</a></li>
                            <li class="pt-3"><a href="#footer">Help Center</a></li>
                            <li class="pt-3"><a href="#footer">Productivity Methods</a></li>
                            <li class="pt-3"><a href="#footer">Integration</a></li>
                            <li class="pt-3"><a href="#footer">Channel Partners</a></li>
                            <li class="pt-3"><a href="#footer">Developer API</a></li>
                            <li class="pt-3"><a href="#footer">Status</a></li>
                        </ul>
                    </div>
                    <div class="col-2 autoShow">
                        <h6>Company</h6>
                        <ul class="list-unstyled">
                            <li class="pt-3"><a href="#about">About Us</a></li>
                            <li class="pt-3"><a href="#footer">Careers</a><small> we're hiring!</small></li>
                            <li class="pt-3"><a href="#footer">Inspiration Hub</a></li>
                            <li class="pt-3"><a href="#footer">Press</a></li>
                            <li class="pt-3"><a href="#footer">Twist</a></li>
                        </ul>
                    </div>
                    <div class="col-1 d-flex flex-column align-items-center autoShow">
                        <i class="fa-brands fa-square-x-twitter h5" style="color: #000000;"></i>
                        <i class="fa-brands fa-linkedin h5 pt-3" style="color: #000000;"></i>
                        <i class="fa-brands fa-youtube h5 pt-3" style="color: #000000;"></i>
                        <i class="fa-brands fa-square-instagram h5 pt-3" style="color: #000000;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex text-muted align-items-center bottom autoShow">
            <small class="pr-1"><a class="text-muted" href="#footer">Security</a></small> |
            <small class="pr-1 pl-1"><a class="text-muted" href="#footer">Privacy</a></small> |
            <small class="pr-4 pl-1"><a class="text-muted" href="#footer">Terms</a></small> &copy;
            <small class="pl-1 text-muted">DevMode.Inc</small>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>