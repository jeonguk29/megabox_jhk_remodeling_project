@extends('admin_main')
@section('content')


<div class="container-fluid">
  
<br>
  <h1 class="h3 mb-2 text-gray-800">영화</h1>
  
  <script>
    function find_text()
    {
        form1.action="{{route('movie.index')}}";
        form1.submit();
    }
	
	
	$(function() {
		$('#text1').datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
	});
	
		$("#text1").on("dp.change", function(e) {
			find_text();
		});
	});
	
</script>

          <div class="card shadow mb-4">
<div class="card-header py-3">			
<form name="form1"  method="get" action="" >
    <div class="row">
        <div class="col-3" align="left">            
				<div class="input-group  input-group-sm">
					<span class="input-group-text">이름</span>
					<input type="text" name="text1" value="" class="form-control" placeholder="찾을 이름?"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<button class="btn mycolor1" type="button"  onClick="find_text();">검색</button>
				</div>

        </div>
        <div class="col-9" align="right">           
               <a href="{{ route('movie.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>
        </div>
    </div>
	  
</form>
</div>


    <div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable">
    <tr class="mycolor2">
        <td width="25%">이름</td>
        <td width="25%">등급</td>
        <td width="25%">감독</td>
		<td width="25%">개봉일자</td>
    </tr>
	@foreach ($list as $row)
    <tr>
		  <td><a href="{{ route('movie.show', $row->id) }}{{ $tmp }}">{{ $row->name }}</a></td>
		  <td>{{ $row->rating }}</td>
		  <td>{{ $row->director }}</td>
		  <td>{{ $row->release_date }}</td>
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