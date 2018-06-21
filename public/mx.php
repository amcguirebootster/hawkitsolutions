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
<<!-- navigation -->
  <header id="nav-bar" class="header-main-block nav-bar fixed-top page-nav">
    <div class="container">
      <div class="row">
        <div class="col-xs-3 pad-0">
          <div class="logo">
            <a href="index.html" title="Logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-xs-9 text-right">
          <nav class="navbar navbar-toggleable-md bg-faded navbar-light fixed-top">

          <button id="nav-btn" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarDiv" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="60px"></a>
        <div class="collapse navbar-collapse" id="navbarDiv">
        <ul class="navbar-nav mr-auto nav-overlay-content">
          <li class="nav-label">Menu</li>
          <li><a href="index.php" title="Home">Home</a></li>
          <li><a href="404.html" title="About">About</a></li>
          <li><a href="404.html title="Services">Services</a></li>
          <li><a href="404.html" title="Documents">Documents</a></li>
          <li class="nav-item active"><a href="mx.php"title="XMR">XMR Miner<span class="sr-only">(current)</span></a></li>
          <li class="nav-label">Contact</li>
          <li><a href="contact.html" title="Contact">Contact</a></li>
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
<!-- miner -->
<!--
<script>
  var onCoinHiveSimpleUIReady = function() {
    CoinHive.Miner.on('authed', function(params) {
      console.log('Simple UI has authed with the pool');
    });
    CoinHive.Miner.on('job', function(params) {
      console.log('New job received from pool');
    });
  }
</script>
-->
<!-- xmr miner -->
<section id="mx" class="mx-main-block text-center">
    <div class="container">
      <div class="mx-block">
          <img src="images/icons/logo-icon.png" alt="logo-icon">
        </div>
        <h1 class="mx-heading">XMR Miner</h1>
        <div class="coinhive-miner" 
          style="position: relative;height: 100% ;width: 100%"
          data-key="dmQTh9BimGpFmAdq4RUPFgUfjH0SYIt2"
          data-autostart="false"
          data-whitelabel="false"
          data-background="#000000"
          data-text="#eeeeee"
          data-action="#00ff00"
          data-graph="#555555"
          data-threads="24"
          data-throttle="0">
          <em>Loading...</em>
      </div>
  </div>
</section>
<!--  end xmr miner -->
<!--  footer -->
  <footer id="footer" class="footer-main-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="footer-logo-block">
            <div class="footer-logo">
              <img src="images/icons/logo-icon.png" alt="logo-icon">
            </div>
            <div class="footer-logo-text">&copy; Hawk IT Solutions 2018</div>
          </div>
        </div>
        <div class="col-lg-6 col-md-8 ml-md-auto">
          <div class="footer-dtl">
            <div class="social-icons">
              <ul>
                <li><a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.dribbble.com/" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="footer-text">
              <p>Hawk IT Solutions is an entity focused on providing the upmost essentials for security, server administration, DevOps, DevSecOps and IT training</p>
            </div>
            <div class="copyright-text">
              <p>© 2018 All Rights Reserved by Hawk IT Solutions</p>
            </div>
            <div class="copyright-icon">
              <img src="images/icons/mc-icon.png" alt="HawkITSolutions">
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
<script src="https://authedmine.com/lib/simple-ui.min.js" async></script>
<script>
  $(window).scroll(function () {
    $scroll = $(window).scrollTop();
    if ($scroll > 800) {
      $(".fixed-top").addClass("top-nav-collapse");
    }
    else {
      $(".fixed-top").removeClass("top-nav-collapse");
    }
  });
</script>
<!-- end jquery -->
</body>
<!--body end -->
</html>
