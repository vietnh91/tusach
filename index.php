<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tủ sách màu Bu</title>
<link rel="icon" 
      type="image/png" 
      href="/img/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="js/main.js"></script>

<link rel='stylesheet' id='es-widget-css-css'  href='/wp-content/plugins/email-subscribers/widget/es-widget.css?ver=4.6.1' type='text/css' media='all' /><script type='text/javascript'>
/* <![CDATA[ */
var es_widget_page_notices = {"es_email_notice":"Vui lòng nhập địa chỉ email.","es_incorrect_email":"Vui lòng nhập đúng định dạng","es_load_more":"loading...","es_ajax_error":"Vui lòng thử lại!","es_success_message":"Đăng ký nhận email thành công.","es_success_notice":"You have successfully subscribed to the newsletter. You will receive a confirmation email in a few minutes. Please follow the link in it to confirm your subscription. If the email takes more than 15 minutes to appear in your mailbox, please check your spam folder.","es_email_exists":"Email Address already exists.","es_error":"Oops.. Unexpected error occurred.","es_invalid_email":"Invalid email address.","es_try_later":"Please try after some time.","es_problem_request":"There was a problem with the request.", "thank_you":"Thông tin của bạn đã được gửi đi.<br/>Cảm ơn bạn đã cùng Bu hiểu để yêu thương!"};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-content/plugins/email-subscribers/widget/es-widget-page.js?ver=4.5.3'></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89990310-1', 'auto');
  ga('send', 'pageview');

</script>

<style type="text/css">
	.black{color: black;}
	.dropdown{
		float: right;
    margin-top: 18px;
	}
	.dropdown .btn{padding: 0; border: none;    background: none;}
	.dropdown-menu img { margin-right: 20px; }
	#bu-dropdown-menu {float: right; right: 0; left: inherit;}
</style>

</head>

<body>
	<header>
		<div class="logo">
				<a href="//ccihp.org/"><img src="img/CCHIP.png" alt="CCHIP.png" height="68px" /></a>
				<a href="//rubic-co.org"><img src="img/rubic.png" alt="rubic.png"  height="46px" style="margin-bottom: 8px;" /></a>
		</div>
		
		<div class="dropdown">
		  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
		  <img src="https://lipis.github.io/flag-icon-css/flags/4x3/vn.svg" height="23px" />
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu" id="bu-dropdown-menu">
		    <li><a href="http://tusachmaubu.com/"><img src="https://lipis.github.io/flag-icon-css/flags/4x3/vn.svg" height="23px" />Tiếng Việt</a></li>
		    <li><a href="http://tusachmaubu.com/en/"><img src="https://lipis.github.io/flag-icon-css/flags/4x3/um.svg" height="23px" />English</a></li>
		  </ul>
		</div>
			
	</header>
	<article>
			<hr/>
	</article>
	<article>
		<p id="title">Dự án gây quỹ cộng đồng TỦ SÁCH MÀU "BU"</p>
	</article>
	<article>
		<ul class="detail-pending">
			<li>
				<a>
				<?php
					$donate_amount = 109102222;
					$donate_percent = floor($donate_amount / 2000000);
					echo number_format($donate_amount, 0, '', '.');
				?>
				 VND</a>
				<span>Đã được ủng hộ</span>
			</li>
			<li>
				<a>170</a>
				<span>người ủng hộ</span>
			</li>
			<li>
				<a><?php echo $donate_percent ?>%</a>
				<span>Thành công</span>
			</li>
			<li>
				<a><black>còn</black> 
				<?php 
					$day_1 = date("2017-03-08");
					$day_2 = date('Y-m-d') ; //current date
					if(strtotime($day_1) > strtotime($day_2))
						echo $days = (strtotime($day_1) - strtotime($day_2)) / (60 * 60 * 24); 
					else
						echo "0";
				?> <black>ngày</black></a>
			</li>
			<li>
				<a><red>200 triệu</red></a>
				<span>Mục tiêu</span>
			</li>
		</div>
	</article>
	<article class="progress">
		<div>
			<progress value="<?php echo $donate_percent ?>" max="100">
				
			</progress>
		</div>
	</article>
	<article class="b60">
		<p id="due-time">Chiến dịch bắt đầu từ ngày 08 tháng 01 năm 2017 và kết thúc vào ngày 08 tháng 03 năm 2017.</p>
	</article>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="/img/slider-1.jpg" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
			<p>
				"Phép màu thực sự là bố mẹ nhận ra và tin tưởng rằng, chính mình là người có thể giúp con bằng cách làm giàu các kiến thức và kỹ năng của mình, cùng phối hợp với thầy cô ở trường can thiệp toàn diện cho con."
				<br>
				<a>Th.S Hồ Huyền Thương - Chuyên gia trị liệu ABA</a>
			</p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="/img/slider-2.jpg" style="width:100%" data-src="" alt="Second    slide">
      <div class="container">
        <div class="carousel-caption">
        	<p>
        		"Tôi đặc biệt thích phần hướng dẫn phát triển cho trẻ kỹ năng hiểu và điều chỉnh cảm xúc. Chắc chắn phụ huynh sẽ tìm thấy rất nhiều điều hữu ích ở bộ sách này về cách can thiệp lấy trẻ làm trọng tâm, nương theo những sở thích, khả năng và cảm xúc của con."
				<br>
				<a>
					TS. Vũ Song Hà (PGĐ Trung tâm Sáng kiến Sức khỏe và Dân số)
				</a>
        	</p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="/img/slider-3.jpg" style="width:100%" data-src="" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
        	<p>
        		"Một điều mà các trung tâm không có được chính là sự thấu hiểu đứa trẻ của người làm cha mẹ, và không khí của gia đình. Nhưng nhiều bố mẹ vẫn còn e ngại mình không đủ kiến thức hay trình độ tự dạy cho con. Đây là bộ sách không thể thiếu trong tủ sách gia đình để hỗ trợ các phụ huynh cùng tham gia vào việc can thiệp cho con."
				<br>
				<a>
					Trần Hoa Mai - phụ huynh trẻ tự kỷ, Mạng lưới Người tự kỷ Việt Nam
				</a>
        	</p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

	<article>
		<p class="title">Tủ sách màu Bu ra đời từ một câu chuyện nhỏ...</p>

		<p><img class="ngay-thang" src="img/ngay-thang.png"/></p>
		<div class="tho">
		</div>
		<div class="clear" style="height: 20px;"></div>
		<p class="content">Bạn thấy đấy, mỗi đứa trẻ là một khác biệt, với những đặc điểm khác nhau cũng như khả năng cảm nhận khác nhau ở mỗi giai đoạn phát triển. Sẽ thật là tuyệt nếu đứa trẻ nào cũng có được một người dẫn đường như mẹ Xít.<b> Với trẻ tự kỷ, sự yêu thương và thấu hiểu của cha mẹ lại càng quan trọng biết bao.</b> RUBIC luôn mong muốn và tin tưởng rằng, dù bằng cách này hay cách khác, các bạn nhỏ tự kỷ sẽ luôn được yêu thương, thấu hiểu, giống như cách mà mẹ Mai Anh, bố Long, mẹ Phương, mẹ Tâm và rất nhiều những người cha, người mẹ tuyệt vời khác vẫn đang yêu thương những thiên thần đặc biệt của mình. 
		</p>
	</article>
	<section class="img_3451">
			<p class="title white b60">Nhưng điều đó không hề dễ dàng...</p>
		<article>
			<p class="content b20">Bởi cha mẹ trẻ tự kỷ, nhất là cha mẹ trẻ tự kỷ ở Việt Nam đang gặp quá nhiều trở ngại về kiến thức để có thể thấu hiểu những khó khăn mà trẻ đang gặp phải. Nhưng nếu được hỗ trợ và tiếp sức bằng các nguồn tài liệu đáng tin cậy, con đường chắc chắn sẽ bớt gập ghềnh hơn.</p>
			<p class="content b20">Đến với tự kỷ với rất nhiều tâm huyết, trong từng câu chuyện, Rubic vẫn luôn trăn trở làm thế nào để cuộc sống của các bạn tự kỷ ngày càng tốt lên. Và bọn mình nhận ra rằng... “sách” là điều Rubic có thể làm được.</p>
			<p class="content b20">Nếu như “Hai giờ vui”, “Yêu thương vô điều kiện”, là món quà mà Rubic dành riêng cho các bạn tự kỷ, thì <b>“Tủ sách màu Bu” giống như một cái nắm tay tiếp sức mà bọn mình muốn gửi đến những người cha, người mẹ trẻ tự kỷ trong chặng đường đồng hành cùng con.</b></p>
		</article>
	</section>
	<article>
		<p class="title">Cha mẹ có thể tìm thấy gì trên kệ sách BU?</p>
		<p class="content b60">Hai cuốn sách đầu tiên được lựa chọn để dịch và đưa lên kệ sách Bu là <b>“Phát triển kỹ năng chơi”</b> và <b>“Phát triển kỹ năng xã hội và cảm xúc"</b>, nằm trong bộ 5 cuốn <b>“How-to guide”</b> được biên soạn bởi <a href="https://www.autismspectrum.org.au/"  target="_blank">Autism Aspect Australia</a>. Đây là một tổ chức có uy tín trong lĩnh vực tự kỷ tại Úc với mạng lưới các trường học hỗ trợ trẻ tự kỷ và người tự kỷ trưởng thành lớn nhất thế giới, cung cấp thông tin, dịch vụ chẩn đoán, quản lý hành vi và nhiều hình thức hỗ trợ khác cho các gia đình có người tự kỷ. Với ngôn ngữ gần gũi và hình ảnh minh họa sinh động, cụ thể, đây là nguồn tài liệu không thể thiếu dành cho những cha mẹ muốn hiểu và can thiệp cho con hiệu quả hơn.
		</p>

		<div class="skill">
			<div class="left-content">
				<p class="sub-title">Phát triển kỹ năng chơi</p>
				<p class="content">Chơi có ý nghĩa quan trọng với sự phát triển của trẻ. Cuốn sách này giúp cha mẹ trẻ tự kỷ hiểu hơn những khó khăn ảnh hưởng tới kỹ năng chơi của con, từ đó gợi ý các hoạt động và trò chơi đơn giản để áp dụng tại nhà.<br/>
					Khổ in: A4. Số lượng xuất bản dự kiến: 1000 quyển
				</p>

			</div>
			<div>
				<img src="/img/skill_02.jpg" width="250px" />
			</div>
		</div>
				
		<div class="skill">
			<div class="left-content">
					<p class="sub-title">Phát triển kỹ năng xã hội và cảm xúc</p>
					<p class="content">Bạn đang gặp khó khăn trong việc dạy trẻ có những ứng xử phù hợp, thể hiện đúng cảm xúc của mình trong các tình huống xã hội? Đây chính là cuốn sách dành cho bạn! Bạn sẽ tìm thấy các kiến thức về sự phát triển kỹ năng xã hội và cảm xúc, các hướng dẫn và gợi ý để có thể rèn luyện thêm các kỹ năng quan trọng này cho trẻ tại nhà.<br/>
					Khổ in: A4. Số lượng xuất bản dự kiến: 1000 quyển
					</p>
					
			</div>
			<div>
				<img src="/img/skill_01.jpg" width="250px" />
			</div>
		</div>
				
	</article>

	<article>
		<div class="clear"></div>
		<p class="title">Để Tủ sách màu Bu ra đời, bọn mình cần:</p>
			
		<div class="text-center">
			<img src="https://c1.staticflickr.com/1/364/31660762423_ae79e12762.jpg" alt="favim" class="favim" class="auto block">
		</div>
		<p class="content">
		Sau thời gian chạy dự án, nếu không đủ số tiền dự kiến, bọn mình sẽ vẫn cố gắng để xuất bản hai cuốn sách theo đúng kế hoạch. RUBIC phối hợp cùng <a href="//vietnamautism.com" target="_blank">Mạng lưới Người tự kỷ Việt Nam</a> và các câu lạc bộ cha mẹ trẻ tự kỷ tại các tỉnh thành để phát hành sách. <b>25% số sách</b> xuất bản sẽ được góp vào <b>Quỹ sách màu Bu</b> để <b>tặng miễn phí</b> các gia đình có hoàn cảnh khó khăn và những hội nhóm, tổ chức có hoạt động hỗ trợ người tự kỷ.
		</p>
	</article>

	<section class="dsc_2004">
		
		<article>
			<p class="title">Nhưng một mình RUBIC không đủ sức để làm tất cả những điều đó...</p>
			<p class="content">Với 5 thành viên hiện tại cùng với nhóm tình nguyện viên, bọn mình có thế dịch và hiệu đính sách. Nhưng để có những cuốn sách được in ấn hoàn chỉnh, phát hành chính thức và đến tay những người cần nó, thì...</p>

		</article>		
	</section>
	<p class="title b40">RUBIC CẦN BẠN!</p>
	<section class="how ededed" id="donate">
		<img src="/img/IMG_3535.png" >
		<div>
			
		<p class="title">Hãy ủng hộ bọn mình bằng cách:</p>
		<p class="content">
			<b class="e96 p16">Bước 1:</b> Điền thông tin người ủng hộ <a href="#ex1" rel="modal:open"><b class="e96">tại đây</b></a><br/>
			<b class="e96 p16">Bước 2:</b> Chuyển khoản tới :<br/>
		</p>
		<p class="content p75">
			Tên TK: Trung tâm Sáng kiến Sức khỏe và Dân số<br/>
			Số TK:   12510000927870 ( VNĐ) <br/> Ngân hàng BIDV - CN Đông Đô<br/>
			Nội dung chuyển khoản (ghi đầy đủ): <br/>Bu2017 - Họ Tên - Số điện thoại <br/>
			VD: Bu2017 - Le Huong Giang - 0989067xxx<br/>
		</p>
		<p class="content">
			<b class="e96 p16">Bước 3:</b>Chúng tôi sẽ gọi điện xác nhận sau khi nhận tiền ủng hộ của bạn
		</p>
		</div>
	</section>
	<article class="b60">
		<p class="title">Các mức ủng hộ</p>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active">
					<a href="#tab1">Dưới 200.000</a>
					<div>Thư cảm ơn</div>
				</li>
				<li><a>200.000</a>
					<div>1 cuốn sách đã dịch
+ 1 vòng tay Bu
+ Thiệp cảm ơn</div>
				</li>
				<li><a>300.000</a>
				<div>1 bộ 2 cuốn sách đã dịch
+ 1 vòng tay Bu
+ Thiệp cảm ơn</div>
				</li>
				<li><a>500.000</a>
					<div>1 bộ 2 cuốn sách đã dịch
+ 1 vòng tay Bu
+ 1 sổ tay A5 A-U-T-I-S-M
+ Thiệp cảm ơn
</div>
				</li>
				<li><a>800.000</a>
					<div>1 bộ 2 cuốn sách đã dịch
+ 1 vòng tay Bu
+ 1 sổ tay A5 A-U-T-I-S-M
+ 1 áo phông A-U-T-I-S-M
+ Thiệp cảm ơn
</div>
				</li>
				<li><a>1.000.000</a>
					<div>2 bộ sách (4 cuốn) đã dịch
+ 1 vòng tay Bu
+ 1 áo phông A-U-T-I-S-M
+ 1 sổ tay A5 A-U-T-I-S-M
+ 1 túi vải RUBIC 
+ Thiệp cảm ơn</div>
				</li>
				<li><a>2.000.000</a>
					<div>2 bộ sách (8 cuốn) đã dịch
+ 2 vòng tay Bu
+ 2 áo phông A-U-T-I-S-M
+ 2 sổ tay A5 A-U-T-I-S-M
+ 2 túi vải RUBIC
+ Thiệp cảm ơn</div>
				</li>
				<li><a>5.000.000</a>
					<div>2 bộ sách (8 cuốn) đã dịch
					+ 2 vòng tay Bu 
					+ 2 áo phông A-U-T-I-S-M 
					+ 2 sổ tay A5 A-U-T-I-S-M 
					+ 2 túi vải RUBIC + 1 tranh treo tường từ Hiếu Gallery + Thiệp cảm ơn</div>
				</li>
				<li><p>Các phần quà đều được vận chuyển miễn phí</p>
			</ul>
			<div class="tab-content">
				<div><img src="img/sach.png"></div>
				<div><img src="img/ao.png"></div>
				<div style="margin-left: 170px;"><img src="img/so.png"></div>
				<div><img src="img/tui.png"></div>
			</div>
		</div>
	</article>
	<section class="whoami">
		<p class="title white b60">Nhóm thực hiện dự án</p>
		<article>
			<div class="rubic">
				<img src="/img/Logos_white-01.png">
				<p class="sub-title">Dịch thuật, truyền thông, xuất bản và phân phối sách: <b>RUBIC Collaborative</b></p>
				<hr>
				<p class="content">RUBIC Collaborative là một trong những tổ chức tình nguyện về tự kỷ đầu tiên tại Việt Nam. Trong hơn 3 năm hoạt động, RUBIC đã kết nối các nguồn lực khác nhau trong cộng đồng để thực hiện nhiều hoạt động sáng tạo và thiết thực hỗ trợ cho trẻ tự kỷ.</p>
			</div>
			<div class="d-cchip">
				<img src="/img/Logos_white-03.png">
				<p class="sub-title">Bảo trợ pháp lý và chuyên môn: Trung tâm Sáng kiến Sức khỏe và Dân số (CCIHP)</p>
				<hr>
				<p class="content">CCIHP là tổ chức phi chính phủ với gần 20 năm kinh nghiệm trong nghiên cứu, vận động chính sách và các chương trình can thiệp trong lĩnh vực y tế công cộng. </p>

			</div>
			<div class="nhomdich">
				<img src="/img/Logos_white-02.png">
				<p class="sub-title">Nhóm dịch/Hiệu đính</p>
				<hr>
				<p class="content">
				Nhóm dịch RUBIC hiện đang học tập và làm việc trong nhiều lĩnh vực khác nhau. Sách được hiệu đính bởi Th.S Hồ Huyền Thương (Chuyên gia trị liệu ABA) và
				TS. Vũ Song Hà (Phó Giám đốc Trung tâm Sáng kiến Sức khỏe và Dân số)
				<br/>
				</p>
			</div>
		</article>
	</section>

	<article>	

		<div class="clear auto ededed text-center contact">
			<p class="title">Liên hệ với chúng tôi</p>
			<p class="content">
			<b class="e96">Email:</b> tusachmaubu@gmail.com<br/>
<b class="e96">Hotline:</b> <a href="tel:84975955545">097 595 5545 (Nhật Linh)</a><br/><b><a class="e96" href="http://facebook.com/tretuky.rubic.co/" target="_blank">Facebook RUBIC Collaborative</a></b></p>
		</div>

		<p class="title thank">Cám ơn các bạn !</p>
		<hr/>

		<div class="partner">
			<div>
				<div class="partner-caption"><a>Hợp tác và hỗ trợ</a></div>
				<div class="partner-item"><a href=""><img src="img/CCHIP.png" height="60"></a></div>
				<div class="partner-item"><a href=""><img src="img/rubic.png" height="50"></a></div>
				<div class="partner-item"><a href=""><img src="img/nem.jpg" height="50"></a></div>
			</div>
		</div>

	</article>
	<footer>
		<p>Bạn muốn cập nhật thêm về thông tin tiến trình dự án sau khi gây quỹ? Đăng ký email:</p>
		<?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
	</footer>
	<a class="donate" href="#donate">
		<span>ỦNG HỘ!</span>
	</a>

	<script src="js/jquery.modal.js"></script>
	<link rel="stylesheet" href="js/jquery.modal.css">

	<div id="ex1" style="display:none;">
	    <div class="modal-header text-center white">Thông tin ủng hộ</div>
	    <div class="modal-body">
	    	<form name="frmDonate">
	    		<i class="e96 b10 block f14">(*) Thông tin bắt buộc</i>
	    		<label for="name">Tên người ủng hộ<i class="e96 f14">*</i></label>
	    		<input type="text" name="name" value="" />
	    		<label for="email">Email<i class="e96 f14">*</i></label>
	    		<input type="text" name="email" value="" />
	    		<label for="phone">Điện thoại<i class="e96 f14">*</i></label>
	    		<input type="text" name="phone" value="" />
	    		<label>Quà được gửi về:</label>
	    		<p>
	    			<input type="radio" name="recipient_type" value="0" checked="checked">
	    			<span>Gửi về cho tôi</span>
	    		</p>
	    		<p>
	    			<input type="radio" name="recipient_type" value="1">
	    			<span>Gửi bạn bè, người thân...</span>
	    		</p>
	    		<div style="margin-bottom: 10px;">
	    			<input type="radio" name="recipient_type" value="2">
	    			<span>Ủng hộ Quỹ sách màu Bu (Dùng để tặng sách miễn phí cho các gia đình có hoàn cảnh khó khăn)</span>
	    		</div>
				<div class="form-group" id="recipient_name">
		    		<label for="recipient_name">Tên người nhận quà<i class="e96 f14">*</i></label>
		    		<input type="text" name="recipient_name" value="" />
		    	</div>
				<div class="form-group" id="recipient_address">
		    		<label for="recipient_address">Địa chỉ người nhận<i class="e96 f14">*</i></label>
		    		<input type="text" name="recipient_address" value="" />
	    		</div>
	    		<div class="form-group" id="description">
		    		<label>Lời đề tặng</label>
		    		<textarea name="description"></textarea>
	    		</div>
	    		<div class="button-group">
	    			<input type="button" onclick="return donate_submit()" value="GỬI" />
	    		</div>
				
	    	</form>
	    </div>
	</div>
	    	<div class="text-center" id="success"></div>

</body>

</html>