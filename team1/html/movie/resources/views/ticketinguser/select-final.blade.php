@extends('user_main')
@section('content')
<script>
	function cal_prices()
	{
		form1.total.value = Number(20000 * form1.adult.value ) + Number(15000 * form1.teen.value) + Number(5000 * form1.child.value) + Number(5000 * form1.disabled.value);
	}
</script>

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


                      <div class="time-listt">
                        <div class="item-conatainert">
                          <div class="itemtt">
                            <div class="ratingt">12</div>
                            <div class="titlet">{{$row2->name}}</div>
                          </div>
                          <div class="time-item-subt">
                            <div class="Dt">2D 디지털<br>3관 (1층)<br>총 226석</div><br>
                          </div>
                        </div>
                      </div>
            
					<div class="time-containert">
                         <div></div>
                        @csrf
                        @foreach ($list2 as $row3)
                          <?
                            //$arr = array();
                          // $arr['a'] = $row3->id;
                            //$arr['b'] = $row3->movie_id;
                          $movie_id = $row3->movies_id;
                          $playtime_id = $row3->id;
                          ?>
                          <div class="time-squaret">
						  {{--<a href="{{ route('ticketinguser.edit', $arr) }}"><button class="squaret">{{$row3->playing_time}}</button></a>--}}
						<a href="javascript:go_final('{{$playtime_id}}');"><button class="square">{{$row3->playing_time}}</button></a>
                          </div> 
                        @endforeach
					</div>


                        <form name="form1" method="get" action="{{route('seatsuser.index')}}" enctype="multipart/form-data">
                          <div class="movie-infot">
                            <div class="ticketing-infot">
                              <img src="{{ asset('storage/product_img/' . $list3->pic1) }}" width="210px" height="450px">
                              <div>
                                <input type="hidden" name="movies_id" value="{{$list3->id}}">
                                <div class="info-titlet">{{$list3->name}}</div>
                                <div class="info-explaint">상영일시</div>
                                <div>2022-11-28</div>
                                <div class="info-explaint">상영시간</div>
                                <div>
                                  <input type="hidden" name="theaters_id" value="3">
                                  <input type="hidden" name="playings_id" value="{{$list3->playing_id}}">{{$list3->playing_time}}
                                </div>
                                <div class="info-explaint">인원</div>
                                <div class="info-explaint">성인</div>
                                <div><input type="number" name="adult" onChange="cal_prices();"></div>
                                <div class="info-explaint">청소년</div>
                                <div><input type="number" name="teen" onChange="cal_prices();"></div>
                                <div class="info-explaint">어린이</div>
                                <div><input type="number" name="child" onChange="cal_prices();"></div>
                                <div class="info-explaint">장애인</div>
                                <div><input type="number" name="disabled" onChange="cal_prices();"></div>
                                <div class="info-explaint">좌석</div>
                                <div class="is-seat">좌석 선택 가능</div>
                              </div>
                            </div>

                            <div class="resultt">
                              <div class="totalt">
                                <span class="total-amountt">총 합계</span>
                                <span class="amountt"><input type="text" name="total" value=""></span>
                              </div>
                              <button class="select-seatt" type="submit">좌석 선택</button>
                            </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </main>
              <form name="select_final_form" method="get" action="{{route('ticketinguser.edit', $movie_id)}}">
                <input type="hidden" name="playtime_id" />
                  {{--<input type="hidden" name="movie_id" />--}}
              </form>
      </div>
    </div>
  </div>
</section>


<script>
	function go_final(movie_id)
	{
    document.select_final_form.playtime_id.value = playtime_id;
    //document.select_final_form.movie_id.value = movie_id;

    document.select_final_form.submit();
	}
</script>
@endsection
