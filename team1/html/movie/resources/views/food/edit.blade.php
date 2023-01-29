@extends('admin_main')
@section('content')

<br>

   <div class="card-body">
    <div class="table-responsive">
	
  <h1 class="h3 mb-2 text-gray-800">음식</h1>

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
		  
<form name="form1" method="post" action="{{ route('food.update', $row->id) }}{{ $tmp }}" enctype="multipart/form-data">
@csrf
@method('PATCH')
<table class="table table-bordered table-sm mymargin5">
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font>이름</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="name" size="20" maxlength="20" value="{{ $row->name }}"
                         class="form-control form-control-sm">
            </div>
			@error("name") {{ $message }} @enderror
        </td>
	</tr>
		<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font>상세내용</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="subname" size="20" maxlength="20" value="{{ $row->subname }}"
                         class="form-control form-control-sm">
            </div>
			@error("subname") {{ $message }} @enderror
        </td>
	</tr>
	<tr>
		<td width="20%" class="mycolor2"><font color="red">*</font>가격</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="price" size="20" maxlength="20" value="{{ $row->price }}"
                         class="form-control form-control-sm">
            </div>
			@error("price") {{ $message }} @enderror
        </td>
	</tr>
	<tr>
        <td width="20%" class="mycolor2"> 사진</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="file" name="pic" size="255" maxlength="255" value=""
                         class="form-control form-control-sm">
            </div>
			<br><br>
		<b>파일이름</b> : <?=$row->pic ?> <br>
	
			@if($row->pic)   
			   <img src="{{ asset('storage/product_img/' . $row->pic) }}"
					 width="200" class="img-fluid img-thumbnail margin5">
			@else        
				<img src=" " width="200" height="150" class="img-fluid img-thumbnail margin5">
			@endif
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