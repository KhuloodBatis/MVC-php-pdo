<?php

class AuthMiddleware {
    public static function check() {
        if (empty($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }
    }
}