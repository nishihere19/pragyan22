<?php
if (!defined('__PRAGYAN_CMS')) {
  header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');
  echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
  echo '<hr/>' . $_SERVER['SERVER_SIGNATURE'];
  exit(1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    <?php
    $params = [];
    $cmstitle = $TITLE;
    $params = explode("-", $cmstitle);
    echo $params[1] . " | Pragyan 2022 - An International Techno-managerial Festival of the National Institute of Technology, Tiruchirappalli"; ?>
  </title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/../common/favicon.ico">
  <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
  <meta name="keywords" content="<?php echo $SITEKEYWORDS . ', ' . $PAGEKEYWORDS ?>" />
  <meta name="google" content="notranslate">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SJH35RCT1D"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SJH35RCT1D');
  </script>

  <?php global $urlRequestRoot;
  global $PAGELASTUPDATED;
  if ($PAGELASTUPDATED != "")
    echo '<meta http-equiv="Last-Update" content="' . substr($PAGELASTUPDATED, 0, 10) . '" />' . "\n";
  ?>

  <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/css/main.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/three"></script>
  <script src="//unpkg.com/topojson-client"></script>
  <script src="//unpkg.com/globe.gl"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" defer data-deferred="1"></script>
</head>

<body>
  <?php
  $string = explode('/', $TEMPLATECODEPATH);
  array_pop($string);
  $string = implode('/', $string);
  $nav = $string . "/common/sidenav/index.php";
  include $nav;
  ?>
  <div id="overlay"></div>
  <div class="landing-wrapper">
    <div class="landing-nav-bar">
      <div class="landing-left-menu">
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/menu.png" id="landing-menu-icon" alt="menu" />
      </div>
      <div class="landing-logo">
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/Main Logo 22_White.png" id="landing-main-logo" alt="Pragyan 22" />
      </div>
      <div class="landing-right-menu">
        <div class="landing-right-menu-icon close-icon">
          <i class="fa-solid fa-plus"></i>
        </div>
        <div class="landing-right-menu-list">
          <a href="/events" class="landing-right-menu-list-item">Events</a>
          <a href="/exhibitions" class="landing-right-menu-list-item">Exhibitions</a>
          <a href="/workshops" class="landing-right-menu-list-item">Workshops</a>
          <a href="/gl" class="landing-right-menu-list-item">GL & Crossfire</a>
        </div>
      </div>
    </div>
    <div class="landing-globe-container">
      <div class="landing-title">NEXUS</div>
      <div class="landing-globe" id="globe"></div>
    </div>
    <div class="landing-footer">
      <div class="landing-credits">
        Made with <i class="fa-solid fa-heart"></i> by
        <a href="https://delta.nitt.edu">Delta</a>
        and
        <a href="https://graphique.club">Graphique</a>
      </div>
      <div class="landing-socials">
        <div class="fab-nav">
          <div class="fab-nav-icons-wrapper">
            <div class="fab-nav-icon" data-icon="facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </div>
            <div class="fab-nav-icon" data-icon="twitter">
              <i class="fa-brands fa-twitter"></i>
            </div>
            <div class="fab-nav-icon" data-icon="instagram">
              <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="fab-nav-icon" data-icon="youtube">
              <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="fab-nav-icon" data-icon="medium">
              <i class="fa-brands fa-medium"></i>
            </div>
            <div class="fab-nav-icon" data-icon="linkedin">
              <i class="fa-brands fa-linkedin-in"></i>
            </div>
          </div>
        </div>
        <div class="fab-icon close-icon">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
    </div>
    <div id="template-browser-path" class="hidden">
      <?php echo $TEMPLATEBROWSERPATH; ?>
    </div>
  </div>
  <!-- particles.js container -->
  <div id="particles-js"></div>
  <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/particles-config.js"></script>
  <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/main.js"></script>
</body>

</html>