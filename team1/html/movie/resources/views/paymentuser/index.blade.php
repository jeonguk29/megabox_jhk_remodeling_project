@extends('user_main')
@section('content')

<section id="new_movie">
	<div class="container">
			<div class="row">
					<div class="new">
							{{-- <h2>현재 상영작</h2> --}}
							<form name="form1" method="post" action="{{route('paymentuser.store')}}">
								@csrf
									<div class="movie-info2">
											<div class="info2">
												<div class="image2">
													<img src="{{asset('storage/product_img/' . $movies->pic1)}}">
												</div>
												<div class="info-wrapper2">
													<input type="hidden" name="movies_id" value="{{$movies->id}}">
													<div class="info-title2">{{$movies->name}}</div>
													<input type="hidden" name="theaters_id" value="{{$theaters_id}}">
													<div class="info-explain2">{{$theaters_id}}</div>
													 <input type="hidden" name="playing_times_id" value="{{$playing_time->id}}">
													<div class="info-explain2">{{$playing_time->playing_time}}</div>
													<div class="info-explain2">인원</div>
													<input type="hidden" name="adult" value="{{$adult}}">
													<div class="info-explain2">성인 : {{$adult}}</div>
													<input type="hidden" name="teen" value="{{$teen}}">
													<div class="info-explain2">청소년 : {{$teen}}</div>
													<input type="hidden" name="child" value="{{$child}}">
													<div class="info-explain2">어린이 : {{$child}}</div>
													<input type="hidden" name="disabled" value="{{$disabled}}">
													<div class="info-explain2">장애인 : {{$disabled}}</div>
													<div class="info-explain2">
														<?
														$seats="";
														foreach($seats_info as $seat_info)
														{
															$seats = $seats." ".$seat_info->name;
														}
														?>
														<input type="hidden" name="seats" value="{{$seats}}">
																	@foreach($seats_info as $seat_info)
																		{{ $seat_info -> name }}
																	@endforeach
													</div>
												</div>
									</div>
									<div class="result2">
										<div class="total2">
											<span class="total-amount2">총 합계</span>
											<input type="hidden" name="total" value="{{$total}}">
												<span class="amount2">{{number_format($total)}}원</span>
										</div>
												<a href="#"><button class="select-seat2" onclick="go_payment()">결제하기</button></a>
									</div>
										{{-- </div> --}}
						</form>



					</div>
			</div>
	</div>
</section>

<script>
	function go_payment()
	{
    alert('결제가 완료되었습니다.');
	document.form1.submit();
	}

</script>

@endsection