<?php

// Fungsi untuk melakukan redirect ke URL tertentu
function redirect($url)
{
    header("Location: $url");
    exit();
}

// Fungsi untuk menampilkan pesan error
function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

// Fungsi untuk menampilkan pesan sukses
function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}

// Fungsi untuk mengambil data dari database (contoh)
function get_data_from_database($table, $id)
{
    // Implementasi pengambilan data dari database
    // $table adalah nama tabel, $id adalah ID data yang ingin diambil
    // Return data dalam bentuk array atau objek
}

// Fungsi untuk menyimpan data ke database (contoh)
function save_data_to_database($table, $data)
{
    // Implementasi penyimpanan data ke database
    // $table adalah nama tabel, $data adalah array data yang akan disimpan
    // Return true jika berhasil, false jika gagal
}

// Fungsi untuk validasi input (contoh)
function validate_input($input)
{
    // Implementasi validasi input, misalnya, cek apakah input adalah email yang valid
    // Return true jika valid, false jika tidak valid
}

// Fungsi untuk mengambil data customer (contoh)
function get_customer_data($customer_id)
{
    // Implementasi pengambilan data customer dari database
    // Return data customer dalam bentuk array atau objek
}

// Fungsi untuk mengambil data item (contoh)
function get_item_data($item_id)
{
    // Implementasi pengambilan data item dari database
    // Return data item dalam bentuk array atau objek
}


// Halaman Login Admin
function admin()
{
    require_once('../view/admin-panel/admin-login.php'); //Memuat atau menjalankansuatu file
}

// Halaman Dashboard Admin
function dashboard()
{
    require_once('../view/admin-panel/admin-dashboard.php');
}

// Halaman Login Customer
function customer_login()
{
    require_once('../view/forms/customer-login.php');
}

// Proses Login Customer
function customer_login_save()
{
    echo "Proses Login Customer";
}

// Halaman Registrasi Customer
function customer_register()
{
    require_once('../view/forms/customer-register.php');
}

// Proses Registrasi Customer
function customer_register_save()
{
    echo "Proses Register Customer";
}

//Halaman Profil Customer
function customer_profile()
{
    require_once('../view/forms/customer-profile.php');
}

// Proses Edit Profil customer
function customer_profile_edited()
{
    echo "Proses Edit Profil Customer";
}

// Halaman Detail Item
function item($id)
{
    require_once('../view/shop/item.php');
    getitemById($id);
}

// Halaman Keranjang Belanja
function cart()
{
    require_once('../view/shop/cart.php');
}

// Halaman Detail Pesanan
function order($id)
{
    require_once('../view/shop/item.php');
    getOrderById($id);
}

// Halaman Kontak
function contact()
{
    require_once('../view/shop/contact.php');
}

// Proses Logout
function logout()
{
    echo "Proses Logout";
}
