<?php

// ��ǹ��������ʴ�������������
$sql = 'SET CHARACTER SET tis620';

mysql_query($sql);

$sql ="SET collation_connection = 'tis620_thai_ci' ";

mysql_query($sql);
//����ش��ǹ����ʴ�������

?>