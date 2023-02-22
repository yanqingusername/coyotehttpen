<?php /*a:2:{s:86:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/index/view/index/contact.html";i:1646015520;s:79:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/index/view/layout.html";i:1672304802;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlentities($seo['meta_title']); ?></title>
		<meta name="keywords" content="<?php echo htmlentities($seo['meta_keywords']); ?>">
		<meta name="description" content="<?php echo htmlentities($seo['meta_description']); ?>">
		<link rel="icon" type="image/x-icon" href="icon.png" />
		<link rel="stylesheet" href="/kayoudi/css/swiper.min.css" />
		<link rel="stylesheet" href="/kayoudi/css/common.css?<?php echo time(); ?>" />
		<link rel="stylesheet" href="/kayoudi/css/style.css?<?php echo time(); ?>" />
		<script type="text/javascript" src="/kayoudi/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="/kayoudi/js/wow.min.js"></script>
		<script type="text/javascript" src="/kayoudi/js/script.js"></script>
		<script type="text/javascript" src="/kayoudi/js/swiper.min.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-J1DGRNCQ6S"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-J1DGRNCQ6S');
        </script>
	</head>
	<body>
		<!-- 头部 开始 -->
		<div class="header ny-header">
			<div class="core">
				<div class="logo">
					<a href="/"><img src="<?php echo config('web_site_logo'); ?>" alt=""></a>
				</div>

				<div class="nav">
					<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<div class="nav-item <?php if($item['active']): ?>active<?php endif; ?>">
						<p>
							<a href="<?php echo url($item['url']); ?>"><?php echo htmlentities($item['catname']); ?></a>
							<?php if($item['sub']): ?>
							<i></i>
							<?php endif; ?>
						</p>
						<?php if($item['sub']): ?>
						<div class="nav-two">
							<div class="core">
								<?php if(is_array($item['sub']) || $item['sub'] instanceof \think\Collection || $item['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub1): $mod = ($i % 2 );++$i;?>
								<dl>
									<dt><a href="<?php echo url($sub1['url']); ?>"><?php echo htmlentities($sub1['catname']); ?></a></dt>
									<?php if($sub1['sub']): if(is_array($sub1['sub']) || $sub1['sub'] instanceof \think\Collection || $sub1['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sub1['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub2): $mod = ($i % 2 );++$i;?>
									<dd><a href="<?php echo url($sub1['sub_url'],['id'=>$sub2['id']]); ?>"><?php echo htmlentities($sub2['title']); ?></a></dd>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									<?php endif; ?>
								</dl>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>

				<div class="header-search">
					<a href="<?php echo url('search'); ?>"></a>
				</div>

				<div class="lang">
					<div style="display: flex; align-items: center;">
						<i></i><span>EN</span>
					</div>
					<div class="other-lang">
						<a class="other-lang-item" href="http://www.coyotebio.com/">
								<i></i><span>CN</span>
							</a>
					</div>
				</div>

				<!-- <div class="search">
					<i></i>
				</div>
					
				<div class="search-box">
					<input type="text" id="" value="" />
					<button type="button">搜索</button>
				</div> -->
			</div>
		</div>

		<div class="head-wall"></div>
		<!-- 内页头部 结束 -->

		

		<div class="ny-banner color-495877 join-banner" style="background-image: url(/kayoudi/img/contact/banner.png)">

			<div class="core">

				<h3 class="font46 font-bold line-height-1em"><?php echo htmlentities($cate['picname']); ?></h3>
				<div class="ny-banner-text" style="white-space: pre;"><?php echo htmlentities($cate['description']); ?></div>
			</div>

		</div>

		<div class="contact">

			<div class="core">

					<form id="sendform">

				<div class="contact-form">

					<h3>General and Sales Enquiries</h3>

					<h4>Please feel free to contact us if you want to know more about Coyote® FlashDetect™ System. Also We will revert back to you within 24 hours once we receive any concerns or questions.</h4>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> First Name

						</div>

						<div class="form-cell-right">

							<input type="text" name="first_name" value="" required />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Last Name

						</div>

						<div class="form-cell-right">

							<input type="text" name="last_name" value="" required />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Job Title

						</div>

						<div class="form-cell-right">

							<input type="text" name="job_title" value="" required />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							Phone

						</div>

						<div class="form-cell-right">

							<input type="text" name="phone" value="" />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Email

						</div>

						<div class="form-cell-right">

							<input type="text" name="email" value="" required />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Company or Institution

						</div>

						<div class="form-cell-right">

							<input type="text" name="company" value="" required />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Location

						</div>

						<div class="form-cell-right">

							<select name="location" required >

								<option value ="">Please Select Country</option>

								<?php if(is_array($country) || $country instanceof \think\Collection || $country instanceof \think\Paginator): $i = 0; $__LIST__ = $country;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

									<option value ="<?php echo htmlentities($item); ?>"><?php echo htmlentities($item); ?></option>

								<?php endforeach; endif; else: echo "" ;endif; ?>

							</select>

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							Website

						</div>

						<div class="form-cell-right">

							<input type="text" name="website" value="" />

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Comment

						</div>

						<div class="form-cell-right">

							<textarea name="comment" required></textarea>

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left">

							<span>*</span> Distributorship

						</div>

						<div class="form-cell-right" style="display: flex; flex-wrap: wrap; align-items: center;">

							<div class="radio-item">

								<input class="radio_type" required type="radio" name="ship" value="yes"><span>Yes</span>

							</div>

							<div class="radio-item">

								<input class="radio_type" required type="radio" name="ship" value="no"><span>No</span>

							</div>

							<div class="radio-item">

								<input class="radio_type" required type="radio" name="ship" value="other"><span>Other</span>

							</div>

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left"></div>

						<div class="form-cell-right agree">

							<input class="radio_type" type="checkbox" id="agree1" />

							<p>

								I acknowledge that I have read and understand Coyote Biosci-ence's <span class="tod">privacy policy</span> before submitting.

							</p>

						</div>

					</div>

					<div class="form-cell">

						<div class="form-cell-left"></div>

						<div class="form-cell-right">

							<button class="contact-form-sub" type="submit">Submit</button>

						</div>

					</div>

				</div>

				</form>

				<!-- <div class="tit">
					<div class="tit-cn">Contact Information</div>
				</div> -->

				

				<div class="contact-main wow bounceInUp" style="background-image: url(/kayoudi/img/contact/earth.png);">

					<div class="global-distribution">

						<div class="distribution-con" style="font-size: 24px">

							By the end of 2021, Coyote has entered five continents and 64 countries and regions

						</div>

					</div>

				</div>



				<!-- <div class="wow bounceInUp">

					<?php echo $content; ?>

				</div> -->

			

				<div class="contact-list">

					<?php if(is_array($mycompany) || $mycompany instanceof \think\Collection || $mycompany instanceof \think\Paginator): $i = 0; $__LIST__ = $mycompany;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if(is_array($item) || $item instanceof \think\Collection || $item instanceof \think\Paginator): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$it): $mod = ($i % 2 );++$i;?>

						<div class="contact-item wow bounceInUp">

							<h3><?php echo htmlentities($it['title']); ?></h3>

							<p><?php echo htmlentities($it['address']); ?></p>

						</div>

						<?php endforeach; endif; else: echo "" ;endif; ?>

					<?php endforeach; endif; else: echo "" ;endif; ?>

				</div>

			</div>

		</div>



		<div class="contact-mask">

			<div class="contact-mask-box">

				<div class="contact-mask-top">

					<i></i>

					<p>Privacy Policy</p>

				</div>

				

				<div class="contact-mask-con">

					<div class="contact-mask-text">

						<?php echo $policy; ?>

					</div>

				</div>

				

				<div class="contact-mask-bottom">

					<div class="agree">

						<input class="radio_type" type="checkbox" id="agree2" />

						<p>

							I acknowledge that I have read and understand Coyote Bioscience's <span>Privacy Policy</span> before submitting.<br>

							I agree and allow Coyote Bioscience to use and store my personal data in order to contact me to receive informa-tion on products, services, newsletters, surveys or upcoming events in the future.

						</p>

					</div>

					<div class="contact-mask-btn">

						<button class="agree-btn" type="button">I Agree</button>

						<button class="close-btn" type="button">Close</button>

					</div>

				</div>

			</div>

		</div>





<script>

$(".tod").click(function(){

	$(".contact-mask").show()

})

$(".close-btn").click(function(){

	$(".contact-mask").hide()

})

$(".agree-btn").click(function(){

	if(!$('#agree2').prop('checked')){

		alert("请先勾选同意协议")

		return false; 

	} else {

		$('#agree1').prop('checked',true)

		$(".contact-mask").hide()

	}

})

$(document).ready(function() {

	$('#sendform').submit(function() {

		if(!$('#agree1').prop('checked')){

	 		alert("请先勾选同意协议")

			return false; 

		}

		

  		$.ajax({

            type: "POST",

            dataType: "json",

            url: "<?php echo url('index/add_contact'); ?>" ,

            data: $('#sendform').serialize(),

            success: function (result) {

                alert(result.msg)

            },

            error : function() {

                alert("异常！");

            }

        });

	  	return false; 

	});

});



</script>

		<div class="footer padding-t115">
			<div class="core">
				<div class="footer-main">
					<div class="footer-logo"><img src="<?php echo config('web_bottom_logo'); ?>" alt=""></div>
					<div class="footer-info">
						<?php if(is_array($mycompany) || $mycompany instanceof \think\Collection || $mycompany instanceof \think\Paginator): $i = 0; $__LIST__ = $mycompany;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if(is_array($item) || $item instanceof \think\Collection || $item instanceof \think\Paginator): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$it): $mod = ($i % 2 );++$i;?>
						<div class="finfo-item">
							<p><?php echo htmlentities($it['title']); ?></p>
							<p><?php echo htmlentities($it['address']); ?></p>
							<p><?php echo htmlentities($it['mobile']); ?></p>
							<p><?php echo htmlentities($it['email']); ?></p>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>

				<div class="footer-bottom">
					<!-- <div class="flex-shrink0 padding-r20">
						<div class="fewm">
							<img src="<?php echo config('web_bottom_qrcode'); ?>" alt="">
						</div>
					</div> -->

					<div class="fshare">
						<a style="background-image: url(/kayoudi/img/footer-icon1.png);" target="_blank"
							href="<?php echo config('web_site_in'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon2.png);" target="_blank"
							href="<?php echo config('web_site_youtube'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon3.png);" target="_blank"
							href="<?php echo config('web_site_fackbook'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon4.png);" target="_blank"
							href="<?php echo config('web_site_twitter'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon5.png);" target="_blank"
							href="<?php echo config('web_site_instagram'); ?>"></a>
					</div>
					<div class="fb-p">
						<p>
							<?php if(is_array($bottom_menu) || $bottom_menu instanceof \think\Collection || $bottom_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $bottom_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
							<a href="<?php echo url($item['url']); ?>"><?php echo htmlentities($item['catname']); ?></a>
							<?php if(count($bottom_menu) != $key+1): ?>
							<em>/</em>
							<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							<em>/</em>
							<!--<a href="<?php echo url('index/login'); ?>">Support</a>-->
						</p>
						<p><?php echo config('web_site_icp'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
