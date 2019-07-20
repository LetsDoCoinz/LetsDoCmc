<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//echo "REQUEST_URI: ".$_SERVER['REQUEST_URI']."<br>";
//die;

switch (strtolower($_SERVER['REQUEST_URI'])) {
    case '':
    case '/':
        require_once 'home.php';
        break;
    case '/coins':
        require_once 'coins.php';
        break;

    case '/exchanges':
        require_once 'exchanges.php';
        break;
        

    default:

        $uri = preg_split('/\//',$_SERVER['REQUEST_URI']);
//        print_r($uri);
//        die;
        if($uri[1]=='exchange'){
            $exchange = $uri[2];
            require_once 'exchange.php';
        }elseif($uri[1]=='coin'){
            $coin = $uri[2];
            require_once 'coin.php';
        } else {
            require_once 'home.php';
        }


}


?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113414219-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113414219-3');
</script>
