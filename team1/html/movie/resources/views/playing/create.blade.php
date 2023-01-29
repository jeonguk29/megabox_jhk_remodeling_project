@extends('admin_main')
@section('content')

<br>

   <div class="card-body">
    <div class="table-responsive">
	
  <h1 class="h3 mb-2 text-gray-800">상영중 영화</h1>
  
  <script>
	$(function() {
		
		$('#playing_date').datetimepicker({
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
		  
<form name="form1" method="post" action="{{ route('playing.store') }}{{ $tmp }}" enctype="multipart/form-data">
@csrf
<table class="table table-bordered table-sm mymargin5">
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 예매영화</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                    <select name="movies_id" class="form-control form-control-sm">
					<option value="" selected>선택하세요.</option>
					@foreach ($list as $row1)
						@if ( $row1->id == old('movies_id') )
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
		<td width="20%" class="mycolor2"><font color="red">*</font>상영날짜</td>
        <td width="80%" align="left">
            <div class="form-inline">
				<div class="input-group input-group-sm date" id="playing_date">
					<input type="text" name="playing_date" size="10" value="{{old('playing_date')}}" class="form-control form-control-sm">
					<div class="input-group-append">
						<div class="input-group-text">
							<div class="input-group-addon">
								<i class="far fa-calendar-alt fa-lg"></i>
							</div>
						</div>
					</div>
				</div>
            </div>
			@error("playing_date") {{ $message }} @enderror
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