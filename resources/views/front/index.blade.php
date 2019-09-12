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
    <form action="/interests" method="post">
      <button type="submit" class="btn btn-info">Learn more</button>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <h2>Productos</h2>
    <div class="product">
      <ul style="margin-top:25px">
        @foreach ($products as $product)
        <li>
          <a href="/categories/{{ $category->id }}">{{$category->name}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
