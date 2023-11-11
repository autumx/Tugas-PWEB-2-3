<?php

require 'functions.php'; // Sertakan file functions.php

// Fungsi untuk mengambil parameter action dari URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Memanggil fungsi sesuai dengan parameter action
switch ($action) {
    case 'admin':
        admin();
        break;
    case 'dashboard':
        dashboard();
        break;
    case 'customer-login':
        customer_login();
        break;
    case 'customer-login-save':
        customer_login_save();
        break;
    case 'customer-register':
        customer_register();
        break;
    case 'customer-register-save':
        customer_register_save();
        break;
    case 'customer-profile':
        customer_profile();
        break;
    case 'customer-profile-edited':
        customer_profile_edited();
        break;
    case 'item':
        if (isset($_GET['id'])) {
            item($_GET['id']);
        } else {
            display_error("Item not found.");
        }
        break;
    case 'cart':
        cart();
        break;
    case 'order':
        if (isset($_GET['id'])) {
            order($_GET['id']);
        } else {
            display_error("Order not found.");
        }
        break;
    case 'contact':
        contact();
        break;
    case 'logout':
        logout();
        break;
    default:
        home();
        break;
}
