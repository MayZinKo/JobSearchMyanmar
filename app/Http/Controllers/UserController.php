<?php
namespace App\Http\Controllers;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) 
        {
            return redirect()->intended('joblist'); 
        }
        $data['messages'] = session()->has('messages') ? session('messages') : null;
        return view('login')->with($data);
    }
    public function login(Request $request)
    {
    
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        
        if ($validator->fails()) 
        {
            $data['messages'] = $validator->messages();
            return redirect('login')->with($data);
        }
        else
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) 
            {
                // Authentication passed
                return redirect()->intended('joblist');
            } 
            else 
            {
                // Authentication failed
                $data['messages'] = new MessageBag(['email' => 'Invalid Username or Password']);
                return redirect('login')->with($data);
            }
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }


}
