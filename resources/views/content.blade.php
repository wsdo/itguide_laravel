@extends('index')
@section('content')
	<h1>这是内容</h1>
<form method="post" action="/add">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
   	<div>
		标题<input type="text" class="form-control" placeholder="Text input" name="title">
	</div>
		
	<div class="">
		内容 <textarea class="form-control" rows="3" name="text"></textarea>
	</div>
	
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop

	<div class="row">
			<h1>这是内容</h1>
<form method="post" action="/admin/article/add">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
   	<div class="col-md-3">
		目录 <input type="text" class="form-control" placeholder="Text input" name="name">
	</div>
	<div class="col-md-9">
		
	</div>
	<div class="col-md-3">
		选择节点：
		<select class="form-control" name="pid">
		  <option>0</option>
		  @foreach ($categorys as $category)
			<option value="{{$category->pid}}"> {{$category->name}} </option>
		  @endforeach
		</select>
	</div>
	<div class="col-md-8">
		
	</div>
	<div class="col-md-3">
		<button type="submit" class="btn btn-default">提交</button>
	</div>
  	
</form>
</div>