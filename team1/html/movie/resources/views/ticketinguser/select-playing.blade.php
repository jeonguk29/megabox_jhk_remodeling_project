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
			    <div class="toptt">
            <i class="fa-regular fa-calendar-days"></i>
            <div class="dayt">2022-11-28</div>
          </div>

          <div class="time-listt">
			      <div class="item-conatainert">
              <div class="itemtt">
                <div class="ratingt">12</div>
                <div class="titlet">{{$row2->name}}</div>
              </div>
              <div class="time-item-subt">
                <div class="Dt">2D 디지털</div>
                <div class="locatint">
                  <div class="floort">3관 (1층)</div>
                  <div class="seatt">총 226석</div>
                </div>
              </div>
            </div>
          </div>

				  <div class="time-containert">
			      @foreach ($list2 as $row3)
					  <?
					    $movie_id = $row3->movies_id;
						$playtime_id = $row3->id;
					  ?>
              <div class="time-squaret">
               <a href="javascript:go_final('{{$playtime_id}}');"><button class="square">{{$row3->playing_time}}</button></a>
				   {{--<a href="{{ route('ticketinguser.edit', $row3->id) }}"><button class="square">{{$row3->playing_time}}</button></a>--}}
              </div> 
			      @endforeach
				  </div>
            {{-- </div> --}}

            {{-- 영화정보 --}}
          <div class="movie-infot">
				
          </div>

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
	function go_final(playtime_id)
	{
    document.select_final_form.playtime_id.value = playtime_id;
    //document.select_final_form.movie_id.value = movie_id;

    document.select_final_form.submit();
	}
</script>
@endsection


