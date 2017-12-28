@extends('layouts.base')
@section('styles')
@parent
    <!-- Custom styles for this template -->
    <link href="css/my.css" rel="stylesheet">
@endsection
@section('content')
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/sports.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/sports2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
@foreach($prods as $one)
            <div class="col-lg-4 col-md-6 mb-4">
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
                  <h5>${{$one->price}}</h5>
                  <p class="card-text">{!!$one->small_description!!}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">	 <a href="#" class="addCart" id="good-{{$one->id}}-{{$one->price}}">Add to cart</a></small>
                </div>
              </div>
            </div>
@endforeach
           
          </div>
          <!-- /.row -->

@endsection		  