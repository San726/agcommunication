<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;
use Illuminate\Support\Facades\Hash;

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
            $id = DB::table('clients')->insert(
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
            DB::table('users')
                ->insert(['name' => $_POST['username'], 'password' => bcrypt($_POST['password']), 'clientref' => $id, 'clients' => 1]);
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
        $epass = DB::table('clients')
                    ->where('id', $id)->get();
        if(!empty($_POST['area']))
        {
            DB::table('clients')
                        ->where('id', $id)
                        ->update(
                [
                    'area' => $_POST['area'],
                    'username' => $_POST['username'],
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

            foreach ($epass as $expass){
                if(isset($_POST['password']) && $expass != $_POST['password'] && $_POST['password'] != ""){
                    DB::table('clients')
                        ->where('id', $id)
                        ->update(['password' => $_POST['password']]);
                }
            }

//            DB::table('users')
//                ->insert(['name' => $_POST['username'], 'password' => bcrypt($_POST['password'])]);

            $temp = DB::table('users')
                ->where('clientref', $id);

            $temp->update(['name' => $_POST['username']]);

            if(isset($_POST['password'])){
                $check = $_POST['password'];
                foreach ($temp->get() as $t){
                    if (!Hash::check($check, $t->password)){
                        $password = bcrypt($_POST['password']);
                        $temp->update(['password' => $password]);
                    }
                }
            }
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

    public function permission(){
        if (!empty($_GET['id'])){
            $temp = DB::table('users')
                ->where('id', $_GET['id']);
        }else{
            $users = DB::table('users')
                ->where('clients',0)
                ->get();
            return view('permission',compact('users'));
        }

        if (!empty($_GET['password']) && !empty($_GET['id'])){
            $check = $_GET['password'];
            foreach ($temp->get() as $t){
                if (!Hash::check($check, $t->password)){
                    $password = bcrypt($_GET['password']);
                    DB::table('users')
                        ->where('id', $_GET['id'])
                        ->update(['password' => $password]);
                }
            }
        }

//        if (!empty($_GET['password']) && !empty($_GET['id'])){
//            $pass = $_GET['password'];
//            $id = $_GET['id'];
////            return $pass;
//
////            @foreach(Auth::user()->where('id',3)->get() as $p)
////            {{ $p->name }} <span class="caret"></span>
////            @endforeach
//
//            Auth::user()->where('id',$id)->get()->fill([
//                'password' => Hash::make($pass)
//            ])->save();
//
////            user()->fill([
////                'password' => Hash::make($pass)
////            ])->save();
//
////            DB::table('users')
////                ->where('id', $_GET['id'])
////                ->update(['password' => $pass]);
//        }

//        if(!empty($_GET['admin']) && $_GET['admin'] == 'on'){
//            $temp->update(
//                ['admin' => 1]
//            );
//        }else{
//            $temp->update(
//                ['admin' => 0]
//            );
//        }
//
//        if(!empty($_GET['clients']) && $_GET['clients'] == 'on'){
//            $temp->update(
//                ['clients' => 1]
//            );
//        }else{
//            $temp->update(
//                ['clients' => 0]
//            );
//        }
//
//        if(!empty($_GET['collector']) && $_GET['collector'] == 'on'){
//            $temp->update(
//                ['collector' => 1]
//            );
//        }else{
//            $temp->update(
//                ['collector' => 0]
//            );
//        }

        if(!empty($_GET['hasReport']) && $_GET['hasReport'] == 'on'){
            $temp->update(
                ['hasReport' => 1]
            );
        }else{
            $temp->update(
                ['hasReport' => 0]
            );
        }

        if(!empty($_GET['hasBill']) && $_GET['hasBill'] == 'on'){
            $temp->update(
                ['hasBill' => 1]
            );
        }else{
            $temp->update(
                ['hasBill' => 0]
            );
        }

        if(!empty($_GET['hasUpdate']) && $_GET['hasUpdate'] == 'on'){
            $temp->update(
                ['hasUpdate' => 1]
            );
        }else{
            $temp->update(
                ['hasUpdate' => 0]
            );
        }

        $users = DB::table('users')
            ->where('clients',0)
            ->get();
        return view('permission',compact('users'));
    }
}
