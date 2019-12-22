@extends('front.template')

@section('pageTitle', 'Página de intereses')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/interest.css') }}">
@endsection

@section('mainContent')
<div class="row" style="margin-top:50px; margin-left:30px">
  <div class="col-5">
    <h2>Seleccioná los intereses</h2>
    <div class="interests">
      <ul style="margin-top:25px">
        @foreach ($interests as $interest)
          <li>
            {{ $interest->name }}
            <input type="checkbox" name="interest" value="">
          </li>
        @endforeach
      </ul>
    </div>
    {{-- <form action="/products/{{ $product->id }}" method="post">
      @csrf
      <button type="submit" name="button" class="btn btn-primary">Buscar</button>
    </form> --}}
  </div>
</div>
@endsection
