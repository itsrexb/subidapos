<form id="new-contact-form" method="post" action="">		
	<input type="hidden" name="id" value="{{ $product['id'] ?? ''}}">
	@csrf
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" class="form-control" value="{{ $product['name'] ?? ''}}">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<textarea id="description" name="description" class="form-control">{{ $product['description'] ?? ''}}</textarea>
	</div>
	<div class="form-group">
		<a href="/products" class="btn btn-primary">CANCEL</a>
		<button class="btn btn-primary">SAVE</button>
	</div>
</form>