<?php
if(!defined('__PRAGYAN_CMS'))
{
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        <?php
            $params=[];
            $cmstitle=$TITLE;
            $params=explode("-",$cmstitle);
            echo $params[1]." | Pragyan 2022 - An International Techno-managerial Festival of the National Institute of Technology, Tiruchirappalli"; ?>
    </title>
    <link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/../common/favicon.ico" >
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS.', '.$PAGEKEYWORDS ?>" />
    <meta name="google" content="notranslate">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" defer data-deferred="1"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SJH35RCT1D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-SJH35RCT1D');
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<?php global $urlRequestRoot;	global $PAGELASTUPDATED;
		if($PAGELASTUPDATED!="")
		echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'" />'."\n";
		?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="<?php echo $TEMPLATEBROWSERPATH;?>/assets/css/main.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <style>
        #menu-bar {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
        $string = explode('/', $TEMPLATECODEPATH);
        array_pop($string);
        $string = implode('/', $string);
    ?>
    <div class="logo">
        <a href="/22/home/"><img id="logo"></a>
    </div>
    <div class="header">
        <!-- <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/events.png"> -->
        <!-- <h1 class="event-title">EVENTS</h1> -->
    </div>
    <div id="menu-bar"><?php echo $MENUBAR;?></div>
    <div class="content">
        <div class="menu-modal">
    <h1 class="event-title">EVENTS</h1>
        <div class="cluster-list"></div>
        </div>
    </div>
    <?php
        $path = $string."/common/sidenav/index.php";
        require_once $path;
    ?>
    <div id="overlay"></div>

    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/main.js" defer></script>
    <div id="particles-js"></div>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/particles-config.js"></script>
</body>
</body>
</html>
