<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezaa.com/html/resume/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 14:09:38 GMT -->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title>Andrew Smith - Responsive Resume / Personal Portfolio Template</title>
<link rel="shortcut icon" href="favicon.ico">

<!-- Google Font-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' rel='stylesheet' type='text/css'>
<!-- Design Style -->
<link rel="stylesheet" type="text/css" href="css/scroll.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- Icon -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<!-- Portfolio Thumbnail / Slider -->
<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
<link rel="stylesheet" type="text/css" href="css/carousel.css">
<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<!-- Pie Chart / Skills -->
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<!-- Send Email -->
<script type="text/javascript" src="js/sendemail.js"></script>
<!-- Progressbar / Skills-->
<script type="text/javascript" src="js/progressbar.js"></script>
<!-- Portfolio-->
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<div id="container" class="container"> 
  <!-- Left Menu / Logo-->
  <aside class="menu" id="menu">
    <div class="logo"> 
      <!-- Logo image--> 
      <img src="images/logo.png" width="140" height="140" alt=""/> 
      <!-- Logo name--> 
      <span>Andrew Smith</span></div>
    <!-- Mobile Navigation--> 
    <a href="#menu1" class="menu-link"></a> 
    <!-- Left Navigation-->
    <nav id="menu1" role="navigation"> <a href="#chapterintroduction"><span id="link_introduction" class="active">Home</span></a> <a href="#chapterabout"><span id="link_about">About</span></a> <a href="#chapterskills"><span id="link_skills">CLASSES</span></a> <a href="#chapterexperience"><span id="link_experience">LESSONS</span></a> <a href="#chaptereducation"><span id="link_education">PRICING</span></a> <a href="#chapterportfolio"><span id="link_portfolio">Stories</span></a><a href="#chaptercontact">
      
      <span id="link_contact">Contact</span></a><a href="blog.html"><span id="link_blog">Blog</span></a></nav>
    <div class="social"> <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a> <a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a> </div>
    <div class="copyright"> © IT Samurai.<br>
      All Rights Reserved. </div>
  </aside>
  <!-- Go to top link for mobile device --> 
  <a href="#menu" class="totop-link">Go to the top</a>
  <div class="content-scroller">
    <div class="content-wrapper"> 
      
      <!-- Introduction -->
      <article class="content introduction noscroll" id="chapterintroduction">
        <div class="inner">
          <h2><span>Join the Millions, </span><br>
            Learn Technology</h2>
          <span class="title">THE ISLAND'S FIRST & BEST ONLINE ICT CLASSROOM </span> 
          <br />    <br />   
          <h4><span class="subtitle">We’re a nonprofit with the mission to provide a free, world-class education for anyone, anywhere.</h4>
        </div>

        <div id="owl-demo" class="owl-carousel">
          <div class="item"><img src="images/profile.jpg" alt="" /></div>
          <div class="item"><img src="images/profile-01.jpg" alt="" /></div>
          <div class="item"><img src="images/profile-02.jpg" alt="" /></div>
        </div>
      </article>
      
      <!-- About -->
      <article class="content about white-bg" id="chapterabout">
        <div class="inner">
          <h2>About IT Samurai</h2>
          <div class="title-divider"></div>
          <div class="about-con">
          	<!-- <ul>
          		<li>Name: Andrew Smith</li>
          		<li>Email: <a href="mailto:andrew@gmail.com">andrew@gmail.com</a></li>
          		<li>Phone: (123) - 456-7890</li>
          		<li>Date of birth: 23 February 1986</li>
          		<li>Address: PO Box 16122 Collins Street West, Victoria, USA.</li>
          		<li>Nationality: United States</li>
          	</ul>
 -->
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">
                  <h3>JOIN NOW & BE A SAMURAI</h3>
                  <form id="form1" name="form1" method="post" >

                  	<div class="form-group">
                  		<input name="name" type="text" id="name" placeholder="Your Name... " />
                  	</div>
                  	<div class="form-group">
                  		<input name="name" type="text" id="name" placeholder="Your Contact Number..." />
                  	</div>
                  	<div class="form-group">
                  		<input name="name" type="text" id="name" placeholder="Your NIC no..." />
                  	</div>
                  	<div class="form-group">
                  		<input name="email" type="text" id="email" placeholder="Your Email..." />
                  	</div>

                  	<div class="control-group source-container" style="display: none;">
                  		<label class="control-label" for="inputEmail">Journey Start From :</label>
                  		<div class="controls">
                  			<input type="text" id="fromAddress" name="from" class="input-xlarge" value="Colombo, Sri Lanka">
                  		</div>
                  	</div>
                  	<div class="form-group" style="width: 50%">
                  		<input type="text" id="toAddress" name="city" class="input-xlarge form-control unicase-form-control text-input" value="" placeholder="Nearest City..." style="width: -webkit-fill-available;">
                  		<input type="hidden" id="distance" name="distance" name="to" class="input-xlarge form-control unicase-form-control text-input" value="">
                  	</div>
                  	<div id="locations"style="display: none;"></div>

                  	<div id="mapModal" class="well" style="display: none;">
                  		<div id="map_area">
                  			<div id="map_canvas"></div>
                  			<div id="directions"></div>
                  		</div>
                  	</div>
                  	<div class="form-group" style="width: 50%">
                  		<select style="width: -webkit-fill-available; height:49px;">
                  			<option>Kurunegala</option>
                  			<option>Kurunegala</option>
                  			<option>Kurunegala</option>
                  		</select>
                  	</div>
                  	<div class="form-group">
                  		<input type="submit" name="button" id="button" value="Register Now!" style="width: -webkit-fill-available;">
                  	</div>
                  	<div id="successmsg" ></div>
                  </form>
                </div>
              </div>
            </div>




            <h3>ABOUT US</h3>
            <p>IT Samurai is an education company. But not one in the way you might think. We’re committed to building the best learning experience inside and out, making Codecademy the best place for our team to learn, teach, and create the online learning experience of the future. Education is old. The current public school system in the Sri Lanka dates back to the 19th century and wasn’t designed to scale the way it has. Lots of companies are working to “disrupt” education by changing the way things work in the classroom and by bringing the classroom online.<br>
            </p>

             <h3>OUR MISSION</h3>
            <p>We’re not one of those companies. We are rethinking education from the bottom up. The web has rethought nearly everything - commerce, social networking, healthcare, and more. We are building the education the world needs - the first truly net native education. We take more cues from modern tech innovators in creating an engaging educational experience than we do from the classroom. Education is broken. Come help us build the education the world deserves.<br>
            </p>

              <h3>From humble beginnings to a world-class team</h3>
            <p>What started as one man tutoring his cousin has grown into a more than 150-person organization. We’re a diverse team that has come together to work on an audacious mission: to provide a free world-class education for anyone, anywhere. We are developers, teachers, designers, strategists, scientists, and content specialists who passionately believe in inspiring the world to learn. A few great people can make a big difference.<br>
            </p>


            <a href="#" class="button">Download resume as PDF format</a> <img src="images/signature.jpg" class="signature" alt=""/> </div>
        </div>
      </article>
      
      <!-- Classes -->
      <article class="content skills gray-bg" id="chapterskills">
        <div class="inner">
          <h2>CLASSES</h2>
          <div class="title-divider"></div>
          <h3>Learn from Home</h3>
          <p>With people stuck at home, schools closed around the world, and the global economy changing rapidly, we’re doing everything we can to make sure learning doesn’t stop. Here, you’ll find all the programs and resources we’ve created to help our learners.</p>
          <div class="skills-con">
            <div class="container-sub margin-top50">
              <div class="row">
                <div class="col-6 margin-bottom50">
                  <div class="col-6"><span class="chart" data-percent="75"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>A/L ICT</h4>
                    <p>2020, Theory</p>
                  </div>
                </div>
                <div class="col-6 margin-bottom50">
                  <div class="col-6"><span class="chart" data-percent="88"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>A/L ICT</h4>
                    <p>2021, Theory</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-6"><span class="chart" data-percent="90"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>O/L ICT</h4>
                    <p>2020, Theory</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-6"><span class="chart" data-percent="96"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>O/L ICT</h4>
                    <p>2021, Theory</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="full-divider"></div>
            <div class="container-sub skill-list">
              <div class="row">
                <h3>Knowledge</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Concept of ICT</li>
                    <li>Introduction to Computer</li>
                    <li>Data Representation</li>
                    <li>Fundamentals of Digital Circuits</li>
                  </ul>
                </div>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Operating Systems</li>
                    <li>Computer Networking</li>
                    <li>System Analysis & Design</li>
                    <li>Database Management</li>
                  </ul>
                </div>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Programming</li>
                    <li>Web Development</li>
                    <!-- <li>Portrait Retouching</li>
                    <li>Video Editing</li> -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <h3>Language Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="progressbar-main margin-top50">
                  <div class="progress-bar-description">English Experienced</div>
                  <div id="progressBar" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">French Advanced</div>
                  <div id="progressBar2" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">German Basic</div>
                  <div id="progressBar3" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>

              </div>
              <div class="row">
                <h3>Language Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
                <div class="progressbar-main margin-top50">
                  <div class="progress-bar-description">English Experienced</div>
                  <div id="progressBar" class="progress">
                    <div class="progress-value">
                      <span>99</span>
                    </div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">French Advanced</div>
                  <div id="progressBar2" class="progress">
                    <div class="progress-value">
                      <span>99</span>
                    </div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">German Basic</div>
                  <div id="progressBar3" class="progress">
                    <div class="progress-value">
                      <span>99</span>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </article>
      
      <!-- Experience -->
      <article class="content experience white-bg" id="chapterexperience">
        <div class="inner">
          <h2>Lessons</h2>
          <div class="title-divider"></div>
          <h3>Choose a lesson and learn - ADVANCED LEVEL</h3>
          <p>Thousands of students from all over Sri Lanka, each with their own unique story, learn at their own pace on IT Samurai every single day. The lessons are being teached by both the English & Sinahala languages which is great for any student who studies with any medium.</p>
          <div class="experience-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-send-o"></i></div>
                    <div class="flot-left">
                      <h5>Programming with</h5>
                      <h4>Python</h4>
                      <span>2014 - 2013</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-briefcase"></i></div>
                    <div class="flot-left">
                      <h5>HTML CSS PHP</h5>
                      <h4>Web Development</h4>
                      <span>2013 - 2011</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-arrows-alt"></i></div>
                    <div class="flot-left">
                      <h5>ER MYSQL NORMALIZATION</h5>
                      <h4>Database Systems</h4>
                      <span>2011 - 2008</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-quote-right"></i></div>
                    <div class="flot-left">
                      <h5>DATA COMMUNICATION &</h5>
                      <h4>Networking</h4>
                      <span>2008 - 2006</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-bullhorn"></i></div>
                    <div class="flot-left">
                      <h5>COMPUTER</h5>
                      <h4>operating systems</h4>
                      <span>2006 - 2004</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
          <div class="title-divider"></div>
          <h3>Choose a lesson and learn</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="experience-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-send-o"></i></div>
                    <div class="flot-left">
                      <h5>Panara Media</h5>
                      <h4>Programming</h4>
                      <span>2014 - 2013</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-briefcase"></i></div>
                    <div class="flot-left">
                      <h5>Ace Advertising</h5>
                      <h4>Information Systems</h4>
                      <span>2013 - 2011</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-arrows-alt"></i></div>
                    <div class="flot-left">
                      <h5>Linksture Web</h5>
                      <h4>Web Designing</h4>
                      <span>2011 - 2008</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-quote-right"></i></div>
                    <div class="flot-left">
                      <h5>Matrix Media</h5>
                      <h4>Networking</h4>
                      <span>2008 - 2006</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-bullhorn"></i></div>
                    <div class="flot-left">
                      <h5>Creatika Agency</h5>
                      <h4>operating systems</h4>
                      <span>2006 - 2004</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
          <div class="title-divider"></div>
          <h3>Choose a lesson and learn - ORDINARY LEVEL</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="experience-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-send-o"></i></div>
                    <div class="flot-left">
                      <h5>Panara Media</h5>
                      <h4>Python</h4>
                      <span>2014 - 2013</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-briefcase"></i></div>
                    <div class="flot-left">
                      <h5>Ace Advertising</h5>
                      <h4>Web Development</h4>
                      <span>2013 - 2011</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-arrows-alt"></i></div>
                    <div class="flot-left">
                      <h5>Linksture Web</h5>
                      <h4>Database Systems</h4>
                      <span>2011 - 2008</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-quote-right"></i></div>
                    <div class="flot-left">
                      <h5>Matrix Media</h5>
                      <h4>Networking</h4>
                      <span>2008 - 2006</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-bullhorn"></i></div>
                    <div class="flot-left">
                      <h5>Creatika Agency</h5>
                      <h4>operating systems</h4>
                      <span>2006 - 2004</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      
      <!-- Education -->
      <article class="content education gray-bg" id="chaptereducation">
        <div class="inner">
          <h2>PRICING </h2>
          <div class="title-divider"></div>
          <h3>Just My Education</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="education-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-photo"></i></div>
                    <div class="flot-left">
                      <h5>A/L THEORY</h5>
                      <h4>RS. 2000/=</h4>
                      <span>Monthly Fee</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>A/L CHOOSE A LESSON</h5>
                      <h4>RS.3500/=</h4>
                      <span>Lesson Fee</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-life-bouy"></i></div>
                    <div class="flot-left">
                      <h5>A/L Revision</h5>
                      <h4>RS.1000/=</h4>
                      <span>Monthly Fee</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
          <h3>FOR O/L ICT STUDENTS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="education-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-photo"></i></div>
                    <div class="flot-left">
                      <h5>O/L THEORY</h5>
                      <h4>RS. 1000/=</h4>
                      <span>Monthly Fee</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>O/L CHOOSE A LESSON</h5>
                      <h4>RS.2000/=</h4>
                      <span>Lesson Fee</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-life-bouy"></i></div>
                    <div class="flot-left">
                      <h5>O/L Revision</h5>
                      <h4>RS.800/=</h4>
                      <span>Monthly Fee</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Phasellus nec gravida purus. Aliquam ac enim vel ipsum consectetur vulputate. Duis quis feugiat neque. Pellentesque eleifend, nisi vel mattis vestibulum, est lacus pretium quam. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      
      <!-- Pportfolio -->
      <article class="content portfolio white-bg" id="chapterportfolio">
      	<div class="inner">
      		<h2>STORIES</h2>
      		<div class="title-divider"></div>
      		<h3>Over thousands of Students have been impacted by IT Samurai, <br /> and they continue to inspire us every day.</h3>
      		<p></p>

      		<div id="comments" class="comments-main">
      			<div class="comments-details">
      				<div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="images/team-01.jpg" alt="" class="media-object"> </a> <span class="name">Ray Michael</span><span class="date light-gray">September 05th, 2014</span><a class="button small-button" href="javascript:void(0)">Ray Michael</a></div>
      				<div class="comments-text">Khan Academy has changed my life by so much. I mostly practice on The World of Math. I was amazed by how good this website was. I was failing in my first marking period in Math. Now this website has helped me so much. I am so good at Math and it has improved my work by a lot.

      				</div>
      			</div>
      			<div class="comments-details ">
      				<div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="images/team-02.jpg" alt="" class="media-object"> </a> <span class="name">Kristi Hines</span><span class="date light-gray">August 13th, 2014</span><a class="button small-button" href="javascript:void(0)">Kristi Hines</a></div>
      				<div class="comments-text">Dear Khan Academy, I greatly appreciate your videos! Not only did I pass Calculus last year with a 96% , but I also discovered my love for the subject- something I had never experienced before truly understanding the mathematical content and the uses of it.</div>
      			</div>

      			<div class="comments-details">
      				<div class="comments-name"> <a href="javascript:void(0)" class="pull-left"> <img src="images/team-03.jpg" alt="" class="media-object"> </a> <span class="name">Ray Michael</span><span class="date light-gray">August 15th, 2014</span><a class="button small-button" href="javascript:void(0)">Post Reply</a></div>
      				<div class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. Sed quis dolor et orci feugiat vulputate. Vivamus nec felis pharetra, iaculis dolor ut, imperdiet ex. Nulla elementum quam id nulla luctus tempor sed sed velit. Nam sed libero at lectus consectetur accumsan vitae non enim. Duis nec massa arcu. Cras fringilla ex eget consequat luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper congue tellus at blandit. </div>
      			</div>
      		</div>

      		<div class="portfolio-con">
      			<div class="container-sub margin-top50">
      				<div class="row">
      					<div id="grid-gallery" class="grid-gallery">
      						<section class="grid-wrap">
      							<ul class="grid">
      								<li>
      									<figure> <img src="images/work1.jpg" alt=""/>
      										<figcaption>
      											<div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
      												<h3>The Flavour Restaurant</h3>
      												<span>Website Design & Development</span>
      											</div>
      										</figcaption>
      									</figure>
      								</li>
      								<li>
      									<figure> <img src="images/work2.jpg" alt="" />
      										<figcaption>
      											<div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
      												<h3>Herbal Beauty Salon</h3>
      												<span>Photography</span>
      											</div>
      										</figcaption>
      									</figure>
      								</li>
      								<li>
      									<figure> <img src="images/work3.jpg" alt="" />
      										<figcaption>
      											<div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
      												<h3>Kayra Modelleri</h3>
      												<span>Branding and Identity</span>
      											</div>
      										</figcaption>
      									</figure>
      								</li>
      								<li>
      									<figure> <img src="images/work4.jpg" alt="" />
      										<figcaption>
      											<div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
      												<h3>Fashion and You</h3>
      												<span>APPS and Web Design</span>
      											</div>
      										</figcaption>
      									</figure>
      								</li>
      								<li>
      									<figure> <img src="images/work5.jpg" alt="" />
      										<figcaption>
      											<div class="figcaption-details"> <img src="images/icon-plus.png" height="82" width="82" alt="" />
      												<h3>Whole Food Flour</h3>
      												<span>Branding and Identity</span>
      											</div>
      										</figcaption>
      									</figure>
      								</li>
      							</ul>
      						</section>

      						<!-- Lightbox Popup -->
      						<section class="slideshow">
      							<ul>
      								<li>
      									<figure>
      										<figcaption>
      											<h3>The Flavour Restaurant</h3>
      											<span>Website Design & Development</span>
      											<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, 						ullamco craft beer.</p>
      										</figcaption>
      										<div id="owl-demo1" class="owl-carousel">
      											<div class="item"><img src="images/work-details1.jpg" alt="" /></div>
      											<div class="item"><img src="images/work-details2.jpg" alt="" /></div>
      											<div class="item"><img src="images/work-details3.jpg" alt="" /></div>
      											<div class="item"><img src="images/work-details4.jpg" alt="" /></div>
      											<div class="item"><img src="images/work-details5.jpg" alt="" /></div>
      										</div>
      									</figure>
      								</li>
      								<li>
      									<figure>
      										<figcaption>
      											<h3>Herbal Beauty Salon</h3>
      											<span>Photography</span>
      											<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
      										</figcaption>
      										<img src="images/work2.jpg" alt="" />
      									</figure>
      								</li>
      								<li>
      									<figure>
      										<figcaption>
      											<h3>Kayra Modelleri</h3>
      											<span>Branding and Identity</span>
      											<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
      										</figcaption>
      										<div id="owl-demo2" class="owl-carousel">
      											<div class="item"><img src="images/work3.jpg" alt="" /></div>
      											<div class="item"><img src="images/work1.jpg" alt="" /></div>
      											<div class="item"><img src="images/work2.jpg" alt="" /></div>
      											<div class="item"><img src="images/work4.jpg" alt="" /></div>
      											<div class="item"><img src="images/work5.jpg" alt="" /></div>
      										</div>
      									</figure>
      								</li>
      								<li>
      									<figure>
      										<figcaption>
      											<h3>Fashion and You</h3>
      											<span>APPS and Web Design</span>
      											<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
      										</figcaption>
      										<iframe width="854" height="480" src="http://www.youtube.com/embed/ZwzY1o_hB5Y" frameborder="0" allowfullscreen></iframe> 
      									</figure>
      								</li>
      								<li>
      									<figure>
      										<figcaption>
      											<h3>Whole Food Flour</h3>
      											<span>Branding and Identity</span>
      											<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
      										</figcaption>
      										<img src="images/work5.jpg" alt="" />
      									</figure>
      								</li>
      							</ul>
      							<nav> <span class="fa nav-prev"></span> <span class="fa nav-next"></span> <span class="fa nav-close"></span> </nav>
      						</section>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </article>

    
      
      <!-- Contact -->
      <article class="content contact gray-bg" id="chaptercontact">
        <div class="inner">
          <h2>Contact</h2>
          <div class="title-divider"></div>
          <h3>Let's Keep In Touch</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit. Quisque varius eros ac purus dignissim.</p>
          <div class="full-divider"></div>
          <div class="contact-con margin-top50">
            <div class="container-sub">
              <div class="row">
                <div class="contact-details">
                  <div class="col-6">
                    <div class="contact-text">
                      <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i></div>
                      <div class="flot-left"> <strong>Andrew Smith</strong><br>
                        PO Box 16122 Collins Street West,<br>
                        Victoria 8007, United States. 
                    </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block phone"><i class="fa fa-phone"></i></div>
                      <div class="flot-left"> <strong>Phone</strong><br>
                        +94-70-204-5894 </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                      <div class="flot-left"> <strong>Email</strong><br>
                        <a href="mailto:no-reply@domain.com">itsamurailk@gami.com</a> </div>
                    </div>
                  </div>
                  <div class="col-6 m-margin-top30">
                    <h3>I'm also on Social Networks</h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.
                    <div class="contact-social margin-top30"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">
                  <h3>Drop Me a Line</h3>
                  <form id="form1" name="form1" method="post" >
                    <input name="name" type="text" id="name" placeholder="Your Name..." />
                    <input name="email" type="text" id="email" placeholder="Your Email..." />
                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Your Message..."></textarea>
                    <input type="submit" name="button" id="button" value="say hello!" >
                    <div id="successmsg" ></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      
      <!-- Introduction -->
      <article class="content introduction-end" id="chapterthankyou">
        <div class="inner">
          <div class="introduction-end-con margin-top50">
            <h3><strong>Andrew Smith</strong></h3>
            <div id="rotate" class="rotate">
              <div><span>awesome.</span></div>
              <div><span>invincible.</span></div>
              <div><span>unbeatable.</span></div>
              <div><span>indestructible.</span></div>
            </div>
          </div>
        </div>
      </article>
    </div>
    <!-- content-wrapper --> 
  </div>
  <!-- content-scroller --> 
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&key=AIzaSyAuWch6HsB-2Xj_a7gr0VpM-JJNOrLdMtE"></script>
<script type="text/javascript" src="assets/distence/main.js"></script>
<script type="text/javascript" src="js/head.min.js"></script>
<!-- Portfolio Thumbnail --> 
<script type="text/javascript" src="js/imagesloaded.min.js"></script> 
<script type="text/javascript" src="js/masonry.min.js"></script> 
<script type="text/javascript" src="js/class_helper.js"></script> 
<script type="text/javascript" src="js/grid_gallery.js"></script> 
<!-- Portfolio Grid --> 
<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<!-- Portfolio Slider--> 
<script type="text/javascript"  src="js/carousel.js"></script> 
<script type="text/javascript" src="js/jquery.easypiechart.js"></script> 
<script type="text/javascript" src="js/text.rotator.js"></script>
<!-- Page Scrolling --> 
<script>
head.js(
		{ mousewheel : "js/jquery.mousewheel.js" },
		{ mwheelIntent : "js/mwheelIntent.js" },
		{ jScrollPane : "js/jquery.jscrollpane.min.js" },
		{ history : "js/jquery.history.js" },
		{ stringLib : "js/core.string.js" },
		{ easing : "js/jquery.easing.1.3.js" },
		{ smartresize : "js/jquery.smartresize.js" },
		{ page : "js/jquery.page.js" }
		);
</script>  
<!-- Fit Video --> 
<script type="text/javascript"  src="js/jquery.fitvids.js"></script>
<!-- All Javascript Component--> 
<script src="js/settings.js"></script>
</body>

<!-- Mirrored from themezaa.com/html/resume/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 14:10:48 GMT -->
</html>