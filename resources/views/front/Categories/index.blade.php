@extends('front.template')

@section('pageTitle', Categorías)

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}">
@endsection

@section('mainContent')

<div class="row">
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
</div>

@endsection
