<?php

session_start();
define("BASE_URL", "http://localhost/");
require_once 'Models/Privilege.php';
require_once 'router.php';
require_once '../core/Router.php';
require_once '../Framework/AuthMiddleware.php';
$Route = new Route();
// Check privileges
$select_act = new Privilege_act();
$user_email = $_SESSION['login']['user_email'];
if (isset($_SESSION['privilege'])) unset($_SESSION['privilege']);
$list_privilege = $select_act->getPrivilegeAct($user_email);

foreach ($list_privilege as $privilege) {
    $_SESSION['privilege'][$privilege['name']][$privilege['privilege_act']] = 1;
}

// $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
// $act = isset($_GET['act']) ? $_GET['act'] : "admin";
// // Route the request
// Router::route($mod, $act);



// Định nghĩa route
$Route->add('login', 'LoginController', [], 'admin');
$Route->add('blog', 'AdminCuongController', [AuthMiddleware::class], 'list');
$Route->add('comment', 'CommentController', [AuthMiddleware::class], 'comment_index');
$Route->add('product', 'ProductController', [AuthMiddleware::class], 'list');
$Route->add('category', 'CategoryController', [AuthMiddleware::class], 'list');
$Route->add('authorization', 'Authorization_members', [AuthMiddleware::class], 'authorization_index');

// Xử lý request
$mod = $_GET['mod'] ?? 'login';
$act = $_GET['act'] ?? 'index';

$Route->dispatch($mod, $act);