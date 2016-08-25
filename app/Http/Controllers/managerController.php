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

    public function bill_pay($name){
        $id = $_GET['csrf'];
        $profile = DB::table('clients')
            ->where('id', $id)
            ->where('name', $name)->get();
        if($profile)
            return view('bill', compact('profile'));
        else
            return view('errors.404');
    }

    public function create_user(){

        if(!empty($_POST['area']))
        {
            DB::table('clients')->insert(
                [
                    'area' => $_POST['area'],
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'Father' => $_POST['Father'],
                    'Mother' => $_POST['Mother'],
                    'Company' => $_POST['Company'],
                    'gender' => $_POST['gender'],
                    'dob' => $_POST['dob'],
                    'PresentAddress' => $_POST['PresentAddress'],
                    'PermanentAddress' => $_POST['PermanentAddress'],
                    'connectedFrom' => $_POST['connectedFrom'],
                    'phone' => $_POST['phone'],
                    'bill' => $_POST['bill'],
                    'dataScheme' => $_POST['dataScheme'],
                    'payment' => $_POST['payment'],
                    'status' => $_POST['status'],
                    'comment' => $_POST['comments']
                ]);
        }
        $areas = DB::table('areas')->get();
        return view('create_user', compact('areas'));
    }

    public function profile(){
        return view('profile_found');
    }

    public function showProfile($id){
        $profile = DB::table('clients')->where('id', $id)->get();
        return view('profile', compact('profile'));
//        return $profile;
    }

    public function showProfileByName($name){
        $id = $_GET['csrf'];
        $profile = DB::table('clients')
                        ->where('id', $id)
                        ->where('name', $name)->get();
        if($profile)
            return view('profile', compact('profile'));
        else
            return view('errors.404');
//
//        return $profile;
    }

    public function create_area(){
        if(isset($_POST['area_name'])){
            $area = $_POST['area_name'];
            DB::table('areas')->insert(
                ['area' => $area]
            );
        }
        $areas = DB::table('areas')->get();
        return view('create_area', compact('areas'));
    }

    public function customer_info(){
        return view('customer_info');
    }
}
