@extends('admin_main')
@section('content')


<div class="container-fluid">
  
<br>
  <h1 class="h3 mb-2 text-gray-800">구매내역</h1>
  
  <script>
    function find_text()
    {
        form1.action="{{route('jangbui.index')}}";
        form1.submit();
    }
	
</script>

          <div class="card shadow mb-4">
<div class="card-header py-3">			
<form name="form1"  method="get" action="" >
    <div class="row">
        <div class="col-3" align="left">            
				<div class="input-group  input-group-sm">
					<span class="input-group-text">회원아이디</span>
					<input type="text" name="text1" value="" class="form-control" placeholder="찾을 아이디?"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<button class="btn mycolor1" type="button"  onClick="find_text();">검색</button>
				</div>

        </div>
        <div class="col-9" align="right">           
               <a href="{{ route('jangbui.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>
        </div>
    </div>
	  
</form>
</div>


    <div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable">
    <tr class="mycolor2">
        <td width="25%">회원아이디</td>
		<td width="25%">영화제목</td>
		<td width="25%">결제날짜</td>
		<td width="25%">가격</td>
    </tr>
	@foreach ($list as $row)
    <tr>
		<td><a href="{{ route('jangbui.show', $row->id) }}{{ $tmp }}">{{ $row->uid }}</a></td>
		<td>{{ $row->movie_name }}</td>
		<td>{{ $row->purchase_date }}</td>
		<td>{{ number_format($row->total_price) }}</td>
    </tr>
	@endforeach

  
</table>


<div class="row">
	<div class="col">
	{{$list->links('mypagination')}}
		</div>
	</div>
</div>
</div>
</div>


@endsection