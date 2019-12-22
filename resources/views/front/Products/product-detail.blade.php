@extends('front.template')

@section('pageTitle', 'Página de detalle del producto')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/product-detail.css') }}">
@endsection

@section('mainContent')

{{-- Muestra el detalle del producto --}}

<div class="row">
  <div class="col-12">
       <li style="list-style:none; margin-top:30px;"> 
         <h3>Nombre: {{ $productDetail['name'] }}</h3>
         <p>Descripción: <strong>{{ $productDetail['description'] }}</strong></p>
         <h4>Precio: ${{ $productDetail['price'] }}</h4>
         <img src="/storage/products/{{$productDetail['image']}}" alt="" width="10%"> {{-- otra forma de mostrar la imagen: {{ asset ('storage/products/' . $productDetail['image']) }} --}}
       </li>

       <form action="/products/{{ $productDetail['id'] }}" method="post" style="margin-top:10px;">
         @csrf
          {{ method_field('delete') }}
          <a href="/products/{{ $productDetail['id'] }}/edit"><button class="btn btn-info" type="button" name="button">Edit product</button></a>
          <button type="submit" class="btn btn-danger">Delete product</button>
       </form>
  </div>
 </div>
@endsection
