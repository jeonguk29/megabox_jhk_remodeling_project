@extends('user_main')
@section('content')

<section id="new_movie">
	<div class="container">
			<div class="row">
					<div class="new">
							<h2>영화정보</h2>
							<div class="movie-container">	
								<div class="title-box">
								@if($row->pic1)   
									 <img src="{{ asset('storage/product_img/' . $row->pic1) }}"
										 width="140" height="341" class="img-fluid img-thumbnail margin5">
								@else        
									<img src=" " width="100" height="100" class="img-fluid img-thumbnail margin5">
								@endif
								</div>
								
										<div class="info-container">
											<div class="show-title">{{$row->name}}</div>
											<div class="title-info">
												<div class="info">
													<div class="genre">
														<span>{{$row->release_date}} 개봉</span>
														<span>{{$row->playingtime}}분</span>
													</div>
												</div>
												<div class="show-info">감독:<span> {{$row->director}}</span></div>
												<div class="show-info">상영 관람가 등급:<span> {{$row->rating}}</span></div>
												<div class="show-info">제작사:<span> {{$row->publisher}}</span></div>
											</div>
											<a href="{{ route('ticketinguser.show', $row->id) }}"><button class="infromation-btn">예매하기</button></a>
										</div>
									</div>
									<div>
										<div class="small-title">{{$row->name}}</div>
										<div class="explaination">{{$row->description}}</div>
									</div>
							
								<div class="title-box">
											<h1 class="title-text">주요장면</h1>
								@if($row->pic2)   
									 <img src="{{ asset('storage/product_img/' . $row->pic2) }}"
										 width="140" height="341" class="img-fluid img-thumbnail margin5">
								@else        
									<img src=" " width="100" height="100" class="img-fluid img-thumbnail margin5">
								@endif
										</div>
								
									<div class="title-box">
											<h1 class="title-text">주요장면</h1>
								@if($row->pic3)   
									 <img src="{{ asset('storage/product_img/' . $row->pic3) }}"
										 width="140" height="341" class="img-fluid img-thumbnail margin5">
								@else        
									<img src=" " width="100" height="100" class="img-fluid img-thumbnail margin5">
								@endif
										</div>
								
					</div>
			</div>
	</div>
</section>



		<script src="{{ asset('user/js/main/index.js')}}"></script>
		@endsection