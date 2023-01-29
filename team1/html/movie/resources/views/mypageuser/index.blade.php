@extends('user_main')
@section('content')  
  <section id="banner">
    <div class="mypage-wrapper">
    <div class="top">
      <div class="user">
        <div class="hello">안녕하세요!</div>
        <div class="user-name"><? echo session()->get('name'); ?> </div>
      </div>
      <div class="user mypage-box">
          <div class="hello">현재 방문자</div>
          <div class="user-name-mypage">172명</div>
      </div>
      <div class="user mypage-box">
          <div class="hello">고객센터</div>
          <div class="user-name-mypage">02-746-231</div>
      </div>
    </div>
 
  <!-- event -->
  <section id="event">
     <div class="container">
         <div class="row">
             <div class="event">
                 <h2>예매내역</h2>
                 <table class="bottom">
                   {{-- <tr class="bottom-list"> --}}
                     <th class="bottom-list-header">회원아이디</th>
                     <th class="bottom-list-content">예약영화</th>
                     <th class="bottom-list-content">상영지역</th>
                     <th class="bottom-list-content">상영관</th>
					 <th class="bottom-list-content">상영날짜</th>
					   <th class="bottom-list-content">상영시간</th>
					     <th class="bottom-list-content">좌석정보</th>
					@foreach ($list as $row)       

                     <tr><!-- 첫번째 줄 시작 -->
                      <td>{{ $row->members_uid }}</td>
                      <td>{{ $row->movie_name }}</td>
                      <td>{{ $row->location }}</td>
                      <td>{{ $row->room_name }}</td>
					  <td>{{ $row->playing_date }}</td>
					 <td>{{ $row->playing_time }}</td>
					 <td align="left">{{ $row->seat}}</td>
                    </tr>
					    @endforeach

                   {{-- </tr> --}}
                 </table>
             </div>
         </div>
     </div>
  </section>
  <!-- //event -->
  

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
  <!-- //new movie -->
@endsection