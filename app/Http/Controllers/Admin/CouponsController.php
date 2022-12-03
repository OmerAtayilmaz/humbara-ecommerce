<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CCMultipleUser;
use Auth;
class CouponsController extends Controller
{
    public function index(){
        $cList=CCMultipleUser::where('status', '<>','DELETED')->get();
        return view('backoffice.coupons.index',[
            'cList' => $cList
        ]);
    }
    public function create(){
        return view('backoffice.coupons.create');
    }
    public function edit($id){
        $coupon=CCMultipleUser::find($id);
        return view('backoffice.coupons.edit',[
            'c' => $coupon
        ]);
    }
    public function show($id){
        $c=CCMultipleUser::find($id);
        return view('backoffice.coupons.show',['c'=>$c]);
    }

    public function update(Request $req,$id){
        $temp=CCMultipleUser::find($id);
        $temp->name=$req->name;
        $temp->description=$req->description;
        $temp->status=$req->status;
        $temp->created_by=Auth::user()->id;
        $temp->discount_percent=$req->discount_percent;
        $temp->save();
        return redirect()->back()->with("success","Coupons updated successfully!");
    }
    public function store(Request $req){
        $temp=new CCMultipleUser();
        $temp->name=$req->name;
        $temp->description=$req->description;
        $temp->status="inactive";
        $temp->created_by=Auth::user()->id;
        $temp->discount_percent=$req->discount_percent;
        $temp->save();
        return redirect()->route('admin.coupons.index')->with("success","Coupons created successfully!");
    }
    public function delete($id){
        $coupon=CCMultipleUser::find($id);
        $coupon->status="DELETED";
        $coupon->save();
        return redirect()->route('admin.coupons.index')->with("success","Coupons deleted successfully!");
    }
}
