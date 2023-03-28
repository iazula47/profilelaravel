<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

    public function edit($id){
        $data=Customer::findorFail($id);
        return view('customer.edit',['customer'=>$data]);
    }

    public function updateCustomer(Request $req){
        
        //dd($req);
        $validated=$req->validate([
            "lastName"=>['required','min:4'],
            "firstName"=>['required','min:4'],
            "email"=>['required','email',Rule::unique('users','email'),],
            "address"=>['required','min:4']
        ]);

        $data=Customer::find($req->id);
        $data->lastName=$req->lastName;
        $data->firstName=$req->firstName;
        $data->email=$req->email;
        $data->address=$req->address;

        $data->save();

        return redirect ("/")->with('success','Customer edited successfully.');
    }
}
?>