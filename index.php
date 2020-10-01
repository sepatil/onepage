  
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MAPP- Multipurpose Landing Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Tweaks for older IEs-->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  
 <body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
    <nav class="navbar mapp-navbar navbar-expand-lg navbar-light bg-light fixed-top" id="myScrollspy">
        <div class="container">
            <a class="navbar-brand" href="#">MUSTER-ONE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#connect">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <section id="home">
            <div id="mapp-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('images/web-professional.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>WelCome to MUSTER-ONE</h2>
                            <p class="lead">This is a description for the first slide.</p>
                            
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('images/web-office.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Robust, Stable and Competitive services</h2>
                            <p class="lead">This is a description for the second slide.</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('images/web-design.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>WordPress and WooCommerce Development</h2>
                            <p class="lead">This is a description for the third slide.</p>
                        </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#mapp-carousel" role="button" data-slide="prev">
                    <i class="fas carousel-arrow fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mapp-carousel" role="button" data-slide="next">
                    <i class="fas carousel-arrow fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </header>

    <section class="about" data-type="background" data-speed="10" id="about">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-5 my-auto">
                    <img src="images/musterone.jpg" class="about-image shadow-sm p-2 mb-5 bg-white rounded img-fluid">
                </div>
                <div class="col-md-7 my-auto">
                    <h2 class="section-title">About me</h2>
                    
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
            
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about-buttons">
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item"><a href="#" class="btn btn-resume bg-primary"><i class="fas fa-download"></i> Download Profile</a></li>
                            <li class="list-inline-item"><a href="#" class="btn btn-contact bg-success"><i class="fas fa-id-card-alt"></i> Contact Me</a></li>
                        </ul>
                    </div>
                    
                    <div class="about-social-icons">
                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f social-icon"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter social-icon"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest social-icon"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in social-icon"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github social-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <section class="services" data-type="background" data-speed="10" id="services">
        <div class="container">
            <h2 class="section-title text-center">What I Do</h2>
            <div class="row services-list">
                <div class="offset-md-2"></div>
                <div class="col-md-4 services-block border-right border-bottom">
                    <div class="d-flex justify-content-center pb-4 services-icon"><i class="far fa-2x fa-edit"></i></div>
                    <h2>Front End Development</h2>
                    <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            
                <div class="col-md-4 services-block border-bottom">
                    <div class="d-flex justify-content-center pb-4 services-icon"><i class="fas fa-2x fa-palette"></i></div>
                    <h2>Graphics Design</h2>
                    <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                
                <div class="offset-md-2"></div>
                <div class="offset-md-2"></div>
                
                <div class="col-md-4 services-block border-right">
                    <div class="d-flex justify-content-center pb-4 services-icon"><i class="fas fa-2x fa-mail-bulk"></i></div>
                    <h2>Digital Marketing</h2>
                    <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
                
                <div class="col-md-4 services-block">
                    <div class="d-flex justify-content-center pb-4 services-icon"><i class="fas fa-2x fa-cubes"></i></div>
                    <h2>Consultancy</h2>
                    <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            
                <div class="offset-md-2"></div>
            </div>
        </div>
    </section>

    <section class="education" data-type="background" data-speed="10" id="profile">
        <div class="container">
            <h2 class="section-title text-center">My Profile</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="timeline">
                
                        <li>
                            <h2 class="section-sub-title">Education</h2>
                        </li>
                        <li>
                            <div class="timeline-block">
                                <h2>B.E. Computer science & Engg</h2>
                                <p>21 March, 2014</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-block">
                                <h2>12th Science</h2>
                                <p>21 March, 2010</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-block">
                                <h2>Hight School</h2>
                                <p>21 March, 2008</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </div>
                        </li>
                    </ul>    
                </div>
        
                <div class="col-md-6">
                    <ul class="timeline">
                        <li>
                            <h2 class="section-sub-title">Experience</h2>
                        </li>
                        <li>
                            <div class="timeline-block">
                                <h2>Project Leader - ABC Web Design</h2>
                                <p>21 March, 2014 - Present</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-block">
                                <h2>Team Leader - Creative Web Design</h2>
                                <p>23 Feb 2010 - 21 March, 2014</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-block">
                                <h2>PHP Developer - John Web Agency</h2>
                                <p>5may2009 - 21 March, 2010</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </div>
                        </li>
                    </ul>
            
                </div>
            </div>
        </div>
    </section>
    
    <div class="clearfix"></div>
    <section class="portfolio" data-type="background" data-speed="10" id="portfolio">
        <div class="container">
            <h2 class="section-title text-center">My Work</h2>
            <div class="row">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="showall-tab" data-toggle="pill" href="#showall" role="tab" aria-controls="showall" aria-selected="true">All Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="Cars-tab" data-toggle="pill" href="#Cars" role="tab" aria-controls="Cars" aria-selected="false">Web Design</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="City-tab" data-toggle="pill" href="#City" role="tab" aria-controls="City" aria-selected="false">Marketing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="Forest-tab" data-toggle="pill" href="#Forest" role="tab" aria-controls="Forest" aria-selected="false">Consulting</a>
                  </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
                    <div class="row align-items-center h-100">
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-1.jpg" alt="">
                                <div class="desc">Sport Shop Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>   
                            </div>
                       
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-2.jpg" alt="">
                                <div class="desc">One Page Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-3.jpg" alt="">
                                <div class="desc">Parallax Design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-4.jpg" alt="">
                                <div class="desc">Landing Page
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-5.jpg" alt="">
                                <div class="desc">Ecommerce store design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                
                </div>
                <div class="tab-pane fade" id="Cars" role="tabpanel" aria-labelledby="Cars-tab">
                    <div class="row align-items-center h-100">
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-1.jpg" alt="">
                                <div class="desc">Sport Shop Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div> 
                            </div>
                       
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-2.jpg" alt="">
                                <div class="desc">One Page Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-3.jpg" alt="">
                                <div class="desc">Parallax Design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-4.jpg" alt="">
                                <div class="desc">Landing Page
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-5.jpg" alt="">
                                <div class="desc">Ecommerce store design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="tab-pane fade" id="City" role="tabpanel" aria-labelledby="City-tab">
                    <div class="row align-items-center h-100">
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-1.jpg" alt="">
                                <div class="desc">Sport Shop Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div> 
                            </div>
                       
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-2.jpg" alt="">
                                <div class="desc">One Page Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-3.jpg" alt="">
                                <div class="desc">Parallax Design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-4.jpg" alt="">
                                <div class="desc">Landing Page
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-5.jpg" alt="">
                                <div class="desc">Ecommerce store design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="tab-pane fade" id="Forest" role="tabpanel" aria-labelledby="Forest-tab">
                    <div class="row align-items-center h-100">
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-1.jpg" alt="">
                                <div class="desc">Sport Shop Website
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div> 
                            </div>
                       
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-2.jpg" alt="">
                                <div class="desc">One Page Website
                                <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-3.jpg" alt="">
                                <div class="desc">Parallax Design
                                    <div class="clearfix"></div>
                                    <a href="#"><i class="fas fa-link link-icon"></i></i></a>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-4.jpg" alt="">
                                <div class="desc"> Ecommerce store design
                                <div class="clearfix"></div>
                                <a href="#"><i class="fas fa-link link-icon"></i></a>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-block my-auto">
                                <img class="card-img img-fluid" src="images/portfolio-5.jpg" alt="">
                                <div class="desc"> Ecommerce store design
                                <div class="clearfix"></div>
                                <a href="#"><i class="fas fa-link link-icon"></i></a>
                               </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="connect" data-type="background" data-speed="10" id="connect">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-sub-title text-light">Connect Me</h2>
                    <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="imputName" class="text-light">Name</label>
                            <input type="text" class="form-control" id="imputName" placeholder="Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4" class="text-light">Email</label>
                            <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="inputSubject" class="text-light">Subject</label>
                          <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputMessage" class="text-light">Message</label>
                           <textarea class="form-control" id="inputMessage" rows="3" placeholder="message"></textarea>
                        </div>
        
                        <button type="submit" class="btn btn-primary bg-success border-0">Send Message</button>
                    </form>
                </div>
        
                <div class="col-md-6">
                    <h2 class="section-sub-title text-light">Address</h2>
                    <div class="contact-block">
                        <div class="contact-entry">
                            <div class="ct-icon"><i class="fa fa-map-marker"></i></div>
                            <p class="ct-text">ABCD, 125 ft Road, Melbourne, Austrellia</p>
                        </div>
                        
                        <div class="contact-entry">
                            <div class="ct-icon"><i class="fas fa-envelope"></i></div>
                            <p class="ct-text">info@stackhuddle.co.in</p>
                        </div>
                        
                        <div class="contact-entry">
                            <div class="ct-icon"><i class="fas fa-phone"></i></div>
                            <p class="ct-text">123 456 789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    <section class="site-footer">
        <div class="container">
            <p class="text-center"><a href="#">&copy;2019 MUSTERONE</a></p>
            <button class="btn btn-primary scroll-top float-right" data-scroll="up" type="button">
                <i class="fa fa-chevron-up"></i>
            </button>
        </div>
    </section>
    </footer>
    
    <!-- JavaScript files-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('.scroll-top').fadeIn();
                    } else {
                        $('.scroll-top').fadeOut();
                }
            });

            $('.scroll-top').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 100);
                return false;
            });
        });
    </script>
    
  </body>
</html>