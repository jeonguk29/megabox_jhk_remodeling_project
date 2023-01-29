@extends('user_main')
@section('content')
<!-- new movie -->
<section id="new_movie">
	<div class="container">
			<div class="row">
					<div class="new">
							<h2>현재 상영작</h2>
						
							<div class="current-screenings box">
								@foreach ($list as $row)
									<div class="screening-list">
									@if($row->pic1) 
									<img src="{{ asset('storage/product_img/' . $row->pic1) }}" width="250px">
									@else        
									<img src=" " width="100" height="100" class="img-fluid img-thumbnail margin5">
									@endif
										<h1 class="rank">{{ $row->rating }}</h1>
										<div class="title">{{ $row->name }}</div>
										<div class="buttons">
											<div class="reservation-rate">{{ $row->release_date }}</div>
											<div class="grade test">{{ $row->playingtime }}분</div>
										</div>
										<div class="btn">
											<a href="{{ route('movieuser.show', $row->id) }}"><button class="btn-info hover">영화 정보</button></a>
											<a href="{{ route('ticketinguser.show', $row->id) }}"><button class="btn-ticketing">예매하기</button></a>
										</div>
									</div>
							@endforeach
							</div>



					</div>
			</div>
	</div>
</section>
<!-- //new movie -->

<!-- notice -->
<section id="help">
	<div class="container">
			<div class="row">
					<div class="new">
						<h2>상영 예정작</h2>
						
						<div class="current-screenings box">
							@foreach ($list as $row)
								<div class="screening-list">
								@if($row->pic1) 
								<img src="{{ asset('storage/product_img/' . $row->pic1) }}" width="250px">
								@else        
								<img src=" " width="100" height="100" class="img-fluid img-thumbnail margin5">
								@endif
									<h1 class="rank">{{ $row->rating }}</h1>
									<div class="title">{{ $row->name }}</div>
									<div class="buttons">
										<div class="reservation-rate test">{{ $row->release_date }}</div>
										<div class="grade test">{{ $row->playingtime }}분</div>
									</div>
									<div class="btn">
										<a href="{{ route('movieuser.show', $row->id) }}"><button class="btn-info hover">영화 정보</button></a>
										<a href="./ticketing.html"><button class="btn-ticketing">예매하기</button></a>
									</div>
								</div>
						@endforeach
						</div>



				</div>
					</div>
			</div>
	</div>
</section>
<!-- //help -->

@endsection