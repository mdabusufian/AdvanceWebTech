<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Egulias\EmailValidator\Result\Result;
use Illuminate\Http\Request;

class loginController extends Controller
{

  

    public function login()
    {
        return view('login');
    }

    public function loginSubmitted(Request $request)
    {

      $validate = $request->validate([
        "number"=>"required|min:10",
        
        "password"=>"required|min:8|max:20",
      
    ],
  );
        if($validate){
        $number= $request->post('number');
      $password= $request->post('password');

      
      $result = Seller::where('number',$number)
                            ->where('password',$password)
                            ->first();
      if($result){
        $request->session()->put('user',$result->name);
        $request->session()->put('user1',$result->username);
        $request->session()->put('number',$result->number);
        $request->session()->put('id',$result->id);
        return redirect('dashboard1');
     
      }
      else {
        session()->flash('error','Please inpute correct Number and Password');
        return redirect('login');
      }

    }

     
        
    }
    public function registration()
    {
        return view('registration');
    }

    public function registrationSubmitted(Request $request)
    {
      $validate = $request->validate([
        "username"=>"required|min:5",
        "number"=>"required|min:10",
        "password"=>"required|min:8|max:20",
        "name"=>"required|min:5",
        "gender"=>"required",
        "email"=>"required",
        "dob"=>"required",
        "image"=>"required",

      
    ],
  );
        if($validate){

        $username=$request->post('username');
        $number= $request->post('number');
        $password= $request->post('password');
        $name=$request->post('name');
        $gender=$request->post('gender');
        $email=$request->post('email');
        $date=$request->post('dob');

      
        $seller = new  Seller();
        $seller->username = $username;
        $seller->number = $number;
        $seller->password = $password;
        $seller->name = $name;
        $seller->gender = $gender;
        $seller->email = $email;
        $seller->date = $date;
      
        $seller->save();

        
      if($seller){

        session()->flash('error','New registration Successfull Now login');
        return redirect('login');
     
      }
      else {
        session()->flash('error','Please inpute correct Number and Password');
        return redirect('login');
      }

        }
      }


    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }

}
