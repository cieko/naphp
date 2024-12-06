<?php
require 'router.php';

$router = new Router();

$router->add('/craftsaura/', 'controllers/home.php');
$router->add('/craftsaura/about', 'controllers/about.php');
$router->add('/craftsaura/legals', 'controllers/legal.php');
$router->add('/craftsaura/contact', 'controllers/contact.php');
$router->add('/craftsaura/woodenHandicraft', 'controllers/wooden-handicraft.php');
$router->add('/craftsaura/metalHandicraft', 'controllers/metal-handicraft.php');

$router->route($_SERVER['REQUEST_URI']);
?>