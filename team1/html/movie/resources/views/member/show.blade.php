@extends('admin_main')
@section('content')

<?// // 연관배열 list를 row를 통해 출력.  List 11페이지 이름이랑 같아야함 				//$data['list'] = $this->getlist();
        $tel1 = trim(substr($row->tel,0,3));  // list는 50명 자료 row가 한사람 자료 
        $tel2 = trim(substr($row->tel,3,4));
        $tel3 = trim(substr($row->tel,7,4));
        $tel = $tel1 . "-" . $tel2 . "-" . $tel3;
		if ($row -> rank == 3)
		{
			$rank = "vip";
		}else if ($row -> rank == 2) {
			$rank = "골드";
		}else if ($row -> rank == 1) {
			$rank = "실버";
		}else{
			$rank = "브론즈";
		}
?>
   
     <div class="container-fluid">
	 
<br>
  <h1 class="h3 mb-2 text-gray-800">회원</h1>

   <div class="card shadow mb-4">
   <div class="card-header py-3">	
		  
<form name="form1" method="post" action="">
<table class="table table-bordered table-sm mymargin5">
    <tr>
        <td width="20%" class="mycolor2"> 이름</td>
        <td width="80%" align="left">{{$row -> name}}</td>
    </tr>
    <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 아이디</td>
        <td width="80%" align="left">{{$row -> uid}}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 비밀번호</td>
        <td width="80%" align="left">{{$row -> passwd}}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 이메일</td>
        <td width="80%" align="left">{{$row -> email}}</td>
    </tr>
		
	
	<tr>
        <td width="20%" class="mycolor2">전화번호</td>
        <td width="80%" align="left">{{$tel}}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 등급</td>
        <td width="80%" align="left">{{$rank}}</td>
    </tr>
	
	  <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 생일</td>
        <td width="80%" align="left">{{$row -> birthday}}</td>
    </tr>
	
	
	  <tr>
        <td width="20%" class="mycolor2"><font color="red">*</font> 주소</td>
        <td width="80%" align="left">{{$row -> juso}}</td>
    </tr>
	
	<tr>
        <td width="20%" class="mycolor2">사진</td>
        <td width="80%" align="left">
		
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
</div>
</div>

<div align="center">
    <a href="{{ route( 'member.edit', $row->id ) }}{{$tmp}}" class="btn btn-sm mycolor1">수정</a>
	<form action="{{ route('member.destroy', $row->id) }}"> <!-- 보안 공격 방지--> 
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
