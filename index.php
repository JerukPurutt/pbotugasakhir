<?php
session_start();
    require_once 'controller/role_controller.php';
    require_once 'controller/paket_controller.php';
    require_once 'controller/user_controller.php';
    require_once 'controller/login_controller.php';
    require_once 'controller/reservasi_controller.php';
    require_once 'controller/approve_controller.php';
    
    // Routing berdasarkan modul dan fitur
    // $modul = $_GET['modul'] ?? 'paket';
    // $fitur = $_GET['fitur'] ?? 'list';

    $modul = isset($_GET['modul']) ? $_GET['modul'] : null;
    // if (!isset($_SESSION['user']) && ($_GET['modul'] ?? '') !== 'login') {
    //     header('Location: index.php?modul=login&fitur=login');
    //     exit;
    // }
    if ($modul == 'role'){
        $controller = new RoleController();
        $fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
        switch ($fitur) {
            case 'list':
                $controller->listRole();
                break;
            case 'input':
                $controller->addRole();
                break;
            case 'delete':
                $controller->delete($_GET['role_id']);
                break;
            case 'edit':
                $controller->edit($_GET['role_id']);
                break;
            case 'update':
                $controller->update();
                break;
            default:
                echo "Fitur tidak ditemukan!";
                break;
        }
     
    }else if($modul == 'paket')     {
        $controller = new PaketController();
        $fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
        switch ($fitur) {
            case 'list':
                $controller->listPaket();
                break;
            case 'input':
                $controller->addPaket();
                break;  
            case 'delete':
                $controller->delete($_GET['id_paket']);
                break;
            case 'edit':
                $controller->edit($_GET['id_paket']);
                break;
            case 'update':
                $controller->update();
                break;
            default:
                echo "Fitur tidak ditemukan!";
                break;
        }
    }else if($modul == 'user'){
        $controller = new UserController();
        $fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
        switch ($fitur) {
            case 'list':
                $controller->listUser();
                break;
            case 'input':
                $controller->addUser();
                break;
            case 'delete':
                $controller->delete($_GET['user_id']);
                break;
            case 'edit':
                $controller->edit($_GET['user_id']);
                break;
            case 'update':
                $controller->update();
                break;
            default:
                echo "Fitur tidak ditemukan!";
            }
    }
    else if($modul == 'login'){
        $fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
        $controller = new LoginController();
        $modelPaket = new ModelPaket();
        switch ($fitur) {
            case 'login':
                $controller->login();
                break;
            case 'logout':
                $controller->logout();
                break;
            case 'register':
                $controller->register();
                break;
            case 'dashboard':
                $pakets = $modelPaket->getAllPaket();
                include 'views/user/landing_pages.php';
                break;
            }
    }else if($modul == 'reservasi'){
        $controller = new ReservasiController();
        $fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
        switch ($fitur) {
            case 'list':
                $controller->listReservasi();
                break;
            case 'edit':
                $controller->edit($_GET['id_reservasi']);
                break;
            case 'update':
                $controller->update();
                break;
            case 'save':
                $controller->saveReservasi();
                break;
            case 'list_reservasi':
                ;
                break;
            default:
                echo "Fitur tidak ditemukan!";
                break;
            }
        }else if($modul=='approve'){
            $controller = new ApproveController();
            $fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
            switch ($fitur) {
            case 'list':
                $controller->listReservasi();
            break;
            case 'update':
                $controller->updateStatus();
            break;
            }
        }
    
// include 'views/login.php';