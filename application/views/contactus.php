<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<!-- 페이지 로드시마다 페이지 캐싱 취소 -->
	<meta http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<!-- 페이지 캐싱 meta  -->

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

	<title>CALLGET</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/contactus.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/main.css" rel="stylesheet" type="text/css">


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
					<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> -->
				</div>

				<div class="navbar-menu">
					<a href="/main/contactus"><img src="/assets/images/contactus.png"></a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/">메인</a>
						</li>
						<!-- <li>
							<a href="/main/about">콜겟TV란?</a>
						</li> -->
						<!-- <li>
							<a href="/main/faq">이용방법</a>
						</li> -->
						<!-- <li>
							<a href="/main/news/1">소식</a>
						</li> -->
						<li>
							<a href="/main/contactus">문의하기</a>
						</li>
					</ul>
				</div>
			</div><!-- Container_END -->
		</nav>
	</header>
	<!-- Navigation_END -->

	<!-- Contact US -->
	<section id="contactus">
		<div class="container">
			<div class="section-header">
				<h3>Contact Us</h3>
			</div>
			<div class="row">
				<div class="tab-menu" role="tabpanel" data-example-id="togglable-tabs">
					<div class="tab_head">
						<ul id="myTab" class="nav nav-tabs bar_tabs menu_tabs" role="tablist">
							<li role="presentation" class="active">
								<button data-target="#tab_content1" role="tab" data-toggle="tab" aria-expanded="true">이용문의</button>
							</li>
							<li role="presentation" class="">
								<button data-target="#tab_content2" role="tab" data-toggle="tab" aria-expanded="false">제휴문의</button>
							</li>
						</ul>
					</div>

					<div id="myTabContent" class="tab-content">
						<div id="tab_content1" class="tab-pane fade active in" role="tabpanel" aria-labelledby="이용문의">
							<div class="form">
								<div id="sendmessage">메세지 전송이 완료되었습니다</div>
								<div id="errormessage"></div>
								<form action="" class="contactForm_1" method="post" role="form">
									<div class="form-row">
										<div class=" col-xs-12 col-sm-6">
											<input type="text" id="name" class="form-control" placeholder="성함" data-msg="성함이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12 col-sm-6">
											<input type="text" id="phone" class="form-control" placeholder="연락처" data-msg="연락처가 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12 col-sm-6">
											<input type="email" id="email" class="form-control" placeholder="이메일" data-msg="이메일이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12 col-sm-6" style="padding-bottom: 20px;">
											<input type="address" id="address" class="form-control" placeholder="주소" data-msg="주소가 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" form-padding">

											<textarea id="question" class="form-control" rows="5" placeholder="문의사항" data-msg="문의사항이 입력되지 않았습니다." data-rule="required"></textarea>

											<div class="validation"></div>
										</div>
										<div class=" form-padding">
											<input type="checkbox" id="agree1">
											<span style="font-size: 13px;">개인정보활용동의</span>
											<div class="agree">
												※ 개인정보취급방침 및 이용동의 안내<br>
												- 수집자 : ㈜에스비제이<br>
												- 수집목적 : 이용 문의에 대한 상담 목적<br>
												- 수집항목 : 성함, 연락처, 이메일, 주소, 문의사항<br>
												- 수집 및 이용기간 : 3개월 이내(고객요청시 측시 파기)
											</div>
										</div>
										<div class="text-center">
											<button type="button" id="faq">이용문의 발송</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div id="tab_content2" class="tab-pane fade" role="tabpanel" aria-labelledby="제휴문의">
							<div class="form">
								<div id="sendmessage_">메세지 전송이 완료되었습니다</div>
								<div id="errormessage"></div>
								<form action="" class="contactForm_2" method="post" onsubmit="return false;" role="form">
									<div class="form-row">
										<div class=" col-xs-12 col-sm-6">
											<input type="text" id="name_" class="form-control" placeholder="성함" data-msg="성함이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12 col-sm-6">
											<input type="text" id="phone_" class="form-control" placeholder="연락처" data-msg="연락처가 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12 col-sm-6">
											<input type="text" id="company_" class="form-control" placeholder="회사명" data-msg="회사명이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12 col-sm-6">
											<input type="text" id="manager_" class="form-control" placeholder="부서/직급" data-msg="부서/직급이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<div class=" col-xs-12" style="padding-bottom: 20px;">
											<input type="email" id="email_" class="form-control" placeholder="이메일" data-msg="이메일이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div>
										<!-- <div class=" col-xs-12">
											<input type="email" id="email_" class="form-control" placeholder="이메일" data-msg="이메일이 입력되지 않았습니다." data-rule="required" />
											<div class="validation"></div>
										</div> -->
										<div class="form-padding">
											<textarea class="form-control" id="text_" rows="5" placeholder="제휴문의" data-msg="제휴문의가 입력되지 않았습니다." data-rule="required"></textarea>
											<div class="validation">
												<faq></faq>
											</div>
										</div>
										<div class="form-padding">
											<input type="checkbox" id="agree2">
											<span style="font-size: 13px;">개인정보활용동의</span>
											<div class="agree">
												※ 개인정보취급방침 및 이용동의 안내<br>
												- 수집자 : ㈜에스비제이<br>
												- 수집목적 : 이용 문의에 대한 상담 목적<br>
												- 수집항목 : 성함, 연락처, 이메일, 주소, 문의사항<br>
												- 수집 및 이용기간 : 3개월 이내(고객요청시 측시 파기)
											</div>
										</div>
										<div class="text-center">
											<button type="button" id="faq2">제휴문의 발송</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt100">
			<div class="section-header">
				<h3>찾아오시는 길</h3>
			</div>
			<div class="row">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.6241845307345!2d127.02155505133781!3d37.51678103463382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca3e94da91ae9%3A0xeb6ab1f6af3303c5!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDrhbztmITroZwxNDnquLggNjEgM-y4tQ!5e0!3m2!1sko!2skr!4v1639102144469!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact US_END -->

	<!-- Scroll to top -->
	<div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
		<a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
	</div>
	<!-- Scroll to top_END-->

	<!-- Contact Form JavaScript File -->
	<script src="/assets/js/common.js"></script>
	<script src="/assets/contactform/contactform.js"></script>
	<script src="/assets/js/callgetdev.js"></script>

	<!-- Javascript files -->
	<script src="/assets/js/global.js"></script>
	</body>

</html>