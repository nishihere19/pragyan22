<?php
if(!defined('__PRAGYAN_CMS'))
{
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

<head>  
    <title>
        <?php
            $params=[];
            $cmstitle=$TITLE;
            $params=explode("-",$cmstitle);
            echo $params[1]." | Pragyan 2021 - An International Techno-managerial Festival of the National Institute of Technology, Tiruchirappalli"; ?>
    </title>
    <link rel="icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/../common/favicon.ico" >
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS.', '.$PAGEKEYWORDS ?>" />
    <meta name="google" content="notranslate">
    
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
    
    <!-- styles -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/css/main.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <?php 
        $string = explode('/', $TEMPLATECODEPATH);
        array_pop($string);
        $string = implode('/', $string);
    ?>
    <div class="logo">
        <a href="/21/home/"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/p21_white.png"></a>
    </div>
    <div class="header">
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/exhibition.png">
    </div>
        <div id="main_div">
            <div id="content_div">
                <?php
                    $responseHelpers = $string."/common/response/index.php";
                    require_once $responseHelpers;
                ?>
            </div>
        </div>
    <?php
        $path = $string."/common/sidenav/index.php";
        require_once $path;
    ?>
</body>

</html>
