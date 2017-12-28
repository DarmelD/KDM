@extends('layouts.base')
@section('styles')
@parent
    <!-- Custom styles for this template -->
    <link href="css/my.css" rel="stylesheet">
@endsection
@section('content')
           <div class="container">
		    <h2>{{$product->name}}</h2>
        
			@if($one->picture)
	<img src="{{asset('/uploads/thumb/'.$one->picture)}}" class="pic" />
	@else
		<img src ="/no_photo.png" class="pic" />
	@endif
	
			<h1>	{!!$product->body!!}</h1>
			<h3>	{!!$product->price!!}</h3>
			<h4>	{!!$product->vip!!}</h4>
		    <h5>    {!!$product->status!!}</h5>
			<h6>	{!!$product->small_description!!}</h6>
			<h8>	{!!$product->currency!!}</h8>
			<div class="col-md-12">
			Какой-то тупой текст
			</div>
		   </div>

@endsection		  
	