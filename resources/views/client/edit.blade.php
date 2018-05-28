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
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
										<div class="m-portlet__body">
											<div class="m-form__heading">
													<h3 class="m-form__heading-title">
														1. Customer Info:
													</h3>
												</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-4">
													<label>
														Full Name:
													</label>
													<div class="input-group m-input-group m-input-group--square">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="la la-user"></i>
															</span>
														</div>
														<input type="text" class="form-control m-input" value="Laura" placeholder="Enter FullName">
													</div>
												</div>
												<div class="col-lg-4">
													<label class="">
														Email:
													</label>
													<input type="email" class="form-control m-input" value="laura@gmail.com" placeholder="Enter email">
												</div>
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
														<input type="text" class="form-control m-input" value="(1) 678778221" placeholder="Enter Phone">
													</div>
												</div>
											</div>
											<div class="form-group m-form__group row">
												
												<div class="col-lg-4">
													<label>
														Address:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input" value="xxxxxx xxxxx" placeholder="Enter your address">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														Please enter your address
													</span>
												</div>
												
												<div class="col-lg-4">
													<label class="">
														Service:
													</label>
													<div class="m-radio-inline">
														<label class="m-radio m-radio--solid">
															<input type="radio" name="example_2" checked value="2">
															A
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="example_2" value="2">
															B
															<span></span>
														</label>
													</div>
													<span class="m-form__help">
														Please select Type of service
													</span>
												</div>
												
											</div>
											<div class="m-form__heading">
													<h3 class="m-form__heading-title">
														2. Bank Details:
													</h3>
												</div>
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
																			<input name="billing_card_name" class="form-control m-input" placeholder="" value="Laura Stone" aria-describedby="billing_card_name-error" type="text">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">
																				* Card Number:
																			</label>
																			<input name="billing_card_number" class="form-control m-input" placeholder="" value="372955886840581" aria-describedby="billing_card_number-error" type="text">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-4 m-form__group-sub">
																			<label class="form-control-label">
																				* Exp Month:
																			</label>
																			<select class="form-control m-input" name="billing_card_exp_month" aria-describedby="billing_card_exp_month-error">
																				<option value="">
																					Select
																				</option>
																				<option value="01">
																					01
																				</option>
																				<option value="02">
																					02
																				</option>
																				<option value="03">
																					03
																				</option>
																				<option value="04" selected="">
																					04
																				</option>
																				<option value="05">
																					05
																				</option>
																				<option value="06">
																					06
																				</option>
																				<option value="07">
																					07
																				</option>
																				<option value="08">
																					08
																				</option>
																				<option value="09">
																					09
																				</option>
																				<option value="10">
																					10
																				</option>
																				<option value="11">
																					11
																				</option>
																				<option value="12">
																					12
																				</option>
																			</select>
																		</div>
																		<div class="col-lg-4 m-form__group-sub">
																			<label class="form-control-label">
																				* Exp Year:
																			</label>
																			<select class="form-control m-input" name="billing_card_exp_year" aria-describedby="billing_card_exp_year-error">
																				<option value="">
																					Select
																				</option>
																				<option value="2018">
																					2018
																				</option>
																				<option value="2019">
																					2019
																				</option>
																				<option value="2020">
																					2020
																				</option>
																				<option value="2021" selected="">
																					2021
																				</option>
																				<option value="2022">
																					2022
																				</option>
																				<option value="2023">
																					2023
																				</option>
																				<option value="2024">
																					2024
																				</option>
																			</select>
																		</div>
																		<div class="col-lg-4 m-form__group-sub">
																			<label class="form-control-label">
																				* CVV:
																			</label>
																			<input class="form-control m-input" name="billing_card_cvv" placeholder="" value="450" aria-describedby="billing_card_cvv-error" type="number">
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	<div class="m-form__heading">
																		<h3 class="m-form__heading-title">
																			Billing Address
																			<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="If different than the corresponding address"></i>
																		</h3>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">
																				* Address 1:
																			</label>
																			<input name="billing_address_1" class="form-control m-input" placeholder="" value="Headquarters 1120 N Street Sacramento 916-654-5266" aria-describedby="billing_address_1-error" type="text">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-12">
																			<label class="form-control-label">
																				Address 2:
																			</label>
																			<input name="billing_address_2" class="form-control m-input" placeholder="" value="P.O. Box 942873 Sacramento, CA 94273-0001" type="text">
																		</div>
																	</div>
																	<div class="form-group m-form__group row">
																		<div class="col-lg-5 m-form__group-sub">
																			<label class="form-control-label">
																				* City:
																			</label>
																			<input class="form-control m-input" name="billing_city" placeholder="" value="Polo Alto" aria-describedby="billing_city-error" type="text">
																		</div>
																		<div class="col-lg-5 m-form__group-sub">
																			<label class="form-control-label">
																				* State:
																			</label>
																			<input class="form-control m-input" name="billing_state" placeholder="" value="California" aria-describedby="billing_state-error" type="text">
																		</div>
																		<div class="col-lg-2 m-form__group-sub">
																			<label class="form-control-label">
																				* ZIP:
																			</label>
																			<input class="form-control m-input" name="billing_zip" placeholder="" value="34890" aria-describedby="billing_zip-error" type="text">
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	
																	<div class="form-group m-form__group has-danger">
																	
																		<div id="billing_delivery-error" class="form-control-feedback">* This field is required.</div><div class="m-form__help">
																			<!--must use this helper element to display error message for the options-->
																		</div>
																	</div>
																</div>
															</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-4"></div>
													<div class="col-lg-8">
														<button type="button" class="btn btn-primary">
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
				<!--
			</div>
			-->
		</div>
		<!-- end::Body -->

@endsection
