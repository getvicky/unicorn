@extends('layouts.master')

@section('content')
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							      <div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Backup
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="m-form__group form-group">
													<label for="">
														Backup:
													</label>
													<div class="m-radio-list">
														<label class="m-radio">
															<input type="radio" name="r2">
															Daily
															<span></span>
														</label>
														<label class="m-radio">
															<input type="radio" name="r1">
															Monthly
															<span></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<button type="reset" class="btn btn-primary">
													Submit
												</button>
												<button type="reset" class="btn btn-secondary">
													Cancel
												</button>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
							</div>
					</div>
					</div>
					</div>

@endsection
