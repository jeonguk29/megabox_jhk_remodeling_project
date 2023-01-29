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
		  
<form name="form1" method="post" action="{{ route('movie.store') }}{{ $tmp }}" enctype="multipart/form-data">
@csrf
<table class="table table-bordered table-sm mymargin5">
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font>제목</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="name" size="20" maxlength="20" value="{{ old('name') }}"
                         class="form-control form-control-sm">
            </div>
			@error("name") {{ $message }} @enderror
        </td>
    </tr>
    <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영등급</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="rating" size="20" maxlength="20" value="{{ old('rating') }}"
                         class="form-control form-control-sm">
            </div>
			@error("rating") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 감독</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="director" size="20" maxlength="20" value="{{ old('director') }}"
                         class="form-control form-control-sm">
            </div>
			@error("director") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 상영시간</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="playingtime" size="20" maxlength="20" value="{{ old('playingtime') }}"
                         class="form-control form-control-sm">
            </div>
			@error("playingtime") {{ $message }} @enderror
        </td>
    </tr>	
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 개봉일자</td>
        <td width="80%" align="left">
            <div class="form-inline">
				<div class="input-group input-group-sm date" id="release_date">
					<input type="text" name="release_date" size="10" value="{{old('release_date')}}" class="form-control form-control-sm">
					<div class="input-group-append">
						<div class="input-group-text">
							<div class="input-group-addon">
								<i class="far fa-calendar-alt fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
            </div>
			@error("release_date") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 배급사</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="publisher" size="20" maxlength="20" value="{{ old('publisher') }}"
                         class="form-control form-control-sm">
            </div>
			@error("publisher") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"> 동영상</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="video" size="1000" maxlength="1000" value="{{ old('video') }}"
                         class="form-control form-control-sm">
            </div>
        </td>
    </tr>
	

 
	
	<tr>
        <td width="20%" class="mycolor2"> 사진1</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="file" name="pic1" size="255" maxlength="255" value=""
                         class="form-control form-control-sm">
            </div>
        </td>
    </tr>
	
	
	<tr>
        <td width="20%" class="mycolor2"> 사진2</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="file" name="pic2" size="255" maxlength="255" value=""
                         class="form-control form-control-sm">
            </div>
        </td>
    </tr>
	

	
	<tr>
        <td width="20%" class="mycolor2"> 사진3</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="file" name="pic3" size="255" maxlength="255" value=""
                         class="form-control form-control-sm">
            </div>
        </td>
    </tr>
	<tr>
			<td width="20%" class="mycolor2"><font color="red"></font> 설명</td>
			<td width="80%" align="left">
				<div class="d-inline-flex"><textarea name="description" rows=5 cols=100></textarea></div>
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