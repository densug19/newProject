<?php
session_start(); //start session
session_destroy(); //gunakan jika data bertumpuk (atau barusan mencoba)
//dependancy
require_once 'models/role_model.php';
echo "== default data role =="."<br>";
//testing create model and view all datas
$obj_Role = new modelRole();
foreach ($obj_Role->getAllRoles() as $role) {
echo "role id: ".$role->role_id."<br>";
echo "role name: ".$role->role_name."<br>";
echo "role desc: ".$role->role_desc."<br>";
echo "role status: ".$role->role_status."<br><br>";
}
//add new role
echo "== testing add new role =="."<br>";
$obj_Role->addRole (role_name: "new role", role_desc: "testing new role", role_status: 0);
$obj_Role->addRole(role_name: "very new role", role_desc: "testing new new role", role_status: 1);
foreach ($obj_Role->getAllRoles() as $role) {
echo "role id: ".$role->role_id."<br>";
echo "role name: ".$role->role_name."<br>";
echo "role desc: ".$role->role_desc."<br>";
echo "role status: ".$role->role_status."<br><br>";
}

//update role
echo "== update data role =="."<br>";
$obj_Role->updateRole (1, "update role", "role terupdate", 1);
foreach ($obj_Role->getAllRoles() as $role) {
    echo "role id: ".$role->role_id."<br>";
    echo "role name: ".$role->role_name."<br>";
    echo "role desc: ".$role->role_desc."<br>";
    echo "role status: ".$role->role_status."<br><br>";
}

//delete role
echo "== delete data role =="."<br>";
$obj_Role->deleteRole (1);
foreach ($obj_Role->getAllRoles() as $role) {
    echo "role id: ".$role->role_id."<br>";
    echo "role name: ".$role->role_name."<br>";
    echo "role desc: ".$role->role_desc."<br>";
    echo "role status: ".$role->role_status."<br><br>";
}

?>