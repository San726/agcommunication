<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
{
    public function CustomerInfo(){
//        return Clients::all();
        $users = Clients::all();
        return view('customer_info')->with('users',$users);
    }

    public function paidStatus(){
//        $paid = Clients::all();
        $paid = DB::table('clients')->where('paidStatus', 'paid')->get();
        return view('payment_paid_list', compact('paid'));
    }

    public function dueStatus(){
        $due = DB::table('clients')->where('paidStatus', 'due')->get();
//        $due = Clients::all();
        return view('payment_due_list', compact('due'));
    }
}
