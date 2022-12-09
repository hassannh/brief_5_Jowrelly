<?php
// require_once './app/views/includes/header.php';

require_once './autoload.php';
// require_once './app/controllers/HomeController.php';

$home = new HomeController();

$pages = ['home', 'add', 'update', 'delete','about','contact','gallery','gallery2','login','Admin'];

if (isset($_GET['page'])) {
    if (in_array($_GET['page'],$pages)) {
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include ('app/views/includes/404.php');
    }
}else{
    $home -> index('home');
}

// require_once './app/views/includes/footer.php';


?>