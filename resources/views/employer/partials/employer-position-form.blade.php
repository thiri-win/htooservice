<form action="{{ route('employer.position.store', $employer->id) }}" method="post" id="positionSubmit">
	@csrf
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Add Position</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		</button>
		<div class="result"></div>
	</div>
	<div class="modal-body">
		<label for="position">Position</label>
		<select name="position_id" id="position_id" class="form-control mb-3">
			@foreach ($positions as $position)
			<option value="{{ $position->id }}">{{ $position->jobtitle }}</option>
			@endforeach
		</select>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
