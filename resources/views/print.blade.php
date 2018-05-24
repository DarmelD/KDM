@extends('layouts.app')
@section('content')
           <div class="container">
		    <h1>{{$product->name}}</h1>
        
			@if($product->picture)
	<img src="{{asset('/uploads/thumb/'.$product->picture)}}" class="pic" />
	@else
		<img src ="/no_photo.png" class="pic" />
	@endif
	 <a href="#" class="addCart" id="good-{{$product->id}}-{{$product->price}}">Add to cart</a>
	            <h2>{!!$product->price!!}</h2>
				{!!$product->currency!!}
				<p>{!!$product->vip!!}</p>
		        <h3>{!!$product->status!!}</br></h3>
			    {!!$product->body!!}
				{!!$product->vip!!}</br>
		        {!!$product->status!!}</br>
				{!!$product->small_description!!}</br>
			<div class="col-md-12">
			</div>
		   </div>
@endsection		  
	