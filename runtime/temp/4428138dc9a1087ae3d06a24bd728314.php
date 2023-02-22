<?php /*a:1:{s:84:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/index/view/index/index.html";i:1672304841;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlentities($seo['meta_title']); ?></title>
		<meta name="keywords" content="<?php echo htmlentities($seo['meta_keywords']); ?>">
		<meta name="description" content="<?php echo htmlentities($seo['meta_description']); ?>">
		<link rel="icon" type="image/x-icon" href="icon.png" />
		<link rel="stylesheet" href="/kayoudi/css/swiper.min.css" />
		<link rel="stylesheet" href="/kayoudi/css/common.css" />
		<link rel="stylesheet" href="/kayoudi/css/style.css?<?php echo time(); ?>" />
		<script type="text/javascript" src="/kayoudi/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="/kayoudi/js/wow.min.js"></script>
		<script type="text/javascript" src="/kayoudi/js/script.js"></script><!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-J1DGRNCQ6S"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-J1DGRNCQ6S');
        </script>
	</head>
	<body>
		<!-- 轮播图 -->
		<div class="banner" style="background-image: url(<?php echo htmlentities($cate['imagepath']); ?>);">
			<div class="header">
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
							<!-- <i style="background-image: url(/kayoudi/img/en.png);"></i><span>EN</span> -->
							<i></i><span>EN</span>
						</div>
						<div class="other-lang">
							<a class="other-lang-item" href="http://www.coyotebio.com/">
								<i></i><span>CN</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="ibanner-text core color-495877">
				<h4 class="font60 big-en"><?php echo htmlentities($cate['subpicname']); ?></h4>
				<h3 class="font60 big-en"><?php echo htmlentities($cate['picname']); ?></h3>
			</div>
		</div>
		
		
		<div class="main">
			<div class="index1">
				<div class="core">
					<?php if(is_array($solution) || $solution instanceof \think\Collection || $solution instanceof \think\Paginator): $i = 0; $__LIST__ = $solution;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
					<div class="index1-item wow bounceInUp">
						<?php if($key==1): ?>
						<div class="index1-text">
							<!-- <div class="index1-tit">
								<i></i>
								<p><?php echo htmlentities($item['entitle']); ?></p>
							</div> -->
							<h3><?php echo htmlentities($item['title']); ?></h3>
							<div class="index1-p">
								<?php echo htmlentities($item['remark']); ?>
							</div>
							
							<a class="index-more big-en" href="<?php echo url('solution_info',['id'=>$item['id']]); ?>">
								<span>details</span><em></em>
							</a>
						</div>
						<div class="index1-img">
							<img src="<?php echo htmlentities($item['path']); ?>" alt="">
						</div>
						<?php else: ?>
						<div class="index1-img">
							<img src="<?php echo htmlentities($item['path']); ?>" alt="">
						</div>
						
						<div class="index1-text">
							<!-- <div class="index1-tit">
								<i></i>
								<p><?php echo htmlentities($item['entitle']); ?></p>
							</div> -->
							<h3><?php echo htmlentities($item['title']); ?></h3>
							<div class="index1-p">
								<?php echo htmlentities($item['remark']); ?>
							</div>
							
							<a class="index-more big-en" href="<?php echo url('solution_info',['id'=>$item['id']]); ?>">
								<span>details</span><em></em>
							</a>
						</div>
						<?php endif; ?>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					  
					<!-- 关于卡尤迪 -->
					<div class="index1-item index-about wow bounceInUp" style="margin-bottom: 50px">
						<div class="index1-text">
							<h3><?php echo htmlentities($index['title']); ?></h3>
							<div class="index1-p">
								<?php echo htmlentities($index['aboutcontent']); ?>
							</div>
							<a class="index-more big-en" href="<?php echo url('about'); ?>"><span>details</span><em></em></a>
						</div>
						<div class="colorbox"></div>
						<!-- <div style="width: 35.583333%"> -->
						<div class="index-story-img">
							<img src="<?php echo htmlentities($index['path']); ?>" alt="">
						</div>
					</div>
					
					
					<!-- <div class="index-story wow bounceInUp">
						<div class="index1-text">
							<div class="index1-tit">
								<i></i>
								<p><?php echo htmlentities($index['entitle2']); ?></p>
							</div>
							<h3><span><?php echo htmlentities($index['title2']); ?></span><i class="play-btn"></i></h3>
						</div>
						<div class="index-story-img">
							<img src="<?php echo htmlentities($index['path']); ?>" alt="">
						</div>
					</div> -->
				</div>
			</div>
			
			<div class="video-mask">
				<video id="video" controls>
					<source src="<?php echo htmlentities($index['video_path']); ?>" type="video/mp4">
				</video>
				<div class="video-close"></div>
			</div>
			
			<script>
				$(".play-btn").click(function() {
					$(".video-mask").stop().css("display","flex")
					$("#video")[0].play()
				})
				$(".video-close").click(function() {
					$("#video")[0].pause()
					$(".video-mask").stop().hide()
				})
			</script>
			
			<!-- 推荐仪器 -->
			<div class="index-product wow bounceInUp" style="background-image: url(/kayoudi/img/index/product-bg.png);">
				<div class="core">
					<div class="ipro-img" style="background-image: url(<?php echo htmlentities($instrument['index_path']); ?>);">
				      	<i class="bor-left"></i>
				      	<i class="bor-right"></i>
				    </div>
					<div class="ipro-text">
						<h3><?php echo htmlentities($instrument['title']); ?></h3>
						<div class="index1-p">
							<?php echo htmlentities($instrument['remark']); ?>
						</div>
						
						<a class="index-more big-en" href="<?php echo url('index/instrument_detail',['id'=>$instrument['id']]); ?>">
							<span>details</span><em></em>
						</a>
					</div>
				</div>
			</div>


			
			
			<div class="index-cooperative pageBg wow bounceInUp">
				<div class="core">
					<div class="index1-text2">
						<span>NEWS</span>
					</div>
					<div class="inew-list padding-t80">
						<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<div class="inew-item">
							<a href="<?php echo url('index/news_details',['id'=>$item['id']]); ?>">
								<img src="<?php echo htmlentities($item['path']); ?>" alt="">
								<div class="inew-item-text">
									<h3 class="line2"><?php echo htmlentities($item['title']); ?></h3>
									<p><span><?php echo htmlentities(date('Y.m.d',!is_numeric($item['inputtime'])? strtotime($item['inputtime']) : $item['inputtime'])); ?></span> <em></em> <span>News</span></p>
								</div>
							</a>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
			
			<!-- <div class="index-cooperative pageBg wow bounceInUp">
				<div class="core">
					<div class="index-tit">
						<h3>权威认证</h3>
						<p>
							<i></i>
							<span>Regulatory Authorities</span>
							<i></i>
						</p>
					</div>
					
					<div class="icooperative-main">
						<?php if(is_array($cooperation) || $cooperation instanceof \think\Collection || $cooperation instanceof \think\Paginator): $i = 0; $__LIST__ = $cooperation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
							<a>
						       	<i style="background-image: url(<?php echo htmlentities($item['path']); ?>);"></i>
						       	<p><?php echo htmlentities($item['title']); ?></p >
					      	</a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div> -->
		</div>
		
		
		<div class="footer padding-t115">
			<div class="core">
				<div class="footer-main">
					<div class="footer-logo"><img src="<?php echo config('web_bottom_logo'); ?>" alt=""></div>
					<?php if(is_array($mycompany) || $mycompany instanceof \think\Collection || $mycompany instanceof \think\Paginator): $i = 0; $__LIST__ = $mycompany;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
						<div class="footer-info">
							<?php if(is_array($item) || $item instanceof \think\Collection || $item instanceof \think\Paginator): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$it): $mod = ($i % 2 );++$i;?>
								<div class="finfo-item">
									<p><?php echo htmlentities($it['title']); ?></p>
									<p><?php echo htmlentities($it['address']); ?></p>
									<p><?php echo htmlentities($it['mobile']); ?></p>
									<p><?php echo htmlentities($it['email']); ?></p>
								</div>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				
				<div class="footer-bottom">
					<!-- <div class="flex-shrink0 padding-r20">
						<div class="fewm">
							<img src="<?php echo config('web_bottom_qrcode'); ?>" alt="">
						</div>
					</div> -->
					
					<div class="fshare">
						<a style="background-image: url(/kayoudi/img/footer-icon1.png);" target="_blank" href="<?php echo config('web_site_in'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon2.png);" target="_blank" href="<?php echo config('web_site_youtube'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon3.png);" target="_blank" href="<?php echo config('web_site_fackbook'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon4.png);" target="_blank" href="<?php echo config('web_site_twitter'); ?>"></a>
						<a style="background-image: url(/kayoudi/img/footer-icon5.png);" target="_blank" href="<?php echo config('web_site_instagram'); ?>"></a>
					</div>
					<div class="fb-p">
						<p>
							<?php if(is_array($bottom_menu) || $bottom_menu instanceof \think\Collection || $bottom_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $bottom_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
								<a href="<?php echo url($item['url']); ?>"><?php echo htmlentities($item['catname']); ?></a>
								<?php if(count($bottom_menu) != $key+1): ?>
								<em>/</em>
								<?php endif; ?>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							<!--<em>/</em>-->
							<!--<a href="<?php echo url('index/login'); ?>">Support</a>-->
						</p>
						<p><?php echo config('web_site_icp'); ?></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<script>
			$(document).scroll(function(){
				var scroH = $(document).scrollTop();
				var HH = $(".header").height();
				if (scroH >= HH) {
					$(".header").stop().addClass("head-active")
				} else{
					$(".header").stop().removeClass("head-active")
				}
			})
		</script>
	</body>
</html>
