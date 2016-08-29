<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;

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

//    public function bill_receive(){
//        $profile = DB::table('clients')
//            ->where('id', $id)
//            ->where('name', $name)->get();
//        return view('bill');
//    }

    public function bill_pay($name){
        $id = $_GET['csrf'];
       if ($id == 0){
           return view('bill_receive');
       }

        $dates = date("Y/m/d");
        list($year, $month, $day) = mb_split( '[/.-]', $dates);

        $table = 'bill_'.$month.'_'.$year;


        $profile = DB::table('clients')
            ->where('id', $id)
            ->where('name', $name)->get();

        $user = ''.$profile[0]->username;
//        $password = ''.$profile[0]->password;
        $ref = ''.$profile[0]->id;

        if(!empty($_GET['receipt']) && !empty($_GET['bill']))
        {
            DB::table($table)->insert(
                [
                    'username' => $user,
//                    'password' => $password,
                    'receipt' => $_GET['receipt'],
                    'method' => $_GET['method'],
                    'type' => $_GET['type'],
                    'bill' => $_GET['bill'],
                    'Month' => $_GET['Month'],
                    'billentrydate' => $_GET['billentrydate'],
                    'comment' => $_GET['comment'],
                    'ref' => $ref,
                    'entrydoneby' => Auth::user()
                ]);
            DB::table('clients')
                ->where('id', $id)
                ->update([
                    'paidStatus' => 'paid',
                    'comment' => $_GET['comment']
                ]);
        }

        if($profile)
            return view('bill', compact('profile'));
//                return $profile;
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

//    public function showProfile($id){
//        $profile = DB::table('clients')->where('id', $id)->get();
//        return view('profile', compact('profile'));
////        return $profile;
//    }

    public function showProfileByName($name){
        $id = $_GET['csrf'];

        if(!empty($_POST['area']))
        {
            DB::table('clients')
                        ->where('id', $id)
                        ->update(
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
                    'comment' => $_POST['comments'],
                    'paidStatus' => $_POST['paidStatus']
                ]);
        }


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

    public function statement(){
        return view('statement');
    }

}
