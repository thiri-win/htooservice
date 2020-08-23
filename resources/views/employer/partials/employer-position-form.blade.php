<form action="{{ route('employer.positions.store', $employer->id) }}" method="post" id="positionSubmit">
	@csrf
	<div class="bg-gray-300 border">
		<h5 class="font-bold uppercase p-2">Add Position</h5>
		<div class="result"></div>
	</div>
	<div class="px-4 py-10 flex">
		<label for="position" class="w-1/4">Position</label>
		<select name="position_id" id="position_id" class="w-3/4">
			@foreach ($positions as $position)
				<option value="{{ $position->id }}">{{ $position->jobtitle }}</option>
			@endforeach
		</select>
	</div>
	<div class="px-4 pb-4 flex justify-end">
		<button type="submit" class="submit text-xs">Submit</button>
	</div>
</form>
