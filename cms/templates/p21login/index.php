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
    
    <!-- scripts -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/css/main.css" rel="stylesheet">
</head>

<body>
    <?php 
        // path to /common
        $string = explode('/', $TEMPLATECODEPATH);
        array_pop($string);
        $string = implode('/', $string);
    ?>

    <div id="title"> welcome to the metaverse </div>
    <div id="main_div"> 
        <div id="left_div"> 
            <img id="logo" src="<?php echo $TEMPLATEBROWSERPATH; ?>/assets/images/p21_white.png"> 
        </div>
        <div id="vertical_line"> </div>
        <div id="right_div">
            <div id='injection'>
                <?php
                    $responseHelpers = $string."/common/response/index.php";
                    require_once $responseHelpers;
                ?>
            </div>
        </div>
    </div>

    <?php
        $nav = $string."/common/sidenav/index.php";
        require_once $nav;
    ?>

    <!-- Scripts -->
    <script>
        dc = document;
        injection = dc.querySelector('#injection');
        injectedForm = dc.querySelector('#injection form');
        regForms = dc.querySelectorAll('#injection fieldset');
        formAction = injectedForm.action;
        injectedTable = injectedForm.querySelector('table');
        injectedFormTable = injectedForm.querySelector('table>tbody');
        signinFormInputs = dc.querySelectorAll('form input'); 
        lastPath = formAction.substring(formAction.lastIndexOf('/') + 1);
        registerPath = '+login&subaction=register';
        loginPath = '+login';
        profilePath = '+profile';
        sexId = 'l';

        hr = document.createElement('hr');
        hr.style.width = "inherit";
        if(regForms.length > 1) injection.insertBefore(hr, regForms[1]);

        if (!lastPath.includes(registerPath) && !lastPath.includes(profilePath)) {
            for(let ele of signinFormInputs){
                if(ele.getAttribute('name')!='txtCaptcha'){
                    ele.parentNode.setAttribute('colspan',3);
                }
            }
        }

        for(let ele of signinFormInputs){
            if(ele.getAttribute('type')!='submit'){
                if(ele.getAttribute('name')!='txtCaptcha'&&ele.getAttribute('name')!='captcha' && !lastPath.includes(registerPath) && !lastPath.includes(profilePath)){
                    ele = ele.parentNode.parentNode;
                    ele.children[1].children[0].placeholder=ele.children[0].children[0].innerText;
                    ele.removeChild(ele.children[0]);
                }
            } else {
                if(lastPath === loginPath) {
                    ele = ele.parentNode.parentNode; //tr-forgot pass
                    submitEle = ele.children[0]; //login
                    aTag = ele.children[1].children[1]; //sign up

                    ele.removeChild(ele.children[0]); //remove login
                    ele.children[0].removeChild(ele.children[0].children[1]); //remove sign up

                    newRow1 = injectedTable.insertRow(-1); //new row for login
                    newRow1.appendChild(submitEle); //append login


                    ele.children[0].children[0].innerHTML = 'Forgot Password'

                    newRow2 = injectedTable.insertRow(-1);
                    newRow3 = injectedTable.insertRow(-1);

                    td1 = dc.createElement('td');
                    newRow2.appendChild(td1);
                    td2 = dc.createElement('td');
                    newRow3.appendChild(td2);

                    td1.innerHTML = "Don't have an account?";
                    td1.id = 'no_account';
                    td2.id = 'sign_up';

                    td2.appendChild(aTag);

                    newRow1.children[0].style.textAlign = 'center';
                    newRow2.children[0].style.textAlign = 'center';
                    newRow3.children[0].style.textAlign = 'center';
                    
                    ele.children[0].style.display = 'flex';
                    ele.children[0].style.justifyContent = 'flex-end';
                    ele.children[0].style.padding = '2px';
                    ele.children[0].style.marginRight = '0.5vw';

                    if(window.innerWidth <= 768) {
                        ele.children[0].style.fontSize = '0.7em';
                    }
                } else if(lastPath.includes(registerPath)) {
                    
                    injectedForm.style.overflow = 'auto';

                    eleParent = ele.parentNode.parentNode; //tr
                    
                    activationLink = eleParent.children[1].children[0];
                    loginLink = eleParent.children[1].children[1];
                    eleParent.removeChild(eleParent.children[1]);

                    eleParent.style.textAlign = 'center';

                    prevTr = eleParent.previousElementSibling;
                    prevTr.children[0].setAttribute('colspan', 1);
                    eleParent.children[0].setAttribute('colspan', 3);
                    td1 = dc.createElement('td');
                    prevTr.appendChild(td1);
                    td1.appendChild(activationLink);

                    newRow1 = injectedTable.insertRow(-1);
                    newRow2 = injectedTable.insertRow(-1);

                    td1 = dc.createElement('td');
                    newRow1.appendChild(td1);
                    td2 = dc.createElement('td');
                    newRow2.appendChild(td2);

                    td1.innerHTML = "Already have an account?";

                    td2.appendChild(loginLink);
                    td1.style.paddingBottom = '10px';
                    td2.style.paddingBottom = '10px';
                    td2.style.fontWeight = 'bold';
                    activationLink.parentNode.style.textAlign = 'end';
                    newRow1.children[0].style.textAlign = 'center';
                    newRow2.children[0].style.textAlign = 'center';
                    newRow1.children[0].setAttribute('colspan', 3);
                    newRow2.children[0].setAttribute('colspan', 3);

                } else if(lastPath.includes(profilePath)) {
                    parent = ele.parentNode.parentNode;
                    parent.removeChild(parent.children[1]);
                    parent.children[0].setAttribute('colspan', 3);
                }
            }
        }

        const ress = () => {
            if(lastPath.includes(registerPath) || lastPath.includes(profilePath)) {
                if(window.innerWidth <= 520) {
                    injection.style.width = '89vw';
                } else if(window.innerWidth <= 768) {
                    injection.style.width = '75vw';
                    injection.style.marginTop = '8vh';
                } else {
                    injection.style.width = '44vw';
                }
            }
        }
        ress();
        window.addEventListener('resize', ress);

    </script>
</body>

</html>
