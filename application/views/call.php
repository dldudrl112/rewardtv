<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="Callget">
    <meta name="description" content="Callget">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

    <title>RewardTV</title>

    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/get.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <style>
        #pop {
            position: fixed;
            z-index: 10000;
            top: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        #pop>article {
            width: 50%;
            position: relative;
            z-index: 2;
            background: white;
            box-shadow: 3px 3px 5px black;
            margin: 12% 0 0 25%;
            cursor: pointer;
            text-align: center;
        }

        .black {
            background: rgba(0, 0, 0, 0.6);
        }
    </style>



</head>

<script>
    $(document).ready(function() {
        $("#list>button:first-of-type").click(function() {
            $("#pop").fadeIn();
            $("#pop").addClass("black");
        });
        $("#pop>article").click(function() {
            $(this).parent().fadeOut();
        });
    });
</script>

<body class="bg-lightgray">

    <!-- End Google Tag Manager (noscript) -->
    <!-- Preloader -->
    <!-- <div id="preloader">
		<div id="status"></div>
	</div> -->
    <!-- Preloader_END -->

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-global navbar-fixed-top" role="navigation" style="padding: 0px 10px;">
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

    <!-- Get_Main -->
    <section id="get_main">
        <!-- <div class="manual">
            <button class="manual_up">
                <span class="glyphicon glyphicon-menu-up"></span>
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
                            동일한 상품을 리워드가 1회로 지급제한 됩니다.
                        </p>
                        <h3>이용방법</h3>
                        <p>
                            STEP1) 리워드 선택하기<br>
                            STEP2) GET 누르고, 라이프서비스 영상 시청<br>
                            STEP3) CALL 버튼 누르고, 상담 예약하기<br>
                            STEP4) 사은품 수령
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

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title panel-title-adjust">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Q) 리워드의 A/S 나 문의는 어떻게 되나요?</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        A) 본 제품의 리워드는 제조/유통사와 정식으로 계약되어 발송 되는 상품이므로 <br>
                                        해당 리워드의 제조/유통사에서 A/S 및 문의를 하시면 됩니다.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="get_area1">
            <button id="getcall" class="get_btn" onclick="stopVideo2()" data-idx=" <?= $data->product_idx ?>">
                <p style="font-size:10px; line-height: 0.5em;">15초 이상 시청하세요</p>상담 예약하기
            </button>
        </div>
        <div class="get_area_m" id="list">
            <button id="getcall" class="get_btn" onclick="stopVideo()">
                <p style=" font-size:10px; line-height: 0.5em;">15초 이상 시청하세요</p>상담 예약하기
            </button>
        </div>
    </section>
    <div id="pop">
        <article>
            <div class="info_call">상담안내</div>
            <div class="infoDetail">
                <img class="infoimg" src="/assets/uploads/<?= $data->product_thumb ?>" alt="">
                <div style="height: 30px;"></div>
                <p><strong>[ <?= $data->product_name ?> ]</strong>를 받으시기 위해 상담예약이 필수 입니다. </p>
                <p><strong>[ <?= $data->insure_call ?> ]</strong>으로 지금바로 전화주세요.</p><br>
                <p>365일,24시간 상담예약 가능 </p>
            </div>
            <button class="infobutton" type="button">확인</button>
        </article>
    </div>
    </section>
    <!-- Get_Main_END -->

    <!-- Call_Main -->
    <section id="call_main">
        <div class="container">
            <div class="call_area">
                <div class="thumb">
                    <img src="/assets/uploads/<?= $data->product_thumb ?>" alt="">
                </div>
                <!-- <div class="cont">
                    <p>현재 선택하신 리워드입니다.</p>
                    <p><?= $data->product_name ?></p>
                    <p>※ 상담예약 및 상담 시 방송영상 시청여부를 확인할 수 있습니다.</p> 
                </div>  -->
            </div>
        </div>
    </section>
    <!-- Call_Main_END -->

    <!-- Get_Product -->
    <section id="get_product" class="get_product mb100">
        <div class="container">
            <div class="row">
                <div class="product_title">
                    <p>방송 영상</p>
                </div>
                <div class="product_contents video_z">
                    <div class="video">
                        <div class="video-container">
                            <!-- <? echo $video = explode('/', $data->insure_video)[3]; ?>
                            <iframe width="100%" src="https://www.youtube.com/embed/<?= $video ?>?ps=blogger&controls=1&iv_load_policy=3" frameborder="0" allowfullscreen="true"></iframe> -->
                            <div id="player<?= $data->product_idx ?>"></div>
                        </div>
                    </div>
                    <script>
                        // 2. This code loads th IFrame Player API code asynchronously.
                        var tag = document.createElement('script');

                        tag.src = "https://www.youtube.com/iframe_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        /**
                         * onYouTubeIframeAPIReady 함수는 필수로 구현해야 한다.
                         * 플레이어 API에 대한 JavaScript 다운로드 완료 시 API가 이 함수 호출한다.
                         * 페이지 로드 시 표시할 플레이어 개체를 만들어야 한다.
                         */

                        var player;

                        function onYouTubeIframeAPIReady() {
                            player<?= $row->product_idx ?> = new YT.Player('player<?= $data->product_idx ?>', {
                                width: '100%',
                                height: 'auto',
                                videoId: '<?= $data->product_thumvideo ?>', //여기에 비디오 ID 삽입
                                //만약 유튜브 공유 주소가 https://www.youtube.com/watch?v=peUFe-cwHI4 라면 v=뒤 값을 넣으면 됩니다.
                                events: {
                                    onReady: onPlayerReady,
                                    onStateChange: onPlayerStateChange
                                }
                            });
                        }

                        function onPlayerReady(event) {
                            event.target.playVideo();
                        }
                        // function checkPlayerState(){

                        //     alert(player.getPlayerState());
                        //     alert(player.getCurrentTime());
                        // }

                        var done = false;

                        function onPlayerStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING && !done) {
                                setTimeout(stopVideo, 15000);
                                done = true;
                            }
                        }
                        var name = "";

                        function stopVideo() {
                            // player.stopVideo();
                            // location = 'tel:010-4379-2113';
                            var element = document.getElementById("getcall");
                            element.style.backgroundColor = '#87b35c';
                            element[0].href = 'tel:<?= $data->insure_call ?>';
                        }

                        function stopVideo2() {
                            if (player.getPlayerState() == 1) {
                                //앵커 태그 생성
                                var link = document.createElement('a');
                                location = 'tel:<?= $data->insure_call ?>';

                            } else {
                                alert('동영상을 끝까지 시청해주세요.');
                            }
                        }
                        // function watchVideoAndCall() {
                        //     if (player.getPlayerState() == 0) {
                        //         //앵커 태그 생성
                        //         var link = document.createElement('a');
                        //         location = 'tel:010-4379-2113';

                        //     } else {
                        //         alert('동영상을 끝까지 시청해주세요.');
                        //     }
                        // }
                    </script>



                </div>

                <div class="product_contents">
                    <div class="text">
                        <p>*방송 영상을 15초 이상 시청시 상담 예약이 가능합니다.</p>
                    </div>
                    <div class="sime">
                        <p>
                            <?= nl2br($data->insure_text2) ?>
                        </p>
                    </div>
                    <div class="line_1"></div>
                </div>
                <div class="row">
                    <div>
                        <div class="product_title">
                            <p>방송 정보</p>
                        </div>
                        <div class="product_contents">
                            <div class="container">
                                <div class="thumb" style="background-image: url('/assets/uploads/<?= $data->insure_logo ?>');"></div>
                                <div class="sponsor">
                                    <p><?= $data->insure_company ?></p>
                                    <p><?= $data->insure_name ?></p>
                                </div>
                            </div>
                            <div class="line_2"></div>
                        </div>
                    </div>

                    <div class="product_title">
                        <p>리워드 정보</p>
                    </div>
                    <div class="product_contents">
                        <div class="container">
                            <div class="thumb_reward"><img src="/assets/uploads/<?= $data->product_logo ?>"></div>
                            <div class="sponsor">
                                <p><?= $data->product_name ?></p>
                                <p><?= $data->product_hashtag ?><?= $data->product_gettext ?></p>
                            </div>
                        </div>
                        <div class="line_1"></div>
                    </div>

                </div>
                <div class="row">
                    <div class="product_title">
                        <p>유의사항</p>
                    </div>
                    <div class="product_contents">
                        <div class="info">
                            <p>
                                <?= nl2br($data->insure_text) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 20px; background: #fff;"></div>
    </section>


    <footer id="footer">
        <div class="container">
            <div class="row" style="margin: 0px;">
                <div class="col-xs-12 p0">
                    <div class="foot_cont">
                        (주)에스비제이 대표 : 정일웅 <br>
                        서울특별시 강남구 논현로 149길, 61 (청암빌딩) 3층 <br>
                        M : info@sbjgroup.co.kr 사업자등록번호 : 894-86-01505
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="copyright">
                        <p>Copyright &copy; Callget. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- Container_END -->
        <div style="height: 55px; background: #222222;"></div>
    </footer>
    <!-- Footer_END -->
    <!-- Get_Product -->

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

    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/callgetdev.js"></script>

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