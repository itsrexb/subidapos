@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New Product</div>

                <div class="card-body">
                    <div class="col-md-6">
	                	@include('product.partials._frm')
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
