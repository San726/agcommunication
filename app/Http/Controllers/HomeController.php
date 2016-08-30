<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|max:255|unique:users',
////            'email' => 'email|max:255',
//            'password' => 'required|min:6|confirmed',
//        ]);
//    }

    public function create_collector(){
        if(isset($_POST['name']) && isset($_POST['password'])) {
            $name = $_POST['name'];
            $password = bcrypt($_POST['password']);
            DB::table('users')
                ->insert(['name' => $name, 'password' => $password]);
        }
        return view('create_collector');
    }
}
