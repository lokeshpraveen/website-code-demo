<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<?php 
if(isset($_POST['submit'])){
    $to = "appricots@appricots.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>APPRICOT'S</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <!-- /web fonts -->
</head>

<body>
  <!-- header -->
  <header class="w3l-header">
    <div class="hero-header-11">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light py-sm-2 py-1 px-0">
            <a class="navbar-brand editContent" href="index.php">appricot's</a>
          
				<a class="navbar-brand" href="#index.php">
						<img src="assets/images/logo.jpg" alt="Your logo" title="Your logo" style="height:100px;" />
				</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#service">Fees </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="slot.html">Slot</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Blocks
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php#stats">Fun Facts</a>
                    <a class="dropdown-item" href="index.php#testimonials">Testimonials</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#contact">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- //header -->
  <!--  Main banner section -->
  <section class="w3l-main-banner">
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="item">
          <li>
            <div class="slider-info banner-view">
              <div class="banner-info container">
                <h3 class="banner-text"><small>Educational</small><br>
                  Institute
                </h3>
                <p class="my-4 mb-5">Quality learning</p><br>
                <a href="#gallery" class="btn btn-primary theme-button mr-3">Join with us</a>
                <!--<a href="#about.html" class="btn btn-outline-primary theme-button">Hire Me</a>-->
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!--  //Main banner section -->
  <!--  About section -->
  <div class="w3l-about1 pt-5" id="about">
    <div class="container pt-lg-3">
      <h3 class="global-title">Appricot's</h3>
      <div class="aboutgrids row">
        <div class="col-lg-6 aboutgrid2">
          <img src="assets/images/about.jpg" alt="about image" height="50px" class="img-fluid" />
        </div>
        <div class="col-lg-6 aboutgrid1 my-lg-0 my-5">
          <h4>Why Join with Us?</h4>
          <p>Here You get quality education and experimental support . you can learn from basic to professional level.
          You can get authorised Certifite from appricot's. Seamless computer education gives wings to technologies, so you get more practical experience form appricot's.
            </p>
          <p>Good starting is better to get good end, So Step your sucess at appricot's.</p>

         <!-- <a href="#URL" class="btn btn-outline-primary p-3">Download CV</a>-->
        </div>
      </div>
    </div>
<br><br>
    <div class="aboutbottom py-5">
      <div class="container py-lg-3">
        <div class="bottomgrids row">
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-lg-0 mt-0">
            <h4>Programming</h4>
            <p>understanding machine language to communicate with latest technologies.</p>
          </div>
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-md-0 mt-5">
            <h4>Web Design</h4>
            <p>Demand on work. work with skill, improving skill by make new design and pages.</p>
          </div>
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-lg-0 mt-5">
            <h4>Robotics</h4>
            <p>Communicate with future robots and make a new human friendly devices. </p>
          </div>
          <div class="col-lg-3 col-md-6 bottomgrid1 mt-lg-0 mt-5">
            <h4>Hacking</h4>
            <p>We are white hat hacker. Make a world with Secure and crime free with hacking knowledge.</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--  //About section -->
  <!--  services section -->
  <section class="w3l-index6" id="service">
    <div class="features-with-17_sur py-5">
      <div class="container py-lg-3">
        <h3 class="global-title my-title">Courses</h3>
        <div class="features-with-17-top_sur">
          <div class="row">
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-eercast" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">DCA</a></h6>
                  <p>Diploma in Computer Application.
                    Fees:&nbsp;<strike>2,300</strike>.<b>   1,780.</b>
                  <br>Duration : 22 Days (45min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-copyright" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">C,C++</a></h6>
                  <p>Programming Languague 
                    <BR>Fees:&nbsp;<strike>4,000</strike>.<b>   3,280.</b>
                  <br>Duration : 46 Days (50min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-ravelry" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">JAVA</a></h6>
                  <p>JAVA.
                   <BR> Fees:&nbsp;<strike>4,300</strike>.<b>   3,470.</b>
                  <br>Duration : 32 Days (50min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-code-fork" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">PYTHON</a></h6>
                  <p>PYTHON.
                  <BR>  Fees:&nbsp;<strike>5,300</strike>.<b>   4,270.</b>
                  <br>Duration : 36 Days (50min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-free-code-camp" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">JAVA WEB DESIGN</a></h6>
                  <p>ANGULAR.JS,REACT.JS,VUE.JS
                  <BR>  Fees:&nbsp;<strike>4,400</strike>.<b>   3,550./COURSE</b>
                  <br>Duration : 28 Days (45min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-cloud-download" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">DATABASE</a></h6>
                  <p>PHP,MYSQL.
                 <BR>   Fees:&nbsp;<strike>5,000</strike>.<b>   4,150./COURSE</b>
                  <br>Duration : 25 Days (50min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-pie-chart" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">MANGODB</a></h6>
                  <p>PYTHON.
                 <BR>   Fees:&nbsp;<strike>6,500</strike>.<b>   5,200.</b>
                  <br>Duration : 28 Days (50min/day)</p>
                </div>
              </div>
            </div>
             <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-camera" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">PHOTOSHOP</a></h6>
                  <p>PHOTO EDITING
                 <BR>   Fees:&nbsp;<strike>3,500</strike>.<b>   2,890.</b>
                  <br>Duration : 27 Days (45min/day)</p>
                </div>
              </div>
            </div>
             <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-modx" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">EMBEDDED</a></h6>
                  <p>ARDUINO BOARD, MICROPROCESSOR DEVICE.
                 <BR>   Fees:&nbsp;<strike>5,100</strike>.<b>   4,150.</b>
                  <br>Duration : 34 Days (45min/day)</p>
                </div>
              </div>
            </div>
             <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-hdd-o" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                 <h6><a href="#url">HARDWARE & NETWORKING.</a></h6>
                  <p>SERVICE PC
                 <BR>   Fees:&nbsp;<strike>3,800</strike>.<b>   3,140.</b>
                  <br>Duration : 22 Days (45min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-podcast" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">TALLY</a></h6>
                  <p>BILLING APPLICATION
                 <BR>   Fees:&nbsp;<strike>3,700</strike>.<b>   2,970.</b>
                  <br>Duration : 32 Days (45min/day)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-lg-0 mt-5">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <span class="fa fa-bar-chart" aria-hidden="true"></span>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="#url">WEB DESIGN</a></h6>
                  <p>HTML,CSS,BOOTSTRAP,JAVASCRIPT
                 <BR>   Fees:&nbsp;<strike>3,500</strike>.<b>   2,750.</b>
                  <br>Duration : 22 Days (40min/day)</p>
                </div>

              </div>
            </div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASK FEES FOR &nbsp;<b>HACKING &nbsp;</b>AND 50+ COURSES.        </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //services section -->
  <section class="w3l-services2">
    <div class="features-with-17_sur">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 features-with-17-left_sur">

          </div>
          <div class="col-lg-6 my-lg-0 my-5 align-self-center features-with-17-right_sur">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1">
                <span class="fa fa-laptop s4"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Response</a></h6>
                <p>Appricot's gives full support as much as possible.</p>
              </div>
            </div>
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1">
                <span class="fa fa-database s5"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">DB</a></h6>
                <p>Appricot's provide free Database page.</p>
              </div>
            </div>
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1">
                <span class="fa fa-lock s3"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Secured data</a></h6>
                <p>Client data will not leak/send from appricot's.</p>
              </div>
            </div>
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1">
                <span class="fa fa-codepen s2"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Make it Simple</a></h6>
                <p>Appricot's make education simple.</p>
              </div>
            </div>
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1">
                <span class="fa fa-mobile s3"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Different Layout</a></h6>
                <p>Data structure/layout as per skill.</p>
              </div>
            </div>
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1">
                <span class="fa fa-modx s2"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Unique design</a></h6>
                <p>Appricot's provide unique futures to clients.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Work gallery section 
  <div class="w3l-gallery2" id="gallery">
    <div class="insta-picks py-5">
      <div class="container py-lg-5">
        <h3 class="global-title">Latest Works</h3>
        <div class="row no-gutters masonry">
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g1.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="lion">
              <img src="assets/images/g1.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g2.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="camel">
              <img src="assets/images/g2.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g3.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="hippopotamus">
              <img src="assets/images/g3.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g4.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="koala">
              <img src="assets/images/g4.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g5.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="bear">
              <img src="assets/images/g5.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g6.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="rhinoceros">
              <img src="assets/images/g6.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g7.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="hippopotamus">
              <img src="assets/images/g7.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g8.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="koala">
              <img src="assets/images/g8.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 brick">
            <a href="assets/images/g9.jpg" class="js-img-viwer d-block" data-caption="There are many variations of popular graphic design"
              data-id="hippopotamus">
              <img src="assets/images/g9.jpg" class="img-fluid insta-pic" alt="insta-pic" />
              <div class="content-overlay"></div>
              <div class="content-details fadeIn-top">
                <h4>Work title here</h4>
                <p>Design</p>-->
              </div>
            </a>
          </div>
        </div>
        <div class="text-center">
          <a href="" class="follow-insta-button btn btn-secondary p-3 mt-5" target="_blank">
            Join with Us...
          </a>
        </div>
      </div>
    </div>
  </div><br><br>
  <!--  //Work gallery section -->
  <!--  Intro video popup section 
  <section class="w3l-index5" id="intro">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <h2>Imagination is more important than knowledge</h2>
          </div>
          <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center">
            <span class="video-play-icon">
              <span class="fa fa-play"></span>
            </span>
          </a>

          <!-- dialog itself, mfp-hide class is required to make dialog hidden 
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <iframe src="https://www.youtube.com/embed/oWP9Riq-ZBg" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Intro video popup section -->
  <!--  Fun facts section -->
  <section class="w3l-index2">
    <div class="main-w3 py-5" id="stats">
      <div class="container py-lg-3">
        <h3 class="global-title">Achievement</h3>
        <div class="row main-cont-wthree-fea text-center">
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-tasks" aria-hidden="true"></span>
              <h3 class="title-spe">700+</h3>
              <p>Projects Done</p>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-users" aria-hidden="true"></span>
              <h3 class="title-spe">800+</h3>
              <p> Satisfied Clients</p>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-trophy" aria-hidden="true"></span>
              <h3 class="title-spe">1</h3>
              <p>branch</p>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-4">
            <div class="grids-speci1">
              <span class="fa fa-smile-o" aria-hidden="true"></span>
              <h3 class="title-spe">1800+</h3>
              <p>referral bonus</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--  //Fun facts section -->

  <!--  Testimonials section 
  <section class="w3l-testimonials" id="testimonials">
    <div class="customers-6-content py-5">
      <div class="container py-lg-3">
        <h3 class="global-title global-white">Happy Clients Says</h3>
        <div class="customer row">
          <div class="col-lg-4 col-md-6 mt-md-3 mt-3">
            <div class="card">
              <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
              <h3 class="card-title">Elizabeth</h3>
              <div class="card-body">
                <span class="fa fa-quote-left" aria-hidden="true"></span>
                <p class="card-text">Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                  consectetur
                  adipisicing elit.Ea consequuntur illum facere.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-3 mt-5">
            <div class="card">
              <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
              <h3 class="card-title">Gregory Eric</h3>
              <div class="card-body">
                <span class="fa fa-quote-left" aria-hidden="true"></span>
                <p class="card-text">Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                  consectetur
                  adipisicing elit.Ea consequuntur illum facere.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-md-3 mt-5">
            <div class="card">
              <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
              <h3 class="card-title">Kimberly</h3>
              <div class="card-body">
                <span class="fa fa-quote-left" aria-hidden="true"></span>
                <p class="card-text">Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                  consectetur
                  adipisicing elit.Ea consequuntur illum facere.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //Testimonials section -->
 <!-- Contact section 
  <section class="w3l-contact py-5" id="contact">-->
    <div class="container py-lg-3">



      <h3 class="global-title">Contact Us : </h3>
      <!--<div class="row">
        <div class="col-md-8 contact-form">
          <form action="index.php" method="post">
            <input type="text" class="form-control" name="first_name" placeholder="Name" /><br />
            <input type="email" class="form-control" name="email" placeholder="E-mail" /><br />
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" /><br />
            <textarea class="form-control" name="message" placeholder="Your Message" style="height:150px;"></textarea><br />
            <button class="btn btn-primary theme-button" type="submit">Send</button>
          </form>
        </div>-->
        <div class="col-md-4 mt-md-0 mt-5 w3-contact-address">
          <b>Address:</b>
          <p>No-5,6, Sai plaza, </p>
          <p>Near to moongampadi govt.girls hr.sec.school, </p>
          <p>Causeway rd,</p>
          <p>Gugai,salem - 6.</p>
          <br />
          <b>Phone:</b>
          <p><a href="tel:+91-8973385407">+91-897-33-85407</p>
          <!--<p><a href="tel:+11-22-55-66-06">+11-22-55-66-0</p>-->
          <br />
          <b>Email:</b>
          <p><a href="mailto:appricots@appricots.in">appricots@appricots.in</a></p>
          <p><a href="mailto:karthickraja@appricots.in">karthickraja@appricots.in</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- //Contact section -->
  <!-- freelance hire me 
  <section class="w3l-grid-quote py-5">
    <div class="container py-lg-3">
      <h6>I'am available for freelance projects.</h6>
      <h3>Let's work together indeed!</h3>
      <a href="#contact" class="btn btn-primary theme-button">Get quotes</a>
      <a href="#url" class="btn btn-outline-primary theme-button ml-2">Hire me</a>
    </div>
  </section>
  <!-- //freelance hire me -->
  <!-- Footer -->
  <footer class="w3l-footer">
    <div id="footers14-block" class="py-3">
      <div class="container">
        <div class="footers14-bottom text-center">
          <div class="social">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
          </div>
          <div class="copyright mt-1">
            <p>© 2020 appricot's All Rights Reserved | Design by <a href="https://www.appricots.in">Appricot's</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

  </footer>
  <!-- Footer -->

  <!-- jQuery and Bootstrap JS -->
  <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template JavaScript -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <script src="assets/js/smartphoto.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sm = new SmartPhoto(".js-img-viwer", {
        showAnimation: false
      });
      // sm.destroy();
    });
  </script>


</body>

</html>