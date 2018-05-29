@extends('layouts.master')

@section('content')
	<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
			@if(session()->has('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>
          	@endif 
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
				<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype="multipart/form-data" method="post" action="{{ url('user/update')}}/{{$details->id }}">
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
									<?php
										$name = $details->name;
										$newname = explode(' ',$name);
									?>
									<input type="text" class="form-control m-input" placeholder="Enter FirstName" name="first_name" value="{{ $newname[0] }}">
								</div>
								@if ($errors->has('first_name'))
							    <div class="text-danger">{{ $errors->first('first_name') }}</div>
								@endif
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
									<input type="text" class="form-control m-input" placeholder="Enter LastName" name="last_name" value="@isset($newname[1]) {{ $newname[1] }} @endisset">
								</div>
								@if ($errors->has('last_name'))
							    <div class="text-danger">{{ $errors->first('last_name') }}</div>
								@endif
							</div>

							<div class="col-lg-4">
								<label class="">
									Email:
								</label>
								<input type="email" class="form-control m-input" placeholder="Enter email" name="user_email" value="{{ $details->email }}">
								@if ($errors->has('user_email'))
							    <div class="text-danger">{{ $errors->first('user_email') }}</div>
								@endif
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
									<input type="text" class="form-control m-input" placeholder="Enter Phone" name="user_phone" value="{{ $details->phone_number }}">
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
									<input type="text" class="form-control m-input" placeholder="Emergency Contact" name="emergency_contact" value="{{ $details->emergency_contact }}">
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
									<input type="text" class="form-control m-input" placeholder="Employee ID" name="employee_id" value="{{ $details->emp_id }}">
								</div>
							</div>

						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									Ext. No.:
								</label>
								<input type="text" class="form-control m-input" placeholder="Ext. No." name="extn_number" value="{{ $details->extn_number }}">
							</div>

							<div class="col-lg-4">
								<label class="">
									Alias Name:
								</label>
								<input type="text" class="form-control m-input" placeholder="Alias Name" name="alias_name" value="{{ $details->alias_name }}">
							</div>

							<div class="col-lg-4">
								<label class="">
									Agent ID:
								</label>
								<input type="text" class="form-control m-input" placeholder="Agent ID" name="agent_id" value="{{ $details->agent_id }}">
							</div>

						</div>

						<div class="form-group m-form__group row">
							
							<div class="col-lg-4">
								<label>
									Current Address:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input" placeholder="Enter your address" name="current_address" value="{{ $details->current_address }}">
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
									<input type="text" class="form-control m-input" placeholder="Enter your address" name="permanent_address" value="{{ $details->permanent_address }}">
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

							<!-- <div class="col-lg-4">
								<label class="">
									Date OF Joining:
								</label>
								<input type="text" class="form-control m-input" placeholder="Date OF Joining" name="joining_date" value="{{ $details->date_of_joining }}">
							</div> -->
							<div class="col-lg-4">
								<label class="">
									Department:
								</label>
								<select class="form-control m-input" name="department">
                                    <option value="">--Select Department--</option>
                                    <option <?php if($details->department == 'MIS'){ echo 'selected'; } ?> value="MIS">MIS</option>
                                    <option <?php if($details->department == 'HR'){ echo 'selected'; } ?> value="HR">HR</option>
                                    <option <?php if($details->department == 'Technical'){ echo 'selected'; } ?> value="Technical">Technical</option>
                                    <option <?php if($details->department == 'Sales'){ echo 'selected'; } ?> value="Sales">Sales</option>
                                </select>

                            </div>

						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									CTC:
								</label>
								<input type="text" class="form-control m-input" placeholder="CTC" name="ctc" value="{{ $details->ctc }}">
							</div>

							<div class="col-lg-4">
								<label class="">
									Travel Allowance:
								</label>
								<input type="text" class="form-control m-input" placeholder="Travel Allowance" name="travel_allowance" value="{{ $details->travel_allowance }}">
							</div>

							<div class="col-lg-4">
								<label class="">
									Cab Service:
								</label>
								<input type="text" class="form-control m-input" placeholder="Cab Service" name="cab_service" value="{{ $details->cab_service }}">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									Allowance:
								</label>
								<input type="text" class="form-control m-input" placeholder="Allowance" name="allowance" value="{{ $details->allowance }}">
							</div>
							
							<div class="col-lg-4">
								<label class="">
									Type:
								</label>
								<select class="form-control m-input" name="type">
                                    <option value="">--Select Type--</option>
                                    <option <?php if($details->type == 'Agent'){ echo 'selected'; } ?> value="Agent">Agent</option>
                                    <option <?php if($details->type == 'Supervisor'){ echo 'selected'; } ?> value="Supervisor">Supervisor</option>
                                    <option <?php if($details->type == 'Admin'){ echo 'selected'; } ?> value="Admin">Admin</option>
                                </select>

                            </div>

                            
						</div>

						<div class="form-group m-form__group row">
							<div class="col-lg-4">
								<label class="">
									Upload Document:
								</label>
								<input type="file" class="form-control" id="images" name="attachment[]" multiple/>
							</div>

							<div class="col-lg-4">
								<label class="">
									Password:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="password" class="form-control m-input" placeholder="Password" name="password">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-key"></i>
										</span>
									</span>
								</div>
								
							</div>

							<div class="col-lg-4">
								<label class="">
									Confirm Password:
								</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="password" class="form-control m-input" placeholder="Confirm Password" name="confirm_password">
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span>
											<i class="la la-key"></i>
										</span>
									</span>
								</div>
								
							</div>
						</div>

						<div class="form-group m-form__group row">
							@foreach($documents as $document)
								<?php
									$file_ext = explode('.',$document->file_name);
									$ext = array('jpg','png','jpeg','gif');
									
								?>
								<div class="col-lg-1">
									<?php
										if(!in_array($file_ext[1] , $ext)){
									?>
									<a href="{{ asset('documents') }}/{{ $details->id }}/{{ $document->file_name }}" target="_blank">
										<img style="width: 78%;" src="{{ asset('images/coverpic.jpg') }}" alt="" class="img-responsive">
									</a>
									<?php
										}else{ ?>
										<a href="{{ asset('documents') }}/{{ $details->id }}/{{ $document->file_name }}" target="_blank">
											<img style="width: 100%;" src="{{ asset('documents') }}/{{ $details->id }}/{{ $document->file_name }}" alt="" class="img-responsive">
										</a>
										<?php }
									?>
									
									<a onclick="return confirm('Are you sure you want to delete this file?');" href="{{ url('user/document') }}/{{ $document->id }}" title="Remove"><i class="fa fa-times"></i></a>
									
								</div>
							@endforeach
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
