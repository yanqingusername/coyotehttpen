<?php /*a:1:{s:79:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/index/view/layout.html";i:1672304802;}*/ ?>
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

		
		<div class="ny-banner color-495877 solution-banner" style="background-image: url(<?php echo htmlentities($solution['path']); ?>);">
			<div class="core">
				<h3 class="font46 font-bold line-height-1em"><?php echo htmlentities($solution['title']); ?></h3>
			</div>
		</div>
		
		
		<div class="solution-high pageBg">
			<div class="core">
			    <div class="index1-text2">
					<span>Scalable Capacity</span>
				</div>
				<!--<div class="index-tit">-->
				<!--	<h3>高通量全检测</h3>-->
				<!--	<p>-->
				<!--		<i></i>-->
				<!--		<span>High throughput full detection</span>-->
				<!--		<i></i>-->
				<!--	</p>-->
				<!--</div>-->
				<div class="high1 text-right">
					<div class="high-left">
						<div class="high-text">
							<h2>1</h2>
							<div class="high-text-p1">
								<p>Flash detection</p>
								<p>1-minute sample preparation</p>
								<p>30 minutes from sample to results</p>
							</div>
						</div>
						
						<ul class="high-ul">
							<li><i style="background-image: url(/kayoudi/img/solution/high1-icon1.png);"></i><p>Hospitals' emergency department</p></li>
							<li><i style="background-image: url(/kayoudi/img/solution/high1-icon2.png);"></i><p>Hospitals' fever clinic</p></li>
							<li><i style="background-image: url(/kayoudi/img/solution/high1-icon3.png);"></i><p>Hospitals' clinical laboratory</p></li>
							<li><i style="background-image: url(/kayoudi/img/solution/high1-icon4.png);"></i><p>CDCs' laboratory</p></li>
						</ul>
					</div>
					<div class="high-right">
						<div class="high1-img text-center">
							<img src="/kayoudi/img/solution/high1-img.png" >
						</div>
					</div>
				</div>
				
				
				
				<div class="high2">
					<div class="high-left">
						<div class="high1-img">
							<img src="/kayoudi/img/solution/high2-img.png" >
						</div>
					</div>
					<div class="high-right">
						<div class="high-text">
							<h2>2</h2>
							<div class="high-text-p1">
								<p>Mobile, safe and standardized</p>
				
							
					
							
							</div>
						</div>
						<ul class="high-ul">
							<li><i style="background-image: url(/kayoudi/img/solution/high2-icon1.png);"></i><p>Airport</p></li>
							<li><i style="background-image: url(/kayoudi/img/solution/high2-icon2.png);"></i><p>Highway Checkpoint</p></li>
							<li><i style="background-image: url(/kayoudi/img/solution/high2-icon3.png);"></i><p>Cruise</p></li>
							<li><i style="background-image: url(/kayoudi/img/solution/high2-icon4.png);"></i><p>Train Station</p></li>
						</ul>
					</div>
				</div>
				
				
				
				<div class="high3" style="display:none">
					<div class="high3-box">
						<div class="high-left text-right">
							<div class="high-text">
								<h2>3</h2>
								<div class="high-text-p1">
									<p>统筹调配，平战结合</p>
									<p>即达即检，日检万管</p>
									<p>触达需求的最基层、最前线</p>
								</div>
								<div class="high-text-p2">
									<p>缓解基层及边境地区检测条件不足的问题</p>
									<p>局部突发疫情时能够迅速调集</p>
									<p>形成强大的现场应急检测能力</p>
									<p>守护疫情防控最后一公里</p>
								</div>
							</div>
						</div>
						<div class="high-right">
							<ul class="high-ul">
								<li><i style="background-image: url(/kayoudi/img/solution/high3-icon1.png);"></i><p>疫情核心区大规模精准筛查</p></li>
								<li>
									<i style="background-image: url(/kayoudi/img/solution/high3-icon2.png);"></i>
									<p>缓解基层“医荒”、<br>医疗无法触达之地的问题</p>
								</li>
								<li><i style="background-image: url(/kayoudi/img/solution/high3-icon3.png);"></i><p>大型赛事现场采检出报告</p></li>
								<li><i style="background-image: url(/kayoudi/img/solution/high3-icon4.png);"></i><p>国内外重要会议现场采检出报告</p></li>
							</ul>
						</div>
					</div>
					
					<div class="high3-img">
						<img src="/kayoudi/img/solution/high3-img.png" alt="">
					</div>
				</div>
				
				
				
				<div class="about-product">
					<div class="index-tit">
						<p>
							<i></i>
							<span>Related Products</span>
							<i></i>
						</p>
					</div>
					
					
					<div class="insdel-box5-list">
						<?php if(is_array($solution['recommend']) || $solution['recommend'] instanceof \think\Collection || $solution['recommend'] instanceof \think\Paginator): $i = 0; $__LIST__ = $solution['recommend'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<div class="insdel-box5-item">
							<a href="<?php echo url('index/instrument_detail',['id'=>$item['id']]); ?>">
								<div class="insdel-box5-img">
									<img src="<?php echo htmlentities($item['thumb_path']); ?>" alt="">
								</div>
								<p><?php echo htmlentities($item['title']); ?></p>
							</a>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
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
