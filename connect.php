<?php
// connect.php
// programmed by prach konphet
// created october 16, 2005
// update june 1, 2006

// กำหนดตัวแปรเพื่อนำไปใช้งาน
$hostname		= "localhost";				// ชื่อโฮสต์
$username		= "root";					// ชื่อผู้ใช้
$password		= "1234";				// รหัสผ่าน
$dbname		= "e-coastal";				// ชื่อฐานข้อมูล

$link = mysql_connect($hostname, $username, $password);
if (!$link) {
	echo "<h3>ERROR : ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
	exit();
}

?>