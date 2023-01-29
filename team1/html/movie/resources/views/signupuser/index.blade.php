<!DOCTYPE html>
<html lang="ko">

<head>
	<link rel="stylesheet" href="{{ asset('user/css/signup2.css')}}">
</head>
<body>
<script>
$(function() {

$('#birthday').datetimepicker({
locale: 'ko',
format: 'YYYY-MM-DD',
defaultDate: moment()
});


});

</script>
<form name="form1" method="post" action="{{route('signupuser.store')}}" enctype="multipart/form-data">
@csrf
    <div class="signupwrap">
        <div class="signup">
            <h2>회원가입</h2>
            <div class="login_sns">
            </div>
			
			<div class="login_id">
                <h4>이름</h4>
                <input type="text" name="name" value="{{old('name')}}" id="" placeholder="Name">
				@error("name") {{ $message }} @enderror
            </div>
			
		
			<div class="login_id">
                <h4>생년월일</h4>
                <input type="text" name="birth" value="{{old('birth')}}" id="" placeholder="ex) 2000-01-01">
				@error("birth") {{ $message }} @enderror
            </div>
			
            <div class="login_id">
                <h4>아이디</h4>
                <input type="text" name="uid" value="{{old('uid')}}" id="" placeholder="ID">
				@error("uid") {{ $message }} @enderror
            </div>
			
            <div class="login_id">
                <h4>비밀번호</h4>
                <input type="password" name="pw" value="{{old('pw')}}" id="" placeholder="Password">
				@error("pw") {{ $message }} @enderror
            </div>
			
			<div class="login_id">
                <h4>이메일</h4>
                <input type="text" name="email" value="{{old('email')}}" id="" placeholder="Email">
				@error("email") {{ $message }} @enderror
            </div>
			
			<div class="login_id">
                <h4>전화번호</h4>
                <input type="text" name="tel" value="{{old('tel')}}" id="" placeholder="Phone Number">
				@error("tel") {{ $message }} @enderror
            </div>
			
			<div class="login_id">
                <h4>주소</h4>
                <input type="text" name="ad" value="{{old('ad')}}" id="" placeholder="Address">
				@error("ad") {{ $message }} @enderror
            </div>	
			
            <div class="submit">
                <input type="submit" value="회원가입">
            </div>
        </div>
    </div>
</form>
</body>
</html>