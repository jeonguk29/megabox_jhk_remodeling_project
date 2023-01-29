@extends('main_nomenu')
@section('content')
   


 <div class="container-fluid">
  
<br>
  <h1 class="h3 mb-2 text-gray-800">예매정보 검색</h1>

<script>
    function find_text()
    {
        form1.action="{{route('findreserved.index')}}";
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
	function SendProduct(id, uid, movie, theater, room, date, time, price)
	{  
		opener.form1.reserveds_id.value = id;
		opener.form1.reserveds_uid.value = uid;
		opener.form1.reserveds_movie.value = movie; 
		opener.form1.reserveds_theater.value = theater; 
		opener.form1.reserveds_room.value = room;
		opener.form1.reserveds_date.value = date; 
		opener.form1.reserveds_time.value = time; 
		opener.form1.reserveds_price.value = price; 		// ①  
		self.close();
	}
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
		<a href="javascript:SendProduct({{$row -> id}}, '{{$row -> members_uid}}', '{{$row -> movie_name}}', '{{$row -> location}}', '{{$row -> room_name}}', '{{$row->playing_date}}', '{{$row->playing_time}}', {{$row->total}});">{{ $row->members_uid }}</a>
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