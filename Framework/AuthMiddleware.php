<?php

class AuthMiddleware {
    public static function checkLogin() {
        if (!isset($_SESSION['login'])) {
            header('Location: ?mod=login');
            exit();
        }
    }
    public static function checkPrivilege($module, $action) {
        if (!isset($_SESSION['privilege'][$module]) && !isset($_SESSION['privilege'][$module][$action])) {
            header('Location: ?mod=login');
            exit();
        }
    }
}