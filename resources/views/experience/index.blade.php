@extends('master')

@section('content')

<div class="kt-portlet kt-portlet--mobile p-3">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Experience List
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<div class="dropdown dropdown-inline">
						<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="la la-download"></i> Export
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<ul class="kt-nav">
								<li class="kt-nav__section kt-nav__section--first">
									<span class="kt-nav__section-text">Choose an option</span>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-print"></i>
										<span class="kt-nav__link-text">Print</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-copy"></i>
										<span class="kt-nav__link-text">Copy</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-excel-o"></i>
										<span class="kt-nav__link-text">Excel</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-text-o"></i>
										<span class="kt-nav__link-text">CSV</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-pdf-o"></i>
										<span class="kt-nav__link-text">PDF</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					&nbsp;
					<a href="{{ route('experiences.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						New Experience
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="kt-portlet__body">

		<!--begin: Search Form -->
		<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="row align-items-center">
						<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
							<div class="kt-input-icon kt-input-icon--left">
								<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
								<span class="kt-input-icon__icon kt-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
					<a href="#" class="btn btn-default kt-hidden">
						<i class="la la-cart-plus"></i> New Order
					</a>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit">

		<!--begin: Datatable -->
		<table class="kt_datatable m-3" id="html_table" width="100%">
			<thead>
				<tr>
					<th title="id">ID</th>
					<th title="name">title</th>
					<th title="updated-at">Updated_At</th>
					<th title="action"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($experiences as $experience)
				<tr>
					<td>{{ $experience->id }}</td>
					<td>{{ $experience->level }}</td>
					<td>{{ $experience->updated_at->diffForHumans() }}</td>
					<td class="row">
						@if ($experience->trashed())
						<a href="{{ route('experiences.restore', $experience->id ) }}" class="mr-2"><i class="flaticon2-reload-1"></i></a>
						@else
						<a href="{{ route('experiences.edit', $experience->id ) }}" class="mr-2"><i class="flaticon-edit"></i></a>
						<form action="{{ route('experiences.destroy', $experience->id) }}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" class="bg-transparent border-0 text-danger"><i class="flaticon2-trash"></i></button>
						</form>
							
						@endif						
					</td>
				</tr>				
				@endforeach
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
</div>
@endsection