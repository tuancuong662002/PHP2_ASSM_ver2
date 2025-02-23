<?php
 $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
 $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'category':
            switch ($act) {
                case 'list':
                    require_once('Views/category/list.php');
                    break;
                case 'add':
                    require_once('Views/category/add.php');
                    break;
                case 'edit':
                    require_once('Views/category/edit.php');
                    break;
                default:
                    require_once('Views/category/list.php');
                    break;
            }
         break;
         
        case 'product':
            switch ($act) {
                case 'list':
                    require_once('Views/product/list.php'); 
                    break;
                case 'add':
                    require_once('Views/product/add.php'); 
                    break;
                case 'edit':
                    require_once('Views/product/edit.php'); 
                    break;
                default:
                    require_once('Views/product/list.php'); 
                    break;
                
            }
            break;
            case 'favorite':
                switch ($act) {
                    case 'list':
                        require_once('Views/favorite/list.php');
                        break;
                    default:
                        require_once('Views/favorite/list.php');
                        break;
                }   
                break;
         case 'coupon':
                switch ($act) {
                    case 'list':
                        require_once('Views/coupon/list.php');
                        break;
                    case 'add':
                        require_once('Views/coupon/add.php');
                        break;
                    case 'detail':
                        require_once('Views/coupon/detail.php');
                        break;
                    case 'edit':
                        require_once('Views/coupon/edit.php');
                        break;
                    case 'delete':
                        require_once('Views/coupon/delete.php');
                        break;
                    default:
                        require_once('Views/coupon/list.php');
                        break;
                    }
            
            break;
            case 'user':
                switch ($act) {
                    case 'list':
                        require_once('Views/user/list.php');
                        break;
                    case 'add':
                        require_once('Views/user/add.php');
                        break;
                    case 'edit':
                        require_once('Views/user/edit.php');
                        break;
                    default:
                        require_once('Views/user/list.php');
                        break;
                }
                break;
    
            case 'address':
                switch ($act) {
                    case 'list':
                        require_once('Views/address/list.php');
                        break;
                    break;
                    case 'add':
                        require_once('Views/address/add.php');
                        break;
                    default:
                        require_once('Views/address/list.php');
                        break;
                }
                break;
            case 'blog':
                require_once('controllers/AdminCuongController.php');
                $controller_obj = new AdminCuongController();
                switch ($act) {
                    case 'list':
                        require_once('Views/blog/list.php');
                        break;
                    case 'comments':
                        require_once('Views/blog/comment.php');
                        break;
                    case 'add':
                        require_once('Views/blog/add.php');
                        break;
                    case 'edit':
                        require_once('Views/blog/edit.php');
                        break;
                    case 'soft_delete':
                        require_once('Views/blog/soft_delete.php');
                        break;
                    case 'force_delete':
                        require_once('Views/blog/force_delete.php');
                        break;
                    case 'recycle':
                        require_once('Views/blog/recycle_bin.php');
                        break;
                    case 'back_up':
                        break;
                    default:
                        require_once('Views/blog/list.php');
                        break;
                }
                break;
            case 'comment':
                switch ($act) {
                case 'list':
                    require_once('Views/comment/list.php');
                    break;
                case 'add':
                    require_once('Views/comment/add.php');
                    break;
                case 'recycle':
                    require_once('Views/comment/recycle_bin.php');
                    break;
                default:
                    require_once('Views/comment/list.php');
                    break;
                }
                break;
        case 'review' : 
            switch ($act) {
                case 'list':
                    require_once('Views/review/list.php');
                    break;
                case 'detail':
                    require_once('Views/review/detail.php');
                    break;
                default:
                    require_once('Views/review/list.php');
                    break;
                }
            break;
        
        case 'bill':
            switch ($act) {
                case 'list':
                    require_once('Views/bills/list.php');
                    break;
                case 'detail':
                    require_once('Views/bills/details.php');
                    break;
                case 'archived':
                    require_once('Views/bills/archived.php');
                    break;
                default:
                    require_once('Views/bills/list.php');
                    break;
                }
            break;
       
        case 'login':
            switch ($act) {
                case 'admin':
                    require_once('Views/dashboard/admin.php');
                    break;
                default:
                    require_once('Views/dashboard/admin.php');
                    break;
                }
            break;
        case 'authorization':
            switch ($act) {
                case 'authorization_index':
                require_once('Views/authorization/index.php');
                break;
                case 'authorize':
                require_once('Views/authorization/authorize.php');
                break;
            }
            break;
        }
 ?>