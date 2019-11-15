<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $allProducts = Product::all();

      return view('front.Products.index', compact('allProducts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('front.Products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

          'name' => ['required', 'max:20'],
          'price' => ['required', 'max:10'],
          'description' => ['max:40'],
          'image' => ['image']

        ],
      [
        'name.required' => 'El campo es obligatorio',
        'name.max' => 'El máximo de caracteres es de 20',
        'price.required' => 'El campo price es obligatorio',
        'price.max' => 'El campo price no puede tener más de 10 números',
        'description.max' => 'La descripción no puede tener más de 40 caracteres',
        'image' => 'Los formatos aceptados son jpeg, png, bmp, gif, or svg',
      ]);

      $product = new Product;
      $product->name = $request->input('name');
      $product->Price = $request->input('price');
      $product->description = $request->input('description');
      $product->category_id = $request->input('categories_id');

      $product->categories()->sync($request->input('categories_id'));

      //$image = $request->file('image');

      //if($image) {
        //$finalImage = uniqid('img_') . "." . $image->extension();
        //$image->storePubliclyAs('storage/products', $finalImage);

        //$product->image = $finalImage;
    //  }

      $product->save();


      //$product = Product::create($request->('_token'));

      return redirect('/products');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productDetail = Product::find($id);
        //dd($productDetail);

        return view('front.Products.product-detail', compact('productDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productToEdit = Product::find($id);
        $categories = Category::orderBy('name')->get();

        return view('front.Products.edit', compact('productToEdit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $productToUpdate = Product::find($id);

      $productToUpdate = $request->input('name');
      $productToUpdate = $request->input('price');
      $productToUpdate = $request->input('description');

      $productToUpdate->categories()->sync($request->input('categories_id'));

      //$image = $request->file('image');

      //if($image) {
        //$finalImage = uniqid('img_') . "." . $image->extension();
        //$image->storePubliclyAs('storage/products', $finalImage);

        //$productToUpdate->image = $finalImage;
    //  }

      $productToUpdate->save();


      //$product = Product::create($request->('_token'));

      return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $productToDelete = Product::find($id);
      $productToDelete->delete();
    }
}
