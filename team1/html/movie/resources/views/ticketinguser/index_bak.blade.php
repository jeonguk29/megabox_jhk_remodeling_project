@extends('user_main')
@section('content')
		
		<main data-scroll-container>
      <div class="wrapper">
        <div class="container">
          <div class="title-box">
            <h1 class="title-text">예매하기</h1>
          </div>
          <div class="ticketing-wrapper">
            <div class="movie-title box">
              <div class="top">
                <div>영화</div>
                <div class="movie-number">9</div>
                <select>
                  <option value="cgv">CGV</option>
                  <option value="megabox">메가박스</option>
                  <option value="lot">롯데시네마</option>
                </select>
              </div>
              <div class="movie-list">
                <button class="item">
                  <div class="rating">12</div>
                  <div class="title">블랙 팬서:와칸다포에버</div>
                </button>
                <button class="item">
                  <div class="rating">12</div>
                  <div class="title">데시벨</div>
                </button>
                <button class="item">
                  <div class="rating">12</div>
                  <div class="title">동감</div>
                </button>
                <button class="item">
                  <div class="rating">12</div>
                  <div class="title">아마겟돈 타임</div>
                </button>
                <button class="item">
                  <div class="rating">12</div>
                  <div class="title">올빼미</div>
                </button>
                <button class="item">
                  <div class="rating">12</div>
                  <div class="title">본즈 앤 올</div>
                </button>
              </div>
            </div>
            <div class="movie-time box">
              <div class="top">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="day">2022-11-28</div>
              </div>
              <div class="time-list">
                <div class="item-conatainer">
                  <div class="item">
                    <div class="rating">12</div>
                    <div class="title">블랙 팬서:와칸다포에버</div>
                  </div>
                  <div class="time-item-sub">
                    <div class="D">2D 디지털</div>
                    <div class=" locatin">
                      <div class="floor">3관 (1층)</div>
                      <div class="seat">총 226석</div>
                    </div>
                  </div>
                </div>
                <div class="time-container">
                  <div class="time-square">
                    <button class="square">13:00 ~16:01</button>
                    <div class="is-reservation">예약마감</div>
                  </div>
                  <div class="time-square">
                    <button class="square true">13:00 ~16:01</button>
                    <div class="is-reservation true">예약마감</div>
                  </div>
                  <div class="time-square">
                    <button class="square">13:00 ~16:01</button>
                    <div class="is-reservation">예약마감</div>
                  </div>
                </div>
                <div class="item-conatainer">
                  <div class="item">
                    <div class="rating">12</div>
                    <div class="title">데시벨</div>
                  </div>
                  <div class="time-item-sub">
                    <div class="D">2D 디지털</div>
                    <div class=" locatin">
                      <div class="floor">2관 (1층)</div>
                      <div class="seat">총 160석</div>
                    </div>
                  </div>
                </div>
                <div class="time-container">
                  <div class="time-square">
                    <button class="square">13:00 ~16:01</button>
                    <div class="is-reservation">예약마감</div>
                  </div>
                </div>
                <div class="item-conatainer">
                  <div class="item">
                    <div class="rating">12</div>
                    <div class="title">동감</div>
                  </div>
                  <div class="time-item-sub">
                    <div class="D">2D 디지털</div>
                    <div class=" locatin">
                      <div class="floor">2관 (1층)</div>
                      <div class="seat">총 160석</div>
                    </div>
                  </div>
                </div>
                <div class="time-container">
                  <div class="time-square">
                    <button class="square">13:00 ~16:01</button>
                    <div class="is-reservation">예약마감</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="movie-info">
              <div class="info">
                <img src="user/img/main/poster02@1.jpg" width="210px">
                <div>
                  <div class="info-title">블랙 팬서:와칸다포에버</div>
                  <div class="info-explain">상영</div>
                  <div class="info-explain">일시</div>
                  <div class="info-explain">인원</div>
                  <div class="info-explain">좌석</div>
                  <div class="is-seat">좌석 선택 가능</div>
                </div>
              </div>
              <div class="result">
                <div class="total">
                  <span class="total-amount">총 합계</span>
                  <span class="amount">0원</span>
                </div>
                <a href="{{ route('seatsuser.index') }}"><button class="select-seat">좌석 선택</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
		</main>
		<script src="{{asset('user/js/main/index.js')}}"></script>
@endsection