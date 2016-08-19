<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class managerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('manager');
    }

    public function bill_receive(){
        return view('bill_receive');
    }

    public function bill_pay($id){
        $profile = DB::table('clients')->where('id', $id)->get();
        return view('bill', compact('profile'));
    }

    public function create_user(){
        return view('create_user');
    }

    public function profile(){
        return view('profile_found');
    }

    public function showProfile($id){
        $profile = DB::table('clients')->where('id', $id)->get();
        return view('profile', compact('profile'));
//        return $profile;
    }

    public function create_area(){
        return view('create_area');
    }

    public function customer_info(){
        return view('customer_info');
    }
}
