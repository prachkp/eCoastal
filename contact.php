<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comments = $_POST["comments"];

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

<script type="text/javascript">
   <!--
	function validateForm() {
		var v = document.forms["contactform"]["name"].value;
		if (v == null || v == "") {
			alert("กรุณากรอกข้อมูลชื่อ-นามสกุลด้วยค่ะ");
			return false;
		}
		
		var w = document.forms["contactform"]["email"].value;
		if (w == null || w == "") {
			alert("กรุณากรอกข้อมูลอี-เมล์ด้วยค่ะ");
			return false;
		}

	   var x = document.forms["contactform"]["email"].value;
	   var atpos = x.indexOf("@");
	   var dotpos = x.lastIndexOf(".");
	   if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			alert("รูปแบบอี-เมล์ไม่ถูกต้อง กรุณากรอกใหม่ค่ะ");
			return false;
		}

		var y = document.forms["contactform"]["phone"].value;
		if (y == null || y == "") {
			alert("กรุณากรอกข้อมูลโทรศัพท์ด้วยค่ะ");
			return false;
		}

		var z = document.forms["contactform"]["comments"].value;
		if (z == null || z == "") {
			alert("กรุณากรอกข้อมูลข้อความด้วยค่ะ");
			return false;
		}

	}	
   //-->
   </script>
	
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
                            <li><a href="index.html">หน้าหลัก</a></li>
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
                            <li class="active"><a href="contact.html">ติดต่อเรา</a></li>
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
                        <h2>ติดต่อเรา</h2>
                        <span>กองวิจัยและพัฒนาประมงชายฝั่ง</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <p>ทางกองวิจัยและพัฒนาประมงชายฝั่ง ขอขอบคุณเป็นอย่างสูงที่ติดต่อกับทางสำนักฯ เรานะคะ ทางสำนักฯ ยินดีรับคำแนะนำ คำติชม เพื่อจะนำไปปรับปรุงการบริการให้ดียิ่งขึ้นค่ะ ขอบคุณค่ะ</p>
                                <h3 class="contact-title">ส่งอี-เมล์ถึงเรา <font color="green">[ได้รับข้อมูลเรียบร้อยแล้วค่ะ]</font></h3>
                                <div class="contact-form-inner">
                                    <form method="post" action="contact.php" onsubmit="return validateForm()" name="contactform" id="contactform">
                                        <p>
                                            <label for="name">ชื่อ-นามสกุล :</label>
                                            <input name="name" type="text" id="name" value="<? echo $name;?>">
                                        </p>
                                        <p>
                                            <label for="email">อี-เมล์ :</label>
                                            <input name="email" type="text" id="email" value="<? echo $email;?>"> 
                                        </p>
                                        <p>
                                            <label for="phone">โทรศัพท์ :</label>
                                            <input name="phone" type="text" id="phone" value="<? echo $phone;?>">   
                                        </p>
                                        <p>
                                            <label for="comments">ข้อความ :</label>
                                            <textarea name="comments" id="comments"><? echo $comments;?></textarea>    
                                        </p>
                                        <input type="submit" class="mainBtn" id="submit" value="ส่งข้อความ" />
                                    </form>
                                </div> <!-- /.contact-form-inner -->
                                <div id="message"></div>
                            </div> <!-- /.col-md-7 -->
                            <div class="col-md-5">
                                <div class="googlemap-wrapper">
                                    <div id="map_canvas" class="map-canvas"></div>
                                </div>
                            </div> <!-- /.col-md-5 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.box-content -->
                </div> <!-- /.contact-form -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        // address: '40.717599,-74.005136' 
						address: '13.842408, 100.576461'
                    },
                        map:{
                        options:{
                        zoom: 17,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('.loader-item').fadeOut(); // will first fade out the loading animation
                    $('#pageloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>

    </body>
</html>
