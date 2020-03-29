<?php
  include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151906986-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151906986-1');
</script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Docufix | CONTACT US</title>
        <meta name="description" content="contact us">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    </head>
    <body>
        <!--Header-->
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572949531/docufix/Group_1_3_pqdphq.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5" id="navlink">
                <li class="nav-item">
                  <a class="nav-link text-center" href="about_us.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.php">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Duplicates Check</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="teampage.php">Our Team</a>
                </li>
               <?php
                  if(!isset($_SESSION['login_user'])){
                  echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="signup.php">Get Started</a>
                </li>
                  ';


                }
                else
                {
                    echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="profile.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="logout.php">logout</a>
                </li>
                  ';
                }
                ?>
                
              </ul>
            </div>
          </nav>
    </header>
        <!--Main-->
        <main>
          <section id="Introduction" class="text-center mb-3">
            <div class="text-center">
              
                  <h3>CONTACT US</h3>
                  <!-- <button class="btn btn-primary mt-2 text-center">Updated November 2019</button> -->
              
            </div> 
          </section>
        
           <div class="container" id="container">
              <h2 id="pre-form1" class="mb-0 text-center">Share your experience with us!</h2>
              <h3 id="pre-form2" class="text-center" style="font-size: larger;">We would love to hear from you</h3>
              <div class="form-box">
                  <form id="feedback-form" action="https://formspree.io/ssdanso@live.com" method="post">
                      <div class="form-group">
                          <input class="form-control" id="name" type="text" name="Full Name" placeholder="Your Full Name Here" required/>
                      </div>
                      <div class="form-group">
                          <input class="form-control" id="email" type="email" name="Email" placeholder="Your Email Address Here" required/>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" id="message" name="Message" style= "height: 200px;" placeholder="Your Message Here"></textarea>
                      </div>
                      <div id="submit-btn">
                      <input id="btn-primary" class="btn btn-primary text-center m-6" type="submit" value="Submit Feedback" />
                    </div>
                  </form>
              </div>
           </div>
           
            <div class="text-center disclaimer-btn"> 
              <!-- <a href="disclaimer.php" class="btn  px-5  btn-outline-dark text-center m-5" style="font-weight: bold;margin-bottom:20px;">Disclaimer</a> -->
            </div>
        </main>

 

        <!--Footer-->
        <footer id="footer">
          <div class="container mt-3"><hr>
            <div class="row">
                <div class="col-sm-6" id="docufix">
                    <a class="navbar-brand  text-justify" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
                    <p class="text-justify">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
                </div>
              <div class="col-sm-6 text-center">           
                  <ul class="list-inline text-center mt-3 pl-3">  
                      <li class="list-inline-item">
                        <a class="text-center" href="contact.php">Contact us</a>
                      </li>
                      <li class="list-inline-item">
                          <a class="text-center" href="faq.php">FAQs</a>
                        </li>
                        <li class="list-inline-item">
                          <a class="text-center" href="privacy.php">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.php">Terms of Service</a>
                          </li>
                      
                    </ul>
              </div>
            </div>
          </div>
        
  </footer>
       
     
      
      <script src="js/app.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
        var SCROLLING_NAVBAR_OFFSET_TOP = 50;
        $(window).on("scroll", function() {
        var $navbar = $(".navbar");
        
        if ($navbar.length) {
          if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
            $(".scrolling-navbar").addClass("top-nav-collapse");
          } else {
            $(".scrolling-navbar").removeClass("top-nav-collapse");
          }
        }
        });
      </script>   
        
    
    </body>
</html>
