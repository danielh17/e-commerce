@extends('front.template')

@section('pageTitle','Página de inicio')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}">
@endsection

@section('mainContent')
<div class="row" style="margin-top:50px; margin-left:30px">
  <div class="col-4">
    <h2>Categorías</h2>
    <div class="category">
      <ul style="margin-top:25px">
        @foreach ($categories as $category)
        <li>
          <a href="/categories/{{ $category->id }}">{{$category->name}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="col-4">
    <h3>Te ayudamos a encontrar el regalo que buscás</h3>
    <form action="/interests" method="get">
      <button type="submit" class="btn btn-info">Learn more</button>
    </form>
    <div class="carusel" style="margin-top:100px">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/carusel/estadio-monumental.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/carusel/desfile.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/carusel/new-york.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/carusel/recital.jpeg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-6">
    <h2>Productos</h2>
    <div class="product">
      <ul style="margin-top:25px">
        @foreach ($products as $product)
        <li>
          <a href="/products/{{ $product->id }}">{{$product->name}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>


@endsection
