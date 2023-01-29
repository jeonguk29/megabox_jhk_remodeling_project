@extends('user_main')
@section('content')

<section id="new_movie">
	<div class="container">
			<div class="row">
					<div class="new">
							<h2>예매하기</h2>
						
              <main data-scroll-container>
                <div class="wrappert">
                  <div class="containert">
                    <div class="ticketing-wrappert">
                      <div class="movie-titlet boxt">
                        <div class="topt">
                          <div>영화</div>
                          <div class="movie-numbert">{{ $list1->movie_count }}</div>
                          <select>
                            <option value="cgv">CGV</option>
                            <option value="megabox">메가박스</option>
                            <option value="lot">롯데시네마</option>
                          </select>
                        </div>
                        <div class="movie-listt">
                          @foreach ($list as $row)
                            <a href="{{ route('ticketinguser.show', $row->id) }}">
                              <button class="itemt">
                                <div class="ratingt">{{$row->rating}}</div>
                                <div class="titlet">{{$row->name}}</div>
                              </button>
                            </a>
                          @endforeach
                        </div>
                      </div>
          
                      {{-- 영화 시간 목록 --}}
                      <div class="movie-timet boxt">
                       
                      </div>
          
                      {{-- 영화 정보 --}}
                      <div class="movie-infot">
          
          
                      </div>
          
                    </div>
                  </div>
                </div>
              </main>



					</div>
			</div>
	</div>
</section>

@endsection