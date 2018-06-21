<?php
include("layout/header.php");
include("layout/c794bc6c9a3eccc2.php");
?>

<body>
<!-- preloader -->
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader -->
<!-- navigation -->
  <header id="nav-bar" class="header-main-block nav-bar fixed-top page-nav">
    <div class="container">
      <div class="row">
        <div class="col-xs-3 pad-0">
          <div class="logo">
            <a href="index.html" title="Logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-xs-9 text-right">
          <div class="menu-btn">
            <a href="#" onclick="openNav()" title="Menu"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
      <nav id="site-nav" class="nav-overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="nav-overlay-content">
          <li class="nav-label">Menu</li>
          <li><a href="#" title="About">About</a></li>
          <li><a href="#" title="Services">Services</a></li>
          <li class="nav-label">Utilities</li>
          <li><a href="mx.php" title="XMRMiner">XMR Miner</a></li>
          <li><a href="#" title="Downloads">Downloads</a></li>
          <li><a href="#" title="MemberArea">Member Area</a></li>
          <li class="nav-label">Contact</li>
          <li class="active"><a href="#" title="Contact">Contact</a></li>
        </ul>
        <div class="nav-social text-center">
          <div class="nav-label">Follow Us</div>
          <ul>
            <li><a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.dribbble.com/" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>     
  </header>
<!-- end navigation -->
<!-- contact info -->
  <section id="contact-info" class="contact-info-main-block">
    <div class="container-fluid">
      <div class="contact-info-main">
        <div class="row">
          <div class="col-md-1 d-none d-sm-block">
            <div class="blog-sidebar">
              <div class="sidebar-text">Contact</div>
            </div>
          </div>
          <div class="col-lg-9 col-md-10 ml-md-auto mr-lg-auto">
            <div class="contact-info services-about">
              <div class="section">
                <h4 class="about-sub-heading">Contact Form</h4>
                <h3 class="about-heading">Somewhere between digital strategy, product design &amp; agile development</h3>
              </div>
              <div class="contact-main about-main" data-aos="zoom-in-down">
                <div class="row">
                  <div class="col-lg-5 ml-lg-auto">
                    <div class="about-block">
                      <div class="about-dtl-heading-block">
                        <h4 class="about-dtl-heading">Headquarter and factory</h4>
                      </div>
                      <p>John Doe, Comapny Inc. 12345 South Main Street Anywhere, USA</p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="about-block about-block-two contact-dtl">
                      <ul>
                        <li>Phone: <a href="tel:#" title="Phone"> 1.800.555.6789</a></li>
                        <li>Fax: <a href="tel:#" title="Phone"> 1.888.555.9876</a></li>
                        <li>Email: <a href="mailto:#" title="Email">info@digital.com</a></li>
                        <li>Website: <a href="#" title="Email">www.example.com</a></li>
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
  </section>
<!-- end contact info -->
<!-- contact map -->
  <section id="contact-map" class="contact-map-main-block">
    <div class="container-fluid">
      <div class="contact-map-main">
        <div class="row">
          <div class="col-md-1 pad-rt-0 d-none d-sm-block">
            <div class="blog-sidebar">
              <div class="sidebar-text"><span>Find us on map</span></div>
            </div>
          </div>
          <div class="col-lg-11 pad-lt-0 pad-rt-0">
            <div class="contact-us-banner" data-aos="fade-in-top">
              <div id="location" class="map-banner"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end contact map -->
<!-- contact form -->
  <section id="contact-form-main" class="contact-form-main-block">
    <div class="container-fluid">
      <div class="contact-info-main">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-lg-6 col-md-10">
            <form id="contact-form" class="contact-form comment-form" method="post" action="contact-us.php" >
              <div class="contact-form-block" data-aos="zoom-in-down">
                <h3 class="contact-form-heading">what is your request?</h3>
                <div class="contact-form-dtl checkbox-block">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 ml-lg-auto">
                      <input type="checkbox" id="request-1" name="request-1" value="Request Samples" class="form-check-input">Request Samples<sup>*</sup>
                    </div>
                    <div class="col-lg-4 col-md-6">
                      <input type="checkbox" id="request-2" name="request-2" value="Join Us" class="form-check-input">Join Us
                    </div>
                    <div class="col-lg-5 col-md-6 ml-lg-auto">
                      <input type="checkbox" id="request-3" name="request-3" value="Become A Distributor" class="form-check-input">Become a distributor
                    </div>
                    <div class="col-lg-4 col-md-6">
                      <input type="checkbox" id="request-4" name="request-4" value="Other" class="form-check-input">Other
                    </div>
                    <div class="col-lg-5 col-md-6 pad-lt-0 ml-lg-auto">
                      <div class="form-msg"><sup>*</sup> Sample request only for professionals</div>
                    </div>
                    <div class="col-lg-4"></div>
                  </div>
                </div>
              </div>
              <div class="contact-form-block" data-aos="zoom-in-down">
                <h3 class="contact-form-heading">Your Details</h3>
                <div class="contact-form-dtl">
                  <div class="row">
                    <div class="col-lg-10 ml-lg-auto">
                      <div class="form-group">
                        <input type="text" id="company" name="company" class="form-control" placeholder="Company" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-6 ml-lg-auto">
                      <div class="form-group">
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                      <div class="form-group">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                    <div class="col-lg-10 ml-lg-auto">
                      <div class="form-group">
                        <input type="text" id="address" name="address" class="form-control" placeholder="Address">
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-6 ml-lg-auto">
                      <div class="form-group">
                        <input type="text" id="city" name="city" class="form-control" placeholder="City" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                      <div class="form-group">
                        <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip code" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                    <div class="col-lg-10 ml-lg-auto">
                      <div class="form-group">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Telephone" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                    <div class="col-lg-10 ml-lg-auto">
                      <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                        <div class="red-star">*</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact-form-block" data-aos="zoom-in-down">
                <h3 class="contact-form-heading">Your Message</h3>
                <div class="contact-form-dtl">
                  <div class="row">
                    <div class="col-lg-10 ml-lg-auto">
                      <div class="form-group">
                        <textarea class="form-control" id="message" name="message" placeholder="Write your message"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-10 ml-lg-auto">
                      <div class="submit-btn">
                        <div class="btn-bg">
                          <img src="images/bg/btn-bg.png" alt="button-bg">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end contact form -->
<!--  info -->
  <section id="info" class="info-main-block text-center">
    <div class="container">
      <div class="info-block" data-aos="zoom-in-down">
        <div class="info-icon">
          <img src="images/icons/logo-icon.png" alt="logo-icon">
        </div>
        <h1 class="info-heading">We Make Good Shit</h1>
      </div>
    </div>
  </section>
<!--  end contact form -->
<!--  footer -->
  <footer id="footer" class="footer-main-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="footer-logo-block">
            <div class="footer-logo">
              <img src="images/icons/logo-icon.png" alt="logo-icon">
            </div>
            <div class="footer-logo-text">&copy; Digital Agency 2017</div>
          </div>
        </div>
        <div class="col-lg-6 col-md-8 ml-md-auto">
          <div class="footer-dtl">
            <div class="social-icons">
              <ul>
                <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.dribbble.com/" target="_blank" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="footer-text">
              <p>Lorem Ipsum has been the industry's standard dummy text ever since when an unknown printer took a galley of type &amp; scrambled it to make a type specimen book.</p>
            </div>
            <div class="copyright-text">
              <p>© 2017 All Rights Reserved by MEDIA CITY</p>
            </div>
            <div class="copyright-icon">
              <img src="images/icons/mc-icon.png" alt="Media City Icon">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--  end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.countdown.js"></script> <!-- countdown js -->
<script type="text/javascript" src="js/aos.js"></script> <!-- animate on scroll js -->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->
<script>
  function openNav() {
    document.getElementById("site-nav").style.height = "100%";
  }

  function closeNav() {
    document.getElementById("site-nav").style.height = "0%";
  }
</script>
<script>
  $(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
  });
  function initialize(){
    var myLatLng = {lat: 25.3500, lng: 74.6333}; // Insert Your Latitude and Longitude For Footer Wiget Map
    var mapOptions = {
      center: myLatLng, 
      zoom: 15,
      disableDefaultUI: true,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    // For Footer Widget Map
    var map = new google.maps.Map(document.getElementById("location"), mapOptions);
    var image = 'images/icons/map.png';
    var beachMarker = new google.maps.Marker({
      position: myLatLng, 
      map: map,   
      icon: image
    });    
  }
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>
