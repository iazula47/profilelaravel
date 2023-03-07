<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);
    } 

    public function delete($id){
        $delete = DB::table("customers")
        ->where("id","=",$id)
        ->delete();

        return redirect('/')->with('success','Customer deleted');
    }
}
?>