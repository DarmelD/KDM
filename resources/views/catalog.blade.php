@extends('layouts.base')
@section('styles')
@parent
    <!-- Custom styles for this template -->
    <link href="css/my.css" rel="stylesheet">
@endsection
@section('content')
           <div class="container">
		    <h2>{{$catalog->name}}</h2>
				{!!$catalog->body!!} 
				<div class="row">
			@foreach($products as $one)
<div class="col-md-4">
              <div class="card h-100">
                <a href="#">
				@if($one->picture)
					<img src="{{asset('uploads/thumb/'.$one->picture)}}" class = "card-img-top pic" alt="{{$one->name}}" />
				@else
					<img src="{{asset('http://placehold.it/700x400')}}" class = "card-img-top pic" alt="{{$one->name}}" />
				@endif
				</a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{asset('product/'.$one->id)}}">{{$one->name}}</a>
                  </h4>
                  <h5>{{$one->price}} {{$one->currency}}</h5>
                  <p class="card-text">
				   {{$one->small_description}}
				  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><a href="#" class="addCart" id="good-{{$one->id}}-{{$one->price}}">Add to cart<img class="card-img-top" src="{{asset('img/cart1.jpg')}}" alt=""/></a></small>
                </div>
              </div>
            </div>
		    @endforeach 
		   </div>
</div>  
@endsection		 
	