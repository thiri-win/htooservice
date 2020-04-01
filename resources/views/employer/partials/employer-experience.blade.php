<div class="col-12 d-flex align-items-center justify-content-between">
	<h3 class="my-3">Experiencs</h3>
	<button class="btn btn-info" id="new_experience" data-route="{{ route('employer.experience.create', $employer->id) }}"><i class="flaticon-plus"></i>New Experience</button>
</div>
<table class="kt_datatable m-3 table-bordered" id="html_table" width="100%">
	<thead>
		<tr>
			<th title="content">Content</th>
			<th title="experience_level">Experience Level</th>
			<th title="action">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($employer->experiences()->get() as $experience)
		<tr>
			<td>{{ $experience->pivot->content }}</td>
			<td>{{ $experience->level }}</td>
			<td>
				<a href="{{ route('employer.experience.detach', ['employer' => $employer->id, 'experience' => $experience->id] ) }}">Remove</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
