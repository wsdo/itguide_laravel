@extends('home.master')

@section('content')
<div class="ui vertical menu">
@foreach ( $contents as $content )
  <div class="item">
    <div class="header">{{ $content->title }}</div>
    <div class="menu">
      <a class="item">Enterprise</a>
      <a class="item">消费者</a>
    </div>
  </div>
@endforeach
</div>
@stop