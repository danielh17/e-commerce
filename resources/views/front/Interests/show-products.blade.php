@extends('front.template')

@section('pageTitle','Página de productos de intereses')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}">
@endsection

@section('mainContent')
  <h2>Estos son los productos relacionados a los intereses seleccionados</h2>
  @foreach($categoriesId as $oneCategoryId)
    <li>
      <h3>{{ $oneCategoryId->category()->name }}</h3>
    </li>
  @endforeach
@endsection
