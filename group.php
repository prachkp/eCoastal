<?php
$s=$_GET["s"];
$ns=$_GET["ns"];
// echo "คำค้น = ".$s."<br />";
?>

<?php

$id = $_GET["id"];
$category = $_GET["category"];

include ("connect.php");

// เริ่มติดต่อฐานข้อมูล
mysql_connect($hostname, $username, $password) or die ("ติดต่อฐานข้อมูลไม่ได้");

// include "thailang-tis620.php";
include "thailang-utf8.php";

// เลือกฐานข้อมูล
mysql_select_db($dbname) or die ("เลือกฐานข้อมูลไม่ได้");

// คำสั่ง SQL และสั่งให้ทำงาน
// $sql = "select * from tblcommerce where ID='".$_SESSION['user']."' "; //เช็คค่าข้อมูลที่ส่งมาจากฟอร์ม
$sql = "SELECT * FROM tblcommerce WHERE Title LIKE '%$s%' AND Title NOT LIKE '$ns%' "; //เช็คค่าข้อมูลที่ส่งมาจากฟอร์ม

// echo $sql;

$dbquery=mysql_db_query($dbname, $sql);

// หาจำนวนเรกคอร์ดข้อมูลในตาราง
$num_rows=mysql_num_rows($dbquery);

// หาจำนวนเรกคอร์ดในตาราง
$num_fields=mysql_num_fields($dbquery);

$result=mysql_fetch_array($dbquery);

	$ID					=		$result['ID'];
	$Title				=		$result['Title'];
	$subTitle			=		$result['subTitle'];
	$ScientificName	=		$result['ScientificName'];
	$CommonName	=		$result['CommonName'];
	$Details				=		$result['Details'];
	$imageLarge1	=		$result['imageLarge1'];
	$imageLarge2	=		$result['imageLarge2'];
	$imageLarge3	=		$result['imageLarge3'];
	$imageLarge4	=		$result['imageLarge4'];
	$imageLarge5	=		$result['imageLarge5'];
	$imageSmall		=		$result['imageSmall'];
	$Category	 		=		$result['Category'];
	$Date				=		$result['Date'];
	$Time				=		$result['Time'];
	$EMail				=		$result['EMail'];
	$PhotoGrapher	=		$result['PhotoGrapher'];
	$BioTitle			=		$result['BioTitle'];
	$BioName			=		$result['BioName'];
	$BioSurname		=		$result['BioSurname'];
	$Office				=		$result['Office'];
	$Address	 		=		$result['Address'];
	$Tambon			=		$result['Tambon'];
	$Amphoe			=		$result['Amphoe'];
	$Changwat			=		$result['Changwat'];
	$Telephone	 	=		$result['Telephone'];
	$Facsimile			=		$result['Facsimile'];
	$Mobile				=		$result['Mobile'];


	$date = explode('-', $Date);
	$year			= $date[0];
	$month		= $date[1];
	$day			= $date[2];
	$buddhistYear = $year + 543;

// echo "day : ".$day."<br />";
// echo "month : ".$month."<br />";
// echo "year : ".$year."<br />";
// echo "buddhistYear : ".$buddhistYear."<br />";

if($month==1)
{
	// echo "มกราคม";
	$fullMonth = "มกราคม";
} else if($month==2){
	$fullMonth = "กุมภาพันธ์";
} else if($month==3){
	$fullMonth = "มีนาคม";
} else if($month==4){
	$fullMonth = "เมษายน";
} else if($month==5){
	$fullMonth = "พฤษภาคม";
} else if($month==6){
	$fullMonth = "มิถุนายน";
} else if($month==7){
	$fullMonth = "กรกฎาคม";
} else if($month==8){
	$fullMonth = "สิงหาคม";
} else if($month==9){
	$fullMonth = "กันยายน";
} else if($month==10){
	$fullMonth = "ตุลาคม";
} else if($month==11){
	$fullMonth = "พฤศจิกายน";
} else if($month==12){
	$fullMonth = "ธันวาคม";
}

// echo "FullMonth : ".$fullMonth."<br />";
$allDate = $day." ".$fullMonth." ".$buddhistYear;
// echo "allDate : ".$allDate."<br />";
// echo "imageLarge1 : ".$imageLarge1."<br />";

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>:: Commercial Coastal Aquaculture | Department of Fisheries ::</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <!--
        Artcore Template
		http://www.templatemo.com/preview/templatemo_423_artcore
        -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo-misc.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

		<link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <h1><a href="index.html"><em>E-</em>Coastal</a></h1>
                    <span>Department of Fisheries</span>
                </div> <!-- /.logo -->
                <div class="social-top col-md-6 col-sm-6">
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>                
					</ul>
                </div> <!-- /.social-top -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a id="search-icon" class="btn-left fa fa-search" href="#search-overlay"></a>
                        <div id="search-overlay">
                            <a href="#search-overlay" class="close-search"><i class="fa fa-times-circle"></i></a>
                            <div class="search-form-holder">
                                <h2>ป้อนคีย์เวิร์ดแล้วกดปุ่ม enter</h2>
                                <form id="search-form" action="search.php">
                                    <input type="search" name="s" placeholder="" autocomplete="off" />
                                </form>
                            </div>
                        </div><!-- #search-overlay -->
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                            <li class="active"><a href="index.html">หน้าหลัก</a></li>
                            <li><a href="services.html">เกี่ยวกับเรา</a></li>
                            <li><a href="#">กลุ่มสัตว์นํ้า</a>
                                <ul>
                                    
									<li><a href="projects-2.html">กลุ่มปลาการ์ตูน</a>
										<ul>
											<li><a href="#">ปลาการ์ตูนส้มขาว</a></li>
											<li><a href="#">ปลาการ์ตูนเพอร์คูล่า</a></li>
											<li><a href="#">ปลาการ์ตูนอินเดีย</a></li>
											<li><a href="#">ปลาการ์ตูนอินเดียแดง/อินเดียคอขาว</a></li>
											<li><a href="#">ปลาการ์ตูนลายปล้อง</a></li>
											<li><a href="#">ปลาการ์ตูนลายปล้องหางเหลือง</a></li>
											<li><a href="#">ปลาการ์ตูนอานม้า</a></li>
											<li><a href="#">ปลาการ์ตูนแดงดำ</a></li>
											<li><a href="#">ปลาการ์ตูนมะเขือเทศ</a></li>
											<li><a href="#">ปลาการ์ตูนมะเขือเทศแดงดำ</a></li>
											<li><a href="#">ปลาการ์ตูนแดง</a></li>
											<li><a href="#">ปลาการ์ตูนทอง</a></li>
										</ul>
									</li>

                                    <li><a href="projects-3.html">กลุ่มปลาสลิดหิน</a>
										<ul>
											<li><a href="#">ปลาสลิดหินนีออน</a></li>
											<li><a href="#">ปลาสลิดหินฟ้าหางเหลือง</a></li>
											<li><a href="#">ปลาสลิดหินเหลืองมะนาว</a></li>
										</ul>									
									</li>
                                    
									<!-- <li><a href="project-details.html">Project Single</a></li> -->

                                </ul>
                            </li>
                            <!-- <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Masonry</a></li>
                                    <li><a href="blog-single.html">Post Single</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="our-team.html">Our Team</a></li>
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="grids.html">Columns</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li> -->
                            <li><a href="contact.html">ติดต่อเรา</a></li>
                            <li><a href="#">เลือกภาษา</a>
                                <ul>
                                    <li><a href="index-th.html">ไทย [TH]</a></li>
                                    <li><a href="index-en.html">อังกฤษ [EN]</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                    <li><a href="index.html">หน้าหลัก</a></li>
                    <li><a href="services.html">เกี่ยวกับเรา</a></li>


					<li class="active"><a href="#">กลุ่มสัตว์นํ้า</a>
						<ul>
														
							<li><a href="projects-2.html">กลุ่มปลาการ์ตูน</a>
								<ul>
									<li><a href="#">ปลาการ์ตูนส้มขาว</a></li>
									<li><a href="#">ปลาการ์ตูนเพอร์คูล่า</a></li>
									<li><a href="#">ปลาการ์ตูนอินเดีย</a></li>
									<li><a href="#">ปลาการ์ตูนอินเดียแดง/อินเดียคอขาว</a></li>
									<li><a href="#">ปลาการ์ตูนลายปล้อง</a></li>
									<li><a href="#">ปลาการ์ตูนลายปล้องหางเหลือง</a></li>
									<li><a href="#">ปลาการ์ตูนอานม้า</a></li>
									<li><a href="#">ปลาการ์ตูนแดงดำ</a></li>
									<li><a href="#">ปลาการ์ตูนมะเขือเทศ</a></li>
									<li><a href="#">ปลาการ์ตูนมะเขือเทศแดงดำ</a></li>
									<li><a href="#">ปลาการ์ตูนแดง</a></li>
									<li><a href="#">ปลาการ์ตูนทอง</a></li>
								</ul>
							</li>

							<li><a href="projects-3.html">กลุ่มปลาสลิดหิน</a>
								<ul>
									<li><a href="#">ปลาสลิดหินนีออน</a></li>
									<li><a href="#">ปลาสลิดหินฟ้าหางเหลือง</a></li>
									<li><a href="#">ปลาสลิดหินเหลืองมะนาว</a></li>
								</ul>									
							</li>

						</ul>
					</li>                                


					<li><a href="contact.html">ติดต่อเรา</a></li>
					<li><a href="#">เลือกภาษา</a>
						<ul>
								<li><a href="index-th.html">ไทย [TH]</a></li>
								<li><a href="index-en.html">อังกฤษ [EN]</a></li>
						</ul>
					</li>

                </ul>
            </div>
        </header> <!-- /.site-header -->

        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>สัตว์นํ้าเศรษฐกิจ</h2>
                        <span>กองวิจัยและพัฒนาประมงชายฝั่ง</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="projects-holder-3">
                    <div class="filter-categories">
                        <ul class="project-filter">
                            <li class="filter" data-filter="all"><span>ทั้งหมด</span></li>
                            <li class="filter" data-filter="fish"><span>กลุ่มปลา</span></li>
                            <li class="filter" data-filter="shrimp"><span>กลุ่มกุ้ง</span></li>
							<li class="filter" data-filter="anemonefish"><span>กลุ่มปลาการ์ตูน</span></li>
                            <li class="filter" data-filter="damselfish"><span>กลุ่มปลาสลิดหิน</span></li>
                            <!-- <li class="filter" data-filter="architecture"><span>Architecture</span></li>
                            <li class="filter" data-filter="nature"><span>Nature</span></li>
                            <li class="filter" data-filter="goby"><span>Goby</span></li> -->
						</ul>
                    </div>
                    <div class="projects-holder">

					<!-- /.row -->
						<div class="row">

<?php
if($s!="")
{

if($s=="ปลา" or $s=="การ์ตูน" or $s=="ส้มขาว")
{
?>
						<!-- /.project-item -->
                            <div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_1.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_1.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนส้มขาว"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=1&category=anemonefish" target="_blank">ปลาการ์ตูนส้มขาว</a></h2>
                                    <p>ปลาที่เป็นตัวเอกในหนังการ์ตูน เรื่อง Finding Nemo ก็คือ ปลาการ์ตูนส้มขาว นี่เอง มีการกระจายพันธุ์</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="เพอร์คูล่า")
{
?>
						<!-- /.project-item -->
                            <div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_2.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_2.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนเพอร์คูล่า"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=2&category=anemonefish" target="_blank">ปลาการ์ตูนเพอร์คูล่า</a></h2>
                                    <p>เป็นปลาการ์ตูนที่มีลักษณะรูปร่างและสีสันคล้ายกับปลาการ์ตูนส้มขาวมาก ผู้ที่ไม่ชำนาญมักจะแยก</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="อินเดีย")
{
?>

						<!-- /.project-item -->
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_3.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_3.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนอินเดีย"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=3&category=anemonefish" target="_blank">ปลาการ์ตูนอินเดีย</a></h2>
                                    <p>ขนาดโตที่สุดยาวประมาณ 10-11 เซนติเมตร เป็นปลาการ์ตูนที่อาศัยอยู่รวมกันเป็นฝูงกับดอกไม้ทะเลชนิด</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="อินเดีย" or $s=="อินเดียคอขาว")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_4.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_4.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนอินเดีย/อินเดียคอขาว"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=4&category=anemonefish" target="_blank">ปลาการ์ตูนอินเดีย/อินเดียคอขาว</a></h2>
                                    <p>มีลักษณะคล้ายกับปลาการ์ตูนอินเดีย (A. akallopisos) มาก แต่มีความแตกต่างตรงที่จะมีลายสีขาวคาดบริเวณ</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="ลายปล้อง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_5.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_5.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนลายปล้อง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=5&category=anemonefish" target="_blank">ปลาการ์ตูนลายปล้อง</a></h2>
                                    <p>ไม่ชอบว่ายน้ำออกนอกถิ่นที่อยู่ มักจะอยู่เป็นคู่ รักสงบ พบกระจายพันธุ์ในมหาสมุทรอินเดียและมหาสมุทร</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="ลายปล้อง" or $s=="หางเหลือง" or $s=="ลายปล้องหางเหลือง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_6.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_6.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนลายปล้องหางเหลือง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=6&category=anemonefish" target="_blank">ปลาการ์ตูนลายปล้องหางเหลือง</a></h2>
                                    <p>เป็นปลาที่มีความหลากหลายทางสีสันมากในธรรมชาติ โดยปลาที่พบในแต่ละแหล่งจะมีสีสันและลวดลาย</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="อานม้า")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_7.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_7.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนอานม้า"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=7&category=anemonefish" target="_blank">ปลาการ์ตูนอานม้า</a></h2>
                                    <p>ได้ชื่อมาจากการที่มีลายสีขาวพาดตั้งแต่บริเวณปลายครีบหลังมายังบริเวณกลางลำตัว เหมือนอานม้า  มีขนาด</p>
                                </div>
                            </div>
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="แดง" or $s=="ดำ" or $s=="แดงดำ")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_8.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_8.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนแดงดำ"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=8&category=anemonefish" target="_blank">ปลาการ์ตูนแดงดำ</a></h2>
                                    <p>ปลาเต็มวัยลำตัวมีสีส้มแดงและมีปื้นสีดำขนาดใหญ่บริเวณหลัง ส่วนปลาวัยรุ่นจะยังไม่มีปื้นสีดำ</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="มะเขือเทศ")
{
?>
                        
						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_9.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_9.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนมะเขือเทศ"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=9&category=anemonefish" target="_blank">ปลาการ์ตูนมะเขือเทศ</a></h2>
                                    <p>มีขนาดโตเต็มที่ 14 เซนติเมตร พบกระจายพันธุ์ในมหาสมุทรแปซิฟิก บริเวณหมู่เกาะริวกิว</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="แดง" or $s=="ดำ" or $s=="มะเขือเทศ" or $s=="แดงดำ" or $s=="มะเขือเทศแดงดำ")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_10.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_10.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนมะเขือเทศแดงดำ"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=10&category=anemonefish" target="_blank">ปลาการ์ตูนมะเขือเทศแดงดำ</a></h2>
                                    <p>มีขนาดโตเต็มที่ 11 เซนติเมตร พบในมหาสมุทรแปซิฟิกทางแถบฟิจิ, วานูอาตู, มัลดีฟส์</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="แดง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_11.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_11.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนแดง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=11&category=anemonefish" target="_blank">ปลาการ์ตูนแดง</a></h2>
                                    <p>เป็นปลาที่หวงถิ่นมากพบได้ตามรอบนอกของแนวปะการัง และส่วนที่เป็นแนวปะการังลาดชัน</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="การ์ตูน" or $s=="ทอง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix anemonefish">
                                <div class="project-thumb">
                                    <img src="images/projects/anemonefish/project_12.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/anemonefish/project_12.jpg" class="fancybox fa fa-expand" title="ปลาการ์ตูนทอง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=12&category=anemonefish" target="_blank">ปลาการ์ตูนทอง</a></h2>
                                    <p>เป็นปลาที่หวงถิ่นมากพบได้ตามรอบนอกของแนวปะการัง และส่วนที่เป็นแนวปะการังลาดชัน</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="สลิด" or $s=="สลิดหิน" or $s=="นีออน" or $s=="สลิดหินนีออน")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix damselfish">
                                <div class="project-thumb">
                                    <img src="images/projects/damselfish/project_1.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/damselfish/project_1.jpg" class="fancybox fa fa-expand" title="ปลาสลิดหินนีออน"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=13&category=damselfish" target="_blank">ปลาสลิดหินนีออน</a></h2>
                                    <p>เป็นปลาที่มีขนาดความยาวสูงสุดประมาณ 15 เซนติเมตร เมื่อยังเป็นปลาขนาดเล็กลำตัวจะมีสีดำ</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="สลิด" or $s=="สลิดหิน" or $s=="ฟ้า" or $s=="หางเหลือง" or $s=="ฟ้าหางเหลือง" or $s=="ปลาสลิดหินฟ้าหางเหลือง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix damselfish">
                                <div class="project-thumb">
                                    <img src="images/projects/damselfish/project_2.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/damselfish/project_2.jpg" class="fancybox fa fa-expand" title="ปลาสลิดหินฟ้าหางเหลือง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=14&category=damselfish" target="_blank">ปลาสลิดหินฟ้าหางเหลือง</a></h2>
                                    <p>ปลาสลิดหินฟ้าหางเหลืองมีความก้าวร้าวน้อยที่สุดเมื่อเทียบกับปลาสลิดหินชนิดอื่น</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="สลิด" or $s=="สลิดหิน" or $s=="หิน" or $s=="เหลือง" or $s=="เหลืองมะนาว" or $s=="ปลาสลิดหินเหลืองมะนาว")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix damselfish">
                                <div class="project-thumb">
                                    <img src="images/projects/damselfish/project_3.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/damselfish/project_3.jpg" class="fancybox fa fa-expand" title="ปลาสลิดหินเหลืองมะนาว"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=15&category=damselfish" target="_blank">ปลาสลิดหินเหลืองมะนาว</a></h2>
                                    <p>ปลาสลิดหินเหลืองมะนาว เป็นปลาทะเลขนาดเล็กชนิดหนึ่ง ในวงศ์ปลาสลิดหิน (Pomacentridae) มีรูปร่าง</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="อมไข่" or $s=="ครีบยาว" or $s=="อมไข่ครีบยาว" or $s=="ปลาอมไข่ครีบยาว")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix fish">
                                <div class="project-thumb">
                                    <img src="images/projects/fish/project_1.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/fish/project_1.jpg" class="fancybox fa fa-expand" title="ปลาอมไข่ครีบยาว"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=16&category=fish" target="_blank">ปลาอมไข่ครีบยาว</a></h2>
                                    <p>เป็นปลาทะเลสวยงามขนาดเล็ก มีขนาดความยาวเต็มที่ 8 เซนติเมตร ขนาดโดยเฉลี่ยทั่วไป คือ 4-5 เซนติเมตร</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="หู" or $s=="ช้าง" or $s=="กลม" or $s=="หูช้าง" or $s=="หูช้างกลม" or $s=="ปลาหูช้างกลม")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix fish">
                                <div class="project-thumb">
                                    <img src="images/projects/fish/project_2.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/fish/project_2.jpg" class="fancybox fa fa-expand" title="ปลาหูช้างกลม"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=17&category=fish" target="_blank">ปลาหูช้างกลม</a></h2>
                                    <p>เป็นปลาที่พบในทะเลเขตร้อนและอบอุ่น ทั้งในมหาสมุทรแปซิฟิก และมหาสมุทรอินเดีย ขนาดโตเต็มที่</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="ใบ" or $s=="มีด" or $s=="โกน" or $s=="ใบมีด" or $s=="ใบมีดโกน" or $s=="ปลาใบมีดโกน")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix fish">
                                <div class="project-thumb">
                                    <img src="images/projects/fish/project_3.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/fish/project_3.jpg" class="fancybox fa fa-expand" title="ปลาใบมีดโกน"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=18&category=fish" target="_blank">ปลาใบมีดโกน</a></h2>
                                    <p>เป็นปลาที่จัดอยู่ในอันดับ (Order) เดียวกันกับปลาจิ้มฟันจระเข้และม้าน้ำ มีความยาวโดยเฉลี่ย 10 เซนติเมตร</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ม้า" or $s=="นํ้า" or $s=="หนาม" or $s=="ม้านํ้า" or $s=="ม้านํ้าหนาม")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix fish">
                                <div class="project-thumb">
                                    <img src="images/projects/fish/project_4.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/fish/project_4.jpg" class="fancybox fa fa-expand" title="ม้านํ้าหนาม"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=19&category=fish" target="_blank">ม้านํ้าหนาม</a></h2>
                                    <p>มันมีชื่อเรียกขึ้นต้นด้วยคำว่า “ม้า” แต่จัดอยู่ในสัตว์จำพวกปลา หายใจด้วยเหงือกเหมือนปลาทั่วไป</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="ปลา" or $s=="จิ้ม" or $s=="ฟัน" or $s=="จระเข้" or $s=="จิ้มฟันจระเข้" or $s=="ปลาจิ้มฟันจระเข้")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix fish">
                                <div class="project-thumb">
                                    <img src="images/projects/fish/project_5.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/fish/project_5.jpg" class="fancybox fa fa-expand" title="ปลาจิ้มฟันจระเข้"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=20&category=fish" target="_blank">ปลาจิ้มฟันจระเข้</a></h2>
                                    <p>ปลาจิ้มฟันจระเข้ จัดเป็นปลาซึ่งอยู่ในวงศ์ หรือ Family เดียวกันกับม้าน้ำ ลักษณะและพฤติกรรมต่าง ๆ</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>

<?php
if($s=="กุ้ง" or $s=="มด" or $s=="แดง" or $s=="มดแดง" or $s=="กุ้งมดแดง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix shrimp">
                                <div class="project-thumb">
                                    <img src="images/projects/shrimp/durbanensis.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/shrimp/durbanensis.jpg" class="fancybox fa fa-expand" title="กุ้งมดแดง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=21&category=shrimp" target="_blank">กุ้งมดแดง</a></h2>
                                    <p>เป็นกุ้งขนาดเล็กมีขนาดโตเต็มที่ประมาณ 3.5 เซนติเมตร  สีสันสวยงาม โดยมีสีแดงสลับสีขาว</p>
                                </div>
                            </div> 
						<!-- /.project-item -->

<?php
}
?>


<!-- /////////////////////////////// display:none /////////////////////////////// -->
<div class="hideObj" style="display:none;">

<?php
if($s=="กุ้ง" or $s=="เปปเปอร์" or $s=="มินต์" or $s=="เปปเปอร์มินต์" or $s=="กุ้งเปปเปอร์มินต์")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix shrimp">
                                <div class="project-thumb">
                                    <img src="images/projects/shrimp/wurdemanni.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/shrimp/wurdemanni.jpg" class="fancybox fa fa-expand" title="กุ้งเปปเปอร์มินต์"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=22&category=shrimp" target="_blank">กุ้งเปปเปอร์มินต์</a></h2>
                                    <p>ความยาวสูงสุดประมาณ 7 เซนติเมตร มีนิสัยรักสงบ ไม่ก้าวร้าว และอยู่กันเป็นฝูง  ลักษณะเด่นของกุ้ง</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>
<?php
if($s=="กุ้ง" or $s=="พยาบาล" or $s=="จิ๋ว" or $s=="พยาบาลจิ๋ว" or $s=="กุ้งพยาบาลจิ๋ว")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix shrimp">
                                <div class="project-thumb">
                                    <img src="images/projects/shrimp/antonbruunii.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/shrimp/antonbruunii.jpg" class="fancybox fa fa-expand" title="กุ้งพยาบาลจิ๋ว"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=23&category=shrimp" target="_blank">กุ้งพยาบาลจิ๋ว</a></h2>
                                    <p>ชื่อภาษาอังกฤษของกุ้งชนิดนี้ คือ Cleaner shrimp ซึ่งมีความหมายว่า เป็นนักทำความสะอาด</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>
<?php
if($s=="กุ้ง" or $s=="ดอกไม้" or $s=="ดอกไม้ทะเล" or $s=="หางนกยูง" or $s=="ดอกไม้ทะเลหางนกยูง" or $s=="กุ้งดอกไม้ทะเลหางนกยูง")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix shrimp">
                                <div class="project-thumb">
                                    <img src="images/projects/shrimp/brevicarpalis.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/shrimp/brevicarpalis.jpg" class="fancybox fa fa-expand" title="กุ้งดอกไม้ทะเลหางนกยูง"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=24&category=shrimp" target="_blank">กุ้งดอกไม้ทะเลหางนกยูง</a></h2>
                                    <p>เป็นกุ้งขนาดเล็กที่มีสีสันสวยงาม และมีสีหลากหลายแตกต่างกันไปขึ้นอยู่กับสภาพแวดล้อมที่มันอาศัยอยู่</p>
                                </div>
                            </div> 
						<!-- /.project-item -->
<?php
}
?>
<?php
if($s=="กุ้ง" or $s=="หางงอน" or $s=="เซ็กซี่" or $s=="กุ้งหางงอนหรือกุ้งเซ็กซี่")
{
?>

						<!-- /.project-item -->						
							<div class="col-md-4 project-item mix shrimp">
                                <div class="project-thumb">
                                    <img src="images/projects/shrimp/amboinensis.jpg" alt="">
                                    <div class="overlay-b">
                                        <div class="overlay-inner">
                                            <a href="images/projects/shrimp/amboinensis.jpg" class="fancybox fa fa-expand" title="กุ้งหางงอนหรือกุ้งเซ็กซี่"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content project-detail">
                                    <h2><a href="project-details.php?id=25&category=shrimp" target="_blank">กุ้งหางงอนหรือกุ้งเซ็กซี่</a></h2>
                                    <p>เป็นกุ้งขนาดเล็ก ลำตัวสีน้ำตาลแต้มด้วยจุดขาวขนาดใหญ่หลายจุดซึ่งตรงขอบเป็นสีน้ำเงินบาง ๆ</p>
                                </div>
                            </div> 
						<!-- /.project-item -->

<?php
}
} else {
$message = "ไม่พบข้อมูลที่ต้องการค้นหา";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<font color=\"red\">ไม่พบข้อมูลที่ต้องการค้นหา</font>";
}
?>

</div>
<!-- /////////////////////////////// display:none /////////////////////////////// -->


						</div>
					<!-- /.row -->

                        <div class="load-more">
                            <a href="javascript:void(0);" class="load-more bhide">โหลดเพิ่มเติม</a>
                        </div>

                    </div> <!-- /.projects-holder -->
                </div> <!-- /.projects-holder-2 -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>

		<script>
				$(document).ready(function(){
				
				$(".bhide").click(function(){
					$(".hideObj").slideDown();
					$(this).hide(); //.attr()
					return false;
				});
			
			});
		</script>

    </body>
</html>
