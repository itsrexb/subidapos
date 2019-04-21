<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Unit;

class UnitController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$units = Unit::all();
        return view('unit.index', compact('units'));
    }

    /**
     * Add new unit
     *
     * @return \Illuminate\Http\Response
     */
    public function newUnit()
    {
        return view('unit.new');
    }

    /**
     * edit new unit
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return view('unit.edit', compact('unit'));
    }

    /**
     * Store new unit
     *
     * @return \Illuminate\Http\Response
     */
    public function storeUnit(Request $request)
    {
    	$input = $request->all();
		
		$request->validate([
			'name'=>'required',
	        'short_name'=> 'required'
		]);
		$data = [
			'name' => $input['name'],
			'short_name' => $input['short_name'],
			'description'	=> !empty($input['description']) ? $input['description'] : ''
		];
		if (empty($input['id'])) {
			$unit = new Unit($data);
			$unit->save();
		} else {
			$unit = Unit::findOrFail($input['id']);
			$unit->name = $input['name'];
			$unit->short_name = $input['short_name'];
			$unit->description = $input['description'];

		}
		$unit->save();
		return redirect('unit')->with('message', 'New unit saved.');
    }

    /**
     * Remove the specified unit entry from storage.
     *
     * @param Illuminate\Http\Request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {	
    	$unit = Unit::find($id);
    	if (!empty($unit)) {
    		$response = $unit->delete();
    		return redirect('unit')->with('success', '1 unit had been deleted.');
    	}
        return redirect('unit');
    }
}
