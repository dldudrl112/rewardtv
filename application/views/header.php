<?php

//If the HTTPS is not found to be "on"
if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
	//Tell the browser to redirect to the HTTPS URL.
	header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
	//Prevent the rest of the script from executing.
	exit;
}
?>

<!DOCTYPE html>
<html lang="ko">

<head profile="http://www.w3.org/2005/10/profile">


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta property="og:type" content="website">
	<meta property="og:title" content="리워드TV">
	<meta name="keywords" content="갖고 싶었던 리워드! 전화 한 통으로 다 !" />
	<meta name="description" content="갖고 싶었던 리워드! 전화 한 통으로 다 !" />
	<meta property="og:description" content="갖고 싶었던 리워드! 전화 한 통으로 다 !">
	<meta property="og:image" content="https://rewardtv.co.kr/assets/images/ogimage.jpg">
	<meta property="og:url" content=https://rewardtv.co.kr />

	<link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">

	<title>리워드TV</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/animate/animate.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/slick/slick.css" rel="stylesheet" type="text/css">
	<link href="/assets/lib/slick/slick-theme.css" rel="stylesheet" type="text/css">

	<link href="/assets/css/global.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/main.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-N55K8J9');
	</script>
	<!-- End Google Tag Manager -->

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Person",
			"name": "rewardtv",
			"url": "https://rewardtv.co.kr/",
			"sameAs": [
				"https://www.instagram.com/rewardtv_official/",
				"https://www.facebook.com/rewardtv.kr.official"
			]
		}
	</script>
</head>