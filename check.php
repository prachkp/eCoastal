<?php

session_start();
//session_unregister("username_log"); 
//session_destroy();

$hostname				=	 "localhost";			//������ʵ�
$username				=	 "root";					//���ͼ����
$password				=	 "CusServ";			//���ʼ�ҹ
$dbname				=	 "ecoastal";				//���Ͱҹ������
$tblname				=	 "tblcommerce";		//���͵��ҧ 

// ������Դ��Ͱҹ������
mysql_connect($hostname, $username, $password) or die("�Դ��Ͱҹ�����������"); 

// ���͡�ҹ������
mysql_select_db($dbname) or die("���͡�ҹ�����������");

// ����� SQL ���������ӧҹ
$sql = "select * from $tblname where UserName='".$_POST['username_log']."' and PassWord='".$_POST['password_log']."'"; //�礤�Ң����ŷ�����Ҩҡ�����

echo "<br> sql : ".$sql."<br>";

$dbquery = mysql_db_query($dbname, $sql);

// �Ҩӹǹ�á���촢�����
$num_rows = mysql_num_rows($dbquery);

$_SESSION['login'] = "true";
$_SESSION['user'] = $_POST['username_log'];
$_SESSION['pass'] = $_POST['password_log'];

//Session_register("true");
//Session_register("username_log");
//echo $num_rows;

if($num_rows==1){
header("location: application.php"); //�仵��˹�ҷ��س��ͧ���
}else {
// session_register("code_error");
header("location: denied.html"); //���١��ͧ���Ѻ�˹�����
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

<!-- ���� Google Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-5061364-1";
urchinTracker();
</script>
<!-- ����ش������� Google Analytics -->

</body>
</html>