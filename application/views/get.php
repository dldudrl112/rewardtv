<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="Callget">
    <meta name="description" content="Callget">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

    <title>CALLGET</title>

    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/get.css" rel="stylesheet" type="text/css">
  
</head>



<body>


    <!-- Preloader -->
    <!-- <div id="preloader">
		<div id="status"></div>
	</div> -->
    <!-- Preloader_END -->

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-get navbar-fixed-top" role="navigation" style="padding: 0 15px;">
            <div class="container">
                <div class="logo get main">
                    <a href="/">
                        <img src="/assets/images/logo_w.png" />
                        <!-- <p>상담완료만 해도 리워드가 내집으로</p> -->
                    </a>
                </div>

                <div class="navbar-header">
                    <button type="button" class="return" onclick="location.href='/';">
                        <span class="glyphicon glyphicon-menu-left"></span>
                    </button>
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

                <div class="get-nav">
                    <ul>
                        <li class="active">
                            <a href="#">1 리뷰시청</a>
                        </li>
                        <li>
                            <a href="/main/call/<?= $data->product_idx ?>">2 상품시청</a>
                        </li>
                        <li>
                            <a href="javascript:alert('상품시청을 완료해야 다음 단계로 넘어갈 수 있습니다.');">3 상담예약</a>
                        </li>
                    </ul>
                </div>
            </div><!-- Container_END -->
        </nav>
    </header>
    <!-- Navigation_END -->

    <!-- Get_Banner -->
    <section id="get_main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide">
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol> -->

            <div class="carousel-inner">
                <? $i = 0;
                foreach ($slide as $row) {
                    if ($i == 0) {
                        $class = "active";
                    } else {
                        $class = "";
                    } ?>
                    <? if (strpos($row, '/') !== false) {
                        $video = explode('/', $row)[3]; ?>
                        <div class="item <?= $class ?>">
                            <div class="overlay"></div>
                            <div class="fill screen-height">
                                <div class="middle">
                                    <div class="video-container">
                                        <iframe width="100%" src="https://www.youtube.com/embed/<?= $video ?>?ps=blogger&controls=1&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <? } else {
                        if ($row) { ?>
                            <div class="item <?= $class ?>">
                                <div class="overlay"></div>
                                <div class="fill screen-height" style="background-image:url('/assets/uploads/<?= $row ?>');"></div>
                            </div>
                        <? } ?>
                <? }
                    $i++;
                } ?>
            </div>
            <!-- <div style="height: 100px;"></div> -->

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

            <div class="product_info_area">
                <div class="container relative">
                    <div class="product_info">
                        <p>현재까지 GET</p>
                        <p><?= $data->product_get ?></p>
                        <div>
                            D-<?= $data->dates ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product_title">
                <div class="container">
                    <p><?= $data->product_hashtag ?></p>
                    <h2><?= $data->product_name ?></h2>
                    <p><b><?= $data->insure_company ?> | <?= $data->insure_name?></b></p>
                </div>
            </div>

            <div class="manual">
                <button class="manual_up">
                    <span class="glyphicon glyphicon-triangle-top"></span>
                </button>
                <div class="manual_title">
                    <h2>이용방법 및 유의사항</h2>
                </div>
                <div class="manual_hr"></div>
                <div class="manual_area">
                    <div class="container relative">
                        <div class="manual_contents">
                            <h3>꼭 읽어주세요!</h3>
                            <p>
                                본 영상은 리워드 사용법 영상입니다.<br>
                                해당 리워드는 상담완료 시 무료증정 됩니다.<br>
                                동일한 상품은 리워드가 1회로 지급제한 됩니다.
                            </p>
                            <h3>이용방법</h3>
                            <p>
                                STEP1) 리워드 확인하기<br>
                                STEP2) GET 누르고, 라이프서비스 영상 시청<br>
                                STEP3) CALL 버튼 누르고, 상담 예약하기<br>
                                STEP4) 상품 상담받기<br>
                                STEP5) 사은품 수령
                            </p>
                            <h3>FAQ</h3>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">Q) 콜겟은 어떻게 이용해야 되나요?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse0" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            A) 메인페이지에서 받고 싶은 리워드를 선택하시고<br>
                                            리워드를 제공하는 업체의 광고 영상을 시청한 후에 <br>
                                            Call 버튼을 눌러 상담예약을 남기시면 됩니다.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q) 상담만 받아도 리워드를 받을 수 있나요?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">A) 네 상담만 받으시면 가입 또는 이용 여부와 관계없이 리워드가 제공 됩니다.<br></div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q) 콜겟의 모든 리워드는 다 받을 수 있나요?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            A) 동일한 라이프 상품에 리워드는 1개로 제한되어 있습니다.<br>
                                            단, 라이프 상품이 다른 경우에는 각각 상담예약을 남기면 모든 리워드를 다 받으실 수 있습니다.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Q) 개인 정보를 수집하고 이용하는 건가요?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            A) 콜겟은 고객님의 어떠한 정보도 수집 및 보관하지 않습니다.<br>
                                            상담 예약을 남기시는 상품을 상담하기 위해서 해당 브랜드사에서 상담예약과 <br>
                                            상담 완료 후 리워드를 배송하기 위해서만 정보를 수집합니다. <br>
                                            개인정보 보관은 각 브랜드사의 정책에 따라 결정되면 상담 시 안내 받습니다.<br>
                                            그 외에 어떠한 경우도 개인 정보를 수집, 보관, 무단 활용을 하지 않습니다.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title panel-title-adjust">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Q) 리워드는 언제 어떻게 받을 수 있나요?</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            A) 상담 예약을 남기시면 해당 상품 회사에서 상담 전화를 드리고<br>
                                            상담 완료를 하시면 완료 된 고객에 리워드 발송 업체에 전달됩니다.<br>
                                            상담 완료가 확인되면 리워드가 배송 되기 때문에 4주~8주 내에 배송됩니다.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="get_area">
                <button class="get_btn" onclick="location.href='/main/call/<?= $data->product_idx ?>'" data-idx="<?= $data->product_idx ?>">GET 하러가기<p style="font-size:10px; line-height: 0.5em;">(365일,24시간 가능)</p></button>
            </div>
        </div>
        <!-- carousel end -->

    </section>
    <!-- Get_Banner -->

    <!-- Scroll to top -->
    <div class="scroll-up" title="TOP으로 이동" alt="TOP으로 이동">
        <a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
    </div>
    <!-- Scroll to top_END-->

    <!-- Javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="/assets/js/cbpAnimatedHeader.js"></script>
    <script src="/assets/js/classie.js"></script>
    <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>

    <script src="/assets/js/get.js"></script>
    <script>
        $(document).ready(function() {
            $(".manual_up").click(function() {
                $(".manual").toggleClass("active");
                $(".manual_up").toggleClass("active");
                $(".manual_area").toggleClass("active");
            });
        });
    </script>
</body>

</html>