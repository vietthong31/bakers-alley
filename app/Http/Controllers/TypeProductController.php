<?php

namespace App\Http\Controllers;

use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.type.index', [
            'types' => TypeProduct::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProduct $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeProduct  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeProduct $type)
    {
        return view('admin.type.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeProduct  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProduct $type)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:5', Rule::unique('type_products', 'name')->ignore($type->id)],
            'image' => 'image'
        ]);
        // dd($attributes['image']->getClientOriginalExtension());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = 'type-' . date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $attributes['image'] = $fileName;
            $file->move(public_path('assets/dest/images/products'), $fileName);
        }
        $type->update($attributes);
        return redirect()->route('type.index')->with('success', "Updated product type $type->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeProduct  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProduct $type)
    {
        return 'test';
    }
}
