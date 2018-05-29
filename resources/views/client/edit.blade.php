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
								Edit Client (Laura)
							</h3>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" action="{{ url('client/update') }}/{{ $customer->id }}">
					{{ csrf_field() }}
					<div class="m-portlet__body">
						<div class="m-form__heading">
							<h3 class="m-form__heading-title">
								1. Customer Info:
							</h3>
						</div>
						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label>
									First Name:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-user"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter FirstName" name="customer_firstname" value="{{ $customer->first_name }}">
									
								</div>
								@if($errors->has('customer_firstname'))
							    	<div class="text-danger">{{ $errors->first('customer_firstname') }}</div>
								@endif
							</div>
							<div class="col-lg-4">
								<label>
									Last Name:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-user"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter LastName" name="customer_lastname" value="{{ $customer->last_name }}">
								</div>
								@if($errors->has('customer_lastname'))
							    	<div class="text-danger">{{ $errors->first('customer_lastname') }}</div>
								@endif
							</div>

							<div class="col-lg-4">
								<label class="">
									Email:
								</label>
								<input type="email" class="form-control m-input" placeholder="Enter email" name="customer_email" value="{{ $customer->email }}">
								@if($errors->has('customer_email'))
							    	<div class="text-danger">{{ $errors->first('customer_email') }}</div>
								@endif
							</div>
							
						</div>
											
						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label>
									Mobile:
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-phone"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter Mobile" name="customer_mobile" value="{{ $customer->mobile }}">
								</div>
								@if($errors->has('customer_mobile'))
							    	<div class="text-danger">{{ $errors->first('customer_mobile') }}</div>
								@endif
							</div>

							<div class="col-lg-4">
								<label>
									Phone(Home):
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-phone"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter Phone(Home)" name="phone_home" value="{{ $customer->phone_home }}">
								</div>
							</div>

							<div class="col-lg-4">
								<label>
									Phone(Work):
								</label>
								<div class="input-group m-input-group m-input-group--square">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="la la-phone"></i>
										</span>
									</div>
									<input type="text" class="form-control m-input" placeholder="Enter Phone(Work)" name="phone_work" value="{{ $customer->phone_work }}">
								</div>
							</div>
						</div>

						<div class="form-group m-form__group row">
							
							<div class="col-lg-4">
								<label>
									Address:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Enter customer address" name="address" value="{{ $customer->address }}">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-map-marker"></i>
										</span>
									</span>
								</div>
								<span class="m-form__help">
									Please enter customer address
								</span>
							</div>
							
							<div class="col-lg-4">
								<label class="">
									City:
								</label>
								<input type="text" class="form-control m-input" placeholder="City" name="city" value="{{ $customer->city }}">
							</div>

							<div class="col-lg-4">
								<label class="">
									State:
								</label>
								<input type="text" class="form-control m-input" placeholder="State" name="state" value="{{ $customer->state }}">
							</div>
						</div>

						<div class="form-group m-form__group row">
							
							<div class="col-lg-4">
								<label class="">
									Zip:
								</label>
								<input type="text" class="form-control m-input" placeholder="Zip" name="zip" value="{{ $customer->zip }}">
							</div>

							<div class="col-lg-4">
								<label class="">
									Active:
								</label>
								<select class="form-control m-input" name="is_active">
                                    <option value="">--Select--</option>
                                    <option <?php if($customer->active == 1){ echo 'selected'; } ?> value="1">Active</option>
                                    <option <?php if($customer->active == 0){ echo 'selected'; } ?> value="0">Inactive</option>
                                </select>
							</div>
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
		</div><!--</div>-->
	</div>
	<!-- end::Body -->
@endsection
