<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM apdk where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	if($k == 'title')
		$k = 'ftitle';
	$$k = $v;
}
include 'new_document_apdk.php';
?>