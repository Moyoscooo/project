<?php
function baseUrl(){
    echo "//localhost/project/";
}
function index(){
    echo "//localhost/Project/index.php";
}

 function displayUrl ($page){
    if ($page == 'home'){
         echo index()."/home";
    }
}
?>