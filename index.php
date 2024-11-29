<?php
require_once 'models/role_model.php';
session_start();
if (isset($_GET['modul'])){
    $modul = $_GET['modul'];
}else{ 
    $modul = 'dashboard';
}
$obj_role = new modelRole();
$fitur = isset($_GET['fitur']) ? $_GET['fitur'] : null;
    $id = isset($_GET['id']) ? $_GET['id'] : null;
switch ($modul){
    case 'dashboard':
        include 'views/kosong.php';
        break;
    case 'role':
        


        switch($fitur){
            case 'add':
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                  $name = $_POST['role_name'];
                  $desc = $_POST['role_description'];
                  $status = $_POST['role_status'];
                  $obj_role->addRole($name, $desc, $status);
                  header('location: index.php?modul=role');
                }else {
                  include 'views/role_input.php';
                }
                break;
            case 'delete' :
                $obj_role -> deleteRole($id);
                header('location : index.php?modul=role');
                break;
            case 'update' :
                $role = $obj_role->getRoleById($id);
                include 'views/role_edit.php';
                break;
            case 'edit' :
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = $_POST['role_name'];
                    $desc = $_POST['role_description'];
                    $status = $_POST['role_status'];
                    $obj_role->updateRole($id,$name, $desc, $status);
                    header('location: index.php?modul=role');
                  }else {
                    include 'views/role_list.php';
                  }
                break;
            default:
                $roles = $obj_role->getAllroles();
                include 'views/role_list.php';
                break;
            
        }
    
}
?>