<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="format-detection" content="telephone=no">

	<meta name="keywords" content="Callget">
	<meta name="description" content="Global Total Radon Solution">

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

	<title>CALLGET</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/news_view.css" rel="stylesheet" type="text/css">


	
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-567Q3JJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Preloader -->
	<!-- <div id="preloader">
        <div id="status"></div>
    </div> -->
	<!-- Preloader_END -->

	<!-- Navigation -->
	<header>
		<nav class="navbar navbar-global navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="logo">
					<a href="/">
						<img src="/assets/images/logo.png" />
						<!-- <p>상담완료만 해도 리워드가 내집으로</p> -->
					</a>
				</div>

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/">메인</a>
						</li>
						<li>
							<a href="/main/about">콜겟TV란?</a>
						</li>
						<li>
							<a href="/main/faq">이용방법</a>
						</li>
						<li>
							<a href="/main/news/1">소식</a>
						</li>
						<li>
							<a href="/main/contactus">문의하기</a>
						</li>
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- Review_view -->
	<section id="review_view" class="wow fadeInUp">
		<div class="container-fluid p0">
			<div class="container">
				<div class="col-xs-12 p0 pb80">
					<div class="vboard-contents">
						<div class="header">
							<?$arrs = explode('-',$data->news_date); $date = implode('. ',$arrs);?>
							<p>CALLGET TV&nbsp;&nbsp;|&nbsp;&nbsp;<?= $date ?></p>
							<h3><?= $data->news_title ?></h3>
							<div class="list-info">
								<div class="writer">
									<img src="/assets/images/symbol_g.png" class="img-circle info-logo">
									<span>CALLGET TV</span>
								</div>
								<div class="sns">

								</div>
							</div>
						</div>
						<div class="contents">
							<?= $data->news_content ?>
						</div>
						<div class="info">
							<div class="hr"></div>
							<div class="left">
								<button class="btn locationbtnnews prev" data-idx="<?= $pre ?>"><i class="fas fa-chevron-left"></i> 이전글</button>
								<button class="btn locationbtnnews next" data-idx="<?= $next ?>">다음글 <i class="fas fa-chevron-right"></i></button>
								<button class="btn" onclick="location.href='/main/news'">목록으로</button>
							</div>
						</div>

					</div>
				</div>
			</div><!-- /.container -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- Review_views_END -->

	<!-- Float-btn -->
	<div class="float-btn">
		<a href="/sub/qna">
			<img src="/assets/images/main/qna-icon.png" alt="">
		</a>
	</div>

	<div class="kc_fab_wrapper"></div>
	<!-- Float-btn_END-->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP" alt="TOP">
		<a href="#review_view"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top end-->

	<!-- Javascript files -->
	<script src="/assets/lib/bootstrap/js/jquery.bootstrap-dropdown-hover.js"></script>
	<script src="/assets/lib/wow/wow.min.js"></script>
	<script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
	<script src="/assets/lib/cbpViewModeSwitch.js"></script>
	<script src="/assets/lib/classie.js"></script>

	<script src="/assets/js/common.js"></script>
	<script src="/assets/js/callgetdev.js"></script>
	<script src="/assets/js/global.js"></script>
</body>

</html>