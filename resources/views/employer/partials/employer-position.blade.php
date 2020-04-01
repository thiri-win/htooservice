<div class="col-12 d-flex align-items-center justify-content-between">						
	<h3 class="my-3">Position History</h3>
	<button class="btn btn-info" id="new_position" data-route="{{ route('employer.position.create', $employer->id) }}"><i class="flaticon-plus"></i>New Position</button>
</div>
<table class="kt_datatable m-3 table-bordered" id="html_table" width="100%">
	<thead>
		<tr>
			<th title="id">Position_ID</th>
			<th title="jobtitle">Job Title</th>
			<th title="created_at">Promoted_At</th>
			<th title="action">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($employer->positions()->get() as $position)
		<tr>
			<td>{{ $position->id }}</td>
			<td>{{ $position->jobtitle }}</td>
			<td>{{ $position->created_at->format('d/m/y') }}</td>
			<td>
				<a href="{{ route('employer.position.detach', ['employer' => $employer->id, 'position' => $position->id] ) }}">Remove</a>
			</td>
		</tr>				
		@endforeach
	</tbody>
</table>