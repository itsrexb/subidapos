@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Unit</div>

                <div class="card-body">
                    <div class="col-md-6">
	                	@include('unit.partials._frm')
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
