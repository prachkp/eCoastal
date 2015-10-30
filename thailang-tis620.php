<?php

// ส่วนที่ทำให้แสดงข้อมูลภาษาไทย
$sql = 'SET CHARACTER SET tis620';

mysql_query($sql);

$sql ="SET collation_connection = 'tis620_thai_ci' ";

mysql_query($sql);
//สิ้นสุดส่วนที่แสดงภาษาไทย

?>