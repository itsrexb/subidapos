<form id="new-contact-form" method="post" action="">		
	<input type="hidden" name="id" value="{{ $supplier['id'] ?? ''}}">
	@csrf
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" class="form-control" value="{{ $supplier['name'] ?? ''}}">
	</div>
	<div class="form-group">
		<label for="phone">Phone</label>
		<input type="text" id="phone" name="phone" class="form-control"  value="{{ $supplier['phone'] ?? ''}}">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" id="email" name="email" class="form-control"  value="{{ $supplier['email'] ?? ''}}">
	</div>	
	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" id="address" name="address" class="form-control"  value="{{ $supplier['address'] ?? ''}}">
	</div>
	<div class="form-group">
		<label for="notes">Notes</label>
		<textarea id="notes" name="notes" class="form-control">{{ $supplier['notes'] ?? ''}}</textarea>
	</div>
	<div class="form-group">
		<a href="/suppliers" class="btn btn-primary">CANCEL</a>
		<button class="btn btn-primary">SAVE</button>
	</div>
</form>