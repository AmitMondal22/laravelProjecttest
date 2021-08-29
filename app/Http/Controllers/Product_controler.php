<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class Product_controler extends Controller
{
    public function view_cacc(){
        return view('create_account');
    }
    public function savUser(Request $r){
        $n=$r->name;
        $e=$r->email;
        $pass=bcrypt($r->password);
        $ot=random_int(111111, 999999);

        $obj=new User();
        $obj->name=$n;
        $obj->email=$e;
        $obj->password=$pass;
        $obj->otp=$ot;
        $obj->save();
        return redirect(url('/login'));
    }
    public function shoAddproduct(){
        return view('ins_product');
    }
    public function ins_product(Request $r){
        $user = Auth::user();
        
        $pn=$r->product_name;
        $p=$r->price;
        $d=$r->decription;
        $uid=$user->id;
        
        $ob=new Product_model();
        $ob->productName=$pn;
        $ob->price=$p;
        $ob->decription=$d;
        $ob->userId=$uid;

        $ob->save();
        
        return redirect(url('/select'));
    }
    public function insProduct(Request $r){
        // $user = Auth::user();
        $user = 1;

        
        $pn=$r->product_name;
        $p=$r->price;
        $d=$r->decription;
        $uid=$user;
        // $uid=$user->id;
        
        $ob=new Product_model();
        $ob->productName=$pn;
        $ob->price=$p;
        $ob->decription=$d;
        $ob->userId=$uid;

        $ob->save();
        $json = array(
            "status" =>"data inserated"
        );
	    echo json_encode($json);
    }

    public function selc(){
        $data=Product_model::join('users','product.userId','=','users.id')->get(['product.*','users.name']);
        $w=array(
            'row'=>$data,
        );
        return view('selproduct')->with($w);
    }
    // api
    public function selc_ppp(){
        $data=Product_model::join('users','product.userId','=','users.id')->get(['product.*','users.name']);
        // $w=array(
        //     'row'=>$data,
        // );
        return $data;
    }
    public function del_p(Request $r){
        $pr_id=$r->p_id;
        $obj=Product_model::find($pr_id);
        $obj->delete();
        return redirect(url('/select'));
    }
    public function del_p_api(Request $r){
        $pr_id=$r->p_id;
        $obj=Product_model::find($pr_id);
        $obj->delete();
        
        
	    $data=Product_model::join('users','product.userId','=','users.id')->get(['product.*','users.name']);
        // $w=array(
        //     'row'=>$data,
        // );
        return $data;
        
    }
    public function selupd_p(Request $r){
        $selData=$r->p_id;
        $qbj=Product_model::find($selData);
        $w=array(
            'data'=>$qbj,
        );
        return view('updData')->with($w);
    }
    public function selupd_papi(Request $r){
        $selData=$r->p_id;
        $qbj=Product_model::find($selData);
        // $w=array(
        //     'data'=>$qbj,
        // );
        return $qbj;
    }
    public function ins_upd(Request $r){
        $user = Auth::user();
        $pid=$r->id;
        $pn=$r->product_name;
        $p=$r->price;
        $d=$r->decription;
        $uid=$user->id;
        
        $ob=Product_model::find($pid);
        $ob->productName=$pn;
        $ob->price=$p;
        $ob->decription=$d;
        $ob->userId=$uid;

        $ob->update();
        return redirect(url('/select'));
    }

    public function ins_upd_api(Request $r){
        // $user = Auth::user();
        $user = 1;
        $pid=$r->id;
        $pn=$r->product_name;
        $p=$r->price;
        $d=$r->decription;
        $uid=$user;
        // $uid=$user->id;
        
        $ob=Product_model::find($pid);
        $ob->productName=$pn;
        $ob->price=$p;
        $ob->decription=$d;
        $ob->userId=$uid;

        $ob->update();
        $w=array(
            'status'=>'ok'
        );
        return $w;
    }


    public function cvie(){
        return view('srview');
    }
    public function serchq(Request $r){
        $sData=$r->serch;
        $towns = Product_model::query()->where('productName', 'LIKE', "%{$sData}%")->get();
        $w=array(
            "row"=>$towns
        );
        return view('sData')->with($w);
    }
    public function serchq_ap(Request $r){
        $sData=$r->serchh;
        $towns = Product_model::query()->where('productName', 'LIKE', "%{$sData}%")->get();
        // $w=array(
        //     "row"=>"ok"
        // );
         return $towns;
        // echo json_encode($towns);
    }
}
