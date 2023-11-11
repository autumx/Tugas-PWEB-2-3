<?php
require_once 'controller/controllers.php';
class RoleController{
    static function index() {
        view('subview/roles', [
            'roles' => Roles::select(),
            'header' => titleheader('Read data scr AJAX dgn jQuery', 'h1', 'text-center mb-3')
        ]);
    }

    //TUGAS 3
    static function getRoles($id) { //fungsi untuk menampilkan data berdasarkan id role
        if (is_numeric($id)) {
            $students = Students::joinRoles("AND r.id = $id"); //memanggil fungsi joinRoles dengan kalusa
            echo json_encode($students); //mengkonversi hasil dalam format json 
        } else {
            echo json_encode(array('error' => 'Invalid role ID'));
        }
    }
}