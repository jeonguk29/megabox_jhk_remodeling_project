@extends('admin_main')
@section('content')


<div class="container-fluid">
  
<br>
  <h1 class="h3 mb-2 text-gray-800">상영관정보</h1>
  
  <script>
    function find_text()
    {
        form1.action="{{route('room.index')}}";
        form1.submit();
    }
	
</script>

          <div class="card shadow mb-4">
<div class="card-header py-3">			
<form name="form1"  method="get" action="" >
    <div class="row">
        <div class="col-3" align="left">            
				<div class="input-group  input-group-sm">
					<span class="input-group-text">상영관</span>
					<input type="text" name="text1" value="" class="form-control" placeholder="찾을 상영관?"  onKeydown="if (event.keyCode == 13) { find_text(); }" >
					<button class="btn mycolor1" type="button"  onClick="find_text();">검색</button>
				</div>

        </div>
        <div class="col-9" align="right">           
               <a href="{{ route('room.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>
        </div>
    </div>
	  
</form>
</div>


    <div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable">
    <tr class="mycolor2">
        <td width="100%">상영관</td>
    </tr>
	@foreach ($list as $row)
    <tr>
		  <td><a href="{{ route('room.show', $row->id) }}{ $tmp }}">{{ $row->name }}</a></td>
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