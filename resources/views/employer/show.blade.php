@extends('master')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

	<div class="row">
		{{-- Basic Information --}}
		<div class="col-xl-12">
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__body">
					<div class="kt-widget kt-widget--user-profile-3">
						<div class="kt-widget__top">
							<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
								<div class="kt-avatar__holder">
									<img src="{{ isset($employer->image) ? asset($employer->image->url) : ''}}" alt="" width="100%">
								</div>
								<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
									<i class="fa fa-pen"></i>
									<form action="{{ route('employer.image.store', $employer->id) }}" method="post" enctype="multipart/form-data" id="ImageSubmit">
										@csrf
										<input type="file" name="profile_avatar" id="profile_avatar" accept=".png, .jpg, .jpeg">
									</form>
								</label>
								<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
									<i class="fa fa-times"></i>
								</span>
							</div>
							<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
								JM
							</div>
							<div class="kt-widget__content">
								<div class="kt-widget__head">
									<a href="#" class="kt-widget__username">
										{{ $employer->name }}
									</a>
									<div class="kt-widget__action">
										<a href="{{ route('employers.edit', $employer->id) }}" class="btn btn-sm btn-upper text-info"><i class="fa fa-pen"></i></a>
									</div>
								</div>
								<div class="kt-widget__subhead">
									<a href="#"><i class="flaticon2-new-email"></i>{{ $employer->email }}</a>
									<a href="#"><i class="flaticon2-calendar-3"></i>
										{{ $employer->currentPosition() }}
									</a>
									<a href="#"><i class="flaticon2-placeholder"></i>{{ $employer->address }}</a>
								</div>
								<div class="kt-widget__info">
									<div class="kt-widget__desc">
										{{ $employer->about }}
									</div>
								</div>
							</div>
						</div>

						<div class="kt-widget__bottom">
							{{-- Current Salary --}}
							<div class="kt-widget__item">
								<div class="kt-widget__icon">
									<i class="flaticon-piggy-bank"></i>
								</div>
								<div class="kt-widget__details">
									<span class="kt-widget__title">Current Monthly Salary</span>
									<span class="kt-widget__value"><span>Ks. </span>249,500</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="kt-portlet kt-portlet--tabs mt-3">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					Other Informations
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<ul class="nav nav-tabs nav-tabs-bold nav-tabs-line   nav-tabs-line-right nav-tabs-line-brand" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#kt_portlet_tab_1_1" role="tab">
							Position
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_2" role="tab">
							Expenience
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_3" role="tab">
							Settings
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="kt-portlet__body">
			<div class="tab-content">
				<div class="tab-pane active" id="kt_portlet_tab_1_1">
					{{-- Position History --}}
					@include('employer.partials.employer-position')

				</div>
				<div class="tab-pane" id="kt_portlet_tab_1_2">
					{{-- Experience Histroy --}}
					@include('employer.partials.employer-experience')
				</div>
				<div class="tab-pane" id="kt_portlet_tab_1_3">
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
				</div>
			</div>
		</div>
	</div>
</div>

@include('modal')

@endsection

@push('scripts')
<script>
	$(document).ready(function() {

		$('#new_position').on('click', function(e){
			e.preventDefault();
			$.ajax({
				url: $(this).attr('data-route'),
				method: 'GET',
				success: function(response) {
					$('#modal').modal('show');
					$('.modal-content').append(response.data);
				}
			})
		});

		$('#new_experience').on('click', function(e){
			e.preventDefault();
			$.ajax({
				url: $(this).attr('data-route'),
				method: 'GET',
				success: function(response) {
					$('#modal').modal('show');
					$('.modal-content').append(response.data);
				}
			})
		});

		$('#profile_avatar').on('change', function(){
			$('#ImageSubmit').submit();
		});

	});
</script>
@endpush
