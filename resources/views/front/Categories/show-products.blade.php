@extends(front.template)

@section('pageTitle', 'Página de productos')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')
<h2>Productos de la categoría {{category[name]}}</h2>
<div class="row">
  <div class="col-12">
    <ul>
      @foreach ($productsCategories as oneProductCategory)
       <li>
        <a href="/products/{{ $product->id }}">{{$oneProductCategory->name}}</a>
        <p><strong>Descripción</strong>{{ product($id)->description }}</p>
        <h4>{{ product($id)->price }}</h4>
       </li>
      @endforeach
    </ul>
  </div>
 </div>
@endsection
