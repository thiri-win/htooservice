@extends('master')

@section('content')

	<div class="w-full">
		<div class="container bg-white w-full p-6 shadow-lg flex ">

			<div class="w-1/4 px-1">
				<img src="{{ isset($employer->image) ? asset($employer->image->url) : asset('assets/media/users/100_1.jpg')}}" alt="Pic" class="h-24 mb-3">

				<form action="{{ route('employer.image.store', $employer->id) }}" method="post" enctype="multipart/form-data" id="ImageSubmit" class="inline">
					@csrf
					<input type="file" name="profile_avatar" id="profile_avatar" accept=".png, .jpg, .jpeg">
				</form>
			</div>

			<div class="w-3/4 px-1">

				<div class="flex justify-between items-center">
					<h1 class="font-bold text-xl">{{ $employer->name }}</h1>
					<a href="{{ route('employers.edit', $employer->id) }}" class="edit">Edit</a>
				</div>

				<div class="flex py-2">
					<label class="w-1/4" for="email">Email : </label>
					<p class="w-3/4">{{ $employer->email }}</p>
				</div>

				<div class="flex py-2">
					<label class="w-1/4" for="position">Position : </label>
					<p class="w-3/4">{{ $employer->currentPosition() }}</p>
				</div>

				<div class="flex py-2">
					<label class="w-1/4" for="salary">Current Salary : </label>
					<span class="w-3/4">Ks. 249,500</span>
				</div>
				<hr>

				<div class="flex py-2">
					<label class="w-1/4" for="address">Address : </label>
					<p class="w-3/4">{{ $employer->address }}</p>
				</div>

				<div class="flex py-2">
					<label class="w-1/4" for="about">About : </label>
					<p class="inline w-3/4">{{ $employer->about }}</p>
				</div>
				<hr>

				<div class="w-full">
					<div class="flex justify-between items-center py-2">
						<h1 class="font-bold text-lg py-2">Experiences</h1>
						<a href="{{ route('employer.experiences.create', $employer) }}" class="new" id="new_experience">New++</a>
					</div>
					<table class="table-auto w-full">
						<thead>
							<tr>
								<th class="text-left px-4 py-2 border border-gray-500">Experience Level</th>
								<th class="text-left px-4 py-2 border border-gray-500">Workshop</th>
								<th class="text-left px-4 py-2 border border-gray-500">Remark</th>
								<th class="text-center px-4 py-2 border border-gray-500">#</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($employer->experiences as $experience)
								<tr>
									<td class="px-4 py-2 border border-gray-500">{{ $experience->level }}</td>
									<td class="px-4 py-2 border border-gray-500">{{ $experience->pivot->workshop }}</td>
									<td class="px-4 py-2 border border-gray-500">{{ $experience->pivot->remark }}</td>
									<td class="px-4 py-2 border border-gray-500 whitespace-no-wrap">
										<a href="#" class="edit">Edit</a>
										<a href="#" class="delete">Delete</a>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan=4 class="px-4 py-2 border border-gray-500 text-center"> No Relavant Data Yet. </td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>

				<div class="w-full">
					<div class="flex justify-between items-center py-2">
						<h1 class="font-bold text-lg py-2">Position History</h1>
						<a href="{{ route('employer.positions.create', $employer) }}" class="new" id="new_position">New++</a>
					</div>
					<table class="table-auto w-full">
						<thead>
							<tr>
								<th class="text-left px-4 py-2 border border-gray-500">Position Name</th>
								<th class="text-left px-4 py-2 border border-gray-500">Promoted_At</th>
								<th class="text-center px-4 py-2 border border-gray-500">#</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($employer->positions as $position)
								<tr>
									<td class="px-4 py-2 border border-gray-500">{{ $position->jobtitle }}</td>
									<td class="px-4 py-2 border border-gray-500">{{ $position->created_at->format('d/m/Y') }}</td>
									<td class="px-4 py-2 border border-gray-500 whitespace-no-wrap">
										<a href="#" class="edit">Edit</a>
										<a href="#" class="delete">Delete</a>
									</td>
								</tr>
							@empty
								<tr>
									<td colspan=4 class="px-4 py-2 border border-gray-500 text-center"> No Relavant Data Yet. </td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
				
			</div>	

		</div>
	</div>

@include('layouts.partials._modal')
{{-- @include('modal') --}}

@endsection

@push('scripts')
<script>
	$(document).ready(function() {

		$('#new_position').on('click', function(e){
			e.preventDefault();
			$.ajax({
				url: $(this).attr('href'),
				method: 'GET',
				success: function(response) {
					toggleModal();
					$('.modal-content').html("");
					$('.modal-content').append(response.data);
				}
			})
		});

		$('#new_experience').on('click', function(e){
			e.preventDefault();
			$.ajax({
				url: $(this).attr('href'),
				method: 'GET',
				success: function(response) {
					toggleModal();
					$('.modal-content').html("");
					$('.modal-content').append(response.data);
				}
			})
		});

		$('#profile_avatar').on('change', function(){
			$('#ImageSubmit').submit();
		});

		const overlay = document.querySelector('.modal-overlay')
		overlay.addEventListener('click', toggleModal)
		
		var closemodal = document.querySelectorAll('.modal-close')
		for (var i = 0; i < closemodal.length; i++) {
		closemodal[i].addEventListener('click', toggleModal)
		}
		
		document.onkeydown = function(evt) {
		evt = evt || window.event
		var isEscape = false
		if ("key" in evt) {
			isEscape = (evt.key === "Escape" || evt.key === "Esc")
		} else {
			isEscape = (evt.keyCode === 27)
		}
		if (isEscape && document.body.classList.contains('modal-active')) {
			toggleModal()
		}
		};		
		
		function toggleModal () {
		const body = document.querySelector('body')
		const modal = document.querySelector('.modal')
		modal.classList.toggle('opacity-0')
		modal.classList.toggle('pointer-events-none')
		body.classList.toggle('modal-active')
		}

	});
</script>
@endpush
