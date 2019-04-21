<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Supplier;

class SupplierController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Add new supplier
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('supplier.new');
    }

	/**
	 * edit supplier
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Store supplier
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$input = $request->all();
		
		$request->validate([
			'name'=>'required',
	        'phone'=> 'required'
		]);
		$data = [
			'name' => $input['name'],
			'phone' => $input['phone'],
			'email' => $input['email'] ?? '',
			'address' => $input['address'] ?? '',
			'notes' => $input['notes'] ?? ''
		];
		if (empty($input['id'])) {
			$supplier = new Supplier($data);
		} else {
			$supplier = Supplier::findOrFail($input['id']);
			$supplier->name = $input['name'];
			$supplier->phone = $input['phone'];
			$supplier->email = $input['email'];
			$supplier->address = $input['address'];
			$supplier->notes = $input['notes'];

		}
		$supplier->save();
		return redirect('suppliers')->with('message', 'New supplier saved.');
    }

    /**
     * Remove the specified supplier entry from storage.
     *
     * @param Illuminate\Http\Request
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {	
    	$supplier = Supplier::find($id);
    	if (!empty($supplier)) {
    		$response = $supplier->delete();
    		return redirect('suppliers')->with('success', '1 supplier was deleted.');
    	}
        return redirect('suppliers');
    }

}
