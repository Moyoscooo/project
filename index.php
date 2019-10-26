<!DOCTYPE html>
<?php include("appController.php");
?>
<html >
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php baseUrl() ?>assets/images/moh.jpg" type="image/x-icon">
  <meta name="description" content="">
  <title>EthNigeria Hackathon</title>
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php baseUrl() ?>assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<?php
function getCurrentUri()
{
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
    return $uri;
}

$base_url = getCurrentUri();
$routes = array();
$routes = explode('/', $base_url);
foreach($routes as $route)
{
    if(trim($route) != '')
        array_push($routes, $route);
}

if(isset($routes[2]) == "" || $routes[2] == "null" || $routes[2] == "home"){
    $link = "pages/home.php";
}
else {
    $link = "pages/404.php";
}
include('header.php');
include($link);
include('footer.php')

?>


<script src="<?php baseUrl() ?>assets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?php baseUrl() ?>assets/popper/popper.min.js"></script>
  <script src="<?php baseUrl() ?>assets/tether/tether.min.js"></script>
  <script src="<?php baseUrl() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php baseUrl() ?>assets/smoothscroll/smooth-scroll.js"></script>
  <script src="<?php baseUrl() ?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="<?php baseUrl() ?>assets/countdown/jquery.countdown.min.js"></script>
  <script src="<?php baseUrl() ?>assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="<?php baseUrl() ?>assets/dropdown/js/script.min.js"></script>
  <script src="<?php baseUrl() ?>assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>