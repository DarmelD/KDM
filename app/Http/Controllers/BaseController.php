<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
use App\Product;
class BaseController extends Controller
{
    public function getIndex()
	{
		$prods = Product::where('vip', 'Sale')->get();
	return view('index', compact('prods'));
	}
    public function getStatic($id=null)
	{
		$obj=Maintext::where('url',$id)->first();
	return view('static', compact('obj'));
	}
}
