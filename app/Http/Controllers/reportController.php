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

    public function monthly_report(){
        if(!empty($_GET['areabybill']) && $_GET['areabybill'] != "default"){
            $area = $_GET['areabybill'];
            $users = DB::table('clients')->where('area', $area)->get();
        }else{
            $users = Clients::all();
        }
        return view('reports', compact('users'));
    }

//    public function monthly_filter(){
//        $area = $_GET['areabybill'];
//        $users = DB::table('clients')->where('area', $area)->get();
//        return view('reports', compact('users'));
//    }

    public function paidStatus(){
//        $paid = Clients::all();
        $users = DB::table('clients')->where('paidStatus', 'paid')->get();
        return view('customer_info', compact('users'));
    }

    public function dueStatus(){
        $users = DB::table('clients')->where('paidStatus', 'due')->get();
//        $due = Clients::all();
        return view('customer_info', compact('users'));
    }

//    public function dateWisebillSheet(){
//        $due = DB::table('clients')->where('paidStatus', 'due')->get();
//        return view('date_bill_sheet');
//    }

    public function datewisebillsheetafterpost(){
        $dates = $_POST['datebybill'];
        $area = $_POST['areabybill'];
        $bill = $_POST['BillStatus'];



//        list($month, $day, $year) = mb_split( '[/.-]', $dates);
//        return "Month: $month; Day: $day; Year: $year<br />\n";

        if ($dates == "default" && $area == "default" && $bill == "default")
            $users = DB::table('clients')
//                ->where('paidStatus', $bill)
//                ->where('payment', $dates)
//                ->where('area', $area)
                ->get();
        else
            if ($dates == "default" && $area == "default")
                $users = DB::table('clients')
                            ->where('paidStatus', $bill)
//                          ->where('payment', $dates)
//                          ->where('area', $area)
                    ->get();
            else if ($dates == "default" && $bill == "default")
                $users = DB::table('clients')
//                          ->where('paidStatus', $bill)
//                          ->where('payment', $dates)
                            ->where('area', $area)
                    ->get();
            else if ($area == "default" && $bill == "default")
                $users = DB::table('clients')
//                          ->where('paidStatus', $bill)
                            ->where('payment', $dates)
//                          ->where('area', $area)
                    ->get();
            else if ($dates == "default")
                $users = DB::table('clients')
                    ->where('paidStatus', $bill)
                    ->where('area', $area)
                    ->get();
            else if ($area == "default")
                $users = DB::table('clients')
                    ->where('paidStatus', $bill)
                    ->where('payment', $dates)
                    ->get();
            else if ($bill == "default")
                $users = DB::table('clients')
                    ->where('payment', $dates)
                    ->where('area', $area)
                    ->get();
            else
                $users = DB::table('clients')
                    ->where('paidStatus', $bill)
                    ->where('payment', $dates)
                    ->where('area', $area)
                    ->get();

//        return $bill;
//        return $dates;
        return view('customer_info', compact('users','dates','bill','area'));
    }

    public function area_bill(){
        $area = $_POST['area_bill'];
        $users = DB::table('clients')->where('area', $area)->get();
        return view('customer_info', compact('users'));
    }
}
