<?php 
include './layout/header.php';
?>
<!-- preloader -->
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader -->
<!-- 404 page -->
  <section id="error-page" class="error-page-main-block text-center" style="background-image: url('images/bg/coming-soon-bg.jpg');">
    <div class="overlay-bg"></div>
    <div class="container-fluid">
      <div class="error-page-block">
        <div class="logo">
          <a href="index.html" title="Logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
        </div>
        <div class="error-page-dtl">
          <div class="error-bg">
            <img src="images/bg/dot-line-big.png" alt="dot-line-bg">
          </div>
          <div class="col-lg-11 ml-lg-auto mr-lg-auto">
            <div class="error-dtl coming-block">
              <div class="countdown"><div class="coming-countdown" data-countdown="2018/05/22"></div></div>
            </div>
          </div>
        </div>
        <div class="slider-social-icons">
          <ul>
            <li><a href="#" title="Share"><i class="fa fa-share-alt"></i></a></li>
            <li><a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.dribbble.com/" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- end 404 page -->
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
<!-- end jquery -->
</body>
<!--body end -->
</html>
