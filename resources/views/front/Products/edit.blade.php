@extends('front.template')

@section('pageTitle', 'Página para crear producto')

@section('stylesheet')
<link rel="stylesheet" href="{{ URL::asset('/css/edit-form.css') }}">
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('mainContent')

{{-- Muestra el formulario de alta de producto --}}

<form action="/products" method="post" enctype="multipart/form-data" style="margin-top:50px;">
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
					<select class="form-control" name="categories_id[]" multiple='multiple'>
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



	{{-- Prueba <div class="col-6">
		<div class="form-group" style="margin-top:25px">
			<label>Select categories</label>
			<div class="box" style="height:100px; background-color:red;">

				@foreach ($categories as $category)

					<input type="checkbox" name="category_id" value="{{ $category->id }}">
					<label style="margin-left:5px;">
						{{ $category->name }}

					</label><br>

				@endforeach
			</div>
	  </div>
	</div>  --}}

	{{-- Prueba <div class="col-6">
		<div class="form-group">
			<label>Select categories</label>
			<select class="form-control" name="categories_id[]" multiple=multiple>
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
	</div> --}}


@endsection
