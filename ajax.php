<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'upload_file'){
	$save = $crud->upload_file();
	if($save)
		echo $save;
	// var_dump($_FILES);
}
if($action == 'remove_file'){
	$delete = $crud->remove_file();
	if($delete)
		echo $delete;
}

if($action == 'save_upload'){
	$save = $crud->save_upload();
	if($save)
		echo $save;
}

if($action == 'save_upload_rldc'){
	$save = $crud->save_upload_rldc();
	if($save)
		echo $save;
}

if($action == 'save_upload_rlac'){
	$save = $crud->save_upload_rlac();
	if($save)
		echo $save;
}

if($action == 'save_upload_k3'){
	$save = $crud->save_upload_k3();
	if($save)
		echo $save;
}

if($action == 'save_upload_apdk'){
	$save = $crud->save_upload_apdk();
	if($save)
		echo $save;
}

if($action == 'save_upload_disda'){
	$save = $crud->save_upload_disda();
	if($save)
		echo $save;
}

if($action == 'delete_file'){
	$delete = $crud->delete_file();
	if($delete)
		echo $delete;
}

if($action == 'delete_file_rldc'){
	$delete = $crud->delete_file_rldc();
	if($delete)
		echo $delete;
}

if($action == 'delete_file_rlac'){
	$delete = $crud->delete_file_rlac();
	if($delete)
		echo $delete;
}

if($action == 'delete_file_k3'){
	$delete = $crud->delete_file_k3();
	if($delete)
		echo $delete;
}

if($action == 'delete_file_apdk'){
	$delete = $crud->delete_file_apdk();
	if($delete)
		echo $delete;
}

if($action == 'delete_file_disda'){
	$delete = $crud->delete_file_disda();
	if($delete)
		echo $delete;
}

if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'save_folder'){
	$save = $crud->save_folder();
	if($save)
		echo $save;
}
if($action == 'delete_folder'){
	$delete = $crud->delete_folder();
	if($delete)
		echo $delete;
}
if($action == 'delete_file'){
	$delete = $crud->delete_file();
	if($delete)
		echo $delete;
}
if($action == 'save_files'){
	$save = $crud->save_files();
	if($save)
		echo $save;
}
if($action == 'file_rename'){
	$save = $crud->file_rename();
	if($save)
		echo $save;
}

ob_end_flush();
?>
