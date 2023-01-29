@extends('admin_main')
@section('content')

<br>

   <div class="card-body">
    <div class="table-responsive">
	
  <h1 class="h3 mb-2 text-gray-800">병사</h1>

<script>
	$(function() {
		
		$('#release_date').datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
		});
		
	});
	
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
		  
<form name="form1" method="post" action="" enctype="multipart/form-data">
@csrf
<table class="table table-bordered table-sm mymargin5">
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font>제목</td>
        <td width="80%" align="left">{{ $row->name }}</td>
    </tr>
    <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영등급</td>
        <td width="80%" align="left">{{ $row->rating }}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 감독</td>
        <td width="80%" align="left">{{ $row->director }}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영시간</td>
        <td width="80%" align="left">{{ $row->playingtime }}</td>
    </tr>	
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 개봉일자</td>
        <td width="80%" align="left">{{ $row->release_date }}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 배급사</td>
        <td width="80%" align="left">{{ $row->publisher }}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"> 동영상</td>
        <td width="80%" align="left">{{ $row->video }}</td>
    </tr>
	

 
	
	<tr>
        <td width="20%" class="mycolor2"> 사진1</td>
        <td width="80%" align="left">
		
				<b>파일이름</b> : <?=$row->pic1 ?> <br>
	
			@if($row->pic1)   
			   <img src="{{ asset('storage/product_img/' . $row->pic1) }}"
					 width="200" class="img-fluid img-thumbnail margin5">
			@else        
				<img src=" " width="200" height="150" class="img-fluid img-thumbnail margin5">
			@endif
		</td>
    </tr>
	
	
	<tr>
        <td width="20%" class="mycolor2"> 사진2</td>
        <td width="80%" align="left">
		
				<b>파일이름</b> : <?=$row->pic2 ?> <br>
	
			@if($row->pic2)   
			   <img src="{{ asset('storage/product_img/' . $row->pic2) }}"
					 width="200" class="img-fluid img-thumbnail margin5">
			@else        
				<img src=" " width="200" height="150" class="img-fluid img-thumbnail margin5">
			@endif
		</td>
    </tr>
	

	
	<tr>
        <td width="20%" class="mycolor2"> 사진3</td>
        <td width="80%" align="left">
		
				<b>파일이름</b> : <?=$row->pic3 ?> <br>
	
			@if($row->pic3)   
			   <img src="{{ asset('storage/product_img/' . $row->pic3) }}"
					 width="200" class="img-fluid img-thumbnail margin5">
			@else        
				<img src=" " width="200" height="150" class="img-fluid img-thumbnail margin5">
			@endif
		</td>
    </tr>
	<tr>
			<td width="20%" class="mycolor2"><font color="red"></font> 설명</td>
			<td width="80%" align="left">
				<div class="d-inline-flex">{{ $row->description }}</div>
			</td>
	</tr>

</table>
 

<div align="center">
	<a href="{{ route( 'movie.edit', $row->id ) }}{{$tmp}}" class="btn btn-sm mycolor1">수정</a>
	<form action="{{ route('movie.destroy', $row->id) }}"> <!-- 보안 공격 방지--> 
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm mycolor1" 
              onClick="return confirm('삭제할까요 ?');">삭제</button> &nbsp;
	</form>
    <input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
</div>
</form>
    </div>
    </div>


	    </div>
 	    </div>
@endsection