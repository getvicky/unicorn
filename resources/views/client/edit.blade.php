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

							<div class="col-lg-4">
								<label class="">
									Is Converted:
								</label>
								<div class="m-radio-inline">
									<label class="m-radio m-radio--solid">
										<input <?php if($lead->is_converted == 1){ echo 'checked'; } ?> type="radio" name="is_edit_converted" value="1">
										Yes
										<span></span>
									</label>
									<label class="m-radio m-radio--solid">
										<input <?php if($lead->is_converted == 0){ echo 'checked'; } ?> type="radio" name="is_edit_converted" value="0">
										No
										<span></span>
									</label>
								</div>
								
							</div>
						</div>	

						<div class="unconverted_edit_row" style="display: none;">
							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">
										Reason Unconverted:
									</label>
									<input type="text" class="form-control m-input" placeholder="Reason Unconverted" name="reason_unconverted" value="{{ $lead->reason_unconverted }}">
								</div>

								<div class="col-lg-4">
									<label class="">
										Brief Unconverted:
									</label>
									<input type="text" class="form-control m-input" placeholder="Brief Unconverted" name="brief_unconverted" value="{{ $lead->brief_unconverted }}">
								</div>
							</div>
						</div>
						<!--unconverted_row_end-->

						<div class="converted_edit_row" style="display: none;">
							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">
										Amount:
									</label>
									<input type="text" class="form-control m-input" placeholder="Amount" name="amount" value="{{ $lead->amount }}">
								</div>

								<div class="col-lg-4">
									<label class="">
										Agent Id:
									</label>
									<select class="form-control m-input" name="agent_id">
	                                    <option value="">--Select Agent--</option>
	                                    @foreach($agents as $agent)
	                                    	<option <?php if($lead->sales_agent_id == $agent->id){ echo 'selected'; } ?> value="{{ $agent->id }}">{{ ucwords($agent->name) }}</option>
	                                    @endforeach
	                                </select>
								</div>
								
								<div class="col-lg-4">
									<label class="">
										Company:
									</label>
									<select class="form-control m-input" name="company_name">
	                                    <option value="">--Select Company--</option>
	                                    @foreach($companies as $company)
	                                    	<option <?php if($lead->company_name_id == $company->id){ echo 'selected'; } ?> value="{{ $company->id }}">{{ ucwords($company->name) }}</option>
	                                    @endforeach
	                                </select>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">
										Payment Type:
									</label>
									<select class="form-control m-input" name="payment_type">
	                                    <option value="">--Select Payment Type--</option>
	                                    <option <?php if($lead->payment_type == 'full' ){ echo 'selected'; } ?> value="full">Full</option>
	                                    <option <?php if($lead->payment_type == 'installment' ){ echo 'selected'; } ?> value="installment">Installment</option>
	                                    
	                                </select>
								</div>

								<div class="col-lg-4">
									<label class="">
										Membership Plans:
									</label>
									<select class="form-control m-input" name="membership_plan">
	                                    <option value="">--Select Membership Plan--</option>
	                                    @foreach($memberships as $membership)
											<option <?php if($lead->membership_plan_id == $membership->id){ echo 'selected'; } ?> value="{{ $membership->id }}">{{ $membership->name }}</option>
	                                    @endforeach
	                                    
	                                </select>
								</div>

								<div class="col-lg-4">
									<label class="">
										Payment Method:
									</label>
									<select class="form-control m-input" name="payment_method" id="payment_method_edit_select">
	                                    <option value="">--Select Payment Method--</option>
	                                    @foreach($methods as $method)
	                                    	<option <?php if($lead->payment_method_id == $method->id){ echo 'selected'; } ?> value="{{ $method->id }}">{{ ucwords($method->name) }}</option>
	                                    @endforeach
	                                </select>
								</div>
							</div>

							<div class="method_details_credit_card_edit" style="display: none;">
								<?php
									$undata = unserialize($lead->payment_method_details);
								?>
								<div class="form-group m-form__group row m-form--group-seperator-dashed">
									<div class="col-xl-8 offset-xl-2">
										<div class="m-form__section m-form__section--first">
											<div class="m-form__heading">
												<h3 class="m-form__heading-title">
													Billing Information
												</h3>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label class="form-control-label">
														* Cardholder Name:
													</label>
													<input name="credit_billing_card_name" class="form-control m-input" placeholder="" aria-describedby="billing_card_name-error" type="text" value="@isset($undata['card_name']) {{ $undata['card_name'] }} @endisset">
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label class="form-control-label">
														* Card Number:
													</label>
													<input name="credit_billing_card_number" class="form-control m-input" placeholder="" aria-describedby="billing_card_number-error" type="text" value="@isset($undata['card_no']) {{ $undata['card_no'] }} @endisset">
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-4 m-form__group-sub">
													<label class="form-control-label">
														* Exp Month:
													</label>
													<select class="form-control m-input" name="credit_billing_card_exp_month" aria-describedby="billing_card_exp_month-error">
														<option value="">
															Select
														</option>
														<option <?php if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '01'){ echo 'selected'; } } ?> value="01">
															01
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '02'){ 
																echo 'selected'; 
																} 
															} ?> value="02">
															02
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '03'){ 
																echo 'selected'; 
																} 
															} ?> value="03">
															03
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '04'){ 
																echo 'selected'; 
																} 
															} ?> value="04">
															04
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '05'){ 
																echo 'selected'; 
																} 
															} ?> value="05">
															05
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '06'){ 
																echo 'selected'; 
																} 
															} ?> value="06">
															06
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '07'){ 
																echo 'selected'; 
																} 
															} ?> value="07">
															07
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '08'){ 
																echo 'selected'; 
																} 
															} ?> value="08">
															08
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '09'){ 
																echo 'selected'; 
																} 
															} ?> value="09">
															09
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '10'){ 
																echo 'selected'; 
																} 
															} ?> value="10">
															10
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '11'){ 
																echo 'selected'; 
																} 
															} ?> value="11">
															11
														</option>
														<option <?php 
															if (isset($undata['card_exp_month'])) { if($undata['card_exp_month'] == '12'){ 
																echo 'selected'; 
																} 
															} ?> value="12">
															12
														</option>
													</select>
												</div>
												<div class="col-lg-4 m-form__group-sub">
													<label class="form-control-label">
														* Exp Year:
													</label>
													<select class="form-control m-input" name="credit_billing_card_exp_year" aria-describedby="billing_card_exp_year-error">
														<option value="">
															Select
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2018'){ 
																echo 'selected'; 
																} 
															} ?>
															value="2018">
															2018
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2019'){ 
																echo 'selected'; 
																} 
															} ?> value="2019">
															2019
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2020'){ 
																echo 'selected'; 
																} 
															} ?> value="2020">
															2020
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2021'){ 
																echo 'selected'; 
																} 
															} ?> value="2021">
															2021
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2022'){ 
																echo 'selected'; 
																} 
															} ?> value="2022">
															2022
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2023'){ 
																echo 'selected'; 
																} 
															} ?> value="2023">
															2023
														</option>
														<option <?php 
															if (isset($undata['card_exp_year'])) { if($undata['card_exp_year'] == '2024'){ 
																echo 'selected'; 
																} 
															} ?> value="2024">
															2024
														</option>
													</select>
												</div>
												<div class="col-lg-4 m-form__group-sub">
													<label class="form-control-label">
														* CVV:
													</label>
													<input class="form-control m-input" name="credit_billing_card_cvv" placeholder="" value="<?php 
													if (isset($undata['card_cvv'])) { 
														echo $undata['card_cvv']; 
													}
													?>" aria-describedby="billing_card_cvv-error" type="number">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--credit card-->

							<div class="method_details_echecks_edit" style="display: none;">
								<?php
									$undata = unserialize($lead->payment_method_details);
								?>
								<div class="form-group m-form__group row">
									<div class="col-lg-4">
										<label class="">
											Routing Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Routing Number" name="routing_number" value="@isset($undata['routing_number']) {{ $undata['routing_number'] }} @endisset">
									</div>
									<div class="col-lg-4">
										<label class="">
											Account Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Account Number" name="echeck_accno" value="@isset($undata['echeck_accno']) {{ $undata['echeck_accno'] }} @endisset">
									</div>
									<div class="col-lg-4">
										<label class="">
											Verify Account Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Verify Account Number" name="echeck_verify_accno" value="@isset($undata['echeck_accno']) {{ $undata['echeck_accno'] }} @endisset">
									</div>
								</div>

								<div class="form-group m-form__group row">
									<div class="col-lg-3">
										<label class="">
											Cheque Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Cheque Number" name="echeck_cheque_no" value="@isset($undata['echeck_cheque_no']) {{ $undata['echeck_cheque_no'] }} @endisset">
									</div>

									<div class="col-lg-3">
										<label class="">
											Transit ID:
										</label>
										<input type="text" class="form-control m-input" placeholder="Transit ID" name="echeck_transit_id" value="@isset($undata['echeck_transit_id']) {{ $undata['echeck_transit_id'] }} @endisset">
									</div>

									<div class="col-lg-3">
										<label class="">
											Name of bank:
										</label>
										<input type="text" class="form-control m-input" placeholder="Name of bank" name="echeck_bank_name" value="@isset($undata['echeck_bank_name']) {{ $undata['echeck_bank_name'] }} @endisset">
									</div>
									
									<div class="col-lg-3">
										<label class="">
											Address on bank account:
										</label>
										<input type="text" class="form-control m-input" placeholder="Address on bank account" name="echeck_bank_address" value="@isset($undata['echeck_bank_address']) {{ $undata['echeck_bank_address'] }} @endisset">
									</div>

								</div>
							</div>
							<!--echecks-->

							<div class="method_details_physical_cheque_edit" style="display: none;">
								<div class="form-group m-form__group row">
									<div class="col-lg-4">
										<label class="">
											Name of bank:
										</label>
										<input type="text" class="form-control m-input" placeholder="Name of bank" name="physical_check_bank_name" value="@isset($undata['physical_check_bank_name']) {{ $undata['physical_check_bank_name'] }} @endisset">
									</div>

									<div class="col-lg-4">
										<label class="">
											Cheque Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Cheque Number" name="physical_check_cheque_no" value="@isset($undata['physical_check_cheque_no']) {{ $undata['physical_check_cheque_no'] }} @endisset">
									</div>
								</div>
							</div>
							<!--phusical cheque-->

							<div class="method_details_interac_edit" style="display: none;">
								<div class="form-group m-form__group row">
									<div class="col-lg-4">
										<label class="">
											Email Id:
										</label>
										<input type="text" class="form-control m-input" placeholder="Email Id" name="interac_email_id" value="@isset($undata['interac_email_id']) {{ $undata['interac_email_id'] }} @endisset">
									</div>
								</div>
							</div>
							<!--Interac-->

							<div class="method_details_zille_edit" style="display: none;">
								<div class="form-group m-form__group row">
									<div class="col-lg-4">
										<label class="">
											Email Id:
										</label>
										<input type="text" class="form-control m-input" placeholder="Email Id" name="zille_email_id" value="@isset($undata['zille_email_id']) {{ $undata['zille_email_id'] }} @endisset">
									</div>
								</div>
							</div>
							<!--Zille-->

							<div class="method_details_money_order_edit" style="display: none;">
								<div class="form-group m-form__group row">
									<div class="col-lg-4">
										<label class="">
											Money Order Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Money Order Number" name="money_order" value="@isset($undata['money_order']) {{ $undata['money_order'] }} @endisset">
									</div>

									<div class="col-lg-4">
										<label class="">
											Delivery Address:
										</label>
										<input type="text" class="form-control m-input" placeholder="Delivery Address" name="money_order_address" value="@isset($undata['money_order_address']) {{ $undata['money_order_address'] }} @endisset">
									</div>
								</div>
							</div>
							<!--Money Order-->

							<div class="method_details_cashier_cheque_edit" style="display: none;">
								<div class="form-group m-form__group row">
									<div class="col-lg-4">
										<label class="">
											Cheque Number:
										</label>
										<input type="text" class="form-control m-input" placeholder="Cheque Number" name="cashier_cheque_no" value="@isset($undata['cashier_cheque_no']) {{ $undata['cashier_cheque_no'] }} @endisset">
									</div>

									<div class="col-lg-4">
										<label class="">
											Delivery Address:
										</label>
										<input type="text" class="form-control m-input" placeholder="Delivery Address" name="cashier_cheque_address" value="@isset($undata['cashier_cheque_address']) {{ $undata['cashier_cheque_address'] }} @endisset">
									</div>
								</div>
							</div>
							<!--Cashier cheque-->

							<div class="method_details_prepaid_card_edit" style="display: none;">
								<div class="form-group m-form__group row m-form--group-seperator-dashed">
									<div class="col-xl-8 offset-xl-2">
										<div class="m-form__section m-form__section--first">
											<div class="m-form__heading">
												<h3 class="m-form__heading-title">
													Billing Information
												</h3>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label class="form-control-label">
														* Cardholder Name:
													</label>
													<input name="prepaid_billing_card_name" class="form-control m-input" placeholder="" value="@isset($undata['pre_card_name']) {{ $undata['pre_card_name'] }} @endisset" aria-describedby="billing_card_name-error" type="text">
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label class="form-control-label">
														* Card Number:
													</label>
													<input name="prepaid_billing_card_number" class="form-control m-input" placeholder="" value="@isset($undata['pre_card_no']) {{ $undata['pre_card_no'] }} @endisset" aria-describedby="billing_card_number-error" type="text">
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-4 m-form__group-sub">
													<label class="form-control-label">
														* Exp Month:
													</label>
													<select class="form-control m-input" name="prepaid_billing_card_exp_month" aria-describedby="billing_card_exp_month-error">
														<option value="">
															Select
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '01'){ 
																echo 'selected'; 
																} 
															} ?> value="01">
															01
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '02'){ 
																echo 'selected'; 
																} 
															} ?> value="02">
															02
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '03'){ 
																echo 'selected'; 
																} 
															} ?> value="03">
															03
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '04'){ 
																echo 'selected'; 
																} 
															} ?> value="04" selected="">
															04
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '05'){ 
																echo 'selected'; 
																} 
															} ?> value="05">
															05
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '06'){ 
																echo 'selected'; 
																} 
															} ?> value="06">
															06
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '07'){ 
																echo 'selected'; 
																} 
															} ?> value="07">
															07
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '08'){ 
																echo 'selected'; 
																} 
															} ?> value="08">
															08
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '09'){ 
																echo 'selected'; 
																} 
															} ?> value="09">
															09
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '10'){ 
																echo 'selected'; 
																} 
															} ?> value="10">
															10
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '11'){ 
																echo 'selected'; 
																} 
															} ?> value="11">
															11
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_month'])) { if($undata['pre_card_exp_month'] == '12'){ 
																echo 'selected'; 
																} 
															} ?> value="12">
															12
														</option>
													</select>
												</div>
												<div class="col-lg-4 m-form__group-sub">
													<label class="form-control-label">
														* Exp Year:
													</label>
													<select class="form-control m-input" name="prepaid_billing_card_exp_year" aria-describedby="billing_card_exp_year-error">
														<option value="">
															Select
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2018'){ 
																echo 'selected'; 
																} 
															} ?> value="2018">
															2018
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2019'){ 
																echo 'selected'; 
																} 
															} ?> value="2019">
															2019
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2020'){ 
																echo 'selected'; 
																} 
															} ?> value="2020">
															2020
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2021'){ 
																echo 'selected'; 
																} 
															} ?> value="2021" selected="">
															2021
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2022'){ 
																echo 'selected'; 
																} 
															} ?> value="2022">
															2022
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2023'){ 
																echo 'selected'; 
																} 
															} ?> value="2023">
															2023
														</option>
														<option <?php 
															if (isset($undata['pre_card_exp_year'])) { if($undata['pre_card_exp_year'] == '2024'){ 
																echo 'selected'; 
																} 
															} ?> value="2024">
															2024
														</option>
													</select>
												</div>
												<div class="col-lg-4 m-form__group-sub">
													<label class="form-control-label">
														* CVV:
													</label>
													<input class="form-control m-input" name="prepaid_billing_card_cvv" placeholder="" value="<?php 
													if (isset($undata['pre_card_cvv'])) { 
														echo $undata['pre_card_cvv']; 
													}
													?>" aria-describedby="billing_card_cvv-error" type="number">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Prepaid card-->
							
							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">
										Upgrade:
									</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											<input <?php if($lead->is_upgrade == 1){ echo 'checked'; } ?> type="radio" name="is_upgrade_edit" value="1">
											Yes
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input <?php if($lead->is_upgrade == 0){ echo 'checked'; } ?> type="radio" name="is_upgrade_edit" value="0">
											No
											<span></span>
										</label>
									</div>
								</div>

							
								<div class="col-lg-4 upgrade_row_edit" style="display: none;margin-bottom: 25px;">
									<label class="">
										Supervisor Id:
									</label>
									<select class="form-control m-input" name="supervisor_id">
	                                    <option value="">--Select--</option>
	                                    @foreach($supers as $super)
											<option <?php if($super->id == $lead->supervisor_id){ echo 'selected'; } ?> value="{{ $super->id }}">{{ ucwords($super->name) }}</option>
	                                    @endforeach
	                                </select>
								</div>

								<div class="col-lg-4 upgrade_row_edit" style="display: none;margin-bottom: 25px;">
									<label class="">
										Upgrade Amount:
									</label>
									<input type="text" class="form-control m-input" placeholder="Upgrade Amount" name="upgrade_amount" value="<?php
										if (isset($lead->upgrade_amount)) { 
											echo $lead->upgrade_amount; 
										}
									?>">
								</div>

								<div class="col-lg-4">
									<label class="">
										Customer Computer Pass:
									</label>
									<input type="text" class="form-control m-input" placeholder="Customer Computer Pass" name="computer_pass" value="<?php
										if (isset($lead->customer_computer_pass)) { 
											echo $lead->customer_computer_pass; 
										}
									?>">
								</div>

								<div class="col-lg-4">
									<label class="">
										No of Devices:
									</label>
									<input type="text" class="form-control m-input" placeholder="No of Devices" name="no_of_devices" value="<?php
										if (isset($lead->no_of_devices)) { 
											echo $lead->no_of_devices; 
										}
									?>">
								</div>
							</div>

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">
										Converted Date:
									</label>
									<input type="text" class="form-control m-input datepicker" placeholder="Converted Date" name="converted_date" value="<?php
										if (isset($lead->converted_date)) { 
											echo $lead->converted_date; 
										}
									?>">
								</div>

								<div class="col-lg-4">
									<label class="">
										Select Status:
									</label>
									<select class="form-control m-input" name="status_id">
	                                    <option value="">--Select--</option>
	                                    @foreach($status as $stat)
											<option <?php if($stat->id == $lead->status_id){ echo 'selected'; } ?> value="{{ $stat->id }}">{{ ucwords($stat->name) }}</option>
	                                    @endforeach
	                                </select>
								</div>

								<div class="col-lg-4">
									<label class="">
										Select Timezone:
									</label>
									<select class="form-control m-input" name="timezone_id">
	                                    <option value="">--Select--</option>
	                                    @foreach($timezones as $timezone)
											<option <?php if($timezone->id == $lead->timezone){ echo 'selected'; } ?> value="{{ $timezone->id }}">{{ ucwords($timezone->name) }}</option>
	                                    @endforeach
	                                </select>
								</div>

							</div>

							<div class="form-group m-form__group row">
								<div class="col-lg-4">
									<label class="">
										Type of devices:
									</label>
									<input type="text" class="form-control m-input" placeholder="Type of devices" name="type_of_devices" value="<?php
										if (isset($lead->type_of_devices)) { 
											echo $lead->type_of_devices; 
										}
									?>">
								</div>

								<div class="col-lg-4">
									<label class="">
										Received Amount:
									</label>
									<input type="text" class="form-control m-input" placeholder="Received Amount" name="received_amount" value="<?php
										if (isset($lead->amount_received)) { 
											echo $lead->amount_received; 
										}
									?>">
								</div>

								<div class="col-lg-4">
									<label class="">
										Complete Date:
									</label>
									<input type="text" class="form-control m-input datepicker" placeholder="Complete Date" name="complete_date" value="<?php
										if (isset($lead->complete_date)) { 
											echo $lead->complete_date; 
										}
									?>">
								</div>

							</div>

							<div class="form-group m-form__group row">
								<div class="col-lg-6">
									<label class="">
										Description:
									</label>
									<textarea class="form-control" rows="3" name="description">
										<?php
										if (isset($lead->description)) { 
											echo $lead->description; 
										}
									?>
									</textarea>
								</div>
							</div>

						</div>			
						<!--converted_row_end-->			
											
					</div>
					<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions--solid">
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-8">
									<button type="submit" class="btn btn-primary">
										Update
									</button>
									<a href="{{ route('client.list') }}" class="btn btn-secondary">Cancel</a>
									<!-- <button type="reset" class="btn btn-secondary">
										Cancel
									</button> -->
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
