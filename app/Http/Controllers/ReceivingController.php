<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Supplier;
use App\Unit;
use App\Product;

class ReceivingController extends Controller
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
    	$products = Product::all();
        return view('receiving.index', compact('products'));
    }

    /**
     * Add new product
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('product.new');
    }

	/**
	 * edit product
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$input = $request->all();
		
		$request->validate([
			'name'=>'required',
		]);
		$data = [
			'name' => $input['name'],
			'description' => $input['description'] ?? ''
		];
		if (empty($input['id'])) {
			$product = new Product($data);
		} else {
			$product = Supplier::findOrFail($input['id']);
			$product->name = $input['name'];
			$product->description = $input['description'];

		}
		$product->save();
		return redirect('products')->with('message', 'New product saved.');
    }

    /**
     * Remove the specified product entry from storage.
     *
     * @param Illuminate\Http\Request
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {	
    	$product = Product::find($id);
    	if (!empty($product)) {
    		$response = $product->delete();
    		return redirect('products')->with('success', '1 product was deleted.');
    	}
        return redirect('products');
    }
}
