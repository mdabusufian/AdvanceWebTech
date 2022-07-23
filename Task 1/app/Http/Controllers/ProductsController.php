<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
    public function addProduct(){
        return view('dashboard');
    }
    public function editProduct(){
        return view('editProduct');
    }
    public function addProductSubmit(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $p = new Products();
        $p->name=$request->name;
        $p->price=$request->price;
        $p->seller=session()->get('user1');

        if($request->hasFile('image'))
        {
            $imageName = time()."_".$request->file('image')->getClientOriginalName();
            // return $imageName;
            $request->image->move(public_path('images'), $imageName);
            $p->image=$imageName;
            $p->save();
            session()->flash('error','Product ADDED!!');
            return redirect(route('dashboard1'));
        }
        return "No file";
    }

    public function productdelete(Request $request){
        $products = Products::where('id', $request->id)->first();
        $products->delete();

        return redirect()->route('dashboard1');
    }
    public function productedit(Request $request){
        $products = Products::where('id', $request->id)->first();
        return view('editProduct')->with('products', $products);
        

    }
    public function editProductSubmit(Request $request){
        $products = Products::where('id', $request->id)->first();
        //  return  $products->id;
        $products->name = $request->name;
        $products->price = $request->price;
        if($request->hasFile('image'))
        {
            $imageName = time()."_".$request->file('image')->getClientOriginalName();
            // return $imageName;
            $request->image->move(public_path('images'), $imageName);
            $products->image=$imageName;
            $products->save();
            session()->flash('error','Updated!!');
            return redirect(route('dashboard1'));
        }

    }
    // public function APIList(){
    //     $products= Products::all();
    //     return response()->json(['products'=>$products],200);
    // }
    public function APIList(){
        return Products::all();
    }
    public function APIPost(Request $request){
        $p = new Products();
        $p->name=$request->name;
        $p->price=$request->price;
        $p->seller=$request->seller;
        $p->image=$request->image;
        $p->save();

        return $request;
    }

}
