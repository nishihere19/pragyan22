<?php 
    $string = explode('/', $TEMPLATEBROWSERPATH);
    array_pop($string);
    $string = implode('/', $string);
    $auth_string = "";
        if (isset($_SESSION["userId"])) {
            $auth_string =  <<<LOGIN
                        <a href="./+profile">Profile</a>
                        <a href="./+logout">Logout</a>    
LOGIN;
        } else {
            $auth_string =  <<<LOGIN
                        <a href="./+login">Log in / Sign up</a>
LOGIN;
        }
            
    echo '
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet">
        <link href="'.$string.'/common/sidenav/assets/css/main.css" rel="stylesheet" type="text/css">
          <div class="menu-icon">
          </div>
        <div id="mySidenav" class="upper-sidenav">
<div id="mySidenavInner">
            <a href="https://pragyan.org/22/home/about/">About Us</a>
        <a target="_blank" href="https://pragyan.org/22/home/initiatives/">Initiatives</a>
        <a target-"_blank" href="https://pragyan.org/22/home/human_books/">Human Books </a>
        <a target="_blank" href="https://pragyan.org/22/home/gamescape/">Gamescape</a>
	    <a target="_blank" href="https://pragyan.org/22/home/backstage/">Sangam</a>
	    <a target="_blank" href="https://pragyan.org/22/home/backstage/">Ingenium</a>
	    <a target="_blank" href="https://pragyan.org/22/home/backstage/">Hackathon</a>
	    <a target="_blank" href="https://pragyan.org/22/home/backstage/">Fusion Hack</a>'.$auth_string.'</div>
</div>
          <!-- <a href="#", id="nav_logo"><img id="nav_logo_image"></a> -->
        ';
     //        <a target="_blank" href="https://pragyan.org/sangam/">Sangam</a>
     //        <a target="_blank" href="https://pragyan.org/ingenium/">Ingenium</a>
     //        <a target="_blank" href="https://pragyan.org/hackathon/">Hackathon</a>
     //        <a target="_blank" href="https://pragyan.org/fusionhack/">FusionHack</a>
     //        <a target="_blank" href="https://open.spotify.com/show/7CwMf84FwG3dHQnPm250uJ">Podcast</a>
     //        <a target="_blank" href="https://medium.com/pragyan-blog/">Blog</a>
     //        <a target="_blank" href="https://pragyan.org/pca/">Campus Ambassador</a>
     //        <a target="_blank" href="https://pragyan.org/21/home/sponsors/">Sponsors</a>
     //        <a target="_blank" href="https://pragyan.org/21/home/patronages/">Patronages</a>
     //        <a target="_blank" href="https://pragyan.org/21/home/contacts/">Contacts</a>';
    
    echo '
        </div>
        <script src="'.$string.'/common/sidenav/assets/scripts/main.js"></script>'; 
?>
