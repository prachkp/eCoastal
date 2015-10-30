<?php

// ส่วนที่ทำให้แสดงข้อมูลภาษาไทย
$sql = 'SET CHARACTER SET utf8';

mysql_query($sql);

$sql ="SET collation_connection = 'utf8_general_ci' ";

mysql_query($sql);
//สิ้นสุดส่วนที่แสดงภาษาไทย

?>