<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function Home()
    {
        $products = Products::latest('id')->get();

return view('Home', compact('products'));
    }
    public function search(Request $request)
    {
        $output="";
        $products = Products::where('name','Like','%'.$request->search.'%')->get();
        foreach($products as $products)
        {
            $output.=

            '.$product->name'
        ;

        }
        return response($output);
    }


    public function dashboard1()
    {
        $products = Products::where('seller', session()->get('user1'))->get();
         return view('dashboard1')->with('products',$products);
    }

}
