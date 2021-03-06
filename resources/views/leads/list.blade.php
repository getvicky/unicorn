@extends('layouts.master')

@section('content')
	<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											List Leads
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
																Under:
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
											<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-user"></i>
													<span>
														New Lead
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
											<th title="Field #1" class="m-datatable__cell m-datatable__cell--sort" data-field="S.No."><span style="width: 50px;">S.No.</span></th>
											<th title="Field #9" class="m-datatable__cell m-datatable__cell--sort" data-field="Date"><span style="width: 110px;">Date</span></th>
											<th title="Field #2" class="m-datatable__cell m-datatable__cell--sort" data-field="Name"><span style="width: 110px;">Name</span></th>
											<th title="Field #2" class="m-datatable__cell m-datatable__cell--sort" data-field="Name"><span style="width: 110px;">Service</span></th>
											<th title="Field #3" class="m-datatable__cell m-datatable__cell--sort" data-field="Client Name"><span style="width: 110px;">Client Name</span></th>
											<th title="Field #4" class="m-datatable__cell m-datatable__cell--sort" data-field="Lead Owner"><span style="width: 150px;">Lead Owner</span></th>
											<th title="Field #5" class="m-datatable__cell m-datatable__cell--sort" data-field="Address"><span style="width: 110px;">Under</span></th>
											<th title="Field #7" class="m-datatable__cell m-datatable__cell--sort" data-field="Created On"><span style="width: 110px;">Stage</span></th>
											<th title="Field #8" class="m-datatable__cell m-datatable__cell--sort" data-field="Created By"><span style="width: 110px;">Source</span></th>
											<th title="Field #9" class="m-datatable__cell m-datatable__cell--sort" data-field="Status"><span style="width: 110px;">Status</span></th>
											<th title="Field #12" class="m-datatable__cell m-datatable__cell--sort" data-field="Action"><span style="width: 110px;">Action</span></th>
										</tr>
									</thead>
									<tbody class="m-datatable__body" style="">
										<tr data-row="0" class="m-datatable__row" style="left: 0px;">
											<td data-field="S.No." class="m-datatable__cell"><span style="width: 50px;">1</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">17/05/2018 14:09:23</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">Tech Service</span></td>
											<td data-field="Contact" class="m-datatable__cell"><span style="width: 110px;">A</span></td>
											<td data-field="Email" class="m-datatable__cell"><span style="width: 150px;">Martha</span></td>
											<td data-field="Address" class="m-datatable__cell"><span style="width: 110px;">John</span></td>
											<td data-field="Created On" class="m-datatable__cell"><span style="width: 110px;">Tech</span></td>
											<td data-field="Last Login" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--info m-badge--wide">Open</span></span></td>
											<td data-field="Status" class="m-datatable__cell"><span style="width: 110px;">Existing</span></td>
											<td data-field="Type" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;
												<span class="m--font-bold m--font-danger">Payment Pending</span>
												</span>
											</td>
											<td data-field="Department" class="m-datatable__cell"><span style="width: 110px;"><i class="la la-edit"></i></span>
											</td>
										</tr>
										<tr data-row="1" class="m-datatable__row" style="left: 0px;">
											<td data-field="S.No." class="m-datatable__cell"><span style="width: 50px;">2</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">17/05/2018 14:10:23</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">Tech Service</span></td>
											<td data-field="Contact" class="m-datatable__cell"><span style="width: 110px;">B</span></td>
											<td data-field="Email" class="m-datatable__cell"><span style="width: 150px;">Paul</span></td>
											<td data-field="Address" class="m-datatable__cell"><span style="width: 110px;">John</span></td>
											<td data-field="Created On" class="m-datatable__cell"><span style="width: 110px;">Tech</span></td>
											<td data-field="Last Login" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--info m-badge--wide">Open</span></span></td>
											<td data-field="Status" class="m-datatable__cell"><span style="width: 110px;">New</span></td>
											<td data-field="Type" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;
												<span class="m--font-bold m--font-danger">Customer Service</span>
												</span>
											</td>
											<td data-field="Department" class="m-datatable__cell"><span style="width: 110px;"><i class="la la-edit"></i></span>
											</td>
										</tr>
										<tr data-row="2" class="m-datatable__row" style="left: 0px;">
											<td data-field="S.No." class="m-datatable__cell"><span style="width: 50px;">2</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">17/05/2018 14:10:23</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">Tech Service</span></td>
											<td data-field="Contact" class="m-datatable__cell"><span style="width: 110px;">B</span></td>
											<td data-field="Email" class="m-datatable__cell"><span style="width: 150px;">Paul</span></td>
											<td data-field="Address" class="m-datatable__cell"><span style="width: 110px;">John</span></td>
											<td data-field="Created On" class="m-datatable__cell"><span style="width: 110px;">Sales</span></td>
											<td data-field="Last Login" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--info m-badge--wide">Open</span></span></td>
											<td data-field="Status" class="m-datatable__cell"><span style="width: 110px;">New</span></td>
											<td data-field="Type" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;
												<span class="m--font-bold m--font-danger">Customer Service</span>
												</span>
											</td>
											<td data-field="Department" class="m-datatable__cell"><span style="width: 110px;"><i class="la la-edit"></i></span>
											</td>
										</tr>
										<tr data-row="3" class="m-datatable__row" style="left: 0px;">
											<td data-field="S.No." class="m-datatable__cell"><span style="width: 50px;">3</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">17/05/2018 14:10:23</span></td>
											<td data-field="Name" class="m-datatable__cell"><span style="width: 110px;">New Service</span></td>
											<td data-field="Contact" class="m-datatable__cell"><span style="width: 110px;">C</span></td>
											<td data-field="Email" class="m-datatable__cell"><span style="width: 150px;">Bella</span></td>
											<td data-field="Address" class="m-datatable__cell"><span style="width: 110px;">John</span></td>
											<td data-field="Created On" class="m-datatable__cell"><span style="width: 110px;">Sales</span></td>
											<td data-field="Last Login" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge  m-badge--info m-badge--wide">Open</span></span></td>
											<td data-field="Status" class="m-datatable__cell"><span style="width: 110px;">New</span></td>
											<td data-field="Type" class="m-datatable__cell"><span style="width: 110px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;
												<span class="m--font-bold m--font-danger">Technical</span>
												</span>
											</td>
											<td data-field="Department" class="m-datatable__cell"><span style="width: 110px;"><i class="la la-edit"></i></span>
											</td>
										</tr>
										</tbody>
								</table>
								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
				<!--
			</div>
			-->
		</div>
		<!-- end::Body -->

@endsection
