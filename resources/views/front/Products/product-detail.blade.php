@extends('front.template')

@section('pageTitle', 'Página de detalle del producto')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')

{{-- Muestra el detalle del producto --}}

<div class="row">
  <div class="col-12">
    <ul>
      @foreach ($products as $oneProductCategory)
       <li>
        <a href="/products/{{ $products->id }}">{{ $oneProductCategory->name }}</a>
        <p><strong>Descripción</strong>{{ $oneProductCategory->description }}</p>
        <h4>{{ $oneProductCategory->price }}</h4>
       </li>
      @endforeach
    </ul>
  </div>
 </div>
@endsection
