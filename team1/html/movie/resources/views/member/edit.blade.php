@extends('admin_main')
@section('content')

<br>
<div class="alert mycolor1" role="alert">회원</div>

<script>


	$(function() {
		$('#birthday').datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
	});
	});
	
    function find_text()
    {
        form1.action="#";
        form1.submit();
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
<form name="form1" method="post" action="{{route('member.update', $row->id)}}{{$tmp}}">
@csrf
@method('PATCH')

<table class="table table-bordered table-sm mymargin5">
    <tr>
        <td width="20%" class="mycolor2"> 번호</td>
        <td width="80%" align="left">{{$row->id}}</td>
    </tr>
    <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 이름</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="name" size="20" maxlength="20" value="{{$row -> name}}"
                         class="form-control form-control-sm">
            </div>
			@error("name") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 아이디</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="uid" size="20" maxlength="20" value="{{$row -> uid}}"
                         class="form-control form-control-sm">
            </div>
			@error("uid") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 비밀번호</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="passwd" size="20" maxlength="20" value="{{$row -> passwd}}"
                         class="form-control form-control-sm">
            </div>
			@error("passwd") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 이메일</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="email" size="20" maxlength="20" value="{{$row -> email}}"
                         class="form-control form-control-sm">
            </div>
			@error("email") {{ $message }} @enderror
        </td>
    </tr>
	
	<?
	$tel1 = trim(substr($row->tel,0,3));
	$tel2 = trim(substr($row->tel,3,4));
	$tel3 = trim(substr($row->tel,7,4));
	
	?>
	
	<tr>
        <td width="20%" class="mycolor2">전화</td>
        <td width="80%" align="left">
            <div class="d-inline-flex">
                <input  type="text" name="tel1" size="3" maxlength="3" value="{{$tel1}}"
                         class="form-control form-control-sm"> -
				<input  type="text" name="tel2" size="4" maxlength="4" value="{{$tel2}}"
                         class="form-control form-control-sm"> -
				<input  type="text" name="tel3" size="4" maxlength="4" value="{{$tel3}}"
                         class="form-control form-control-sm">
            </div>
        </td>
    </tr>
	
	
	
	<tr>
        <td width="20%" class="mycolor2">등급</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
			@if($row->rank==3)
				<input  type="radio" name="rank" value="0" >&nbsp;브론즈&nbsp;&nbsp;
                <input  type="radio" name="rank" value="1">&nbsp;실버&nbsp;&nbsp;
				<input  type="radio" name="rank" value="2">&nbsp;골드&nbsp;&nbsp;
				<input  type="radio" name="rank" value="3" checked>&nbsp;VIP&nbsp;&nbsp;
			@elseif($row->rank==2)
				<input  type="radio" name="rank" value="0" >&nbsp;브론즈&nbsp;&nbsp;
                <input  type="radio" name="rank" value="1">&nbsp;실버&nbsp;&nbsp;
				<input  type="radio" name="rank" value="2" checked>&nbsp;골드&nbsp;&nbsp;
				<input  type="radio" name="rank" value="3">&nbsp;VIP&nbsp;&nbsp;
			@elseif($row->rank==1)
				<input  type="radio" name="rank" value="0" >&nbsp;브론즈&nbsp;&nbsp;
                <input  type="radio" name="rank" value="1"checked>&nbsp;실버&nbsp;&nbsp;
				<input  type="radio" name="rank" value="2">&nbsp;골드&nbsp;&nbsp;
				<input  type="radio" name="rank" value="3">&nbsp;VIP&nbsp;&nbsp;
			@else
				<input  type="radio" name="rank" value="0"checked>&nbsp;브론즈&nbsp;&nbsp;
                <input  type="radio" name="rank" value="1">&nbsp;실버&nbsp;&nbsp;
				<input  type="radio" name="rank" value="2">&nbsp;골드&nbsp;&nbsp;
				<input  type="radio" name="rank" value="3">&nbsp;VIP&nbsp;&nbsp;
				
				
            @endif
			</div>
            </div>
        </td>
    </tr>

	 <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 생일</td>
        <td width="80%" align="left">
		   <div class="d-inline-flex">
						<div class="input-group  input-group-sm date" id="birthday">
							 <input type="text" name="birthday" size="10" value="{{$row->birthday}}"
					 class="form-control form-control-sm">
			
					<div class="input-group-text">
						<div class="input-group-addon">
							<i class="far fa-calendar-alt fa-lg"></i>
						</div>
					</div>
					</div>
				</div>
			@error("birthday") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 주소</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="text" name="juso" size="20" maxlength="20" value="{{$row -> juso}}"
                         class="form-control form-control-sm">
            </div>
			@error("juso") {{ $message }} @enderror
        </td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">사진</td>
        <td width="80%" align="left">
            <div class="fd-inline-flex">
                <input  type="file" name="pic" size="20" maxlength="20" value=""
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
	</tr>
	
</table>


<div align="center">
	<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
    <input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
</div>
</form>

    </div>
</body>
</html>

 
@endsection
