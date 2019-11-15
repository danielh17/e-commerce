@extends('front.template')

@section('pageTitle', 'Página para crear producto')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/products.css') }}">
@endsection

@section('mainContent')

{{-- Muestra el formulario de alta de producto --}}

<form action="/products" method="post" enctype="multipart/form-data">
		@csrf
    {{ method_field('put') }}
    <div class="row">
			<div class="col-6">
				<div class="form-group">
					<label>Name</label>
					<input
						type="text"
						name="name"
						value="{{ old('name', $productToEdit->name) }}"
						class="form-control"
					>
					@error('name')
						<span class="text-danger">
							{{ $message }}
						</span>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Price</label>
					<input
						type="decimal"
						name="price"
						value="{{ old('price', $productToEdit->price) }}"
						class="form-control"
					>
					@if ($errors->has('price'))
						<span class="text-danger">
							{{ $errors->first('price') }}
						</span>
					@endif
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Description</label>
					<input
						type="text"
						name="description"
						value="{{ old('description', $productToEdit->description) }}"
						class="form-control"
					>
					@if ($errors->has('description'))
						<span class="text-danger">
							{{ $errors->first('description') }}
						</span>
					@endif
				</div>
			</div>

      <div class="col-6">
				<div class="form-group">
					<label>Categories</label>
					<select class="form-control" name="categories_id[]" multiple>
						@foreach ($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
					@if ($errors->has('category_id'))
						<span class="text-danger">
							{{ $errors->first('category_id') }}
						</span>
					@endif
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Upload an image</label>
					<input type="file" name="image" class="form-control">
					@if ($errors->has('image'))
						<span class="text-danger">
							{{ $errors->first('image') }}
						</span>
					@endif
				</div>
			</div>

			<div class="col-12">
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
	</form>
@endsection
