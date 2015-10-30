<?php

session_start();
//session_unregister("username_log"); 
//session_destroy();

$hostname				=	 "localhost";			//ชื่อโฮสต์
$username				=	 "root";					//ชื่อผู้ใช้
$password				=	 "CusServ";			//รหัสผ่าน
$dbname				=	 "ecoastal";				//ชื่อฐานข้อมูล
$tblname				=	 "tblcommerce";		//ชื่อตาราง 

// เริ่มติดต่อฐานข้อมูล
mysql_connect($hostname, $username, $password) or die("ติดต่อฐานข้อมูลไม่ได้"); 

// เลือกฐานข้อมูล
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");

// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "select * from $tblname where UserName='".$_POST['username_log']."' and PassWord='".$_POST['password_log']."'"; //เช็คค่าข้อมูลที่ส่งมาจากฟอร์ม

echo "<br> sql : ".$sql."<br>";

$dbquery = mysql_db_query($dbname, $sql);

// หาจำนวนเรกคอร์ดข้อมูล
$num_rows = mysql_num_rows($dbquery);

$_SESSION['login'] = "true";
$_SESSION['user'] = $_POST['username_log'];
$_SESSION['pass'] = $_POST['password_log'];

//Session_register("true");
//Session_register("username_log");
//echo $num_rows;

if($num_rows==1){
header("location: application.php"); //ไปไปตามหน้าที่คุณต้องการ
}else {
// session_register("code_error");
header("location: denied.html"); //ไม่ถูกต้องให้กับไปหน้าเดิม
}


//echo "<br>";
// foreach ($_POST as $key => $value)
//    {
//        echo "POST : $key : $value<br />\n";
//    }
//    foreach ($_GET as $key => $value)
//    {
//        echo "GET : $key : $value<br />\n";
//    }
//    foreach ($_FILES as $key => $value)
//    {
//        echo "FILES : $key : $value<br />\n";
//    }
//    foreach ($_SESSION as $key => $value)
//    {
//        echo "SESSION : $key : $value<br />\n";
//    }
?>

<html>
<body>

<!-- เพิ่ม Google Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-5061364-1";
urchinTracker();
</script>
<!-- สิ้นสุดการเพิ่ม Google Analytics -->

</body>
</html>