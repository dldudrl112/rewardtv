<?php
include $_SERVER["DOCUMENT_ROOT"] . "/application/views/header.php";
?>

<body id="top">




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
							<a href="/" id="GAmain">메인</a>
						</li>
						<!-- <li>
							<a href="/main/about" id="GAabout">콜겟TV란?</a>
						</li> -->
						<li>
							<a href="/main/faq" id="GAway">이용방법</a>
						</li>
						<!-- <li>
							<a href="/main/news/1" id="GAnews">소식</a>
						</li> -->
						<li>
							<a href="/main/contactus" id="GAcontack">문의하기</a>
						</li>
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- Main_Banner -->
	<section id="main_banner" class="main_banner">
		<div class="container">
			<div id="main_slide" class="slider slick-slider">
				<? foreach ($slide as $row) { ?>
					<div class="col-xs-12">
						<a href="<?= $row->slide_link ?>">
							<img src="/assets/uploads/<?= $row->slide_image ?>" alt="<?= $row->slide_name ?>" data-link="<?= $row->slide_link ?>">
						</a>
					</div>
				<? } ?>
			</div>
		</div>
	</section>
	<!-- Main_Banner_END -->

	<!-- Live -->
	<!-- <? foreach ($yutube as $list) : ?>
		<section id="live">
			<div class="container">
				<div class="main-header" style="margin-top: 10px;">
					<h3>CALLGET TV</h3><span class="on_air"><img src="/assets/images/on_air.png" alt=""></span>
				</div>
				<div class="video">
					<div class="video-container">
						<iframe width="100%" height="100%" src="<?= $list->yutube_link ?>" frameborder="0" allowfullscreen="true"></iframe>
					</div>
				</div>
			</div>
		</section>
	<? endforeach; ?> -->
	<!-- Live_END -->

	<!-- Product -->
	<section id="product" class="mb30">
		<div class="container conbg">
			<!--<div class="main-header mb10">
				<h3>모든 상품보기</h3>
			</div>-->
			<div class="category">
				<p>안녕하세요!</p>
				<p>오늘의 라이프스타일이에요.</p>
				<ul>
					<li class="cate_list active" data-number="0">
						<a href="javascript:void(0);">
							<div class="sym" style="background-image: url('/assets/images/category/category_1.png');"></div>
							<p>전체</p>
						</a>
					</li>
					<? foreach ($category as $cate) : ?>
						<li class="cate_list" data-number="<?= $cate->category_idx ?>">
							<a href="javascript:void(0);">
								<div class="sym" style="background-image: url('/assets/images/category/category_<?= $cate->category_idx + 1 ?>.png');"></div>
								<p><?= $cate->category_name ?></p>
							</a>
						</li>
					<? endforeach; ?>

				</ul>
			</div>

			<div id="after"></div>


			<? foreach ($product as $row) {

				$i++;

				echo '<script>';
				echo 'console.log("값?", "' . $row->product_name . '", "' . $i . '")';
				echo '</script>';


				// echo '<script>';
				// echo 'var product = ' .  $row->product . '';
				// echo '$(document).ready(function() {
				// 	console.log("product", product);
				// 		$.each(product, function(i, v) {
				// 			console.log("v", v);
				// 		})
				// 	});';
				// echo '</script>';
				$image = $row->product_thumb; ?>





				<div style="padding: 0 10px;" id="<?= $i ?>">
					<div class="col-md-6 col-xs-12 main_list">
						<div class="nametag">
							<div class="contents">
								<div class="cont-area">
									<div class="thumb" style="background-image: url('/assets/uploads/<?= $row->insure_logo ?>');"></div>
									<div class="brand">
										<div class="title">
											<p><?= $row->product_name ?></p>
											<p><b><?= $row->insure_company ?></b> | <?= $row->insure_name ?></p>
											<!-- <p><img src="/assets/uploads/<?= $row->insure_logo ?>" style="width: 16px; border-radius: 50%;"> <?= $row->insure_name ?></p> -->
										</div>
									</div>
									<div class="product" style="background-image: url('/assets/uploads/<?= $row->product_logo ?>');"></div>
								</div>
							</div>
						</div>


						<div class="product_area" onclick="location.href='/main/get/<?= $row->product_idx ?>'">

							<div class="bg" style=" background-image: url('/assets/uploads/<?= $image ?>');">

								<!-- <div class="get_count">
								<div>D-<?= $row->dates ?></div>
							</div>
							<div class="count">
								<p>GET</p>
								<p><?= $row->product_get ?></p>
							</div> -->


							</div>
						</div>

						<!-- <div style="height: 10px;"></div> -->

						<div class="video-wrap">

							<iframe width="100%" height="auto" src="<?= $row->product_thumvideo ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>

						<div id="list" class="product_button">
							<button id="header<?= $i ?>" class="product_number circle" onclick="location.href='javascript:checkIt<?= $i ?>()'">
								<p style="color: #fff; font-size :13px; margin:0px;">30초 이상 시청하세요</p>상담 예약하기<br>
							</button>
							<!-- <input type="button" value="Disable me" disabled> -->
						</div>

					</div>

				</div>

				<script language="JavaScript">
					var ck_click = false;
					var data = "<?= $row->product_idx ?>";
					function checkIt<?= $i ?>() {
						if (ck_click == true) {
							// location = 'tel:<?= $row->insure_call ?>';
							alert('<?= $row->product_name ?>')
							
							return;
							
							
						} else {
							alert('영상 시청 후 눌러주세요.');
							javascript: setTimeout('changeColor(0)', 3000);
							ck_click = true;
						}
					}


					var circle1 = document.getElementsByClassName('circle')[0];
					var colorarr = ['#21409a']

					function changeColor(number) {
						circle1.style.backgroundColor = colorarr[number]
					}
				</script>



			<? } ?>

			<!-- <div class="col-xs-12">
						<div class="more-btn" data-count="<?= $count ?>" data-now="1">
							<button>더보기</button>
						</div>
					</div>  -->
		</div>



		</script>


		<div style="display: none;"><img src="/assets/images/ogimage.jpg"></div>
		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 p0">
						<div class="foot_cont">
							상호명 : (주)에스비제이 | 대표 : 정일웅 | 주소 : 서울특별시 강남구 도산대로 157, 14층(신사동, 신웅타워2) | 문의메일 : info@sbjgroup.co.kr | 사업자등록번호 : 894-86-01505
						</div>
					</div>
					<div class="col-xs-12">
						<div class="copyright">
							<p>Copyright &copy; Callget. All rights reserved.</p>
						</div>
					</div>
				</div><!-- row end -->
			</div><!-- Container_END -->
		</footer>
		<!-- Footer_END -->

		<!-- Scroll to top -->
		<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
			<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
		</div>
		<!-- Scroll to top_END-->

		<!-- Javascript files -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>

		<script src="/assets/js/common.js"></script>
		<script src="/assets/js/callgetdev.js"></script>
		<script src="/assets/lib/slick/slick.js"></script>
		<script src="/assets/js/global.js"></script>
		<script src="/assets/js/main.js"></script>


</body>

</html>
