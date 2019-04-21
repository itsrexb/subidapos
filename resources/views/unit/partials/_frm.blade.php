<form id="new-contact-form" method="post" action="">		
	<input type="hidden" name="id" value="{{ !empty($unit['id']) ? $unit['id'] : ''}}">
	@csrf
	<div class="form-group">
		<label for="name">Unit Name</label>
		<input type="text" id="name" name="name" class="form-control" value="{{ !empty($unit['name']) ? $unit['name'] : ''}}">
		<small class="text-muted">e.g Kilogram</small>
	</div>	
	<div class="form-group">
		<label for="short_name">Short Name</label>
		<input type="text" id="short_name" name="short_name" class="form-control"  value="{{ !empty($unit['short_name']) ? $unit['short_name'] : ''}}">
		<small class="text-muted">e.g kg</small>
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<textarea id="description" name="description" class="form-control">{{ !empty($unit['description']) ? $unit['description'] : ''}}</textarea>
	</div>
	<div class="form-group">
		<a href="/unit" class="btn btn-primary">CANCEL</a>
		<button class="btn btn-primary">SAVE</button>
	</div>
</form>