<?php 
    $str = explode('/', $TEMPLATEBROWSERPATH);
    array_pop($str);
    $str = implode('/', $str);
    echo '
            <link href="'.$str.'/common/response/assets/css/main.css" rel="stylesheet" type="text/css">'
            .$INFOSTRING.$WARNINGSTRING.$ERRORSTRING.$CONTENT;
?>