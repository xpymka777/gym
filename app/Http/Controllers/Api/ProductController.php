<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['data' => $products], Response::HTTP_OK);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json(['data' => $product], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'Price' => 'required|numeric',
            'AvailableQuantity' => 'required|integer',
        ]);

        $product = Product::create($request->all());

        return response()->json(['message' => 'Товар успешно создан'], Response::HTTP_CREATED);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'ProductName' => 'required',
            'Price' => 'required|numeric',
            'AvailableQuantity' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json(['message' => 'Товар успешно обновлён'], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message'=>'Товар успешно удалён'], Response::HTTP_NO_CONTENT);
    }
}
