<?php /*a:2:{s:78:"/Applications/phpstudy/coyotehttpen/application/index/view/index/fm1mixer.html";i:1686189147;s:70:"/Applications/phpstudy/coyotehttpen/application/index/view/layout.html";i:1677057907;}*/ ?>
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

		
		<div class="ny_test_data color-495877" >
			<div class="core">
				<div class="index1-text2">
					<span>Update Mixer's Program</span>
				</div>

				<div class="banner-en font18 test_data_en margin_top20">
					<i>1</i>
					<h3>Download the "Program.txt" from this web.</h3>
				</div>
				<div class="test_data1 text-right">
					<div class="test_data_left">
						<div class="high1-img text-center">
							<img class="test_data_img" src="/kayoudi/img/test_data/test_data_08.jpeg" >
						</div>
					</div>
					<div class="test_data_right">
						<div class="high1-img text-center">
							<img class="test_data_img" src="/kayoudi/img/test_data/test_data_09.png" >
						</div>
					</div>
				</div>

				<div class="high1-img text-center">
					<img class="test_data_arrow" src="/kayoudi/img/test_data/test_data_11.png" >
				</div>

				<div class="banner-en font18 test_data_en margin_top20">
					<i>2</i>
					<h3>Copy the "Program.txt" into USB drive.</h3>
				</div>
				<div class="test_data1 text-right">
					<div class="test_data_left">
						<div class="high1-img text-center">
							<img class="test_data_img" src="/kayoudi/img/test_data/test_data_01.jpeg" >
						</div>
					</div>
					<div class="test_data_right">
						<div class="high1-img text-center">
							<img class="test_data_img" src="/kayoudi/img/test_data/test_data_02.jpeg" >
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="test_data_high pageBg">
			<div class="core">
					<div class="high1-img text-center">
						<img class="test_data_arrow" src="/kayoudi/img/test_data/test_data_11.png" >
					</div>

					<div class="banner-en font18 test_data_en margin_top20">
						<i>3</i>
						<h3>Turn on the mixer and wait until the blue button is stable.</h3>
					</div>

					<div class="test_video text-right">
						<div class="test_data_left">
							<div class="test_video1 text-center">
								<video class="edui-upload-video  vjs-default-skin video-js video-bg" controls="" preload="none" width="1000" height="460" src="/kayoudi/img/test_data/test_data_02.mp4" data-setup="{}" poster="/kayoudi/img/test_data/test_data_05.jpeg"></video>
							</div>
						</div>
					</div>

					<div class="high1-img text-center">
						<img class="test_data_arrow" src="/kayoudi/img/test_data/test_data_11.png" >
					</div>

					<div class="banner-en font18 test_data_en margin_top20">
						<i>4</i>
						<div>
							<h3>Hold the button for 5 seconds and release it.</h3>
							<h3>When the blue button is flashing, insert the USB drive on the mixer's back cover.</h3>
							<h3>Next wait for a few seconds until the blue button is stable. Then turn off the mixer and remove the USB drive.</h3>
						</div>
					</div>

					<div class="test_video text-right">
						<div class="test_data_left">
							<div class="test_video1 text-center">
								<video class="edui-upload-video  vjs-default-skin video-js video-bg" controls="" preload="none" width="1000" height="460" src="/kayoudi/img/test_data/test_data_01.mp4" data-setup="{}" poster="/kayoudi/img/test_data/test_data_05.jpeg"></video>
							</div>
						</div>
					</div>

				<!-- <div class="test_data2 text-right">
					<div class="test_data_left">
						<div class="banner-en font18 test_data_en">
							<i>3</i>
							<h3>Turn on the mixer and wait until the blue button is stable.</h3>
						</div>
					</div>

					<div class="test_data_right">
						<div class="test_video text-right">
							<div class="test_data_left">
								<div class="test_video1 text-center">
									<video class="edui-upload-video  vjs-default-skin video-js" controls="" preload="none" width="420" height="280" src="/kayoudi/img/test_data/test_data_01.mp4" data-setup="{}" poster="/kayoudi/img/test_data/test_data_05.jpeg"></video>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				

				<!-- <div class="test_data2 text-right">
					<div class="test_data_left">
						<div class="banner-en font18 test_data_en">
							<i>4</i>
							<h3>Hold the button for 5 seconds and release it. When the blue button is flashing, insert the USB drive on the mixer's back cover Next wait for a few seconds until the blue button is stable. Then turn off the mixer and remove the USB drive.</h3>
						</div>
					</div>

					<div class="test_data_right">
						<div class="test_video text-right">
							<div class="test_data_left">
								<div class="test_video1 text-center">
									<video class="edui-upload-video  vjs-default-skin video-js" controls="" preload="none" width="420" height="280" src="/kayoudi/img/test_data/test_data_02.mp4" data-setup="{}" poster="/kayoudi/img/test_data/test_data_05.jpeg"></video>
								</div>
							</div>
						</div>
					</div>
				</div> -->


				<!-- <div class="test_data2 text-right">
					<div class="test_data_left">
						<div class="banner-en font18 test_data_en">
							<i>3</i>
							<h3>Turn on the mixer and wait until the blue button is stable.</h3>
						</div>
						<div class="test_video text-right">
							<div class="test_data_left">
								<div class="test_video1 text-center">
									<video class="edui-upload-video  vjs-default-skin video-js" controls="" preload="none" width="420" height="280" src="/kayoudi/img/test_data/test_data_01.mp4" data-setup="{}" poster="/kayoudi/img/test_data/test_data_05.jpeg"></video>
								</div>
							</div>
						</div>
					</div>
					
					<div class="high1-img">
						<img class="test_data_arrow1" src="/kayoudi/img/test_data/test_data_12.png" >
					</div>
					<div class="test_data_right">
						<div class="banner-en font18 test_data_en">
							<i>4</i>
							<h3>Hold the button for 5 seconds and release it. When the blue button is flashing, insert the USB drive on the mixer's back cover Next wait for a few seconds until the blue button is stable. Then turn off the mixer and remove the USB drive.</h3>
						</div>
						<div class="test_video text-right">
							<div class="test_data_left">
								<div class="test_video1 text-center">
									<video class="edui-upload-video  vjs-default-skin video-js" controls="" preload="none" width="420" height="280" src="/kayoudi/img/test_data/test_data_02.mp4" data-setup="{}" poster="/kayoudi/img/test_data/test_data_05.jpeg"></video>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				<div class="product-information padding-t80 test_video1" >
					<!-- <table class="fm_table" border="1">
						<tr>
						  	<th class="a_td_name"></th>
						  	<th class="a_td_name">QC</th>
						  	<th class="a_td_name">Program</th>
						</tr>
						<tr>
						  	<td class="a_td_name">新冠</td>
						  	<td class="a_td_name">0011C</td>
						  	<td class="a_td_name"><a href="/kayoudi/img/test_data/Program_0011C.pdf" download="Program_0011C" class="a_td">Program</a></td>
						</tr>
						<tr>
							<td class="a_td_name">甲乙新</td>
							<td class="a_td_name">0021C</td>
							<td class="a_td_name"><a href="/kayoudi/img/test_data/Program_0021C.pdf" download="Program_0021C" class="a_td">Program</a></td>
						</tr>
					  </table> -->

					  
					<div class="index1-text2">
						<span>Product Resources</span>
					</div>
					<div class="text-center test_data_item">
						<img class="test_data_icon" src="/kayoudi/img/test_data/test_data_06.jpeg" >
						<div class="test_data_item_1 line2">
							<h3>The red line in the figure represents QC.</h3> 
						</div>
					</div>
					<div class="test_data_div">
						<div class="proInfo-list test_data_list">
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0011A/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:新冠</p>  -->
										<p class="new_p">QC:0011A</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0011B/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0011B</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0011C/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0011C</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0011D/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0011D</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0021C/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0021C</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0021D/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0021D</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0171C/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0171C</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0171D/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0171D</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0181C/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0181C</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0181D/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0181D</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0221C/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0221C</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0231C/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0231C</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							<div class="new_proInfo-item margin-b30 test_data_color">
								<a href="/kayoudi/img/test_data/0231D/Program.txt" download="Program">
									<div class="new_proInfo-item-left">
										<i></i>
										<p>Download</p>
									</div>
									<div class="new_proInfo-item-right line3">
										<!-- <p>名称:甲乙新</p>  -->
										<p class="new_p">QC:0231D</p>
										<p>Program.txt</p>
									</div>
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
 

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
