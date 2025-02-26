<?php
 $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
 $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'category':
            switch ($act) {
                case 'list':
                    require_once('category/list.php');
                    break;
                case 'add':
                    require_once('category/add.php');
                    break;
                case 'edit':
                    require_once('category/edit.php');
                    break;
                default:
                    require_once('category/list.php');
                    break;
            }
         break;
         
        case 'product':
            switch ($act) {
                case 'list':
                    require_once('product/list.php'); 
                    break;
                case 'add':
                    require_once('product/add.php'); 
                    break;
                case 'edit':
                    require_once('product/edit.php'); 
                    break;
                default:
                    require_once('product/list.php'); 
                    break;
                
            }
            break;
            case 'favorite':
                switch ($act) {
                    case 'list':
                        require_once('favorite/list.php');
                        break;
                    default:
                        require_once('favorite/list.php');
                        break;
                }   
                break;
         case 'coupon':
                switch ($act) {
                    case 'list':
                        require_once('coupon/list.php');
                        break;
                    case 'add':
                        require_once('coupon/add.php');
                        break;
                    case 'detail':
                        require_once('coupon/detail.php');
                        break;
                    case 'edit':
                        require_once('coupon/edit.php');
                        break;
                    case 'delete':
                        require_once('coupon/delete.php');
                        break;
                    default:
                        require_once('coupon/list.php');
                        break;
                    }
            
            break;
            case 'user':
                switch ($act) {
                    case 'list':
                        require_once('user/list.php');
                        break;
                    case 'add':
                        require_once('user/add.php');
                        break;
                    case 'edit':
                        require_once('user/edit.php');
                        break;
                    default:
                        require_once('user/list.php');
                        break;
                }
                break;
    
            case 'address':
                switch ($act) {
                    case 'list':
                        require_once('address/list.php');
                        break;
                    break;
                    case 'add':
                        require_once('address/add.php');
                        break;
                    default:
                        require_once('address/list.php');
                        break;
                }
                break;
            case 'blog':
                require_once('controllers/AdminCuongController.php');
                $controller_obj = new AdminCuongController();
                switch ($act) {
                    case 'list':
                        require_once('blog/list.php');
                        break;
                    case 'comments':
                        require_once('blog/comment.php');
                        break;
                    case 'add':
                        require_once('blog/add.php');
                        break;
                    case 'edit':
                        require_once('blog/edit.php');
                        break;
                    case 'soft_delete':
                        require_once('blog/soft_delete.php');
                        break;
                    case 'force_delete':
                        require_once('blog/force_delete.php');
                        break;
                    case 'recycle':
                        require_once('blog/recycle_bin.php');
                        break;
                    case 'back_up':
                        break;
                    default:
                        require_once('blog/list.php');
                        break;
                }
                break;
            case 'comment':
                switch ($act) {
                case 'list':
                    require_once('comment/list.php');
                    break;
                case 'add':
                    require_once('comment/add.php');
                    break;
                case 'recycle':
                    require_once('comment/recycle_bin.php');
                    break;
                default:
                    require_once('comment/list.php');
                    break;
                }
                break;
        case 'review' : 
            switch ($act) {
                case 'list':
                    require_once('review/list.php');
                    break;
                case 'detail':
                    require_once('review/detail.php');
                    break;
                default:
                    require_once('review/list.php');
                    break;
                }
            break;
        
        case 'bill':
            switch ($act) {
                case 'list':
                    require_once('bills/list.php');
                    break;
                case 'detail':
                    require_once('bills/details.php');
                    break;
                case 'archived':
                    require_once('bills/archived.php');
                    break;
                default:
                    require_once('bills/list.php');
                    break;
                }
            break;
       
        case 'login':
            switch ($act) {
                case 'admin':
                    require_once('dashboard/admin.php');
                    break;
                default:
                    require_once('dashboard/admin.php');
                    break;
                }
            break;
        case 'authorization':
            switch ($act) {
                case 'authorization_index':
                require_once('authorization/index.php');
                break;
                case 'authorize':
                require_once('authorization/authorize.php');
                break;
            }
            break;
        }
 ?>