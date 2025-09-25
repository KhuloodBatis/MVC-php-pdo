<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/home':
        require 'app/controllers/HomeController.php';
        (new HomeController())->index();
        break;

    case '/register':
        require 'app/controllers/AuthController.php';
        $controller = new AuthController();
        ($_SERVER['REQUEST_METHOD'] === 'POST')
            ? $controller->register()
            : $controller->showRegisterForm();
        break;

    case '/login':
        require 'app/controllers/AuthController.php';
        $controller = new AuthController();
        ($_SERVER['REQUEST_METHOD'] === 'POST')
            ? $controller->login()
            : $controller->showLoginForm();
        break;

    case '/logout':
        require 'app/controllers/AuthController.php';
        (new AuthController())->logout();
        break;

    default:
        echo "<h1>404 - Page Not Found</h1>";
        break;
}