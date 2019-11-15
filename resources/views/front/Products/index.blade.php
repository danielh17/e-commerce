@extends('front.template')

@section('pageTitle', 'Página para crear producto')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')

<div class="products">
    <ul>
      @foreach ($allProducts as $oneProduct)
        <li>
          <a href="/products/{{ $oneProduct->id}}">{{ $oneProduct->name }}</a>
        </li>
      @endforeach
    </ul>
</div>

@endsection
