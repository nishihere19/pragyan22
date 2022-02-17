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
        .tabContent {
            display: none;
        }
        
        .active {
            display: block;
        }

        #tabList {
            display: none;
        }

        #injection > h2 {
            display: none;
        }

        #menu-bar {
            display: none;
        }

        br {
            display: none;
        }

        legend {
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
    <div class="cluster">
        <div class="title"></div>
        <div class="logo">
            <a href="https://www.pragyan.org/21/home/"><img src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/p21_white.png"></a>
        </div>
    </div>
    <div class="header">
        <div class="header-left" style="margin-left: 2vw;">
            <a><img src="<?php echo $TEMPLATEBROWSERPATH;?>/assets/images/arrow icon.png"></a>
        </div>
        <div class="event-header"></div>
        <div class="header-right" style="margin-right: 2vw; transform: rotate(180deg); ">
            <a><img src="<?php echo $TEMPLATEBROWSERPATH;?>/assets/images/arrow icon.png"></a>
        </div>
    </div>
    <div class="content">
        <div class="content_but_inside">
            <div id="injection">
                <?php
                    $responseHelpers = $string."/common/response/index.php";
                    require_once $responseHelpers;
                ?>
            </div>
            <div id="menu-bar"><?php echo $MENUBAR;?></div>
        </div>
    </div>
    <div class="event-menu"></div>
    <?php
        $path = $string."/common/sidenav/index.php";
        require_once $path;
    ?>

    <script>
        let cluster = document.querySelector("#menu-bar > a:nth-of-type(1) > div").innerText.toUpperCase();
        document.querySelector(".title").innerHTML = `
                <span>${cluster}</span>
            `

        let header = document.querySelector("#injection > h2").innerText.trim();

        let currentParent = window.location.href.split("/").slice(-3)[0];
        if(currentParent === "home") {
            document.querySelector(".header-left").style.visibility = "hidden";
            document.querySelector(".header-right").style.visibility = "hidden";
        }

        let headerData = [];
        let url;
        let headerItems = document.querySelectorAll(".div_topnav:nth-of-type(1) a");
        headerItems.forEach(element => {
            let isCurrent = (header === element.children[0].innerText.trim()) ? "header-name" : "header-links" ;

            headerData.push({
                key: element.children[0].innerText,
                url: element.getAttribute("href"),
                class: isCurrent
            });
        });

        let headerHTMLString = "";
        headerData.forEach((element, index) => {
            if(element.class === "header-name"){
                headerHTMLString = `
                    <div class="${element.class}">
                        <a href="${element.url}">${element.key.toUpperCase()}</a>
                    </div>
                `;
                if(index-1 >= 0) {
                    document.querySelector(".header-left a").setAttribute("href", headerData[index-1].url);
                } else {
                    document.querySelector(".header-left img").style.opacity = 0.4;
                }
                if(index+1 < headerData.length) {
                    document.querySelector(".header-right a").setAttribute("href", headerData[index+1].url);
                } else {
                    document.querySelector(".header-right img").style.opacity = 0.4;
                }
            }
        });
        document.querySelector(".event-header").innerHTML = headerHTMLString;
        // document.querySelector(".event-header .header-name").scrollIntoView();

        let menuData = [];
        let menuItems = document.querySelectorAll(".tabElement > a");
        menuItems.forEach(element => {
            menuData.push({
                key: element.children[0].innerText,
                id: element.id
            });
        });

        let menuHTMLString = "";
        menuData.forEach((element, index) => {
            menuHTMLString += `
            <div class="links">
                <a href="" id="${element.id}">${element.key.toUpperCase()}</a>
            </div>
            `
        });
        document.querySelector(".event-menu").innerHTML = menuHTMLString;

        let currentTab = document.querySelector(".content .active").id.split("tab")[1];
        document.querySelector(".event-menu #" + currentTab).classList.add('selected');
        document.querySelector(".event-menu .selected").scrollIntoView();

        document.addEventListener("keydown", event => {
            if(event.keyCode === 39) {
                document.querySelector(".header-right a").click();
            }
            if(event.keyCode === 37) {
                document.querySelector(".header-left a").click();
            }
        });
    </script>
</body>
</html>