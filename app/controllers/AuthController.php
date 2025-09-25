<?php
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showRegisterForm()
    {
        require 'app/view/auth/register.view.php';
    }

    public function register()
    {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        if ($this->user->findByEmail($email)) {
            $error = "Email already exists!";
            require 'app/view/auth/register.view.php';
            return;
        }

        if ($this->user->create($username, $email, $password)) {
            $_SESSION['user'] = $username;
            header("Location: /home");
            exit(); // important!
        }

        $error = "Registration failed!";
        require 'app/view/auth/register.view.php';
    }

    public function showLoginForm()
    {
        require 'app/view/auth/login.view.php';
    }

    public function login()
    {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $user = $this->user->findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: /home");
        } else {
            $error = "Invalid credentials!";
            require 'app/view/auth/login.view.php';
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: /login");
    }
}
