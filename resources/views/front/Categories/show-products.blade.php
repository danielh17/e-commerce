@extends('front.template')

@section('pageTitle', 'Página de productos')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')

{{-- Muestra todos los productos que pertenecen a la categoría seleccionada --}}

<div class="row">
  <div class="col-12">
    <ul>
      @foreach ($products->category as $oneProduct)
       <li>
        <a href="/products/{{ $oneProduct->id }}">{{ $oneProduct->name }}</a>
        {{-- <p><strong>Descripción</strong>{{ $oneProduct->description }}</p> --}}
        {{-- <h4>{{ $oneProduct->price }}</h4> --}}
       </li>
      @endforeach
    </ul>
  </div>
 </div>
@endsection
