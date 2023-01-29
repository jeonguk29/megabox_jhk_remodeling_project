<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Playdaddy">
    <meta name="description" content="메가박스 사이트 따라하면서 배우는 튜토리얼입니다.">
    <meta name="keywords" content="메가박스, 유투브, 영화, 최신영화, 영화관, CGV, 롯데시네마, 웹스토리보이, 웹스, 사이트 만들기, 따라하기">
    <title>laravel</title>

    <!-- CSS -->

	<link rel="stylesheet" href="{{ asset('user/css/login2.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/signup.css')}}">

    
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('user/icons/favicon_72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="96x96" href="{{ asset('user/icons/favicon_96.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('user/icons/favicon_144.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="{{ asset('user/icons/favicon_192.png')}}" />

    <!-- 페이스북 메타 태그 -->
    <meta property="og:title" content="메가박스 사이트 만들기" />
    <meta property="og:url" content="https://github.com/webstoryboy/megabox2019" />
    <meta property="og:image" content="https://webstoryboy.github.io/megabox2019/mega.jpg" />
    <meta property="og:description" content="메가박스 사이트 따라하면서 배우는 튜토리얼입니다." />

    <!-- 트위터 메타 태그 -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="메가박스 사이트 만들기">
    <meta name="twitter:url" content="https://github.com/webstoryboy/megabox2019/">
    <meta name="twitter:image" content="https://webstoryboy.github.io/megabox2019/mega.jpg">
    <meta name="twitter:description" content="메가박스 사이트 따라하면서 배우는 튜토리얼입니다.">
    
    <!-- 웹 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&subset=korean" rel="stylesheet">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/fcc8b9d1b9.js" crossorigin="anonymous"></script>
    {{-- kakao map --}}
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=1f46dd04eeadc0be58d8566763149c94">
	</script>
</head>

<body>				
    <form name="form_login" method="post" action="{{ url('loginuser/check') }}">
        @csrf
        <div class="wrapper">
            <div class="login">
                <h3>Sign into Your account</h3>
                <div class="login_sns"> </div>
                    <div class="login_id2">
                        <h4>아이디</h4>
                        <input type="text" name="uid" id="" placeholder="ID">
                    </div>
                <div class="login_pw2">
                     <h4>비밀번호</h4>
                    <input type="password" name="pwd" id="" placeholder="Password">
                </div>
                <div class="login_etc2">
                    <div class="checkbo2x"></div>
                    <div class="forgot_pw2"></div>
                </div>
                <div class="submit">
                    <input type="submit" value="로그인">
                </div>
            </div>
            <div class="welcome-wrapper">
                <h2>Welcome JHK</h2>
            </div>
        </div>
    </form>
</body>
</html>