<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Blue Shelf</title>
<link rel="icon" 
      type="image/png" 
      href="/img/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="/js/main.js"></script>

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
	.dropdown .btn{padding: 0; border: none; background: none;}
	.dropdown-menu img { margin-right: 20px; }
	#bu-dropdown-menu {float: right; right: 0; left: inherit;}
</style>

</head>

<body>
	<header>
		<div class="logo">
				<a href="//ccihp.org/"><img src="/img/CCHIP.png" alt="CCHIP.png" height="68px" /></a>
				<a href="//rubic-co.org"><img src="/img/rubic.png" alt="rubic.png"  height="46px" style="margin-bottom: 8px;" /></a>
		</div>
		<div class="dropdown">
		  <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
		  <img src="https://lipis.github.io/flag-icon-css/flags/4x3/um.svg" height="23px" />
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
		<p id="title">Give a helping hand to raise 200M VND to publish guide-books </br>for parents of children with autism in Vietnam!</p>
	</article>
	<article>
		<ul class="detail-pending">
			<li>
				<a>
				<?php
					$donate_amount = 112502222;
					$donate_percent = floor($donate_amount / 2000000);
					echo number_format($donate_amount, 0, '', '.');
				?>
				 VND</a>
				<span>raised</span>
			</li>
			<li>
				<a>175</a>
				<span>supporters <a href="http://buff.ly/2ksKTy0" target="_blank"> (check)</a></span>
			</li>
			<li>
				<a><?php echo $donate_percent ?>%</a>
				<span>complete</span>
			</li>
			<li>
				<a>
				<?php 
					$day_1 = date("2017-03-08");
					$day_2 = date('Y-m-d') ; //current date
					if(strtotime($day_1) > strtotime($day_2))
						echo $days = (strtotime($day_1) - strtotime($day_2)) / (60 * 60 * 24); 
					else
						echo "0";
				?> <black>days left</black></a>
			</li>
			<li>
				<a><red>200M VND</red></a>
				<span>Goal</span>
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
		<p id="due-time">The campaign starts from <b>January 8th</b> and runs through <b>March 8th</b>, 2017.</p>
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
				"There is currently no “magic bullet”, or a quick fix for autism. The real magic happens when parents understand and feel confident that there is a lot they can do for their children, by enriching their own knowledge and skills, and collaborating with professionals to provide comprehensive early intervention"
				<br>
				<a>(Thuong Ho, M.A, ABA therapist)</a>
			</p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="/img/slider-2.jpg" style="width:100%" data-src="" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
        	<p>
        		"One thing that even the best therapists and intervention centers do not have, that is the love and understanding of the parents for their child, and the family connection. And yet many parents are hesitant and afraid they aren’t trained professionally or know enough to teach their children. These books will be very helpful for parents who want to start getting involved in intervention as early as possible"
				<br>
				<a>
					Tran Hoa Mai – parent of a son with autism, Vice Chairwoman of Vietnam Autism Network
				</a>
        	</p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="/img/slider-3.jpg" style="width:100%" data-src="" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
        	<p>"I really like the part about teaching young children to understand, express and regulate their own emotions. I believe these books will be very helpful for parents who want to understand their children’s interests, abilities and emotions, and to learn more about child-centered approach to intervention."
				<br>
				<a>
					Ha Vu (MD, Ph.D, Vice Director - Center for Creative Initiatives in Health and Population)
				</a>
        	</p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>


	<article>
		<p class="title">Challenges of families with autism in Vietnam</p>
		<div class="clear" style="height: 20px;"></div>
	</article>
	<section class="whoami" style="background: white">
		<article>
			<div class="rubic">
				<img src="/img/english-web-01.jpg" style="width: 180px">
				<p class="sub-title black">Lack of support from the government as autism is not yet recognized as a disability</p>
			</div>
			<div class="d-cchip">
				<img src="/img/english-web-02.jpg"  style="margin: 0 auto 22px;">
				<p class="sub-title black">Lack of reliable and affordable intervention services, especially for families with financial difficulties.</p>
			</div>
			<div class="nhomdich">
				<img src="/img/english-web-03.jpg" style="width: 180px" />
				<p class="sub-title black">Lack of social support due to prevalent stigmas and misconceptions about autism.</p>
			</div>
		</article>
	</section>
	<section class="img_3451">
		<article>
			<p class="content b20">For long Vietnamese parents with autism have been left on their own to navigate through these challenges. Along this journey, parents who have become their own children’s experts and advocates would agree that knowledge is the key. And yet for the majority of parents, the main sources of information they have access to are shared experiences from other parents,  self-searched knowledge from the internet, and unofficial translations of foreign materials, which might imply a potential lack of reliability and thoroughness. It is even more difficult for families in rural areas or having financial constraints to have access to such resources, much less any professional help. </p>
		</article>
	</section>
	<article>
		<p class="title">Empowering through Knowledge</p>
		<p class="content b60"><b>The Blue Shelf</b> is an initiative to build <b>a special book collection on developmental disorders</b>, including autism, to provide Vietnamese parents of children with special needs with access to updated and reliable information resources. In the coming months, The Blue Shelf hopes and aims to proudly introduce two books to be translated and published in Vietnamese: <b>"Developing Playing Skills"</b> and <b>"Developing Social and Emotional Skills,"</b> from the series "How-to Guide" by Autism Aspect Australia. This is a joined effort between <a href="https://clbrubic.wordpress.com/" target="_blank"><b>RUBIC Collaborative</b></a> and <a href="http://a365.vn/" target="_blank"><b>A365 – Smart care for children with Autism</b></a>, a project by the Center for Creative Initiatives in Health and Population (CCIHP), to transfer knowledge from autism professionals to Vietnamese parents and the community. Written in a straightforward language with lots of illustrations, these must-have books will help parents better understand their children's difficulties and provide more effective instructions to enhance their children’s skills
		</p>
		<p class="content b20">
			About the author: <a href="https://www.autismspectrum.org.au/"  target="_blank"><b>Autism Aspect Australia</b></a> is Australia’s largest national service provider for people on the autism spectrum that provides the world’s largest specialised, evidence informed schools program, with additional services that include information and advice, diagnostic assessments, behaviour support, parent and family support, and adult programs. <br>
			Visit: <a href="https://www.autismspectrum.org.au/" target="_blank">https://www.autismspectrum.org.au</a>
		</p>
		<div class="skill">
			<div class="left-content">
				<p class="sub-title">Developing Social and Emotional Skills</p>
				<p class="content">Parents having difficulties teaching their child appropriate behaviors and emotional expressions across various social situations will undoubtedly benefit from this book. It provides information of social and emotional skills developmental stages and tips for enhancing these skills.
				</p>

			</div>
			<div>
				<img src="/img/skill_01.jpg" width="250px" />
			</div>
		</div>
				
		<div class="skill">
			<div class="left-content">
					<p class="sub-title">Developing Play Skills</p>
					<p class="content">Play is an integral part of a child&#39;s development. In this book, parents will learn about the different stages of play development and how play skills are affected in children with autism, useful tips and suggestions for fun, as well as engaging activities and games that the children will surely love!
					</p>
					
			</div>
			<div>
				<img src="/img/skill_02.jpg" width="250px" />
			</div>
		</div>
				
	</article>

	<article>
		<div class="clear"></div>
		<p class="title">To build the The Blue Shelf, we will need</p>
			
		<div class="text-center">
			<img src="/img/Budget.png" alt="favim" class="favim" class="auto block">
		</div>
		<p class="content">
		<b>25% of the printed books</b> will be <b>distributed free of charge</b> to parents with financial difficulties and other groups and organizations that support autism causes. 
		</p>
	</article>

	<p class="title b40">RUBIC needs YOU!</p>
	<section class="how ededed" id="donate">
		<img src="/img/IMG_3535.png" >
		<div>
			
		<p class="title">Kindly support us by following these simple steps</p>
		<p class="content">
			<b class="e96 p16">Step 1:</b> Fill out the information in the form <a href="#donateFrm" rel="modal:open"><b class="e96">here</b></a><br/>
			<b class="e96 p16">Step 2:</b> Transfer your donation:<br/>
		</p>
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#account-aus">From Australia</a></li>
		  <li><a data-toggle="tab" href="#account-other">Other countries</a></li>
		</ul>

		<div class="tab-content">
			<div id="account-aus" class="tab-pane fade in active">
		    	<p class="content">
					Account name: Tran Nam Thanh <br/>
Account No.: 375933018 -  Bank name: ANZ BSB: 014043 <br/>
Content: Bu2017 - Your name - Your Phone Number. Ex: Bu2017 - Le Huong Giang - phone
				</p>
			</div>
			<div id="account-other" class="tab-pane fade">
				<p class="content">
					Account name: Trung tâm Sáng kiến Sức khỏe và Dân số<br/>
					Account No: 125 100 00 927 870 ( VNĐ)<br/>
Bank Name: Bank for Investment and Development of Vietnam (BIDV) -  Đông Đô Branch<br/>
Content: Bu2017-Your name-Your email. Ex: Bu2017-Le Huong Giang–email<br/>
Bank code: 01202001 -  Swift: BIDV VNVX125
				</p>
			</div>
		</div>
		
		<p class="content clear">
			<b class="e96 p16">Step 3:</b>We will contact to confirm your donation upon receiving the information.<br>
		</p>
		</div>
	</section>
	<article class="b60">
		<p class="title">Donation Package</p>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active">
					<a href="#tab1">Under $30</a>
					<div>Thank-you note
						(approx. 600,000 VND)</br>
					</div>
				</li>
				<li><a>$30</a>
					<div>
					 (approx. 600,000 VND)</br>
					+ 1 printed book</br>
					+ 1 Blue Shelf Wristband</br>
					+ Thank-you note</br>
					</div>
				</li>
				<li><a>$100</a>
					<div> 
					(approx. 2,000,000 VND)</br>
					+ 2 printed books</br>
					+ 1 Blue Shelf Wristband</br>
					+ 1 A-U-T-I-S-M notebook</br>
					+ 1 A-U-T-I-S-M T-shirt</br>
					+ Thank-you note</br>
					</div>
				</li>
				<li><a>$200</a>
					<div>
					(approx. 4,000,000 VND)</br>
					+ 2 printed books</br>
					+ 1 Blue Shelf Wristband</br>
					+ 1 A-U-T-I-S-M notebook </br>
					+ 1 A-U-T-I-S-M T-shirt</br>
					+ 1 Rubic Tote</br>
					+ Thank-you note
					</div>
				</li>
				<li><a>$300</a>
					<div>
					(approx. 6,000,000 VND)</br>
					+ 2 printed books</br>
					+ 1 Blue Shelf Wristband</br>
					+ 1 A-U-T-I-S-M notebook </br>
					+ 1 A-U-T-I-S-M T-shirt</br>
					+ 1 Rubic Tote</br>
					+ 1 painting from Hiếu Gallery (Hieu is a Vietnamese young artist with autism)</br>
					+ Thank-you note
					</div>
				</li>
				<li><p style="position: inherit;">Please note that your donation will cover the shipping cost. However, we will appreciate if you want to further support us by paying for your own shipping cost separate from the amount donated.</p>
			</ul>
			<div class="tab-content">
				<div><img src="/img/sach.png"></div>
				<div><img src="/img/ao.png"></div>
				<div style="margin-left: 170px;"><img src="/img/so.png"></div>
				<div><img src="/img/tui.png"></div>
			</div>
		</div>
	</article>
	<section class="whoami">
		<p class="title white b60">The Blue Shelf Team</p>
		<article>
			<div class="rubic">
				<img src="/img/Logos_white-01.png">
				<p class="sub-title">Translation, Communications, Publication and Distribution: <b>RUBIC Collaborative</b></p>
				<hr>
				<p class="content">RUBIC Collaborative is the first advocate youth group for autism in Vietnam founded in 2013. RUBIC has established a youth network and connected different resources in the community to support children with autism and their families in creative and sustainable ways.</p>
			</div>
			<div class="d-cchip">
				<img src="/img/Logos_white-03.png">
				<p class="sub-title">Legal and Professional Sponsor: The Center for Creative Initiatives in Health and Population</p>
				<hr>
				<p class="content">CCIHP is a non-profit organization with more than 20 years of experiences in public health research, policy advocacy and interventions. Since 2014, CCIHP collaborates with the Vietnam Autism Network, and other national and international partners to develop the website a365.vn - a free online platform that supports early identification of autism, and parent-mediated intervention for children with Autism Spectrum Disorder.</p>
			</div>
			<div class="nhomdich">
				<img src="/img/Logos_white-02.png">
				<p class="sub-title">Translators/Editors</p>
				<hr>
				<p class="content">
				Members of the Volunteer Translation group are young people from all walks of life! Our books are edited by Ms. Thuong Ho (MS, ABA Specialist) and Dr. Vu Song Ha (Vice-Director of CCIHP).
				<br/>
				</p>
			</div>
		</article>
	</section>

	<article>	

		<div class="clear auto ededed text-center contact">
			<p class="title">Contact us</p>
			<p class="content">
			<b class="e96">Email:</b> tusachmaubu@gmail.com<br/>
<b class="e96">Hotline:</b> <a href="tel:84975205814">(+84) 97 520 5814 (Le Huong Giang)</a><br/><b><a class="e96" href="http://facebook.com/tretuky.rubic.co/" target="_blank">Facebook RUBIC Collaborative</a></b></p>
			<p>
			Corporates and organizations interested in Corporate Social Responsibility,<br> please contact us for further discussion
			</p>
		</div>

		<p class="title thank">Thank you for your support !</p>
		<hr/>

		<div class="partner">
			<div>
				<div class="partner-caption"><a>Supported by</a></div>
				<div class="partner-item"><a href=""><img src="/img/CCHIP.png" height="60"></a></div>
				<div class="partner-item"><a href=""><img src="/img/rubic.png" height="50"></a></div>
				<div class="partner-item"><a href=""><img src="/img/nem.jpg" height="50"></a></div>
			</div>
		</div>

	</article>
	<a class="donate" href="#donate">
		<span>DONATE!</span>
	</a>

<script src="/js/jquery.modal.js"></script>
<link rel="stylesheet" href="/js/jquery.modal.css">

	<div id="donateFrm" style="display:none;">
	    <div class="modal-header text-center white">Form</div>
	    <div class="modal-body">
	    	<form name="frmDonate">
	    		<i class="e96 b10 block f14">(*) Required</i>
	    		<label for="name">Name<i class="e96 f14">*</i></label>
	    		<input type="text" name="name" value="" />
	    		<label for="email">Email<i class="e96 f14">*</i></label>
	    		<input type="text" name="email" value="" />
	    		<label for="phone">Phone<i class="e96 f14">*</i></label>
	    		<input type="text" name="phone" value="" />
	    		<label>I want to send the gift to:</label>
	    		<p>
	    			<input type="radio" name="recipient_type" value="0" checked="checked">
	    			<span>My Address</span>
	    		</p>
	    		<p>
	    			<input type="radio" name="recipient_type" value="1">
	    			<span>Someone else</span>
	    		</p>
	    		<div style="margin-bottom: 10px;">
	    			<input type="radio" name="recipient_type" value="2">
	    			<span>Contribute to the Special Books for Special Kids collection</span>
	    		</div>
				<div class="form-group" id="recipient_name">
		    		<label for="recipient_name">Name<i class="e96 f14">*</i></label>
		    		<input type="text" name="recipient_name" value="" />
		    	</div>
				<div class="form-group" id="recipient_address">
		    		<label for="recipient_address">Address<i class="e96 f14">*</i></label>
		    		<input type="text" name="recipient_address" value="" />
	    		</div>
	    		<div class="form-group" id="description">
		    		<label>Note</label>
		    		<textarea name="description"></textarea>
	    		</div>
	    		<div class="button-group">
	    			<input type="button" onclick="return donate_submit()" value="SUBMIT" />
	    		</div>
				
	    	</form>
	    </div>
	</div>
	    	<div class="text-center" id="success"></div>

</body>

</html>