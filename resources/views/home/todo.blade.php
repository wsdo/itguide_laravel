@extends('home.master')

@section('content')
<div class="todo">
	

<div class="row-flex">
	<div class="col-4">
		
	</div>
 <input type="text" class="form-control" placeholder="Text input">
</div>
<div class="panel panel-default">
  <div class="panel-heading">便签</div>
@foreach ($todo as $todo)
	<div class="row panel-body">
		<div class="col-3">{{$todo->id}}</div>
		<div class="col-3" >{{$todo->title}}</div>
		<div class="col-2">
			<button data-id='{{$todo->id}}' type="button" id="su" class="btn btn-info">搞定</button>
		</div>
		<div class="col-2">
			<button type="button" id="del" data-id='{{$todo->id}}' class="btn btn-warning">删除</button>
		</div>
	</div>
@endforeach
<div class="list">
	
</div>

</div>
</div>
@stop