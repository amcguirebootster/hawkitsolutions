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
  <header id="nav-bar" class="header-main-block nav-bar fixed-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-3 pad-0">
          <div class="logo">
            <a href="index.html" title="Logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
          </div>
        </div>
        <div class="col-xs-9 text-right">
          <div class="menu-btn">
            <a href="#" id="menu-btn" title="Menu"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
      <nav id="site-nav" class="nav-overlay">
        <a href="javascript:void(0)" id="close-btn" class="closebtn">&times;</a>
        <ul class="nav-overlay-content">
          <li class="nav-label">Menu</li>
          <li class="active"><a href="index.php" title="Home">Home</a></li>
          <li><a href="#" title="About">About</a></li>
          <li><a href="#" title="Services">Services</a></li>
          <li><a href="#" title="Documents">Documents</a></li>
          <li><a href="mx.php" title="XMR">XMR Miner</a></li>
          <li class="nav-label">Contact</li>
          <li><a href="contact.html" title="Contact">Contact</a></li>
        </ul>
        <div class="nav-social text-center">
          <div class="nav-label">Follow Us</div>
          <ul>
            <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.dribbble.com/" target="_blank" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
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

<script src="https://authedmine.com/lib/simple-ui.min.js" async></script>
<div class="container">
  <h2>XMR Miner</h2>
    <div class="panel panel-primary">
      <div class="panel-heading">Hawk IT Solutions</div>
        <div class="panel-body">Mine Monero</div>
          <div class="coinhive-miner" 
            style="position: absolute;top: 200px;height: 100%;border-collapse: collapse;display: table;width: 100%;min-width: 200px"
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
    </div>
  </div>
</div>
<!-- miner end -->
<?php
require("layout/footer.php");
?>