<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogs;
use App\Product;


class PrintController extends Controller
{
    public function getCatalog($id = 0){
		$catalog = Catalogs::find($id);
		$products = Product::where('catalogs_id', $id)->get();
		return view('catalog', compact('catalog','products'));
	}
	public function getOne($id = 0){
		$product = Product::find($id);
		return view('print', compact('product'));			
	}
}
?>

