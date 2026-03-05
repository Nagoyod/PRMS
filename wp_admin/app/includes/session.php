<?php
	session_start();
	include 'conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../index.php');
	}
	$sql = "SELECT * FROM tbl_users WHERE ID = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	function audit_log($conn,$user,$action,$data=''){
		$fname=$user['FIRSTNAME'].' '.$user['MI'].' '.$user['LASTNAME'];
		$type=$user['ROLE'];
		$stmt=$conn->prepare("INSERT INTO history (data,action,date,user) VALUES (?,?,NOW(),?)");
		$d=$data===''?$fname:$fname.' | '.$data;
		$stmt->bind_param('sss',$d,$action,$type);
		$stmt->execute();
	}
?>
