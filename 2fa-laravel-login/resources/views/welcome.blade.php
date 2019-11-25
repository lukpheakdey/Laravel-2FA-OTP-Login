<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Pheakdey Luk </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('jackson/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('jackson/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('jackson/css/bootstrap.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('jackson/css/flexslider.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('jackson/fonts/flaticon/font/flaticon.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('jackson/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('jackson/css/owl.theme.default.min.css') }}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('jackson/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('jackson/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('jackson/js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url(jackson/images/about.jpg);"></div>
                    <h1 id="colorlib-logo"><a href="index.html">Pheakdey Luk </a></h1>
                    <span class="position"><a href="#">Full Stack Developer </a> </span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About</a></li>
                            <li><a href="#" data-nav-section="skills">Skills</a></li>
                            <!-- <li><a href="#" data-nav-section="experience">Experience</a></li>
                            <li><a href="#" data-nav-section="work">Work</a></li>
                            <li><a href="#" data-nav-section="blog">Blog</a></li> -->
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                            <li><a href="#" data-nav-section="education">MUM Homework</a></li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(jackson/images/img_bg_1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1>Hi! <br>Pheakdey Luk </h1>
                                                    <h2>PHP, Java, Angular 7,8, Node JS, Spring, MySQL, JavaScript, jQuery, Bootstrap, HTML5, CSS3, SASS, SCSS
                                                        <a href="https://www.linkedin.com/in/pheakdey-luk/" target="_blank"></a>
                                                    </h2>
                                                    <p><a class="btn btn-primary btn-learn">View CV <i class="icon-download4"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(jackson/images/img_bg_2.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1>I am <br>Full Stack Developer</h1>
                                                    <h2>Angular <a href="" target="_blank"> MEAN Stack Project </a></h2>
                                                    <p><a class="btn btn-primary btn-learn" href="https://pheakdey-mwa.herokuapp.com/login" target="_blank">View Portfolio <i class="icon-briefcase3"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(jackson/images/img_bg_3.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1><br> Blog Project</h1>
                                                    <h2>lukpheakdey.com <a href="http://lukpheakdey.blogspot.com/" target="_blank"> Personal blog </a>
                                                    </h2>
                                                    <p><a ref="http://lukpheakdey.blogspot.com/" target="_blank" class="btn btn-primary btn-learn">View Details <i class="icon-briefcase3"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta">About Us</span>
                                            <h2 class="colorlib-heading">Who Am I?</h2>
                                            <p><strong>Hi I'm Pheakdey Luk</strong>
                                                Professional PHP and Java developer in Professional experience developing both front and back end of complex, object oriented, web-based applications for the health care industry and business sector. History of strong technical knowledge, guiding junior developers to deliver highly accurate products which meet quality standards. Adept at problem solving and user interfacing, with extensive knowledge of languages and technologies like PHP, Angular, and jQuery, as well as frameworks like Laravel, Zend, and CakePHP. Implemented several projects using Java technologies through complete software development life cycle using web services and modern tools.
                                            </p>
                                            <p> I used Laravel, CakePHP and Zend framework for backend and HTML, JavaScript, CSS, Query, Angular7, and Bootstrap for front-end, and MySQL for a database. My products are using in many hospitals in my country and It’s still used now. I am a team leader and I used agile/scrum for development.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                        <div class="services color-4">
                                            <span class="icon2"><i class="icon-phone3"></i></span>
                                            <h3> Web Application</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                        <div class="services color-3">
                                            <span class="icon2"><i class="icon-data"></i></span>
                                            <h3>Software</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="services color-1">
                                            <span class="icon2"><i class="icon-bulb"></i></span>
                                            <h3>Programming</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                        <div class="services color-2">
                                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                                            <h3>Leading</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!--
                <section class="colorlib-services" data-section="services">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">What I do?</span>
                                <h2 class="colorlib-heading">Here are some of my expertise</h2>
                            </div>
                        </div>
                        <div class="row row-pt-md">
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-1">
                                    <span class="icon">
                                        <i class="icon-bulb"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Innovative Ideas</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-2">
                                    <span class="icon">
                                        <i class="icon-data"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Software</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-3">
                                    <span class="icon">
                                        <i class="icon-phone3"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Application</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-4">
                                    <span class="icon">
                                        <i class="icon-layers2"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Graphic Design</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-5">
                                    <span class="icon">
                                        <i class="icon-data"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Software</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-6">
                                    <span class="icon">
                                        <i class="icon-phone3"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>Application</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                -->


                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Specialty</span>
                                <h2 class="colorlib-heading animate-box">My Skills</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <p>I used Laravel, CakePHP and Zend framework for backend and HTML, JavaScript, CSS, Query, Angular7, and Bootstrap for front-end, and MySQL for a database. My products are using in many hospitals in my country and It’s still used now. I am a team leader and I used agile/scrum for development.</p>
                            </div>


                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>PHP</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Java</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Laravel</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-11" role="progressbar" aria-valuenow="75"
                                             aria-valuemin="0" aria-valuemax="100" style="width:94%">
                                            <span>94%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Angular 7, 8</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width:89%">
                                            <span>89%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>REST API</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-55" role="progressbar" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>MySQL</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-51" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100" style="width:91%">
                                            <span>91%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>MongoDB</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-555" role="progressbar" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Node JS </h3>
                                    <div class="progress">
                                        <div class="progress-bar color-522" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>jQuery</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Javascript </h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5j" role="progressbar" aria-valuenow="90"
                                             aria-valuemin="0" aria-valuemax="100" style="width:87%">
                                            <span>87%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5or" role="progressbar" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:93%">
                                            <span>93%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-globe-outline"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#">luk.pheakdey@gmail.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>14307 Fullerton Rd. • Woodbridge, Virginia 22193</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="tel://">703 xxx xxxx</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Homework</span>
                                <h2 class="colorlib-heading animate-box">MUM</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Homework
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/HomeworkAssignment/Homework1_Recipe/pie.html"> Homework 1: Recipe </a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/hw2/tmnt.html"> Homework 2: Movie Review </a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/hw4/index.php"> Homework 4: NerdLuv </a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/hw6/ascii.html">Homework 8: Javascript and ASCII Animation </a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/FifteenPuzzle/FifteenPuzzle.html">Homework 9: DOM and Events: 15 Puzzle </a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/MouseMaze/Maze.html">Mouse Maze </a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/TipCalculatorExercise/index.html">Tip Calculator</a>
                                                </div>
                                                <div class="panel-body">
                                                    <a target="_blank" href="http://mumstudents.org/~986591/GradesExercise/grades.html">Grades Exercise</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Experience</span>
                                <h2 class="colorlib-heading animate-box">Work Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                             <div class="timeline-centered">
                                 <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">

                                       <div class="timeline-icon color-1">
                                          <i class="icon-pen2"></i>
                                       </div>

                                       <div class="timeline-label">
                                          <h2><a href="#">Full Stack Developer</a> <span>2017-2018</span></h2>
                                          <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                       </div>
                                    </div>
                                 </article>


                                 <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                    <div class="timeline-entry-inner">
                                       <div class="timeline-icon color-2">
                                          <i class="icon-pen2"></i>
                                       </div>
                                       <div class="timeline-label">
                                           <h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
                                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                       </div>
                                    </div>
                                 </article>

                                 <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">
                                       <div class="timeline-icon color-3">
                                          <i class="icon-pen2"></i>
                                       </div>
                                       <div class="timeline-label">
                                           <h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
                                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                       </div>
                                    </div>
                                 </article>

                                 <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                    <div class="timeline-entry-inner">
                                       <div class="timeline-icon color-4">
                                          <i class="icon-pen2"></i>
                                       </div>
                                       <div class="timeline-label">
                                           <h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
                                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                       </div>
                                    </div>
                                 </article>

                                 <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                    <div class="timeline-entry-inner">
                                       <div class="timeline-icon color-5">
                                          <i class="icon-pen2"></i>
                                       </div>
                                       <div class="timeline-label">
                                           <h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
                                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                       </div>
                                    </div>
                                 </article>

                                 <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                    <div class="timeline-entry-inner">
                                       <div class="timeline-icon color-none">
                                       </div>
                                    </div>
                                 </article>
                              </div>
                           </div>
                       </div>
                    </div>
                </section> -->

                <!-- <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Work</span>
                                <h2 class="colorlib-heading animate-box">Recent Work</h2>
                            </div>
                        </div>
                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(images/img-1.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 01</a></h3>
                                            <span>Website</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/img-2.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 02</a></h3>
                                            <span>Animation</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                                <div class="project" style="background-image: url(images/img-3.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 03</a></h3>
                                            <span>Illustration</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" style="background-image: url(images/img-4.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 04</a></h3>
                                            <span>Application</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(images/img-5.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 05</a></h3>
                                            <span>Graphic, Logo</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/img-6.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 06</a></h3>
                                            <span>Web Design</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- <section class="colorlib-blog" data-section="blog">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Read</span>
                                <h2 class="colorlib-heading">Recent Blog</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Renovating National Gallery</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Wordpress for a Beginner</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Make website from scratch</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div>
                    </div>
                </section> -->



            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <!-- jQuery -->
    <script src="{{ asset('jackson/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('jackson/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('jackson/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('jackson/js/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('jackson/js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('jackson/js/owl.carousel.min.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('jackson/js/jquery.countTo.js') }}"></script>
    <!-- MAIN JS -->
    <script src="{{ asset('jackson/js/main.js') }}"></script>

</body>
</html>
