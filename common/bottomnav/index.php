<?php 
    $string = explode('/', $TEMPLATEBROWSERPATH);
    array_pop($string);
    $string = implode('/', $string);
    echo '
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet">
        <link href="'.$string.'/common/bottomnav/assets/css/bottom-nav.css" rel="stylesheet" type="text/css">
        <link href="'.$string.'/common/bottomnav/assets/css/bottom-side-nav.css" rel="stylesheet" type="text/css">
        <div class="navbar">
            <div class="total">
                <div class="bottomnav" data-img="'.$string.'/common/bottomnav/assets/images/right.png"></div>
                <div id="content"></div>
            </div>
                <div class="menu-items menu-navigation-icons">
                    <a href="#" class="zoom"><span>Dalal Street</span></a>
                    <a href="#" ><span>Beer Factory</span></a>
                    <a href="#" ><span>The Ultimate Manager</span></a>
                    <a href="#" ><span>PPL</span></a>
                    <a href="#" ><span>Marketing Hub</span></a>
                </div>
    </div>';

//         if (isset($_SESSION["userId"])) {
//             $logout =  <<<LOGIN
//                         <a href="./+profile">Profile</a> 
//                         <a href="./+logout">Logout</a>     
// LOGIN;
//             echo $logout;
//         } else {
//             $login_str =  <<<LOGIN
//                         <a href="./+login">Log in / Sign up</a>
// LOGIN;
//             echo $login_str;
//         }
            
    echo '
        </div>
        <script src="'.$string.'/common/bottomnav/assets/js/bottom-side-nav.js"></script>'; 
?>

