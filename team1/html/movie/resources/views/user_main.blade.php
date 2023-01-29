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
    <link rel="stylesheet" href="{{ asset('user/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/swiper2.css')}}">

    <link rel="stylesheet" href="{{ asset('user/css/movie3.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/ticketing4.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/information2.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/store2.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/payment2.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/login.css')}}">
	<link rel="stylesheet" href="{{ asset('user/css/signup.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/mypage.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/event.css')}}">
    <link rel="stylesheet" href="{{ asset('user/css/map.css')}}">
    
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
        <!-- 스킵 메뉴 -->
        <div id="skip">
            <a rel="bookmark" href="#movie">최신 영화 소식</a>
            <a rel="bookmark" href="#event">새로운 이벤트</a>
            <a rel="bookmark" href="#new">새로운 영화</a>
        </div>
  
    <!-- //스킵 메뉴 -->
    
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="header clearfix">
                    <h1>
                        <a href="{{ route('main.index') }}">
                            <em><img src="{{ asset('user/img/main/Thecloud_logo.png')}}" alt="THE CLOUD"></em>
                            <strong><img src="{{ asset('user/img/main/Life_logo.png')}}" alt="LIFE THEATER"></strong>
                        </a>
                    </h1>
                    <div id="mNav">
                        <h2 class="ir_so">메가박스 전체메뉴</h2>
                        <a href="#" class="ham"><span></span></a>
                    </div>
                    <nav class="nav">
                        <ul class="clearfix">
                            <li><a href="{{ route('movieuser.index') }}">영화</a></li>
							<li><a href="{{ route('teaseruser.index') }}">예고편</a></li>
                            <li><a href="{{ route('storeuser.index') }}">스토어</a></li>
							<li><a href="{{ route('event.index') }}">이벤트</a></li>
					
							@if (session()->exists("id"))
							<li><a href="{{ route('ticketinguser.index') }}">예매</a></li>
                            <li><a href="{{ url('loginuser/logout') }}">로그아웃</a></li>
                            <li><a href="{{route('mypageuser.index')}}">MY</a></li>
							<!--
							<li>
							<div>
							<? echo session()->get('name'); ?> 님<br>
							안녕하세요 <br>
							환영합니다!
							<br>
							</div>
							</li>
							-->
							@else
							<li><a href="{{ route('loginuser.index') }}">로그인</a></li>
                            <li><a href="{{route('signupuser.index')}}">회원가입</a></li>
							
      
							@endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- //header -->
	
	@yield('content')

	
    <!-- footer -->
    <footer id="footer">
        <div id="footer_sns">
            <div class="container">
                <div class="footer_sns">
                    <ul>
                        <li class="icon s1"><a href="#"><span class="ir_pm">트위터</span></a></li>
                        <li class="icon s2"><a href="#"><span class="ir_pm">페이스북</span></a></li>
                        <li class="icon s3"><a href="#"><span class="ir_pm">인스타그램</span></a></li>
                        <li class="icon s4"><a href="#"><span class="ir_pm">구글플레이</span></a></li>
                        <li class="icon s5"><a href="#"><span class="ir_pm">아이폰 앱스토어</span></a></li>
						
                    </ul>
                    <div class="tel">
                        <a href="#">ARS <em>1544-0070</em></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_info">
            <div class="container">
                <div class="row">
                    <div class="footer_info">
                        <h2>
						<!--<img src="{{ asset('user/assets/image/Thecloud_logo_w.png')}}" alt="thecloud">-->
						</h2>
                        <ul>
                            <li><a href="#">회사소개</a></li>
                            <li><a href="#">채용정보</a></li>
                            <li><a href="#">제휴/광고/부대사업 문의</a></li>
                            <li><a href="#">이용약관</a></li>
                            <li><a href="#">개인정보처리방침</a></li>
                            <li><a href="#">고객센터</a></li>
                            <li><a href="#">윤리경영</a></li>
                        </ul>
                        <address>
                            <p>서울특별시 마포구 토정로14길 24 (구수동,클라우드빌딩)<br><span class="bar2">대표자명 양원찬</span> 개인정보보호 책임자 실장 유동민<br><span class="bar2">사업자등록번호 101-86-88278</span> 통신판매업신고번호 제 833호</p>
                            <p>Copyright 2021 by The Cloud Inc. All right reserved</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- 트레일러 -->
    <aside id="blackout" class="overlay">
       <div id="trailerModal" class="modal">
           <div id="trailer"></div> <!-- YouTube 플레이어로 대체되는 부분 -->
       </div>
        <button id="hideTrailer" class="modal_close">닫기</button>
    </aside>
    <!-- //트레일러 -->
    
    <!-- 자바스크립트 라이브러리 -->
    <script src="{{ asset('user/js/jquery.min_1.12.4.js')}}"></script>
    <script src="{{ asset('user/js/modernizr-custom.js')}}"></script>
    <script src="{{ asset('user/js/ie-checker.js')}}"></script>
    <script src="{{ asset('user/js/swiper.min.js')}}"></script>
    <script src="{{ asset('user/js/iframe_api.js')}}"></script>
    <script src="{{ asset('user/js/movie.js')}}"></script>
    <script src="{{ asset('user/js/custom.js')}}"></script>
    <script src="{{ asset('user/js/event3.js') }}"></script>
    {{-- <script src="{{ asset('user/js/map.js') }}"></script> --}}
</body>
</html>