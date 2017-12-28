<?php

namespace App\Providers\ViewComposers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\View\View;
use App\Catalogs;
class AppComposer{
	public function compose(View $view)
	{
		$catalogs = Catalogs::all();
		$view->with('catalogs', $catalogs);
		}
}
