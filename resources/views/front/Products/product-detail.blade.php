@extends('front.template')

@section('pageTitle', 'Página de detalle del producto')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')

{{-- Muestra el detalle del producto --}}

<div class="row">
  <div class="col-12">
       <li>
         <h3>{{ $productDetail['name'] }}</h3>
         <p><strong>{{ $productDetail['description'] }}</strong></p>
         <h4>{{ $productDetail['price'] }}</h4>
         <img src="{{ asset ('storage/products/' . $productDetail['image']) }}" alt="" width="10%">
       </li>

       <form action="/products/{{ $productDetail['id'] }}" method="post">
         @csrf
          {{ method_field('delete') }}
          <a href="/products/{{ $productDetail['id'] }}/edit">Edit product</a>
          <button type="submit" class="btn btn-danger">Delete product</button>
       </form>
  </div>
 </div>
@endsection
