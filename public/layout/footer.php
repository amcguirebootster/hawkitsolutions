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
<!-- video modal -->
  <div class="modal fade video-modal" id="video-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body contact-modal-body">
          <div class="video-item video-item-one">
            <script type="text/javascript">
              var video_url = '<iframe src="https://www.youtube.com/embed/-8-d8GR9rew?autoplay=1&showinfo=0" frameborder="0"></iframe>';
            </script>
            <div class="video-device">
              <img class="bg_img img-responsive" src="images/bg/video-bg.jpg" alt="blog-video" />
              <div class="overlay-bg"></div>
              <div class="video-preview">
                <div class="video-btn-two">
                  <a href="javascript:void(0);" class="btn-video-play"><i class="fa fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end video modal -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.countdown.js"></script> <!-- countdown js -->
<script type="text/javascript" src="js/aos.js"></script> <!-- animate on scroll js -->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->
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
