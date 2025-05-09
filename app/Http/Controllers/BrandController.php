<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {

        $country = $request->header('CF-IPCountry');

        $brands = Brand::where('country_code', $country)->get();

        if ($brands->isEmpty()) {
            // If no brands are found for the country, return the top 10 brands globally
            $brands = Brand::orderByDesc('rating')->limit(10)->get();
            
        }
        return response()->json($brands);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'brand_name'=>'required',
            'brand_image'=>'required',
            'rating'=>'required|numeric',
            'country_code'=>'required|string|size:2',
        ]);


        $brand = Brand::create($data);

        return response()->json( $brand, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        
        return response()->json(['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->update($request->all());

        return response()->json($brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::destroy($id);
        
        return response()->json(null, 204);
    }
}
