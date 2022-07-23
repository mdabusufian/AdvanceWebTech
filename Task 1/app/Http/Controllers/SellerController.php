<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view ('dashboard');
    }
    public function profile()
    {
        $number=session()->get('number');
        $seller = Seller::where('number',$number)
                ->first();
            return view('profile')->with('seller', $seller);
    }
    public function editprofile()
    {
        $number=session()->get('number');
        $seller = Seller::where('number',$number)
                ->first();
            return view('editprofile')->with('seller', $seller);
    }

    public function editprofileSubmitted(Request $request)
    {
      $validate = $request->validate([
        "number"=>"required|min:10",
        "password"=>"required|min:8|max:20",
        "name"=>"required|min:5",
        "email"=>"required",
        "image"=>'required',
        "status"=>"required", 
    ],
  );
        if($validate){

        // $number= $request->post('number');
        // $password= $request->post('password');
        // $name=$request->post('name');
        // $email=$request->post('email');
        // $image=$request->post('image');
        // $status=$request->post('status');

        $seller =Seller::where('id', $request->id)->first();

          $seller->name=$request->name;
          $seller->password=$request->password;
          $seller->number=$request->number;
          $seller->email=$request->email;
          $seller->status=$request->status;

          
        //   $seller->image= $request->image;
        

          $seller->save();

        
      if($seller){

        session()->flash('error','Successfully Updated');
        return redirect('profile');
     
      }
      else {
        session()->flash('error','Data not Updated');
        return redirect('profile');
      }

        }
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
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        Seller::create($requestData);
        return redirect('seller')->with('flash_message', 'seller Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
