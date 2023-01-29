@extends('admin_main')
@section('content')

<br>
    <div class="card-body">
    <div class="table-responsive">
	
  <h1 class="h3 mb-2 text-gray-800">예매수정</h1>

	
<script>
	$(function() {
		
		$('#startwriteday42').datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
		});
		$("#endwriteday42") .datetimepicker({ 
			locale: "ko",
			format: "YYYY-MM-DD",
			defaultDate: moment()
		});
		
	});
	
	function select_product()
	{
		
		
		
		if(form1.total.value == null)
		{
			form1.total.value =0;
			form1.adult.value=0;
			form1.teen.value=0;
			form1.child.value=0;
			form1.disabledperson.value=0;
		}
		else
		{
			/*
			var sum;
			var sum2;
			var sum3;
			
			sum = form1.adult.value*20000;
			sum2 = form1.teen.value*15000;
			sum3 = form1.child.value*5000;
			
			form1.adult.value;
			form1.teen.value;
			form1.child.value;
			
			str = sum + sum2 + sum3
			form1.total.value = str
			*/
			
			form1.total.value=Number(20000 * form1.adult.value ) + Number(15000 * form1.teen.value) + Number(5000 * form1.child.value) + Number(5000 * form1.disabledperson.value);
			//form1.child.value=Number(form1.price42.value) * Number(form1.numo42.value);
		}
	}
	
	function cal_prices()
	{
		form1.total.value=Number(20000 * form1.adult.value ) + Number(15000 * form1.teen.value) + Number(5000 * form1.child.value) + Number(5000 * form1.disabledperson.value);
	}
	
	/*
	function select_product()
	{
		var str;
		str = form1.sel_products_id42.value;
		if(str=="")
		{
			form1.products_id42.value="";
			form1.price42.value="";
			form1.prices42.value="";
		}
		else
		{
			str = str.split("^^");
			form1.products_id42.value=str[0];
			form1.price42.value=str[1];
			form1.prices42.value=Number(form1.price42.value) * Number(form1.numo42.value);
		}
	}
	*/
	
	function find_product()
	{
		window.open("{{route('findproduct.index')}}","",
		"resizable=yes,scrollbars=yes, width=1200,height=1200");
	}
	
	
</script>

      <div class="card shadow mb-4">
          <div class="card-header py-3">

<form name="form1" method="post" action="{{route('reserveds.update', $row->id)}}{{$tmp}}"
  enctype="multipart/form-data">
@csrf
@method('PATCH')

<table class="table table-bordered table-sm mymargin5">

	
	   <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 회원아이디</td>
        <td width="80%" align="left">
		<div class="d-inline-flex">
		<input type="text" name="members_uid" value="{{$row->members_uid}}" class="form-control form-control-sm" readonly>
				<input type="button" value="제품찾기" onClick="find_product();"   class="btn btn-sm mycolor1">		
            </div>
			@error("members_uid") {{ $message }} @enderror
        </td>
    </tr>
	
	
	
	 <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매영화</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                         <select name="movies_id" class="form-control form-control-sm">
							<option value="" selected>선택하세요.</option>
						@foreach ($list as $row1)
						@if ( $row1->id == $row->movies_id )
							<option value="{{ $row1->id }}" selected>{{ $row1->name }}</option>
						@else
							<option value="{{ $row1->id }}">{{ $row1->name}}</option>
						@endif
					@endforeach
							</select>
            </div>
			@error("movies_id") {{ $message }} @enderror
        </td>
    </tr>
	
	
	
	
<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영시간</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                  <select name="dday" class="form-control form-control-sm">
					<option value="" selected>선택하세요.</option>
					@foreach ($list5 as $row3)
						@if ( $row3->id == $row->dday) )
							<option value="{{ $row3->id }}" selected>{{ $row3->playing_time }}</option>
						@else
							<option value="{{ $row3->id }}">{{ $row3->playing_time}}</option>
						@endif
					@endforeach
							</select>
            </div>
			@error("dday") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영날짜</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                  <select name="playings_id" class="form-control form-control-sm">
					<option value="" selected>선택하세요.</option>
					@foreach ($list4 as $row4)
						@if ( $row4->id == $row->playings_id )
							<option value="{{ $row4->id }}" selected>{{ $row4->playing_date }}</option>
						@else
							<option value="{{ $row4->id }}">{{ $row4->playing_date}}</option>
						@endif
					@endforeach
							</select>
            </div>
			@error("playings_id") {{ $message }} @enderror
        </td>
		
		
			<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 지점이름</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                  <select name="theaters_id" class="form-control form-control-sm">
					<option value="" selected>선택하세요.</option>
					@foreach ($list2 as $row1)
						@if ( $row1->id == $row->theaters_id )
							<option value="{{ $row1->id }}" selected>{{ $row1->location }}</option>
						@else
							<option value="{{ $row1->id }}">{{ $row1->location}}</option>
						@endif
					@endforeach
							</select>
            </div>
			@error("theaters_id") {{ $message }} @enderror
        </td>
    </tr>
	
		<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영관</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                  <select name="rooms_id" class="form-control form-control-sm">
					<option value="" selected>선택하세요.</option>
					@foreach ($list3 as $row2)
						@if ( $row2->id == $row->rooms_id )
							<option value="{{ $row2->id }}" selected>{{ $row2->name }}</option>
						@else
							<option value="{{ $row2->id }}">{{ $row2->name}}</option>
						@endif
					@endforeach
							</select>
            </div>
			@error("rooms_id") {{ $message }} @enderror
        </td>
    </tr>
	

    
	
	
		   <tr>
        <td width="20%" class="mycolor2">성인</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="adult" size="20" maxlength="20" value="{{$row -> adult}}"
                         class="form-control form-control-sm" onChange="cal_prices();">
            </div>
			</td>
			@error("adult") {{ $message }} @enderror
			</tr>	
			
			   <tr>
        <td width="20%" class="mycolor2">청소년</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="teen" size="20" maxlength="20" value="{{$row -> teen}}"
                         class="form-control form-control-sm" onChange="cal_prices();">
            </div>
			</td>
			@error("teen") {{ $message }} @enderror
			</tr>	
			
			   <tr>
        <td width="20%" class="mycolor2">아동</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="child" size="20" maxlength="20" value="{{$row -> child}}"
                         class="form-control form-control-sm" onChange="cal_prices();">
            </div>
			</td>
			@error("child") {{ $message }} @enderror
			</tr>	
			
			   <tr>
        <td width="20%" class="mycolor2">장애인</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="disabledperson" size="20" maxlength="20" value="{{$row -> disabledperson}}"
                         class="form-control form-control-sm" onChange="cal_prices();">
            </div>
			</td>
			@error("disabledperson") {{ $message }} @enderror
			</tr>	
			
				
			   <tr>
        <td width="20%" class="mycolor2">총금액</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="total" size="20" maxlength="20" value="{{$row -> total}}"
                         class="form-control form-control-sm" readonly>
            </div>
			</td>
			@error("total") {{ $message }} @enderror
			</tr>	
			
				   <tr>
        <td width="20%" class="mycolor2">좌석정보</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="seat" size="20" maxlength="20" value="{{$row -> seat}}"
                         class="form-control form-control-sm">
            </div>
			</td>
			@error("seat") {{ $message }} @enderror
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


 
@endsection
