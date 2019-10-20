<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class productscontroller extends Controller
{
    //
 

       
    public function index(){

    	$pro= new products();
    $data=$pro->all();
//return $data;
    	return view('showProducts', ['products' => $data]);
    }
    public function showProducts($slug){

    	$pro= new products();
        $data=$pro::where('slug', $slug)->first();
      // return $data->id;
     	return view('showProduct', ['product' => $data]);
    }
    public function add(){
    	
    	return view('insertProduct');
    }
    
    public function insert(){
   
   		$pro= new products();
   		$pro->ProdcutName=request('pName');
   		$pro->slug=request('pSlug');
   		$pro->stock=request('pstocks');
   		$pro->price=request('pPrice');
    	$pro->stock=request('pstocks');
    	$pro->skuid=request('psku');
    	$pro->expert=request('pExpert');
    	$pro->description=request('pDesc');
    	$pro->save();
    	return redirect('products/add');
 	

}
}
