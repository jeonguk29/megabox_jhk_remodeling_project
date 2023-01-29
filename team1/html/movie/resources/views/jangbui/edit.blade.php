@extends('admin_main')
@section('content')

<br>

   <div class="card-body">
    <div class="table-responsive">
	
  <h1 class="h3 mb-2 text-gray-800">구매내역</h1>
  
  <script>
		function find_reserved()
		{
			window.open("{{route('findreserved.index')}}","",
			"resizable=yes,scrollbars=yes, width=1200,height=1200");
		}
		$(function() {
			$("#purchase_date").datetimepicker({
				locale: "ko",
				format: "YYYY-MM-DD",
				defaultDate: moment()
			});
		});
		function select_food()
		{
			var str;
			str = form1.sel_food_id.value;
			if (str=="")
			{
				form1.food_id.value = "";
				form1.food_price.value = "";
				form1.total_price.value = "";
			}
			else
			{
				str = str.split("^^");
				form1.food_id.value = str[0];
				form1.food_price.value = str[1];
				form1.total_price.value = Number(form1.reserveds_price.value) + Number(form1.food_price.value) + Number(form1.drinks_price.value);
			}
		}
		function select_drink()
		{
			var str1;
			str1 = form1.sel_drinks_id.value;
			if (str1=="")
			{
				form1.drinks_id.value = "";
				form1.drinks_price.value = "";
				form1.total_price.value = "";
			}
			else
			{
				str1 = str1.split("^^");
				form1.drinks_id.value = str1[0];
				form1.drinks_price.value = str1[1];
				form1.total_price.value = Number(form1.reserveds_price.value) + Number(form1.drinks_price.value) + Number(form1.food_price.value);
			}
		}
		function cal_prices()
		{
			form1.total_price.value = Number(form1.reserveds_price.value) + Number(form1.drinks_price.value) + Number(form1.food_price.value);
		}
	</script>

<!--
<form name="form1" method="post" action="" >
    <div class="row">
        <div class="col-3" align="left">            
				<div class="input-group  input-group-sm">
					<span class="input-group-text">이름</span>
					<input type="text" name="text1" value="" class="form-control" placeholder="찾을 이름?"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<button class="btn mycolor1" type="button"  onClick="find_text();">검색</button>
				</div>
        </div>
        <div class="col-9" align="right">           
               <a href="#" class="btn btn-sm mycolor1">추가</a>
        </div>
    </div>
</form>
-->
       <div class="card shadow mb-4">
          <div class="card-header py-3">
		  
<form name="form1" method="post" action="{{ route('jangbui.update', $row->id) }}{{ $tmp }}" enctype="multipart/form-data">
@csrf
@method('PATCH')
<table class="table table-bordered table-sm mymargin5">
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매한 회원</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="hidden" name="reserveds_id" value="{{ $row->reserveds_id }}" class="form-control form-control-sm" readonly>
				<input type="text" name="reserveds_uid" value="{{ $row->members_uid }}" class="form-control form-control-sm" readonly> &nbsp;
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
				<input type="button" value="제품찾기" onClick="find_reserved();"   class="btn btn-sm mycolor1" >					
            </div>
			@error("reserveds_id") {{ $message }} @enderror
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매영화</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="text" name="reserveds_movie" value="{{ $row->movie_name }}" class="form-control form-control-sm" readonly>
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
            </div>
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매한 지점</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="text" name="reserveds_theater" value="{{ $row->location }}" class="form-control form-control-sm" readonly>
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
            </div>
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매한 상영관</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="text" name="reserveds_room" value="{{ $row->room_name }}" class="form-control form-control-sm" readonly>
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
            </div>
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매날짜</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="text" name="reserveds_date" value="{{ $row->playing_date }}" class="form-control form-control-sm" readonly>
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
            </div>
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매시간</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="text" name="reserveds_time" value="{{ $row->playing_time }}" class="form-control form-control-sm" readonly>
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
            </div>
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 영화금액</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
				<input type="text" name="reserveds_price" value="{{ $row->total }}" class="form-control form-control-sm" readonly onChange="cal_prices();">
				<!--<input type="text" name="product_name42" value="" class="form-control form-control-sm" readonly>&nbsp;-->
            </div>
        </td>
	</tr>
	<tr>
		<td width="20%" class="mycolor2">음식</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
				<input type="hidden" name="food_id" value="{{ old('food_id') }}">
				<input type="hidden" name="food_price" value="{{ old('food_price') }}">
                <select name="sel_food_id" class="form-control form-control-sm" onChange="select_food();">
					<option value="" selected>선택하세요.</option>
					@foreach ($list as $row1)
					<?
						$t1="$row1->id^^$row1->price";  // 제품번호^^단가
						$t2="$row1->name($row1->price)"; // 제품이름(단가)
					?>
						@if ( $row1->id == $row->food_id )
							<option value="{{ $t1 }}" selected>{{ $t2 }}</option>
						@else
							<option value="{{ $t1 }}">{{ $t2 }}</option>
						@endif
					@endforeach
				</select>
            </div>
        </td>
	</tr>
	<tr>
		<td width="20%" class="mycolor2">음료</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
			<input type="hidden" name="drinks_id" value="{{ old('drinks_id') }}">
			<input type="hidden" name="drinks_price" value="{{ old('drinks_price') }}">
                <select name="sel_drinks_id" class="form-control form-control-sm" onChange="select_drink();">
					<option value="" selected>선택하세요.</option>
					@foreach ($list1 as $row2)
					<?
						$t1="$row2->id^^$row2->price";  // 제품번호^^단가
						$t2="$row2->name($row2->price)"; // 제품이름(단가)
					?>
						@if ( $row2->id == $row->drinks_id )
							<option value="{{ $t1 }}" selected>{{ $t2 }}</option>
						@else
							<option value="{{ $t1 }}">{{ $t2 }}</option>
						@endif
					@endforeach
				</select>
            </div>
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 금액</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="total_price" size="20" maxlength="20" value="{{ $row->total_price }}"
                         class="form-control form-control-sm">
            </div>
				@error("total_price") {{ $message }} @enderror
        </td>
    </tr>
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 날짜</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <div class="d-inline-flex">
					<div class="input-group  input-group-sm date" id="purchase_date">
						<input  type="text" name="purchase_date" size="10" value="{{ old('purchase_date') }}" class="form-control form-control-sm">
						<span class="input-group-text">
							<div class="input-group-addon">
								<i class="far fa-calendar-alt fa-lg"></i>
							</div>
						</span>
					</div>	
				</div>
				@error("purchase_date") {{ $message }} @enderror
            </div>
        </td>
    </tr>
</table>
 

<div align="center">
	<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
    <input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
</div>
</form>
    </div>
    </div>


	    </div>
 	    </div>
@endsection