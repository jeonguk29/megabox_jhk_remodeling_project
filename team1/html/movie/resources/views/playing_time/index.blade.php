@extends('admin_main')
@section('content')


<div class="container-fluid">
  
<br>
  <h1 class="h3 mb-2 text-gray-800">상영중 영화</h1>
  
  <script>
    function find_text()
    {
        form1.action="{{route('playing_time.index')}}";
        form1.submit();
    }
	
</script>

          <div class="card shadow mb-4">
<div class="card-header py-3">			
<form name="form1"  method="get" action="" >
    <div class="row">
        <div class="col-3" align="left">            
				<div class="input-group  input-group-sm">
					<span class="input-group-text">제목</span>
					<input type="text" name="text1" value="" class="form-control" placeholder="찾을 영화?"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<button class="btn mycolor1" type="button"  onClick="find_text();">검색</button>
				</div>

        </div>
        <div class="col-9" align="right">           
               <a href="{{ route('playing_time.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>
        </div>
    </div>
	  
</form>
</div>


    <div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable">
    <tr class="mycolor2">
        <td width="50%">영화제목</td>
		<td width="50%">상영시간</td>
    </tr>
	@foreach ($list as $row)
    <tr>
		<td><a href="{{ route('playing_time.show', $row->id) }}{ $tmp }}">{{ $row->movie_name }}</a></td>
		<td>{{ $row->playing_time }}</td>
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