@extends('admin_main')
@section('content')

     <div class="container-fluid">
	 
<br>
  <h1 class="h3 mb-2 text-gray-800">예매</h1>

   <div class="card shadow mb-4">
   <div class="card-header py-3">	

<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
    <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 회원 아이디</td>
        <td width="80%" align="left">{{$row -> members_uid}}</td>
    </tr>
    <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매영화</td>
        <td width="80%" align="left">{{$row -> movie_name}}</td>
    </tr>
	   <tr>
        <td width="20%" class="mycolor2">상영지역</td>
        <td width="80%" align="left">{{$row -> location}}</td>
    </tr>
		   <tr>
        <td width="20%" class="mycolor2">상영관</td>
        <td width="80%" align="left">{{$row -> room_name}}</td>
    </tr>
		   <tr>
        <td width="20%" class="mycolor2">예매날짜</td>
        <td width="80%" align="left">{{$row -> playing_date}}</td>
    </tr>
		   <tr>
        <td width="20%" class="mycolor2">상영시간</td>
        <td width="80%" align="left">{{$row -> playing_time}}
	
		</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">성인</td>
        <td width="80%" align="left">{{$row -> adult}}
		</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">청소년</td>
        <td width="80%" align="left">{{$row -> teen}}
		</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">아동</td>
        <td width="80%" align="left">{{$row -> child}}
		</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">장애인</td>
        <td width="80%" align="left">{{$row -> disabledperson}}
		</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">총 금액</td>
        <td width="80%" align="left">{{$row -> total}}
		</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">좌석정보</td>
        <td width="80%" align="left">{{$row -> seat}}
		</td>
    </tr>
	
	
</table>
</div>
</div>

<div align="center">
    <a href="{{ route( 'reserveds.edit', $row->id ) }}{{$tmp}}" class="btn btn-sm mycolor1">수정</a>
	<form action="{{ route('reserveds.destroy', $row->id) }}"> <!-- 보안 공격 방지--> 
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm mycolor1" 
              onClick="return confirm('삭제할까요 ?');">삭제</button> &nbsp;
</form>

    <input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
</div>
</form>
</div>

   
@endsection