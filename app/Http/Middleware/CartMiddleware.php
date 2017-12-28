<?php

namespace App\Http\Middleware;

use Closure;
use App\Product;	

class CartMiddleware
{
  
    public function handle($request, Closure $next)
    {
					$prod = [];
				if(isset(
		$_COOKIE['basket'])){
			$arr=explode(',',$_COOKIE['basket']);

			foreach($arr as $key =>$value){
				$arr2 = explode(':',$value);
				$id = (int)$arr2[0];
					if ($id>0){
						$prod[]=Product::find($id);
					}
			}
		}else{
			$arr=[];
		}
		//dd ($arr);
		$request->merge(compact('prod'));
        return $next($request);
    }
}
