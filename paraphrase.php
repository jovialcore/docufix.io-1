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
        <title>Paraphrasing Tool</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="stylesheet" type="text/css" href="css/Paraphrase.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="body">
      <!-- This div contains eveerything in the body -->
      <div class="container-fluid">
           <!--Header-->
        <header>
          <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5">
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
                    <a class="dropdown-item text-justify" href="plagiarismChecker.php">Plagiarism Check</a>
                    <a class="dropdown-item text-justify" href="paraphrase.php">Paraphrasing tool</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Support
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="faq.php">FAQ</a>
                    <a class="dropdown-item text-justify" href="contact.php">Contact Us</a>
                    <a class="dropdown-item text-justify" href="why-use-docufix.php">Why use Docufix</a>
                    <a class="dropdown-item text-justify" href="privacy.php">Privacy Policy</a>
                    <a class="dropdown-item text-justify" href="termsOfService.php">Terms of Service</a>
                  </div>
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
          <div class="div1">
            <div class="row">
              <div class="col-md-7 col-xs-12 para_div">
                <div class="row">
                  <div class="col-md-4 text-center">
                  <img class="para_image" src="https://res.cloudinary.com/tolulopedavid/image/upload/v1571517958/docufix/comp_xjwqsh.png">
                </div>
                <div class="col-md-8 col-xs-12 mt-4 text-left">
                  <p class="para_p ">Paraphrase file</p>
                <p class="para_p2"> Docufix is one of the most innovative Technology of our age. Built solidly with the latest technical tools for file and data management.</p>
              </div>
                </div>
                </div>
                
               <div class="col-md-1 col-xs-1">&nbsp;</div>
              <div class="col-md-4 col-xs-12  para_div">
                 <p class="para_p mt-4">Other Tools:</p>
                <p class="para_p2">
                  <button class="btn1"><a href="" class="font">Grammer Check</a></button>&nbsp;&nbsp;
                  <button class="btn1"><a href="" class="font">Check for duplicates</a></button>&nbsp;
                </p>
              </div>
            </div>
          </div>
          <!-- End of section one -->
          <!-- Beginging of section two -->
          <div class="row mt-5">
            <div class="mx-auto ">
              <!-- <button class="btn_file">File</button> -->
              <button class="btn_text">Text</button>
            </div>
          </div>
          <!-- End of section two -->
          <!-- Begining of section 3 -->
           <!-- End of another row -->
           <div class=" div3">
            <div class="row">
              <div class="col-md-5 col-xs-12">
                <form>
                   <textarea placeholder="Original Text"></textarea>
                </form>
              </div>
              <div class="col-md-2 col-xs-12 text-center">
                <button class="para_btn">Paraphrase</button>&nbsp;&nbsp;
              </div>
              <div class="col-md-5 col-xs-12">
                <form>
                   <textarea placeholder="Paraphrased Text"></textarea>
                </form>
              </div>
            </div>
           <!--  <div class="row">
             <div class="mx-auto">
               <button class="para_btn">Paraphrase</button>
             </div>
            </div> -->
            </div>
            <!-- End of another row -->
          <!-- End of section three -->
        <!--Footer-->
        <footer id="footer">
              <div class="container mt-3 mb-3">
                <div class="row">
                  <div class="col-sm-12 text-center">
                      <ul class="list-inline text-center">
                          <li class="list-inline-item">
                            <a class="text-center" href="#">&copy; 2019 Copyright Docufix</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="faq.php">FAQ</a>
                          </li>
                          <li class="list-inline-item">
                            <a class="text-center" href="contact.php">Contact us</a>
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
              <p class="text-center">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
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
      </div>
      <!-- Ending of the div that contains everything in the body  -->
      </body>
</html>
