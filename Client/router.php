<?php
$act = isset($_GET['act']) ? $_GET['act'] : "blog";
switch ($act) {
    case "taikhoan":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
        if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
            switch ($act) {
                case 'login':
                    require_once("Views/login/login.php");
                    break;
                case 'account':
                    require_once("Views/login/my-account.php");
                    break;
                default:
                    require_once("Views/login/login.php");
                    break;
            }
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'login':
                        require_once("Views/login/login.php");
                        break;
                    case 'account':
                        require_once("Views/login/my-account.php");
                        break;
                    default:
                        require_once("<Views>login/login.php");
                        break;
                }
            } else {
                switch ($act) {
                    case 'login':
                        require_once("Views/login/login.php");
                        break;
                    default:
                        require_once("Views/login/login.php");
                        break;
                }
            }
            break;
        }
    case "home":
        require_once "Views/blog/blog.php";
        break;
    case "blog": 
        require_once "Views/blog/blog.php";
        break;
    case "blog_detail":
        require_once "Views/blog/blog_detail.php";
        break;
    default:
        require_once("error-404.php");
        break;
}