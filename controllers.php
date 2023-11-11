<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';


abstract class Controller {
    abstract static function index(); // SHOW ALL
    abstract static function show($data); // SHOW SPECIFIC
    abstract static function add(); // ADD DATA FORM
    abstract static function save(); // SAVE DATA
    abstract static function edit($data); // EDIT SPECIFIC
    abstract static function update($data); // UPDATE DATA
    abstract static function remove($data);
}

//TUGAS 3 
abstract class AbstractStudents {
    abstract static function select(); //menselect semua data student
    abstract static function insert($id, $name, $email, $role_fk); //menyisipkan/menambahkan data baru 
    abstract static function delete(); //menghapus data student
    abstract static function joinRoles($clauseAddition = ""); //operasi join roles
    abstract static function fresh(); // mengembalikan data
    abstract static function selectById($id); //memilih data berdasarkan id 
    abstract static function selectWhere($clause); //memilih data berdasarkan kondisi
    abstract static function updateById($id, $name, $email, $role_fk); //mengupdate data berdsarkan id
    abstract static function updateWhere($clause, $name, $email, $role_fk); //mengupdate data berdasarkan kondisi
    abstract static function deleteById($id);  //menghapus data menggunakan id
    abstract static function deleteWhere($clause); //menghapus data menggunakan kondisi
}


interface CustomFunctions {
    static function purge();
    static function restore();
}