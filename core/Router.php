<?php

require_once '../Framework/AuthMiddleware.php';

class Route{
    private static array $routes = [];

    // Đăng ký route
    public static function add(string $mod, string $controller, array $middlewares = [], string $defaultMethod = 'list') {
        self::$routes[$mod] = [
            'controller' => $controller,
            'middlewares' => $middlewares,
            'defaultMethod' => $defaultMethod
        ];
    }
    // Xử lý request
    public static function dispatch($mod, $act) {
        if (!isset(self::$routes[$mod])) {
            header('Location: ?mod=login');
            exit();
        }

        $route = self::$routes[$mod];
        require_once "controllers/{$route['controller']}.php";
        
        $controllerClass = "{$route['controller']}";
        $controller = new $controllerClass();

        // Xử lý Middleware
        // foreach ($route['middlewares'] as $middleware) {
        //     call_user_func([$middleware, 'handle'], $mod, $act);
        // }

        // Gọi action
        self::callControllerMethod($controller, $act, $route['defaultMethod']);
    }

    private static function callControllerMethod($controller, $act, $defaultMethod) {
        if (method_exists($controller, $act)) {
            $controller->$act();
        } else {
            $controller->$defaultMethod();
        }
    }
}