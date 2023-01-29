<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perspective Seat Preview | Codrops</title>
		<meta name="description" content="An experimental demo where a 3D perspective preview is shown for a selected seat in a cinema room." />
		<meta name="keywords" content="cinema, seat booking, seating plan, perspective, 3d" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="{{ asset('user/css/normalize.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('user/css/demo.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('user/css/component.css') }}" />
		<script src="{{ asset('user/js/modernizr-custom.js') }}"></script>
	</head>
	<body>
		<header class="header">
			<div class="codrops-links">
				<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Development/LineMenuStyles/" title="Previous Demo"><span>Previous Demo</span></a>
				<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=25885" title="Back to the article"><span>Back to the Codrops article</span></a>
			</div>
			<h1 class="header__title">Cinema Seat Preview</h1>
			<p class="note note--screen">Please view on a larger screen</p>
			<p class="note note--support">Sorry, but your browser doesn't support preserve-3d!</p>
		</header>
		<div class="container">
			<div class="cube">
				<div class="cube__side cube__side--front"></div>
				<div class="cube__side cube__side--back">
					<div class="screen">
						<div class="video">
							<video class="video-player" src="{{ asset('user/media/movie.mp4') }}" preload="auto" poster="{{ asset('user/media/movie.png') }}">
								<source src="" type='video/ogg; codecs="theora, vorbis"'>
								<source src="{{ asset('user/media/movie.mp4') }}" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
								<p>Sorry, but your browser does not support this video format.</p>
							</video>
							<button class="action action--play action--shown" aria-label="Play Video"></button>
						</div>
						<div class="intro intro--shown">
							<div class="intro__side">
								<h2 class="intro__title">
									<span class="intro__up">The Open Cinema <em>presents</em></span>
									<span class="intro__down">Sintel <span class="intro__partial"><em>by</em> <a href="https://durian.blender.org/">The Blender Foundation</a></span></span>
								</h2>
							</div>
							<div class="intro__side">
								<button class="action action--seats">Select your seats</button>
							</div>
						</div>
					</div>
				</div>
				<div class="cube__side cube__side--left"></div>
				<div class="cube__side cube__side--right"></div>
				<div class="cube__side cube__side--top"></div>
				<div class="rows rows--large">
				
				@foreach ($seat_rows as $seat_row)
					<div class="row">
						@foreach ($seat_cols as $seat_col)

							<div data-seat="{{ $seat_row -> seat_row_name }}{{ $seat_col -> seat_col_name }}" class="row__seat"></div>
						@endforeach	
					</div>					
				@endforeach	
					
				</div>
				<!-- /rows -->
			</div><!-- /cube -->
		</div><!-- /container -->
		<div class="plan">
			<h3 class="plan__title">Seating Plan</h3>
			<div class="rows rows--mini">
			
				<form name="form1"  method="get" action="" >
						<input type="hidden" name="check_seats_name" id ="check_seats_name" />
						<input type="hidden" name="movies_id" value="{{$movies_id}}" />
						<input type="hidden" name="theaters_id" value="{{$theaters_id}}" />
						<input type="hidden" name="playings_id" value="{{$playings_id}}" />
						<input type="hidden" name="adult" value="{{$adult}}" />
						<input type="hidden" name="teen" value="{{$teen}}" />
						<input type="hidden" name="child" value="{{$child}}" />
						<input type="hidden" name="disabled" value="{{$disabled}}" />
						<input type="hidden" name="total" value="{{$total}}" />
					@foreach ($seat_rows as $seat_row)
						<div class="row">
							@foreach ($seat_cols as $seat_col)
							
								@foreach ($reserved_rooms_list as $reserved_room)														
									@if ( $seat_row -> seat_row_name . $seat_col -> seat_col_name == $reserved_room -> room_name )
										<div class="row__seat row__seat--reserved"></div>							
									@else								    
										<input name="check_seat" id="check_seat" type="checkbox" value="{{$seat_row -> seat_row_name}}{{$seat_col -> seat_col_name}}" class="row__seat tooltip" data-tooltip="{{$seat_row -> seat_row_name}}{{$seat_col -> seat_col_name}}"></input>
									@endif
								@endforeach							
															
							@endforeach	
						</div>					
					@endforeach	
				</form>
								
			</div>
			<!-- /rows -->
			<ul class="legend">
				<li class="legend__item legend__item--free">Free</li>
				<li class="legend__item legend__item--reserved">Reserved</li>
				<li class="legend__item legend__item--selected">Selected</li>
			</ul>
			
			<a href="#"><button class="action action--buy" onclick="go_payment()">Buy tickets</button></a>
		</div><!-- /plan -->
		<a href="#"><button class="action action--lookaround action--disabled" arial-label="Unlook View"></button></a>
		<script src="{{ asset('user/js/classie.js') }}"></script>
		<script src="{{ asset('user/js/main.js') }}"></script>
	</body>
</html>


<script>
	function go_payment()
	{
		const query = 'input[name="check_seat"]:checked';
  	const selectedEls = document.querySelectorAll(query);
  
		let checkValues = "'";
		selectedEls.forEach((el) => {
			checkValues += el.value + "', '";
		});

		newCheckValues = checkValues.slice(0, -3);

		if (checkValues == ""){
			alert("좌석을 선택해주세요.");
		}else{
			//alert(newCheckValues);
			document.getElementById('check_seats_name').value = newCheckValues;   
			form1.action="{{route('paymentuser.index')}}";
			form1.submit();
			
		}
	}

</script>