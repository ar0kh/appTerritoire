<?php

$propertyType = $_GET["property_type"];
$commune = $_GET["commune"];
$type = $_GET["typehebergement"];

$urlIframe = "http://tourisme.gardrhodanien.media/property/?wpp_search%5Btamp%5D=1&wpp_search%5Bsort_order%5D=ASC&wpp_search%5Bsort_by%5D=commune&wpp_search%5Bpagination%5D=on&wpp_search%5Bper_page%5D=10000&wpp_search%5Bstrict_search%5D=false" ;
$urlIframe .= "&wpp_search%5Bproperty_type%5D=$propertyType";
$urlIframe .= "&wpp_search%5Blocalisation%5D=-1";
$urlIframe .= "&wpp_search%5Bcommune%5D=$commune";
$urlIframe .= "&wpp_search%5Badherant_ot%5D=true";
if ($type != '') {
	$urlIframe .= "&wpp_search%5Btype_hebergement%5D%5B0%5D=$type";
}
$urlIframe .= "&view=fiche";
?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title>Gardrhodanien.media</title>
    
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/skin.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link rel="stylesheet" type="text/css" href="styles/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</head>

<body>
<div id="page-transitions" class="is-existing">
    
<div class="page-preloader page-preloader-dark" style="
    z-index: 10;
    position: relative;
    opacity: 1;
">
    <div class="spinner"></div>
</div>
    
<div class="header header-light">
    <a href="index.html" class="header-logo"><img src="./img/Logo_Territoireh35px.png" style="padding-top: 10px;"></a>
    <a href="#" class="header-icon header-icon-1 close-sidebar-mask"></a>
    <a href="#" class="header-icon header-icon-1 open-all-sidebar">
        <em class="line-1"></em>
        <em class="line-2"></em>
        <em class="line-3"></em>    
    </a>
    <a href="#" class="header-icon header-icon-4"><i class="ion-ios-email-outline"></i></a>
</div>
    

<!-- Main Small Icon Sidebar -->
<div class="sidebar-menu sidebar-light">
    <div class="sidebar-menu-scroll">
        <a class="current-menu" href="index.html"><i class="ion-ios-home-outline"></i><em>Accueil</em></a>       
        <!-- <a data-submenus="sub1" href="#"><i class="ion-social-rss"></i><em>Actualités</em></a>
        <a data-submenus="sub0" href="#"><i class="ion-android-calendar"></i><em>Agenda</em></a>       


        <a data-submenus="sub2" href="#"><i class="ion-ios-home"></i><em>Villages</em></a>      -->
        <a data-submenus="sub3" href="#"><i class="ion-ios-moon"></i><em>Hébergements</em></a>       
        <a data-submenus="sub4" href="#"><i class="ion-android-restaurant"></i><em>Restauration</em></a>
        <a data-submenus="sub5" href="#"><i class="ion-ios-wineglass"></i><em>Vignobles</em></a>       
        <a data-submenus="sub6" href="#"><i class="ion-android-color-palette"></i><em>Loisir</em></a>      
        <a data-submenus="sub7" href="#"><i class="ion-bag"></i><em>Commerces</em></a>
        <a data-submenus="sub8" href="#"><i class="ion-android-boat"></i><em>Port</em></a>
        <a data-submenus="sub9" href="#"><i class="ion-images"></i><em>Balades</em></a>     
    </div>
</div>
<!-- Home Submenus 
<div class="submenu submenu-light" id="sub1">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-Fermer-empty"></i><em>Fermer</em></a>        
        <a href="index.html"><i class="ion-ios-star-outline"></i><em>Welcome</em></a>       
        <a href="index-classic.html"><i class="ion-ios-home-outline"></i><em>Classic</em></a>       
        <a href="index-round.html"><i class="ion-ios-circle-outline"></i><em>Rounded</em></a>       
        <a href="index-cover.html"><i class="ion-ios-star-outline"></i><em>Coverpage</em></a>       
        <a href="index-news.html"><i class="ion-ios-paper-outline"></i><em>News Front</em></a>       
        <a href="index-store.html"><i class="ion-ios-cart-outline"></i><em>Store Front</em></a>       
        <a href="index-login.html"><i class="ion-ios-locked-outline"></i><em>Login Page</em></a>       
        <a href="index-register.html"><i class="ion-ios-unlocked-outline"></i><em>Register Page</em></a>       
        <a href="index-no-slider.html"><i class="ion-ios-Fermer-outline"></i><em>No Slider</em></a>       
        <a class="active-menu" href="index-landing.html"><i class="ion-ios-keypad-outline"></i><em>Landing Page</em></a>       
        <a href="index-splash.html"><i class="ion-ios-heart-outline"></i><em>Slash Page</em></a>       
        <a href="index-homescreen.html"><i class="ion-ios-keypad-outline"></i><em>Homescreen</em></a>  
        <a class="close-sidebar" href="#"><i class="ion-ios-Fermer-empty"></i><em>Fermer</em></a>  
    </div>
</div> -->
<!-- Features Submenus 
<div class="submenu submenu-light" id="sub2">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-Fermer-empty"></i><em>Fermer</em></a>        
        <a href="features-tabs.html"><i class="ion-ios-more-outline"></i><em>Tabs</em></a>       
        <a href="features-toggles.html"><i class="ion-ios-toggle-outline"></i><em>Toggles</em></a>       
        <a href="features-dropdown.html"><i class="ion-ios-arrow-thin-down"></i><em>Dropdown</em></a>       
        <a href="features-accordion.html"><i class="ion-ios-settings"></i><em>Accordion</em></a>       
        <a href="features-typography.html"><i class="ion-ios-compose-outline"></i><em>Typography</em></a>       
        <a href="features-menu-bars.html"><i class="ion-navicon"></i><em>Menu Bars</em></a>       
        <a href="features-notifications.html"><i class="ion-ios-bell-outline"></i><em>Notifications</em></a>       
        <a href="features-dividers.html"><i class="ion-ios-star-outline"></i><em>Dividers</em></a>       
        <a href="features-buttons.html"><i class="ion-ios-color-wand-outline"></i><em>Buttons & Icons</em></a>       
        <a href="features-inputs.html"><i class="ion-ios-at-outline"></i><em>Inputs</em></a>
        <a href="features-detection.html"><i class="ion-iphone"></i><em>Device Detection</em></a>
        <a class="close-sidebar" href="#"><i class="ion-ios-Fermer-empty"></i><em>Fermer</em></a>  
    </div>
</div>    -->
<!-- Hebergement Submenus -->    
<div class="submenu submenu-light" id="sub3">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>        
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-home" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>Commune</option>
        </select>
        </p>   
        <a href=""><i class="ion-android-search"></i><em>Tous</em></a>    
        <a href="#"><i class="ion-android-search"></i><em>Résidences de tourisme</em></a>       
        <a href="#"><i class="ion-android-search"></i><em>Hôtels</em></a>       
        <a href="#"><i class="ion-android-search"></i><em>Gîtes/Meublés</em></a>       
        <a href="#"><i class="ion-android-search"></i><em>Chambres d’hôtes</em></a>       
        <a href="#"><i class="ion-android-search"></i><em>Campings</em></a>        
    </div>
</div>    
<!-- Portfolio Submenus -->
<div class="submenu submenu-light" id="sub4">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-home" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>Commune</option>
        </select>
        </p>       
        <a href="#"><i class="ion-android-search"></i><em>Tous</em></a>           
    </div>
</div>
<!-- Page Submenus -->
<div class="submenu submenu-light" id="sub5">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-home" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>Commune</option>
        </select>
        </p>        
        <a href="#"><i class="ion-android-search"></i><em>Tous</em></a>         
    </div>
</div>    
<!-- AppStyled Submenus -->
<div class="submenu submenu-light" id="sub6">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-home" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>Commune</option>
        </select>
        </p>   
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-settings-strong" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>type de loisir</option>
        </select>
        </p>       
        <a href="#"><i class="ion-android-search"></i><em>Tous</em></a>           
    </div>
</div>
<!-- Store Submenus -->
<div class="submenu submenu-light" id="sub7">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>    
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-home" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>Commune</option>
        </select>
        </p>   
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-settings-strong" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>type de loisir</option>
        </select>
        </p>       

        <a href="#"><i class="ion-android-search"></i><em>Tous</em></a>           
    </div>
</div>    
<!-- News Submenus -->
<div class="submenu submenu-light" id="sub8">
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>    
        <p style="
    height: 60px;
    margin: 0;
    line-height: 60px;
    padding-left: 60px;"><i class="ion-ios-home" style="
    height: 60px;
    width: 60px;
    position: absolute;
    left: 0px;
    font-size: 20px;
    line-height: 60px;
    text-align: center;
"></i>
        <select id="#communes" style="
    width: 135px;
    height: 30px;
    overflow: hidden !important;
" >
            <option>Commune</option>
        </select>
        <a href="#"><i class="ion-android-search"></i><em>Tous</em></a>           
    </div>
</div>
<!-- MobileUI Submenus -->
<div class="submenu submenu-light" id="sub9"> 
    <div class="submenu-scroll">
        <a class="close-sidebar" href="#"><i class="ion-ios-close-empty"></i><em>Fermer</em></a>     
        <a href="#"><i class="ion-android-search"></i><em>Tous</em></a>          
    </div>
</div>

<div class="bg bg-full bg-cover"></div>
            
<div id="page-content" class="page-content header-clear bg bg-cover bg-transparent">

    <div id="page-content-scroll">        
     
   	<code><?php echo $urlIframe; ?></code>      
    





    <iframe src="<?php echo $urlIframe; ?>" width="100%" height="110%" style="
    z-index: 100;
    opacity: 1;
"></iframe>

        
    </div>  
</div>
        
<div class="share-bottom share-dark">
    <h3>Share Page</h3>
    <div class="share-socials-bottom">
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.themeforest.net/">
            <i class="ion-social-facebook-outline icon-ghost facebook-bg"></i>
            Facebook
        </a>
        <a href="https://twitter.com/home?status=Check%20out%20ThemeForest%20http://www.themeforest.net">
            <i class="ion-social-twitter-outline twitter-bg"></i>
            Twitter
        </a>
        <a href="https://plus.google.com/share?url=http://www.themeforest.net">
            <i class="ion-social-googleplus-outline icon-ghost google-bg"></i>
            Google
        </a>
        <a href="https://pinterest.com/pin/create/button/?url=http://www.themeforest.net/&media=https://0.s3.envato.com/files/63790821/profile-image.jpg&description=Themes%20and%20Templates">
            <i class="ion-social-pinterest-outline icon-ghost pinterest-bg"></i>
            Pinterest
        </a>
        <a href="sms:">
            <i class="ion-ios-chatboxes-outline icon-ghost sms-bg"></i>
            Text
        </a>
        <a href="mailto:?&subject=Check this page out!&body=http://www.themeforest.net">
            <i class="ion-ios-email-outline icon-ghost mail-bg"></i>
            Email
        </a>
        <div class="clear"></div>
    </div>
</div>
 
    
</div>
</body>