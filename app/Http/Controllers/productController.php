<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function index()
    {
        $data = product::orderBy('name', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'data ditemukan',
            'data' => $data
        ], 200);
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show(product $product)
    {
        //
    }

  
    public function update(Request $request, product $product)
    {
        //
    }

    public function destroy(product $product)
    {
        //
    }
}
