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

		
    <style>
        .index-more{display:none;}
    </style>
		<div class="ny-banner color-495877 solution-banner" style="background-image: url(<?php echo htmlentities($solution['path']); ?>);">
			<div class="core">
				<h3 class="font46 font-bold line-height-1em">Wide Range of Applications</h3>
			</div>
		</div>
		
		
		<div class="scene">
			<div class="index1-text2">
				<span> Applications</span>
			</div>
			
			<div class="scene-main">
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon1.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>Medical Institutions</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>Infections in hospitals: cross infections in hospitals result in an addition of 9-15 billions of treatment costs each year in China based on estimation.</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											The FlashDetect™ Mobile Lab can increase the response speed to public health emergencies and reduce the possibility of cross infections in hospitals.
										</p>
									</div>
								</li>
								<li>
									<h4><span>2</span>Increased number of patients in fever clinic and emergency department: Long analysis process results in delayed treatment of many patients and overwhelmed hospital wards.</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											Flash20 and Flash48 together can increase the testing speed and amount. 
										</p>
									</div>
								</li>
								<li>
									<h4><span>3</span>Limited testing capability: The medical reform focuses on the development of community-level medical care and hierarchical medical system. For doctors working in community-level medical institutions, there are few opportunities for continuous self-improvement, causing inconsistent skills in doctors.</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											Flash20 is easy to operate.
										</p>
									</div>
								</li>
								<li>
									<h4><span>4</span>Community-level medical institutions offer low charged services. Considering the high cost of medical equipment, there is little return on investment.</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											One instrument can perform personalized medication tests, maternal and child tests, tumor tests, respiratory tests, HFMD, HPV, influenza, etc.
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>

							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon1.png);"></i>
											<p>医疗机构</p>
										</div>
										<div class="model-p">
											<p>
												发热门诊是传染病预警筛查的岗哨，患者检测不及时将会增加院感风险；而对急诊病人来说，时间就是生命，检测时间长可能延误急重症患者的抢救时机。卡尤迪闪测Flash20采用单样本孔独立温控设计，结合国际专利“分子并行反应技术”，可实现“1分钟加样，30 分钟看结果”，实现样本随来随检，大幅提高了核酸检测效率。
											</p>
											<p>
												新冠疫情下，常态化的核酸检测不仅加大了医护人员及检验人员的工作量，还影响检验科常规项目的开展。卡尤迪闪测方舱移动实验室，可以有效解决这一问题，解放实验人员，降低院感的风险；还可作为当地移动核酸检测力量，当疫情发生时，大幅度提高医院检测能力。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon2.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>Transportation Hubs</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>Transportation hubs requires high-speed testing in the absence of clinical laboratories and medical professionals due to large numbers of passengers.</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											The FlashDetect™ Mobile Lab increases testing capability and time.Results are available within 1 hour with a daily testing capacity of more than 10,000 samples.
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>

							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon2.png);"></i>
											<p>交通枢纽</p>
										</div>
										<ul class="model-img">
											<li style="background-image: url(/kayoudi/img/solution/model-img1.png);"></li>
											<li style="background-image: url(/kayoudi/img/solution/model-img2.png);"></li>
										</ul>
										<div class="model-p">
											<p>
												当疫情发生封城封区时，生活物资保障是必不可缺少的。在关键点“高速出入口” ，配置移动方舱检测实验室，做好物资运输车辆司乘人员以及物品核酸检测工作。
											</p>
											<p>
												北京市为确保疫情期间生活必需品的输送，在大广、京台高速位于河北界内的牛驼、万庄服务区设置了核酸采样点，针对运输车辆司乘人员提供免费核酸检测服务，日检测量达1万人次。
											</p>
											<p>
												新疆疫情期间，因核酸检测等待时间过长，货车司机和物资大量滞留。卡尤迪闪测方舱承担起物资运输的大车司机核酸检测，1小时出具检测结果，确保安全、快速通过路口，保障疫情防控和物资运输及时送达。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon3.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>Major Events</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>High testing frequency: testing on the day of entry / 7 days / 14 days testing</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											The FlashDetect™ Mobile Lab can perform rapid testing on-site.Instant testing upon arrival, results are available within 1 hour with a daily testing capacity of more than 10,000 samples.
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>

							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon3.png);"></i>
											<p>重大赛事</p>
										</div>
										<ul class="model-img">
											<li style="background-image: url(/kayoudi/img/solution/model-img3.png);"></li>
											<li style="background-image: url(/kayoudi/img/solution/model-img4.png);"></li>
										</ul>
										<div class="model-p">
											<p>
												重大赛事、会议等活动，人员复杂，检测量大，且对检测频次要求高。为了保障人员安全，需要切实做好新冠肺炎疫情防控工作
											</p>
											<p>
												2021年春节期间，4座卡尤迪闪测方舱实验室在北京2022年冬奥会和冬残奥会举办地崇礼拔地而起，为我国重大赛事疫情防控保驾护航。
											</p>
											<p>
												2021年8月2日，首届全球数字经济大会在北京国家会议中心举行。卡尤迪闪测方舱负责本次大会核酸检测任务，对参会嘉宾及工作人员在入场前进行新冠核酸检测，为大会的疫情防控工作保驾护航。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon4.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>On-site Emergency Response</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>Mobilization and testing that must be completed for massive crowds rapidly and urgently, and non-fixed testing locations</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
										The FlashDetect™ Mobile Lab supports instant testing upon arrival and rapid COVID-19 testing.Results are available within 1 hour with a daily testing capacity of more than 10,000 samples.
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>
							
							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon4.png);"></i>
											<p>现场应急</p>
										</div>
										<ul class="model-img">
											<li style="background-image: url(/kayoudi/img/solution/model-img5.png);"></li>
											<li style="background-image: url(/kayoudi/img/solution/model-img6.png);"></li>
										</ul>
										<div class="model-p">
											<p>
												疫情突发情况下，需在极短时间内完成新冠筛查任务。建立“机动核酸检测力量”和“片区机动支援制度”，可以提高检测能力，有效控制疫情传播。
											</p>
											<p>
												2021年5月底广东疫情发生后，卡尤迪迅速组建了数十人的抗疫支援队伍驰援广州。多台“闪测方舱”移动实验室成功助力广州市、吴川县等广东省重点地市新冠核酸筛查工作，日检测能力达30万份以上，总计筛查近90万人，以“卡尤迪速度”全面助力广东疫情防控。
											</p>
											<p>
												2021年8月1日，受国家卫健委和湖南省卫健委的委派，卡尤迪及“闪测联盟”快速响应， 2台“闪测方舱”、30余名卡尤迪工作人员连夜抵达湖南省张家界市。经过简单调试后，8月2日中午前即投入核酸检测工作，每台方舱日检测量最高可达1万管。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon5.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>Customs and Airports</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>Intensive population, tight testing time, and passenger detention</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											The FlashDetect™ Mobile Lab can perform rapid COVID-19 testing on-site.Instant testing upon arrival, results are available within 1 hour with a daily testing capacity of more than 10,000 samples. 
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>
							
							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon5.png);"></i>
											<p>海关机场检疫</p>
										</div>
										<ul class="model-img">
											<li style="background-image: url(/kayoudi/img/solution/model-img7.png);"></li>
										</ul>
										<div class="model-p">
											<p>
												三亚作为国内著名旅游城市，境外输入风险高，守护好“三亚入关口”，为市民游客的健康保驾护航，成为各界共同努力的目标。
											</p>
											<p>
												2021年1月19日，卡尤迪闪测方舱移动实验室落地三亚凤凰国际机场，针对出入境和来自中高风险地区的旅客开展核酸检测。方舱的使用实现了“落地检测，即达即检”，大大降低了疫情传播风险。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon6.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>Cold-chain Food Testing</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>Low viral load, strict sensitivity requirements, unacceptable missed detection, and tight testing time</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											The FlashDetect Mobile Lab can identify multiple virus variants and provide results within 1 hour.
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>
							
							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon6.png);"></i>
											<p>冷链食品检测</p>
										</div>
										<ul class="model-img">
											<li style="background-image: url(/kayoudi/img/solution/model-img8.png);"></li>
											<li style="background-image: url(/kayoudi/img/solution/model-img9.png);"></li>
										</ul>
										<div class="model-p">
											<p>
												2020年全国有10余个省份发生进口冷链食品核酸检测阳性事件，说明了进口冷链食品疫情防控工作的严峻性和复杂性。加强“人物同防”，护航群众食品安全，对于防止疫情传播具有重要意义。
											</p>
											<p>
												2020年12月， 卡尤迪闪测方舱作为全浙江省唯一的一台移动实验室开始正式投入使用，负责杭州钱塘新区5个集中监管舱中进口冷链物品及运输人员的新冠检测
											</p>
											<p>
												当月，卡尤迪受北京市丰台区政府委派，对丰台区进口冷冻食品及冷链系统进行采样检测的工作。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="scene-section">
					<div class="core">
						<div class="scene-icon">
							<img src="/kayoudi/img/solution/scene-icon7.png" alt="">
						</div>
						
						<div class="scene-text">
							<h3>Environmental Testing</h3>
							<div class="scene-text-tit2">
								Problems and Solutions
							</div>
							<ul class="scene-text-list">
								<li>
									<h4><span>1</span>Low viral load, strict sensitivity requirements, unacceptable missed detection, huge demand for testing</h4>
									<div class="scene-text-p">
										<i></i>
										<p>
											The FlashDetect Mobile Lab can identify multiple virus variants and provide results within 1 hour.
										</p>
									</div>
								</li>
							</ul>
							
							<a class="index-more" href="javascript:;"><span>案例介绍</span><em></em></a>
							
							<div class="solu-model">
								<div class="solu-model-box">
									<div class="model-close"></div>
									<div class="model-main">
										<div class="model-tit">
											<i style="background-image: url(/kayoudi/img/solution/scene-icon7.png);"></i>
											<p>环境检测</p>
										</div>
										<ul class="model-img">
											<li style="background-image: url(/kayoudi/img/solution/model-img10.png);"></li>
										</ul>
										<div class="model-p">
											<p>
												农贸市场、车站、商超等公共场所人员密集，是新冠肺炎疫情防控的重点场所。切实做好公共场所的新冠肺炎疫情防控工作，可以有效控制和降低疫情传播风险。
											</p>
											<p>
												2020年11月，北京冬奥会组委会外籍专家考察团访华，卡尤迪受北京市政府委派，承接了考察期间的水立方环境采样任务。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$(".scene-text .index-more").click(function(){
					$(this).parent().find(".solu-model").css("display","flex")
				})
				$(".model-close").click(function(){
					$(this).closest(".solu-model").css("display","none")
				})
			})
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
