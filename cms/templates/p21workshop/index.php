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

    <link href="<?php echo $TEMPLATEBROWSERPATH;?>/assets/css/main.css" media="screen, projection" rel="stylesheet" type="text/css" />
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
    ?>
    
    <div class="logo">
        <a href="/21/home/"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/p21_white.png"></a>
    </div>
    <div class="header">
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/workshops.png">
    </div>
    <div id="menu-bar"><?php echo $MENUBAR;?></div>
    <div id="injection">
        <?php
            $responseHelpers = $string."/common/response/index.php";
            require_once $responseHelpers;
        ?>
    </div>
    <div class="content">
        <div class="workshop-list"></div>
        <div class="workshop-image">
            <img id="image" onerror="this.src='<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/default.png';"/>
        </div>
    </div>

    <?php
        $nav = $string."/common/sidenav/index.php";
        require_once $nav;
    ?>

    <script>
        let title = document.querySelector("#menu-bar a:last-of-type .cms-menuhead").innerText;
        if(title.toUpperCase() == "WORKSHOPS")
            document.querySelector(".header img").setAttribute("src", "<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/workshops.png");
        else if(title.toUpperCase() == "GAMESCAPE")
        document.querySelector(".header img").setAttribute("src", "<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/gamescape.png");
        else
            document.querySelector(".header img").setAttribute("src", "<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/glnc.png");
        // document.querySelector(".title").innerText = title;

        let header = document.querySelectorAll(".cms-menuhead")[1];
        if(!header) 
            header = "";
        else 
            header = header.innerText.trim();

        let workshopHTMLString = "";
        let workshopData = [];
        let workshops = document.querySelectorAll(".div_topnav:last-of-type a");
        workshops.forEach(element => {
            let isCurrent = (header === element.children[0].innerText.trim()) ? "workshop-name" : "workshop-links";
            workshopData.push({
                key: element.children[0].innerText.trim().toUpperCase(),
                url: element.href,
                class: isCurrent
            });
        });

        workshopData.forEach(element => {
            workshopHTMLString += `
            <div class="${element.class}" img-attr="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/${element.url.split("/").slice(-2)[0]}.png">
                <a href="${element.url}">${element.key}</a>
            </div>
            `;
        });
        document.querySelector(".workshop-list").innerHTML = workshopHTMLString;
    </script>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/scripts/main.js"></script>
</body>
</html>