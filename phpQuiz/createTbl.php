<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<?php
		include 'dbCon.php';
		$query="create table student (roll bigint primary key not null, Fullname varchar(50), class varchar(20), email varchar(50), mob bigint)";
		mysqli_query($conn,$query)or die('cannot create table');
		$query="create table faculty (eid bigint primary key not null, Fullname varchar(50), email varchar(50), mob bigint)";
		mysqli_query($conn,$query)or die('cannot create table');
	?>
	</body>
</html>