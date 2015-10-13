@extends('home.master')

@section('content')

	<div class="container">
    <nav class="navbar">
		<div class="row-flex">
			<div class="col-4 brand">
				<a href="/" title="首页" rel="home" id="logo">
		          ITguide.cn
		        </a>
			</div>
	        <div class="col-18 nav-collapse">
	            <ul>
	                <li><a class="page-scroll" href="page">Man</a></li>
	                <li><a class="page-scroll" href="page">Features</a></li>
	                <li><a class="page-scroll" href="#team">Team</a></li>
	                <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
	            </ul>
	        </div>
        </div>
    </nav>
</div>
@stop