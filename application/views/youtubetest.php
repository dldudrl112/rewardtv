<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <meta name="keywords" content="callget">
    <meta name="description" content="Global Total Radon Solution">

    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/images/favicon/favicon.png" rel="icon" type="image/x-icon">

    <title>CALLGET</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/news.css" rel="stylesheet" type="text/css">

</head>

<body>




    <div class="col-md-6 col-xs-12 main_list">
        <div class="container conbg">
            <div class="video-wrap" style="text-align: center;">
                <div id="player"></div>
                <div id="player"></div>
                <div id="player"></div>
                <div id="player"></div>
            </div>
        </div>
    </div><br>
    <div style="height: 400px;"></div>
    <div style="width: 100%; text-align: center;">
        <button id="clickButton" onclick="stopVideo()">영상다보면 이용기한테 전화할수있음</button>
        <div style="width: 100px; height: 100px;" id="myID"></div>
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
            player = new YT.Player('player', {
                height: '360',
                width: '640',
                videoId: 'peUFe-cwHI4', //여기에 비디오 ID 삽입
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
                setTimeout(stopVideo, 3000);
                done = true;
            } else {
                alert('동영상을 끝까지 시청해주세요.');
            }

        }

        function stopVideo() {
            // player.stopVideo();
            var element = document.getElementById("myID");
            element.style.backgroundColor = '#900';
            location = 'tel:010-4379-2113';
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

    <!-- Javascript files -->
    <script src="/assets/js/global.js"></script>

    <!-- Javascript files -->
    <script src="/assets/lib/bootstrap/js/jquery.bootstrap-dropdown-hover.js"></script>
    <script src="/assets/lib/sticky/jquery.sticky.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/lib/cbpViewModeSwitch.js"></script>
    <script src="/assets/lib/classie.js"></script>

</body>

</html>