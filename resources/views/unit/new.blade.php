@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Unit</div>

                <div class="card-body">
                    <div class="col-md-6">
	                	<form id="new-contact-form" method="post" action="">		
	                		<input type="hidden" name="id">
							@csrf
							<div class="form-group">
								<label for="name">Unit Name</label>
								<input type="text" id="name" name="name" class="form-control">
								<small class="text-muted">e.g Kilogram</small>
							</div>	
							<div class="form-group">
								<label for="short_name">Short Name</label>
								<input type="text" id="short_name" name="short_name" class="form-control">
								<small class="text-muted">e.g kg</small>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea id="description" name="description" class="form-control"></textarea>
							</div>
	                		<div class="form-group">
								<a href="/unit" class="btn btn-primary">CANCEL</a>
								<button class="btn btn-primary">SAVE</button>
							</div>
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
