@extends('user_main')
@section('content')



  <section id="banner">

  </section>
  <!-- banner -->  
    
   <section id="movie">
    {{-- <div class="container"> --}}
      {{-- <div class="movie"> --}}
        <div class="container">
          <div class="row">
            <div class="new-event">
              <h2 class="ing-event">진행중인 이벤트</h2>
              <div class="movie_title">
                <ul>
                  <li class="active"><a href="#">JHKPick</a></li>
                  <li><a href="#">극장</a></li>
                  <li><a href="#">제휴할인</a></li>
                  <li><a href="#">시사회/무대인사</a></li>
                </ul>
              </div>
            </div>
          </div>
        {{-- </div> --}}

                   {{-- <div class="movie_chart">
                           
                   </div> 
                   <!-- //.movie chart -->
               </div>
               <!-- //.movie -->
       {{-- </div> --}}
       <!-- //.container -->
   </section>
   <!-- //movie -->

   
    <!-- new movie -->
    <section id="new_movie">
      <div class="container">
        <div class="row">
          <div class="new event-new">
            <h2>추천 이벤트</h2>
            <div class="image-slider">
              <div class="images"></div>
              <div class="thumbnails"></div>
              <div class="back-btn">
                <i class="fa-solid fa-chevron-left"></i>
              </div>
              <div class="next-btn">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //new movie -->

    
    <!-- new movie -->
    <section id="new_movie">
      <div class="container">
        <div class="row">
          <div class="event-new-movie evnet-top">
            <h2>JHKPick</h2>
            <div class="event-container">
              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent02.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><아바타:물의길> 굿즈패키지 출시</div>
                  <div class="event-date">2022.12.13 ~ 2023.01.23</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent03.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><신비아파트극장판 차원도깨비와 7개의 세계> 프로모션 콤보 출시</div>
                  <div class="event-date">2022.12.13 ~ 2022.12.23</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent04.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><메가박스X티웨이항공></br>GOODBYE 2022 WELCOME</div>
                  <div class="event-date">2022.12.12 ~ 2023.01.28</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent05.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><아바타:물의길> 프로모션 콤보 출시</div>
                  <div class="event-date">2022.12.13 ~ 2023.01.23</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //new movie -->
      
    <!-- new movie -->
    <section id="new_movie">
      <div class="container">
        <div class="row">
          <div class="event-new-movie">
            <h2>극장</h2>
            <div class="event-container">
              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent06.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[더 부티크 목동현대백화점] 오픈 이벤트</div>
                  <div class="event-date">2022.12.07 ~ 2023.01.31</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent07.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[포항지점] 오픈 이벤트</div>
                  <div class="event-date">2022.12.01 ~ 2023.01.31</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent08.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[수원호매실] 호매실에서 산타보고! 영화보고!</div>
                  <div class="event-date">2022.12.24 ~ 2022.12.25</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent09.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[경기남부지역] 무료주차 확대!</div>
                  <div class="event-date">2022.12.14 ~ 2023.01.31</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    <!-- //new movie -->

    <!-- new movie -->
    <section id="new_movie">
      <div class="container">
        <div class="row">
          <div class="event-new-movie">
            <h2>제휴/할인</h2>
            <div class="event-container">
              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent10.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[메가박스X더쎈카드] 더쎈카드 연말정산 이벤트</div>
                  <div class="event-date">2022.12.12 ~ 2023.12.31</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent11.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[KTX메가박스] 3D 영화관람하고 풍성한 혜택 받으세요</div>
                  <div class="event-date">2022.12.12 ~ 2022.12.31</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent12.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[제로페이] 이제는 영화볼 때도 제로페이</div>
                  <div class="event-date">2022.12.09 ~ 2023.12.18</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent13.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title">[광주은행X메가박스] 메가박스 카드 런칭기념 이벤트</div>
                  <div class="event-date">2022.10.24 ~ 2023.01.01</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //new movie -->

    <!-- new movie -->
    <section id="new_movie">
      <div class="container">
        <div class="row">
          <div class="event-new-movie">
            <h2>시사회/무대인사</h2>
            <div class="event-container">
              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent14.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><신비아파트 극장판 차원도깨비와 7개의 세계> 무대인사</div>
                  <div class="event-date">2022.12.18 ~ 2022.12.24</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent15.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><패닉 런> 메가박스 회원 시사회</div>
                  <div class="event-date">2022.12.10 ~ 2022.12.18</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent16.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><올빼미> 크리스마스 무대인사</div>
                  <div class="event-date">2022.12.06 ~ 2022.12.14</div>
                </div>
              </div>

              <div class="event-wrapper">
                <div class="event-img"><img style="border-top-left-radius: 10px;
                  border-top-right-radius: 10px;" src={{ asset('user/img/main/mevent17.jpg') }}></div>
                <div class="event-text">
                  <div class="event-title"><장화신은 고양이: 끝내주는 모험>메가박스 회원 시사회</div>
                  <div class="event-date">2022.12.02 ~ 2022.12.25</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //new movie -->


    <!-- //help -->  
 @endsection