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
<html lang="en">

<head>
    <title>
        <?php
            $params=[];
            $cmstitle=$TITLE;
            $params=explode("-",$cmstitle);
            echo $params[1]." | Pragyan 2022 - An International Techno-managerial Festival of the National Institute of Technology, Tiruchirappalli"; ?>
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <link href="<?php echo $TEMPLATEBROWSERPATH;?>/assets/css/main.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
         #menu-bar {
            display: none;
        } 

        #injection {
            display: none;
        }
    </style>
</head>

<body>
    <?php
        $string = explode('/', $TEMPLATECODEPATH);
        array_pop($string);
        $string = implode('/', $string);
        $nav = $string."/common/sidenav/index.php";
        include $nav;
    ?>
    <div class="details-wrapper">
        <div class="details-container">
            <div id="top-nav">
                <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/../p22assets/common/logo.png" alt="" srcset="" id="pragyan_logo">
            </div>
            <div id="menu-bar"><?php echo $MENUBAR;?></div>
            <div class="details-heading-container">
                <span class="details-cluster" id="cluster-content">Manigma's</span>
                <div class="details-heading-start" id="startName-content">Dalal</div>
                <div class="details-heading-end" id="endName-content">Street</div>
            </div>
            <div class="details-body-wrapper">
            <div id="injection">
            <div id="asset-path">
                <?php 
                    $string = explode('/', $TEMPLATEBROWSERPATH);
                    array_pop($string);
                    $string = implode('/', $string);
                    $nav =  $string."/common/p22assets/";
                    echo $nav;
                ?>
            </div>
            <div id="template-path">
                <?php 
                    $string = explode('/', $TEMPLATEBROWSERPATH);
                    // array_pop($string);
                    $string = implode('/', $string);
                    echo $string;
                ?>
            </div>
            <?php
                $string = explode('/', $TEMPLATECODEPATH);
                array_pop($string);
                $string = implode('/', $string);
                $responseHelpers = $string."/common/response/index.php";
                require_once $responseHelpers;
                ?>

            </div>
                <div class="details-body">
                    <div class="details-body-item">
                        <div class="details-body-item-head">
                            Description
                            <i class="material-icons">keyboard_arrow_right</i>
                        </div>
                        <div class="details-body-item-content hidden" data-height="0px" id="description-content">
                        </div>
                    </div>
                    <div class="details-body-item">
                        <div class="details-body-item-head">
                            Format
                            <i class="material-icons">keyboard_arrow_right</i>
                        </div>
                        <div class="details-body-item-content hidden" data-height="0px" id="format-content">
                        </div>
                    </div>
                    <div class="details-body-item">
                        <div class="details-body-item-head">
                            Rules
                            <i class="material-icons">keyboard_arrow_right</i>
                        </div>
                        <div class="details-body-item-content hidden" data-height="0px"  id="rules-content">
                        </div>
                    </div>
                    <div class="details-body-item">
                        <div class="details-body-item-head">
                            Resources
                            <i class="material-icons">keyboard_arrow_right</i>
                        </div>
                        <div class="details-body-item-content hidden" data-height="0px"  id="resources-content">
                        </div>
                    </div>
		    <div class="details-body-item">
                        <div class="details-body-item-head">
                            Registration
                            <i class="material-icons">keyboard_arrow_right</i>
                        </div>
                        <div class="details-body-item-content hidden" id="registration-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay"></div>
    <div class="side-nav">
    <div class="bottom-nav">
        <?php 
            $string = explode('/', $TEMPLATECODEPATH);
            array_pop($string);
            $string = implode('/', $string);
            $nav = $string."/common/bottomnav/index.php";
            include $nav;
        ?>
    </div>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/main.js"></script>
</body

</html>
