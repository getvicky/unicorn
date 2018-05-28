@extends('layouts.master')

@section('content')
	<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
			<div class="m-portlet">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Edit User
							</h3>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype="multipart/form-data" method="post" action="{{ route('user.update') }}">
					{{ csrf_field() }}
					<div class="m-portlet__body">
						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label>
									FirstName:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-user"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter FirstName" name="first_name">
								</div>
							</div>
							<div class="col-lg-4">
								<label>
									LastName:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-user"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter LastName" name="last_name">
								</div>
							</div>

							<div class="col-lg-4">
								<label class="">
									Email:
								</label>
								<input type="email" class="form-control m-input" placeholder="Enter email" name="user_email">
							</div>
							
						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label>
									Phone:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-phone"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter Phone" name="user_phone">
								</div>
							</div>

							<div class="col-lg-4">
								<label>
									Emergency Contact:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-phone"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Emergency Contact" name="emergency_contact">
								</div>
							</div>

							<div class="col-lg-4">
								<label>
									Employee ID:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-user"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Employee ID" name="employee_id">
								</div>
							</div>

						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									Ext. No.:
								</label>
								<input type="text" class="form-control m-input" placeholder="Ext. No." name="extn_number">
							</div>

							<div class="col-lg-4">
								<label class="">
									Alias Name:
								</label>
								<input type="text" class="form-control m-input" placeholder="Alias Name" name="alias_name">
							</div>

							<div class="col-lg-4">
								<label class="">
									Agent ID:
								</label>
								<input type="text" class="form-control m-input" placeholder="Agent ID" name="agent_id">
							</div>

						</div>

						<div class="form-group m-form__group row">
							
							<div class="col-lg-4">
								<label>
									Current Address:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Enter your address" name="current_address">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-map-marker"></i>
										</span>
									</span>
								</div>
								<span class="m-form__help">
									Please enter your current address
								</span>
							</div>

							<div class="col-lg-4">
								<label>
									Permanent Address:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Enter your address" name="permanent_address">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-map-marker"></i>
										</span>
									</span>
								</div>
								<span class="m-form__help">
									Please enter your permanent address
								</span>
							</div>

							<div class="col-lg-4">
								<label class="">
									Date OF Joining:
								</label>
								<input type="text" class="form-control m-input" placeholder="Date OF Joining" name="joining_date">
							</div>

						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									CTC:
								</label>
								<input type="text" class="form-control m-input" placeholder="CTC" name="ctc">
							</div>

							<div class="col-lg-4">
								<label class="">
									Travel Allowance:
								</label>
								<input type="text" class="form-control m-input" placeholder="Travel Allowance" name="travel_allowance">
							</div>

							<div class="col-lg-4">
								<label class="">
									Cab Service:
								</label>
								<input type="text" class="form-control m-input" placeholder="Cab Service" name="cab_service">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									Allowance:
								</label>
								<input type="text" class="form-control m-input" placeholder="Allowance" name="allowance">
							</div>
							
							<div class="col-lg-4">
								<label class="">
									Type:
								</label>
								<select class="form-control m-input">
                                    <option value="">--Select Type--</option>
                                    <option>Agent</option>
                                    <option>Supervisor</option>
                                    <option>Admin</option>
                                </select>

                            </div>

                            <div class="col-lg-4">
								<label class="">
									Department:
								</label>
								<select class="form-control m-input">
                                    <option value="">--Select Department--</option>
                                    <option>MIS</option>
                                    <option>HR</option>
                                    <option>Technical</option>
                                    <option>Sales</option>
                                </select>

                            </div>
						</div>

						<div class="form-group m-form__group row">
							<label class="">
								Upload Document:
							</label>
							<input type="file" class="form-control" id="images" name="images[]" multiple/>
						</div>
					</div>
					<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions--solid">
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-8">
									<button type="submit" class="btn btn-primary">
										Update
									</button>
									<button type="reset" class="btn btn-secondary">
										Cancel
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
			<!--end::Portlet-->
		</div>
		<!--</div>-->
	</div>
	<!-- end::Body -->
@endsection
