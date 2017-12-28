@extends('layouts.base')
@section('styles')
@parent
    <!-- Custom styles for this template -->
    <link href="css/my.css" rel="stylesheet">
@endsection
@section('content')
           <div class="container">
		    <h2>{{$obj->name}}</h2>
				{!!$obj->body!!}
			
		   </div>

@endsection		  
	