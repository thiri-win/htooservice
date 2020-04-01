<form action="{{ route('employer.experience.store', $employer ) }}" method="post" id="experienceSubmit">
	@csrf
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		</button>
		<div class="result"></div>
	</div>
	<div class="modal-body">
		<div class="form-group">
			<label for="content">Content</label>
			<textarea name="content" rows="5" cols="80" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="experience_id">Experience level</label>
			<select id="experience_id" name="experience_id" class="form-control">
				@foreach ($experiences as $experience)
				<option value="{{ $experience->id }}">{{ $experience->level }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
