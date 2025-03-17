<?php
session_start();
require_once __DIR__ . '/../model/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->userModel->register($username, $password)) {
                header("Location: ../view/login.php");
                exit();
            } else {
                echo "Registration failed!";
            }
        }
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            
    
            if ($user = $this->userModel->login($username, $password);) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
    
                if (isset($_POST["remember"])) {
                    setcookie("username", $username, time() + (86400 * 30), "/");
                    setcookie("user_id", $user["id"], time() + (86400 * 30), "/");
                }
                header("Location: ../view/dashboard.php");
                exit();
            } else {
                echo "Invalid login credentials!";
            }
        }
    }
    

    public function logout() {
        session_destroy();
        setcookie("username", "", time() - 3600, "/");
        setcookie("user_id", "", time() - 3600, "/");
        header("Location: ../view/login.php");
        exit();
    }
}

$auth = new AuthController();

if (isset($_POST["register"])) {
    $auth->register();
}

if (isset($_POST["login"])) {
    $auth->login();
}

if (isset($_GET["logout"])) {
    $auth->logout();
}
?>
