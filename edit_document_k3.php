<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM k3 where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	if($k == 'title')
		$k = 'ftitle';
	$$k = $v;
}
include 'new_document_k3.php';
?>