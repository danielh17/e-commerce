@extends(front.template)

@section('pageTitle', 'Página de productos')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')
<h2>Productos:</h2>
<div class="">
  <ul>
    @foreach($productsCategories as oneProductCategory)
    <li>
      {{$oneProductCategory->name}}
    </li>
    @endforeach
  </ul>
</div>
