@extends('admin_main')
@section('content')
   


 <div class="container-fluid">
  
<br>
  <h1 class="h3 mb-2 text-gray-800">예매</h1>

<script>
    function find_text()
    {
        form1.action="{{route('reserveds.index')}}";
        form1.submit();
    }
	
	$(function() {
		$('#text1').datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
	});
	
		$("#text1").on("dp.change", function(e) {
			find_text();
		});
	});
	
</script>


          <div class="card shadow mb-4">
          <div class="card-header py-3">			
<form name="form1"  method="get" action="" >
    <div class="row">
        <div class="col-3" align="left">            
				<div class="input-group  input-group-sm">
					<span class="input-group-text">이름</span>
					<input type="text" name="text1" value="{{$text1}}" class="form-control" placeholder="찾을 아이디?"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<button class="btn mycolor1" type="button"  onClick="find_text();">검색</button>
				</div>

        </div>
        <div class="col-9" align="right">           
               <a href="{{ route('reserveds.create') }}{{$tmp}}" class="btn btn-sm mycolor1">추가</a>
        </div>
    </div>
	  
</form>
 </div>

<!--
<form name="form1"  method="get" action="" >
    <div class="row">
        <div class="col-3" align="left">  
			<div class="d-inline-flex" >		
					<div class="input-group  input-group-sm date" id="text1">
					
					<input type="text" name="text1" size="10" value="{{$text1}}" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<div class="input-group-addon">
						<i class="far fa-calender-alt fa-lg"></i>
					</div>
				</div>
				</div>
        </div>
    </div>
</form>
-->

<table class="table  table-bordered  table-sm  table-hover mymargin5">
    <tr class="mycolor2">
        <td width="20%">회원아이디</td>
        <td width="20%">영화제목</td>
		  <td width="10%">상영지역</td>
		    <td width="10%">상영관</td>
			  <td width="10%">상영날짜</td>
			  <td width="15%">상영시간</td>
			   <td width="20%">좌석정보</td>
    </tr>
	
  @foreach ($list as $row)       

    <tr>
			<td align="left">
		<a href="{{route('reserveds.show', $row->id)}}{{$tmp}}">
			{{ $row->members_uid }}
			</a>
		</td>
        <td>{{ $row->movie_name }}</td>
		<td>{{ $row->location }}</td>
		<td>{{ $row->room_name }}</td>
			<td>{{ $row->playing_date }}</td>
				<td>{{ $row->playing_time }}</td>
						<td align="left">{{ $row->seat}}</td>
    </tr>
    @endforeach

  
</table>


<div class="row">
	<div class="col">
		{{$list->links('mypagination')}}
		</div>
	</div>
 	</div>
@endsection