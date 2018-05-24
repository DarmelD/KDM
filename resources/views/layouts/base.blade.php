<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{config('site.description')}}">
    <meta name="keywords" content="{{config('site.keywords')}}">
    <meta name="author" content="">

    <title>{{config('site.title')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@section('styles')
    <!-- Custom styles for this template -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
@show
  </head>

  <body>
    <!-- Korzina-->
	<div id="basket">
<table>
<tbody>
<tr style="display: none;" class="hPb">
<td>Выбрано:</td>
<td><span id="totalGoods">0</span> товаров</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Сумма: &asymp; </td>
<td><span id="totalPrice">0</span> руб.</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Куки:</td>
<td><span id="gugu">0</span> </td>
</tr>
<tr style="display: table-row;" class="hPe">
<td colspan="2">Корзина пуста</td>
</tr>
<tr>
<td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
<td><a style="display: none;" id="checkOut" href="#">Оформить</a></td>
</tr>
</tbody>
</table>
</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}">Главная страница</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('services')}}">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{asset('contacts')}}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">SPORT SHOP</h1>
          <div class="list-group">
		  @foreach($catalogs as $one)
            <a href="{{asset('catalog/'.$one->id)}}" class="list-group-item">{{$one->name}}</a>
			@endforeach
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

@yield('content')

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Суперклёвый магазин спортивных товаров 2018</p>
      </div>
      <!-- /.container -->
    </footer>
@section('scripts')
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/card.js')}}"></script>
@show
  </body>

</html>
