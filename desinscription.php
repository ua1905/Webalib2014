<?php
include ('config/parametres.php');
$fichier="services.php";
$localUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$urlpage="services";
$pageOK = array($urlpage => $fichier);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Newsletter";
$seoTitle= "Newsletter - Inscription - Webalib";
$seoDescription ="Inscription a la newsletter de webalib";
$seoKeywords ="Newsletter";

    if($_GET['tru']==1)
    {
		setcookie("email", $_GET['email'], time()+120);
    }

if(array_key_exists('add_head',$ajoutValide)){
   include('include/head.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/header.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/menu.php'); 
}else echo 'error';

if(array_key_exists('page_services',$pageValide)){
   include('contenu/contenu-desinscription.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>
