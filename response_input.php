<?php 
// echo " ini adalah file testing respon input";
// echo "<br>";
// echo "modul = ".$_GET['modul']."<br>";
// echo "fitur = ".$_GET['fitur']."<br>";
// echo "request method :".$_SERVER['REQUEST_METHOD']."<br>";
// print_r($_POST);
// echo "<br>";
// echo "nama role: ".$_POST['role_name']."<br>";
// echo "status role: ".$_POST['role_status']."<br>";
// echo "keterangan role: ".$_POST['role_desc']."<br>";

require_once 'domain_object/node_role.php';
$obj_Role = [];
$obj_Role []= new Role(1,$_POST['role_name'],$_POST['role_desc'],$_POST['role_status']);
include 'views/role_list.php';
 ?>