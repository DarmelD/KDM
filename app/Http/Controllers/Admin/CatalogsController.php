<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Catalogs;
use App\Http\Requests\CreateCatalogsRequest;
use App\Http\Requests\UpdateCatalogsRequest;
use Illuminate\Http\Request;



class CatalogsController extends Controller {

	/**
	 * Display a listing of catalogs
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $catalogs = Catalogs::all();

		return view('admin.catalogs.index', compact('catalogs'));
	}

	/**
	 * Show the form for creating a new catalogs
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.catalogs.create');
	}

	/**
	 * Store a newly created catalogs in storage.
	 *
     * @param CreateCatalogsRequest|Request $request
	 */
	public function store(CreateCatalogsRequest $request)
	{
	    
		Catalogs::create($request->all());

		return redirect()->route(config('quickadmin.route').'.catalogs.index');
	}

	/**
	 * Show the form for editing the specified catalogs.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$catalogs = Catalogs::find($id);
	    
	    
		return view('admin.catalogs.edit', compact('catalogs'));
	}

	/**
	 * Update the specified catalogs in storage.
     * @param UpdateCatalogsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCatalogsRequest $request)
	{
		$catalogs = Catalogs::findOrFail($id);

        

		$catalogs->update($request->all());

		return redirect()->route(config('quickadmin.route').'.catalogs.index');
	}

	/**
	 * Remove the specified catalogs from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Catalogs::destroy($id);

		return redirect()->route(config('quickadmin.route').'.catalogs.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Catalogs::destroy($toDelete);
        } else {
            Catalogs::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.catalogs.index');
    }

}
