@extends('layouts.master')

@section('content')
	<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
			<!-- BEGIN: Subheader -->
			@if(session()->has('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>
          	@endif

			<!-- END: Subheader -->
			<div class="m-content">
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									List Clients
								</h3>
							</div>
						</div>
						<div class="m-portlet__head-tools">
						<div>
							<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
								<span class="m-subheader__daterange-label">
									<span class="m-subheader__daterange-title"></span>
									<span class="m-subheader__daterange-date m--font-brand"></span>
								</span>
								<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
									<i class="la la-angle-down"></i>
								</a>
							</span>
						</div>
						</div>
					</div>
					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-8 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-4">
											<div class="m-form__group m-form__group--inline">
												<div class="m-form__label">
													<label>
														Status:
													</label>
												</div>
												<div class="m-form__control">
													<select class="form-control m-bootstrap-select" id="m_form_type">
														<option value="">
															All
														</option>
														<option value="1">
															Completed
														</option>
														<option value="2">
															Open
														</option>
														<option value="2">
															Under Processing
														</option>
														<option value="2">
															Pending
														</option>
														<option value="2">
															Payment Delayed
														</option>
													</select>
												</div>
											</div>
											<div class="d-md-none m--margin-bottom-10"></div>
										</div>
										<div class="col-md-4">
											<div class="m-form__group m-form__group--inline">
												<div class="m-form__label">
													<label class="m-label m-label--single">
														Unders:
													</label>
												</div>
												<div class="m-form__control">
													<select class="form-control m-bootstrap-select" id="m_form_status">
														<option value="">
															All
														</option>
														<option value="1">
															Sales
														</option>
														<option value="2">
															Technical
														</option>
														<option value="3">
															Administration
														</option>
														<option value="4">
															Customer Service
														</option>
													</select>
												</div>
											</div>
											<div class="d-md-none m--margin-bottom-10"></div>
										</div>
										<div class="col-md-4">
											<div class="m-input-icon m-input-icon--left">
												<input class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch" type="text">
												<span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="la la-search"></i>
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 order-1 order-xl-2 m--align-right">
									<a href="{{ url('company/new') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
										<span>
											<i class="la la-user"></i>
											<span>
												New Company
											</span>
										</span>
									</a>
									<div class="m-separator m-separator--dashed d-xl-none"></div>
								</div>
							</div>
						</div>
						<!--end: Search Form -->
<!--begin: Datatable -->
						<div class="m-datatable m-datatable--default m-datatable--brand m-datatable--loaded"><table class="m-datatable__table" id="html_table" style="display: block; min-height: 300px; overflow-x: auto;" width="100%">
							<thead class="m-datatable__head">
								<tr class="m-datatable__row" style="left: 0px;">
									<th title="Field #1" class="m-datatable__cell m-datatable__cell--sort" data-field="S.No."><span style="width: 200px;">S.No.</span></th>
									<th title="Field #2" class="m-datatable__cell m-datatable__cell--sort" data-field="S.No."><span style="width: 350px;">Company Name</span></th>
									<th title="Field #3" class="m-datatable__cell m-datatable__cell--sort" data-field="Created On"><span style="width: 290px;">Created On</span></th>
									<th title="Field #4" class="m-datatable__cell m-datatable__cell--sort" data-field="Action"><span style="width: 250px;">Action</span></th>
								</tr>
							</thead>
							<tbody class="m-datatable__body" style="">
								<?php $k = 1; ?>
								@foreach($companies as $company)
									<tr data-row="0" class="m-datatable__row" style="left: 0px;">
										<td data-field="S.No." class="m-datatable__cell"><span style="width: 200px;">{{ $k }}</span></td>

										<td data-field="Name" class="m-datatable__cell"><span style="width: 350px;">
											{{ $company->name }}
										</span></td>
										
										<td data-field="Created On" class="m-datatable__cell"><span style="width: 290px;">
											{{ $company->created_at }}
										</span></td>
									
										<td data-field="Department" class="m-datatable__cell"><span style="width: 250px;">
											<a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('company/delete') }}/{{ $company->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a> | <a href="{{ url('company/edit') }}/{{ $company->id }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
										</span>
										</td>
									</tr>
									<?php $k++; ?>
								@endforeach
							</tbody>
						</table>
						<!--end: Datatable -->
					</div>
				</div>
			</div>
		</div><!--</div>-->
	</div>
	<!-- end::Body -->

@endsection
