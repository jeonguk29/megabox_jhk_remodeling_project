@extends('user_main')
@section('content')
 
 <main data-scroll-container>
  <div class="wrapper">
    <div class="container">
      <div class="title-box">
        <h1 class="title-text">스토어</h1>
      </div>
		  
		  <div class="store-wrapper">
        <div class="store-active">
          <div class="combo-container">
		  	  	@foreach ($list as $row)
		          <div class="combo">
			          @if($row->pic)   
			            <img src="{{ asset('storage/product_img/' . $row->pic) }}"
					          width="148" height="210.75" class="img-fluid img-thumbnail margin5">
			          @else        
				          <img src=" " width="100" height="100" class="img-fluid img-thumbnail margin5">
			          @endif
						    <div class="combo-info">
                  <div class="sort">{{ $row->name }}</div>
                  <div class="details">{{ $row->subname }}</div>
                  <div class="price">{{ $row->price }}</div>
                </div>
			        </div>
            @endforeach
          </div>
        </div>
      </div>
	  <div class="store-wrapper">
        <div class="store-active">
          <div class="combo-container">
		        <div class="combo">   
			            <img src="storage/product_img/nacho.jpg"
					          width="148" height="210.75" class="img-fluid img-thumbnail margin5">
				<div class="combo-info">
                  <div class="sort">칠리치즈나쵸</div>
                  <div class="details">칠리소스와 치즈소스를 곁들인 나쵸</div>
                  <div class="price">4900</div>
                </div>
			   </div>
			   <div class="combo">   
			            <img src="storage/product_img/hotdog.jpg"
					          width="148" height="210.75" class="img-fluid img-thumbnail margin5">
				<div class="combo-info">
                  <div class="sort">핫도그</div>
                  <div class="details">핫도그</div>
                  <div class="price">4500</div>
                </div>
			   </div>
			   <div class="combo">   
			            <img src="storage/product_img/frenchfries.jpg"
					          width="148" height="210.75" class="img-fluid img-thumbnail margin5">
				<div class="combo-info">
                  <div class="sort">감자튀김</div>
                  <div class="details">감자튀김</div>
                  <div class="price">4000</div>
                </div>
			   </div>
			   <div class="combo">   
			            <img src="storage/product_img/popcornM.jpg"
					          width="148" height="210.75" class="img-fluid img-thumbnail margin5">
				<div class="combo-info">
                  <div class="sort">팝콘</div>
                  <div class="details">팝콘단품</div>
                  <div class="price">6000</div>
                </div>
			   </div>
			   <div class="combo">   
			            <img src="storage/product_img/colaM.jpg"
					          width="148" height="210.75" class="img-fluid img-thumbnail margin5">
				<div class="combo-info">
                  <div class="sort">탄산음료</div>
                  <div class="details">탄산음료단품</div>
                  <div class="price">2000</div>
                </div>
			   </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="{{ asset('user/js/tab.js')}}"></script>
@endsection