@extends('user_main')
@section('content')
    <section id="banner">
        <h2 class="ir_so">최식 영화 소식</h2>
        <div class="banner_menu">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ss1">
                       <div class="container">
                           <div class="row">
                                <h2>범죄도시 2 <em>The Roundup</em></h2>
                                <h3></h3>
                                <p>나쁜 놈들 싹 쓸어버린다!</p>
                                <h3></h3>
                                <li class="white"><a href="#">상영시간표</a></li>
                                <li class="purple"><a href="#">빠른 예매</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ss2">
                       <div class="container">
                           <div class="row">
                                <h2>캡틴 마블 <em>Captain Marble</em></h2>
                                <h3></h3>
                                <p>새로운 히어로, 어벤져스의 희망</p>
                                <h3></h3>
                                <li class="white"><a href="#">상영시간표</a></li>
                                <li class="purple"><a href="#">빠른 예매</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ss3">
                       <div class="container">
                           <div class="row">
                                <h2>배트맨: 다크나이트 <em>The Dark Night</em></h2>
                                <h3></h3>
                                <p>운명을 건 최후의 결전이 시작된다!</p>
                                <h3></h3>
                                <li class="white"><a href="#">상영시간표</a></li>
                                <li class="purple"><a href="ticketing.html">빠른 예매</a></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- banner -->
    
    
   <section id="movie">
        <div class="container">
           <div class="row">
               <div class="movie">
                    <h2 class="ir_so">영화 예매</h2>
                    <div class="movie_title">
                       <ul>
                           <li class="active"><a href="#">박스오피스</a></li>
                           <li><a href="#">최신개봉작</a></li>
                           <li><a href="#">상영예정작</a></li>
                           <li><a href="#">큐레이션</a></li>
                        </ul>
                   </div>
                   <!-- //movie_title -->
                   
                   <div class="movie_chart">
                    <!-- chart_cont1 -->
                        <div class="swiper-container2">
                            <div class="chart_cont1 swiper-wrapper">
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster01@3.jpg')}}" srcset="img/main/poster01@2.jpg 2x" alt="아이언맨">
                                       </figure>
                                       <div class="rank"><strong>1</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>아바타: 물의 길</strong></h3>
                                       <div class="info_btn">
                                           <a href="{{ route('movieuser.show', 3) }}">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster02@3.jpg')}}" srcset="{{ asset('user/img/main/poster02@2.jpg')}} 2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>영웅</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster03@3.jpg')}}" srcset="{{ asset('user/img/main/poster03@2.jpg')}} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>범죄 도시2</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster04@3.jpg')}}" srcset="{{ asset('user/img/main/poster04@2.jpg')}} 2x" alt="스파이더 맨">
                                       </figure>
                                       <div class="rank"><strong>4</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>올빼미</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster05@3.jpg')}}" srcset="{{ asset('user/img/main/poster05@2.jpg')}} 2x" alt="아이언맨">
                                       </figure>
                                       <div class="rank"><strong>1</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>원피스: 필름 레드</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster06@3.jpg')}}" srcset="{{ asset('user/img/main/poster06@2.jpg')}} 2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>장화신은 고양이</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster07@3.jpg')}}" srcset="{{ asset('user/img/main/poster07@2.jpg')}} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>탄생</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster08@3.jpg')}}" srcset="{{ asset('user/img/main/poster08@2.jpg')}} 2x" alt="스파이더 맨">
                                       </figure>
                                       <div class="rank"><strong>4</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>탑건: 메버릭</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- //chart_cont1 -->

                       <!-- chart_cont2 -->
                       <div class="swiper-container2">
                           <div class="chart_cont2 swiper-wrapper">
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster08@3.jpg') }}" srcset="{{ asset('user/img/main/poster05@2.jpg') }} 2x" alt="아이언맨">
                                       </figure>
                                       <div class="rank"><strong>1</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>탑건: 메버릭</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster01@3.jpg') }}" srcset="{{ asset('img/main/poster06@2.jpg ') }}2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>아바타: 물의 길</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster07@1.jpg') }}" srcset="{{ asset('user/img/main/poster07@2.jpg') }} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>꼭두각시</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster08@1.jpg') }}" srcset="{{ asset('user/img/main/poster08@2.jpg') }} 2x" alt="스파이더 맨">
                                       </figure>
                                       <div class="rank"><strong>4</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>겟 아웃</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                               <div class="poster">
                                   <figure>
                                       <img src="{{ asset('user/img/main/poster09@1.jpg') }}" srcset="{{ asset('user/img/main/poster09@2.jpg') }} 2x" alt="아이언맨">
                                   </figure>
                                   <div class="rank"><strong>1</strong></div>
                                   <div class="mx">
                                       <span class="icon2 m ir_pm">MX</span>
                                       <span class="icon2 b ir_pm">Boutique</span>
                                   </div>
                               </div>
                               <div class="info">
                                   <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>문라이트</strong></h3>
                                   <div class="info_btn">
                                       <a href="#">상세보기</a>
                                       <a href="ticketing.html">예매하기</a>
                                   </div>
                               </div>
                           </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster10@1.jpg') }}" srcset="{{ asset('user/img/main/poster10@2.jpg') }} 2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>보헤미안 랩소디</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster11@1.jpg') }}" srcset="{{ asset('user/img/main/poster11@2.jpg') }} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>침묵</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                               <div class="poster">
                                   <figure>
                                       <img src="{{ asset('user/img/main/poster12@1.jpg') }}" srcset="{{ asset('user/img/main/poster12@2.jpg') }} 2x" alt="스파이더 맨">
                                   </figure>
                                   <div class="rank"><strong>4</strong></div>
                                   <div class="mx">
                                       <span class="icon2 m ir_pm">MX</span>
                                       <span class="icon2 b ir_pm">Boutique</span>
                                   </div>
                               </div>
                               <div class="info">
                                   <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>신세계</strong></h3>
                                   <div class="info_btn">
                                       <a href="#">상세보기</a>
                                       <a href="ticketing.html">예매하기</a>
                                   </div>
                               </div>
                           </div>
                           </div>
                       </div>
                       <!-- //chart_cont2 -->

                       <!-- //chart_cont3 -->
                       <div class="swiper-container2">
                           <div class="chart_cont3 swiper-wrapper">
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster09@1.jpg') }}" srcset="{{ asset('user/img/main/poster09@2.jpg') }} 2x" alt="아이언맨">
                                       </figure>
                                       <div class="rank"><strong>1</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>문라이트</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster10@1.jpg') }}" srcset="{{ asset('user/img/main/poster10@2.jpg') }} 2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>보헤미안 랩소디</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster11@1.jpg') }}" srcset="{{ asset('user/img/main/poster11@2.jpg') }} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>침묵</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster12@1.jpg') }}" srcset="{{ asset('user/img/main/poster12@2.jpg') }} 2x" alt="스파이더 맨">
                                       </figure>
                                       <div class="rank"><strong>4</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>신세계</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster13@1.jpg') }}" srcset="{{ asset('user/img/main/poster13@2.jpg') }} 2x" alt="아이언맨">
                                       </figure>
                                       <div class="rank"><strong>1</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>마스터</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster14@1.jpg') }}" srcset="{{ asset('user/img/main/poster14@2.jpg') }} 2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>마약왕</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster15@1.jpg') }}" srcset="{{ asset('user/img/main/poster15@2.jpg') }} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>미나리</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster16@1.jpg') }}" srcset="{{ asset('user/img/main/poster16@2.jpg') }} 2x" alt="스파이더 맨">
                                       </figure>
                                       <div class="rank"><strong>4</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>기생충</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- //chart_cont3 -->

                       <!-- //chart_cont4 -->
                       <div class="swiper-container2">
                           <div class="chart_cont4 swiper-wrapper">
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster13@1.jpg') }}" srcset="{{ asset('user/img/main/poster13@2.jpg') }} 2x" alt="아이언맨">
                                       </figure>
                                       <div class="rank"><strong>1</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>마스터</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster14@1.jpg') }}" srcset="{{ asset('user/img/main/poster14@2.jpg') }} 2x" alt="캡틴아메리카">
                                       </figure>
                                       <div class="rank"><strong>2</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>마약왕</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster15@1.jpg') }}" srcset="{{ asset('user/img/main/poster15@2.jpg') }} 2x" alt="토르">
                                       </figure>
                                       <div class="rank"><strong>3</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>미나리</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                   <div class="poster">
                                       <figure>
                                           <img src="{{ asset('user/img/main/poster16@1.jpg') }}" srcset="{{ asset('user/img/main/poster16@2.jpg') }} 2x" alt="스파이더 맨">
                                       </figure>
                                       <div class="rank"><strong>4</strong></div>
                                       <div class="mx">
                                           <span class="icon2 m ir_pm">MX</span>
                                           <span class="icon2 b ir_pm">Boutique</span>
                                       </div>
                                   </div>
                                   <div class="info">
                                       <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>기생충</strong></h3>
                                       <div class="info_btn">
                                           <a href="#">상세보기</a>
                                           <a href="ticketing.html">예매하기</a>
                                       </div>
                                   </div>
                               </div>
                                <div class="swiper-slide">
                                       <div class="poster">
                                           <figure>
                                               <img src="{{ asset('user/img/main/poster01@1.jpg') }}" srcset="{{ asset('user/img/main/poster01@2.jpg') }} 2x" alt="아이언맨">
                                           </figure>
                                           <div class="rank"><strong>1</strong></div>
                                           <div class="mx">
                                               <span class="icon2 m ir_pm">MX</span>
                                               <span class="icon2 b ir_pm">Boutique</span>
                                           </div>
                                       </div>
                                       <div class="info">
                                           <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>아이언맨</strong></h3>
                                           <div class="info_btn">
                                               <a href="#">상세보기</a>
                                               <a href="ticketing.html">예매하기</a>
                                           </div>
                                       </div>
                                   </div>
                                <div class="swiper-slide">
                                       <div class="poster">
                                           <figure>
                                               <img src="{{ asset('user/img/main/poster02@1.jpg') }}" srcset="{{ asset('user/img/main/poster02@2.jpg') }} 2x" alt="캡틴아메리카">
                                           </figure>
                                           <div class="rank"><strong>2</strong></div>
                                           <div class="mx">
                                               <span class="icon2 m ir_pm">MX</span>
                                               <span class="icon2 b ir_pm">Boutique</span>
                                           </div>
                                       </div>
                                       <div class="info">
                                           <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>캡틴아메리카: 시빌 워</strong></h3>
                                           <div class="info_btn">
                                               <a href="#">상세보기</a>
                                               <a href="ticketing.html">예매하기</a>
                                           </div>
                                       </div>
                                   </div>
                                <div class="swiper-slide">
                                       <div class="poster">
                                           <figure>
                                               <img src="{{ asset('user/img/main/poster03@1.jpg') }}" srcset="{{ asset('user/img/main/poster03@2.jpg') }} 2x" alt="토르">
                                           </figure>
                                           <div class="rank"><strong>3</strong></div>
                                           <div class="mx">
                                               <span class="icon2 m ir_pm">MX</span>
                                               <span class="icon2 b ir_pm">Boutique</span>
                                           </div>
                                       </div>
                                       <div class="info">
                                           <h3><span class="icon1 a15 ir_pm">15세이상 관람가</span><strong>토르: 다크 월드</strong></h3>
                                           <div class="info_btn">
                                               <a href="#">상세보기</a>
                                               <a href="ticketing.html">예매하기</a>
                                           </div>
                                       </div>
                                   </div>
                                <div class="swiper-slide">
                                       <div class="poster">
                                           <figure>
                                               <img src="{{ asset('user/img/main/poster04@1.jpg') }}" srcset="{{ asset('user/img/main/poster04@2.jpg') }} 2x" alt="스파이더 맨">
                                           </figure>
                                           <div class="rank"><strong>4</strong></div>
                                           <div class="mx">
                                               <span class="icon2 m ir_pm">MX</span>
                                               <span class="icon2 b ir_pm">Boutique</span>
                                           </div>
                                       </div>
                                       <div class="info">
                                           <h3><span class="icon1 a19 ir_pm">19세이상 관람가</span><strong>스파이더 맨</strong></h3>
                                           <div class="info_btn">
                                               <a href="#">상세보기</a>
                                               <a href="ticketing.html">예매하기</a>
                                           </div>
                                       </div>
                                   </div>
                           </div>
                       </div>
                       <!-- //chart_cont4 -->
                   </div>
                   <!-- //.movie chart -->
               </div>
               <!-- //.movie -->
           </div>
           <!-- //.row -->
       </div>
       <!-- //.container -->
   </section>
   <!-- //movie -->
   
    <!-- event -->
    <section id="event">
       <div class="container">
           <div class="row">
               <div class="event">
                   <h2>새로운 이벤트</h2>
                   <div class="event_left">
                       <div class="event_slider">
                           <img src="{{ asset('user/img/main/event01.jpg')}}" srcset="{{ asset('user/img/main/event01@2.jpg')}} 2x" alt="시티 패키지">
                       </div>
                       <div class="event_box1">
                           <img src="{{ asset('user/img/main/event02.jpg')}}" srcset="{{ asset('user/img/main/event02@2.jpg')}} 2x" alt="남포항점 2019 시즌할인권">
                       </div>
                       <div class="event_box2">
                           <img src="{{ asset('user/img/main/event03.jpg')}}" srcset="{{ asset('user/img/main/event03@2.jpg')}} 2x" alt="설 선물 이수점 전용관람권 런칭">
                       </div>
                   </div>
                   <div class="event_right">
                       <img src="{{ asset('user/img/main/event04.jpg')}}" srcset="{{ asset('user/img/main/event04@2.jpg')}} 2x" alt="사표 대신 영화표">
                   </div>
               </div>
           </div>
       </div>
    </section>
    <!-- //event -->
    
    <!-- Opening -->
    <section id="opening">
        <div class="container">
            <div class="row">
                <div class="opening">
                    <h2><span class="grand ir_pm">Grand Opening</span></h2>
                    <strong class="date ir_pm">2021.01 ~ 2021.03</strong>
                    <p class="desc">LIFE THEATER로 새롭게 시작하는 <br> 메가박스를 만나보세요!</p>
                    <div class="open_box">
                        <div>
                            <h3 class="ir_pm"><img class="openBox" src="{{ asset('user/img/main/grandOpenBox1.png')}}" alt="안양오픈">리뉴얼 오픈</h3>
                            <p class="ir_pm"><em>경기도</em><strong>안양</strong>3월1일</p>
                        </div>
                        <div class="openBox2">
                            <h3 class="ir_pm"><img class="openBox" src="{{ asset('user/img/main/grandOpenBox2.png')}}" alt="인덕원오픈">리뉴얼 오픈</h3>
                            <p class="ir_pm"><em>경기도</em><strong>인덕원 사거리</strong>3월16일</p>
                        </div>
                        <div class="openBox3">
                            <h3 class="ir_pm"><img class="openBox" src="{{ asset('user/img/main/grandOpenBox3.png')}}" alt="해운대오픈">리뉴얼 오픈</h3>
                            <p class="ir_pm"><em>부산</em><strong>해운대</strong>3월26일</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Opening -->
   
    <!-- new movie -->
    <section id="new_movie">
        <div class="container">
            <div class="row">
                <div class="new">
                    <h2>새로운 영화</h2>
                    <div class="new_left">
                        <div class="play" id="showTrailer" data-youtube="cvdxDZbdLsI">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
                                <circle class="st0" cx="60" cy="60.4" r="56"/>
                                <path class="st1" d="M81,65.4c4.8-2.8,4.8-7.2,0-10L53.5,39.6c-4.8-2.8-8.7-0.5-8.7,5v31.7c0,5.5,3.9,7.8,8.7,5L81,65.4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="new_right">
                        <h3 class="title">어벤져스: 엔드게임<span class="icon1"></span></h3>
                        <span class="release">2021년 02월 24일</span>
                        
                        <div class="star">
                            <span class="icon3 star1"></span>
                            <span class="icon3 star1"></span>
                            <span class="icon3 star1"></span>
                            <span class="icon3 star1"></span>
                            <span class="icon3 star2"></span>
                            <strong>9.0/10</strong>
                        </div>
                        <ul class="summary">
                            <li class="genre"><span class="bar">장르: 액션/SF</span><span> 제작국가: 미국</span></li>
                            <li class="age"><span class="bar">상영시간: 3시간 2분</span><span> 연령: 15세 이상 관람가</span></li>
                            <li class="desc">
                            2019년 개봉한 미국의 슈퍼히어로 영화로, 마블 코믹스의 동명 팀을 원작으로 하고 있으며, 마블 스튜디오가 제작하고, 월트 디즈니 스튜디오스 모션 픽처스가 배급하였다. 이 영화는 2012년 영화 어벤져스와, 2015년 영화 어벤져스: 에이지 오브 울트론, 2018년 영화 어벤져스: 인피니티 워에 이어 나온 마지막 어벤져스 시리즈이자, 마블 시네마틱 유니버스 (MCU)의 22번째 작품에 해당한다. 앤서니 루소와 조 루소가 감독하고 크리스토퍼 마커스와 스티븐 맥필리가 공동으로 각본을 썼으며, 이전의 MCU 영화에보다도 많은 배우와 앙상블 캐스트들이 등장한다.
                            </li>
                        </ul>
                        <div class="select">
                            <div class="s1">
                                <label for="udate" class="ir_so">날짜</label>
                                <input type="text" id="udate" name="udate" value="2021년 3월 12일" class="ui_select2">
                            </div>
                            <div class="s2">
                                <label for="utime" class="ir_so">시간</label>
                                <select id="utime" name="utime" class="ui_select2">
                                    <option value="오전 0:00">오전 0:00</option>
                                    <option value="오전 1:00">오전 1:00</option>
                                    <option value="오전 2:00">오전 2:00</option>
                                    <option value="오전 3:00">오전 3:00</option>
                                    <option value="오전 4:00">오전 4:00</option>
                                    <option value="오전 5:00">오전 5:00</option>
                                    <option value="오전 6:00">오전 6:00</option>
                                    <option value="오전 7:00">오전 7:00</option>
                                    <option value="오전 8:00">오전 8:00</option>
                                    <option value="오전 9:00">오전 9:00</option>
                                    <option value="오전 10:00">오전 10:00</option>
                                    <option value="오전 11:00">오전 11:00</option>
                                    <option value="오전 12:00">오전 12:00</option>
                                    <option value="오후 1:00">오후 1:00</option>
                                    <option value="오후 2:00">오후 2:00</option>
                                    <option value="오후 3:00">오후 3:00</option>
                                    <option value="오후 4:00">오후 4:00</option>
                                    <option value="오후 5:00">오후 5:00</option>
                                    <option value="오후 6:00">오후 6:00</option>
                                    <option value="오후 7:00">오후 7:00</option>
                                    <option value="오후 8:00">오후 8:00</option>
                                    <option value="오후 9:00">오후 9:00</option>
                                    <option value="오후 10:00">오후 10:00</option>
                                    <option value="오후 11:00">오후 11:00</option>
                                    <option value="오후 12:00">오후 12:00</option>
                                </select>
                            </div>
                            <div class="s3">
                                <label for="utext" class="ir_so">주소 또는 도로명을 입력해주세요.</label>
                                <input type="text" id="utext" name="utext" class="ui_input3" placeholder="주소 또는 도로명을 입력해주세요.">
                            </div>
                            <div class="btn">
                                <a href="#" class="white">좌석확인</a>
                                <a href="#" class="purple">예매하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- kakao map -->
    <section id="event">
        <div class="container">
            <div class="row">
                <div class="event">
                    <h2>영화관 찾기</h2>
                    <section>
                        <div id="map" style="width:100%; height:550px;"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- //event -->
	
         <script type="text/javascript" >
            var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                mapOption = { 
                        center: new kakao.maps.LatLng(37.49887, 127.026581), // 지도의 중심좌표
                        level: 4 // 지도의 확대 레벨
                };
        
            var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
        
            // 커스텀 오버레이에 표시할 내용입니다     
            // HTML 문자열 또는 Dom Element 입니다 
            var content = '<div class="overlaybox">' +
                '    <div class="boxtitle">금주 영화순위</div>' +
                '    <a href="https://www.megabox.co.kr/movie-detail?rpstMovieNo=22029100"><div class="first">' +
                '        <div class="triangle text">1</div>' +
                '        <div class="movietitle text">아바타: 물의길</div>' +
                '    </div></a>' +
                '    <ul>' +
                '        <a href="https://www.megabox.co.kr/movie-detail?rpstMovieNo=22085900"><li class="up">' +
                '            <span class="number">2</span>' +
                '            <span class="title">올빼미</span>' +
                '            <span class="arrow up"></span>' +
                '            <span class="count">2</span>' +
                '        </li></a>' +
                '        <a href="https://www.megabox.co.kr/movie-detail?rpstMovieNo=22085800"><li>' +
                '            <span class="number">3</span>' +
                '            <span class="title">영웅</span>' +
                '            <span class="arrow up"></span>' +
                '            <span class="count">6</span>' +
                '        </li></a>' +
                '        <a href="https://www.megabox.co.kr/movie-detail?rpstMovieNo=22091200"><li>' +
                '            <span class="number">4</span>' +
                '            <span class="title">오늘밤, 세계에서 이 사랑이..</span>' +
                '            <span class="arrow up"></span>' +
                '            <span class="count">3</span>' +
                '        </li></a>' +
                '        <a href="https://www.megabox.co.kr/movie-detail?rpstMovieNo=22094300"><li>' +
                '            <span class="number">5</span>' +
                '            <span class="title">탄생</span>' +
                '            <span class="arrow down"></span>' +
                '            <span class="count">1</span>' +
                '        </li></a>' +
                '    </ul>' +
                '</div>';
        
            // 커스텀 오버레이가 표시될 위치입니다 
            var position = new kakao.maps.LatLng(37.49887, 127.026581);  
            
            // 커스텀 오버레이를 생성합니다
            var customOverlay = new kakao.maps.CustomOverlay({
                    position: position,
                    content: content,
                    xAnchor: 0.3,
                    yAnchor: 0.91
            });
            
            // 커스텀 오버레이를 지도에 표시합니다
            customOverlay.setMap(map);
        </script>
	@endsection