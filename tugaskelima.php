<?php 
	$db_host = 'localhost'; // Nama Server
	$db_user = 'root'; //User Server
	$db_pass = ''; //Password Server
	$db_name = 'blog'; //Nama Database
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn){
		die ('gagal terhubung Mysql: ' .mysqli_connect_error());
	}
	
	$sql = 'SELECT title FROM posts';
	$sqldua = 'SELECT username FROM users INNER JOIN posts ON users.id = posts.id';
	$sqltiga = 'SELECT comment FROM comments INNER JOIN posts ON comments.id = posts.id';
	
	$query = mysqli_query($conn, $sql);
	$querydua = mysqli_query($conn, $sqldua);
	$querytiga = mysqli_query($conn, $sqltiga);
	
	$row = mysqli_fetch_array($query);
	echo 'Title: ' . $row['title']. '</br/>';
	
	$rowdua = mysqli_fetch_array($querydua);
	echo 'Dibuat Oleh : ' . $rowdua['username']. '</br/>';
	
	$rowtiga = mysqli_fetch_array($querytiga);
	echo 'Comment : ' . $rowtiga['comment']. '</br/>';
 ?>