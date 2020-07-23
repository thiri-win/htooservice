<form action="{{ route('employer.experiences.store', $employer ) }}" method="post" id="experienceSubmit">
	@csrf
	<div class="bg-gray-300 border">
		<h5 class="font-bold uppercase p-2">Add Experience</h5>
		<div class="result"></div>
	</div>
	<div class="modal-body">
		<div class="p-4 flex">
			<label for="workshop" class="w-1/4">Workshop</label>
			<input type="text" name="workshop" class="w-3/4" autofocus>
		</div>
		<div class="p-4 flex">
			<label for="remark" class="w-1/4">Remark</label>
			<textarea name="remark" rows="5" cols="80" class="w-3/4"></textarea>
		</div>
		<div class="p-4 flex">
			<label for="experience_id" class="w-1/4">Experience level</label>
			<select id="experience_id" name="experience_id" class="w-3/4">
				@foreach ($experiences as $experience)
				<option value="{{ $experience->id }}">{{ $experience->level }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="px-4 pb-4 flex justify-end">
		<button type="button" class="cancel text-xs" data-dismiss="modal">Close</button>
		<button type="submit" class="submit text-xs">Submit</button>
	</div>
</form>
