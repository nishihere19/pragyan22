<?php
if (!defined('__PRAGYAN_CMS')) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');
    echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
    echo '<hr/>' . $_SERVER['SERVER_SIGNATURE'];
    exit(1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

<head>
    <title><?php $cmstitle = $TITLE;
            echo $cmstitle; ?></title>
    <link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/../common/favicon.ico">
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS . ', ' . $PAGEKEYWORDS ?>" />
    <meta name="google" content="notranslate">

    <!-- <link rel="preload" href="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/FirstFrame.jpg" as="image"> -->

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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <?php global $urlRequestRoot;
    global $PAGELASTUPDATED;
    if ($PAGELASTUPDATED != "")
        echo '<meta http-equiv="Last-Update" content="' . substr($PAGELASTUPDATED, 0, 10) . '" />' . "\n";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/brands.css" integrity="sha384-tft2+pObMD7rYFMZlLUziw/8QrQeKHU4GYYvA5jVaggC74ZrYdTASheA2vckPcX5" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/fontawesome.css" integrity="sha384-+pqJl+lfXqeZZHwVRNTbv2+eicpo+1TR/AEzHYYDKfAits/WRK21xLOwzOxZzJEZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet">
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/css/main.css" rel="stylesheet">

</head>

<body onload="<?php echo $STARTSCRIPTS; ?>" class="menu-active">

    <div class="p21-loader">
        <div class="loader-image">
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/1.png" class="loader-cw" width="100px">
        </div>
        <div class="loader-image">
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/2.png" class="loader-ccw" width="100px">
        </div>
        <div class="loader-image">
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/3.png" class="loader-cw" width="100px">
        </div>
        <div class="loader-image">
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/4.png" class="loader-ccw" width="100px">
        </div>
        <div class="loader-image">
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/5.png" class="loader-cw" width="100px">
        </div>
    </div>


    <!-- <div class="menu-icon">
    </div> -->
    <div class="items-container">
        <div class="plus-icon">
        </div>
        <div class="menu-items-container">
            <div class="inner-item">
                <a href="https://pragyan.org/21/home/events/">EVENTS</a>
            </div>
            <div class="inner-item">
                <a href="https://pragyan.org/21/home/workshops/">WORKSHOPS</a>
            </div>
            <div class="inner-item">
                <a href="https://pragyan.org/21/home/gl_and_crossfire/">GL AND CROSSFIRE</a>
            </div>
	    <div class="inner-item">
                <a href="https://pragyan.org/21/home/exhibitions/">EXHIBITIONS</a>
            </div>
        </div>
    </div>

    <div id="background-div">
        <div class = "video-overlay"></div>
    </div>

    <div class="pragyan-logo-container">
        <div>
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/p21_white.png" class="landing-logo">
        </div>
        <h1 class="pragyan-theme metaverse-desk glitch" data-text="THE">THE</h1>
        <h1 class="pragyan-theme metaverse-desk  glitch" data-text="METAVERSE">METAVERSE</h1>
        <h1 class="pragyan-theme metaverse-mobile  glitch" data-text="THE">THE</h1>
        <h1 class="pragyan-theme metaverse-mobile  glitch" data-text="META">META</h1>
        <h1 class="pragyan-theme metaverse-mobile  glitch" data-text="VERSE">VERSE</h1>
    </div>
    <div class="p21-fab-container">
        <div id="social-media" class="social-media sm-down">
            <a href="https://www.facebook.com/pragyan.nitt/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/nitt_pragyan" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/pragyan_nitt/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/c/pragyannittrichy" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://medium.com/pragyan-blog" target="_blank"><i class="fab fa-medium-m"></i></a>
            <a href="https://in.linkedin.com/company/pragyan.nitt" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div style="z-index:50;">
            <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/sm_icon.png" class="p21-fab">
        </div>
    </div>


    <?php 
        $string = explode('/', $TEMPLATECODEPATH);
        array_pop($string);
        $string = implode('/', $string);
        $nav = $string."/common/sidenav/index.php";
        include $nav;
    ?>

    <div class="footer">
        Made with <span id="heart">&#10084;</span> by <a href="https://delta.nitt.edu" target="_blank">Delta Force</a> and
        <a href="https://www.instagram.com/graphique.nitt/" target="_blank">Graphique</a>
    </div>

    <!-- Scripts -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/socialMedia.js"></script>

    <script>
        let minLoaderTime = 2000;
        let loaderFadeOutTime = 500;
        let pageLoaded = false;
        window.onload = () => {
            pageLoaded = true;
        }

        setInterval(() => {
            if (pageLoaded) {
                var preloader = $('.p21-loader');
                preloader.fadeOut(500)
            }
        }, minLoaderTime);

        let isMobil = window.matchMedia("(max-width: 728px)");

        if (!isMobil.matches) {
            let browserPath = "<?php echo $TEMPLATEBROWSERPATH; ?>";
            let videoElement = `<video src="${browserPath}/assets/videos/BG.mp4#t=0.1" preload="none" playsinline autoplay muted loop id="bgvid"></video>`
            $("#background-div").append(videoElement)
        }
    </script>

</body>

</html>