<?php
// connect.php
// programmed by prach konphet
// created october 16, 2005
// update june 1, 2006

// ��˹���������͹����ҹ
$hostname		= "localhost";				// ������ʵ�
$username		= "root";					// ���ͼ����
$password		= "1234";				// ���ʼ�ҹ
$dbname		= "e-coastal";				// ���Ͱҹ������

$link = mysql_connect($hostname, $username, $password);
if (!$link) {
	echo "<h3>ERROR : �������ö�Դ��Ͱҹ��������</h3>";
	exit();
}

?>