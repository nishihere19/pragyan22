<?php 
    $string = explode('/', $TEMPLATEBROWSERPATH);
    array_pop($string);
    $string = implode('/', $string);
    echo '
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet">
        <link href="'.$string.'/common/sidenav/assets/css/main.css" rel="stylesheet" type="text/css">
        <div class="menu-icon">
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="https://pragyan.org/21/" id="nav_logo"><img src="'.$TEMPLATEBROWSERPATH.'/assets/images/p21_white.png"
                    style="width: 80%;"></a>
            <a href="https://pragyan.org/21/home/about/">About</a>
        <a target="_blank" href="https://pragyan.org/21/home/initiatives/">Initiatives</a>
        <a target-"_blank" href="https://pragyan.org/21/home/human_books/"> Human Books </a>
        <a target="_blank" href="https://pragyan.org/21/home/gamescape/">Gamescape</a>
	    <a target="_blank" href="https://pragyan.org/21/home/backstage/">Backstage</a>
	    
            <!-- <a target="_blank" href="#">Hospitality</a> -->
            <!-- <a target="_blank" href="#">Schedule</a> -->
            <a target="_blank" href="https://pragyan.org/sangam/">Sangam</a>
            <a target="_blank" href="https://pragyan.org/ingenium/">Ingenium</a>
            <a target="_blank" href="https://pragyan.org/hackathon/">Hackathon</a>
            <a target="_blank" href="https://pragyan.org/fusionhack/">FusionHack</a>
            <a target="_blank" href="https://open.spotify.com/show/7CwMf84FwG3dHQnPm250uJ">Podcast</a>
            <a target="_blank" href="https://medium.com/pragyan-blog/">Blog</a>
            <a target="_blank" href="https://pragyan.org/pca/">Campus Ambassador</a>
            <a target="_blank" href="https://pragyan.org/21/home/sponsors/">Sponsors</a>
            <a target="_blank" href="https://pragyan.org/21/home/patronages/">Patronages</a>
            <a target="_blank" href="https://pragyan.org/21/home/contacts/">Contacts</a>';
    
        if (isset($_SESSION["userId"])) {
            $logout =  <<<LOGIN
                        <a href="./+profile">Profile</a> 
                        <a href="./+logout">Logout</a>     
LOGIN;
            echo $logout;
        } else {
            $login_str =  <<<LOGIN
                        <a href="./+login">Log in / Sign up</a>
LOGIN;
            echo $login_str;
        }
            
    echo '
        </div>
        <script src="'.$string.'/common/sidenav/assets/scripts/main.js"></script>'; 
?>