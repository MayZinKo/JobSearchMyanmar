@include('layout.header')
@include('layout.nav')

<div class="site-section element-animate bg-light">
	<div class="container">
		<div class="row">
<form method="POST" action="{{ url('job/save') }}" onsubmit="return validateForm()">
						@csrf
						@method('POST')
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="form-group col-md-10 offset-md-1">
							<label>	Job Title </label>
								<input type="text" class="form-control" name="job_title" placeholder="Job Title" value="{{ old('fullname') }}">
								@if ($errors->has('fullname'))
                                    <strong class="error">{{ $errors->first('fullname') }}</strong>
                                @endif
							</div>

							<div class="form-group col-md-10 offset-md-1">
							<label>Description</label>
<textarea name="job_des" id="editor" class="form-control"></textarea>
								@if ($errors->has('email'))
                                    <strong class="error">{{ $errors->first('email') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1">
								<label>Requirement</label>
<textarea name="job_req" id="editor1" class="form-control"></textarea>
								
								@if ($errors->has('email'))
                                    <strong class="error">{{ $errors->first('email') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1">
<label>Privilege</label>	
<textarea name="job_pri" id="editor2" class="form-control"></textarea>
								@if ($errors->has('password'))
                                    <strong class="error">{{ $errors->first('password') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1">
								<label>Address</label>
								<input type="text" class="form-control" name="job_add" placeholder="Address">
								@if ($errors->has('conf_password'))
                                    <strong class="error">{{ $errors->first('conf_password') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1">
								<label>Job Category</label>
								<select class="form-control" name="job_cat">
									@foreach($cat as $cat_val)
									<option value="{{$cat_val->id}}">{{$cat_val->category_name}}</option>
									@endforeach
								</select>
								@if ($errors->has('phone'))
                                    <strong class="error">{{ $errors->first('phone') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1">
								<label>City</label>
								<select class="form-control" name="city" id="city">
									@foreach($city as $city_val)
									<option value="{{$city_val->id}}">{{$city_val->city_name}}</option>
									@endforeach
								</select>
								@if ($errors->has('country'))
                                    <strong class="error">{{ $errors->first('country') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1">
								<label>Job Type</label>
								<select class="form-control" name="job_type">
									@foreach($job_type as $job_type_val)
									<option value="{{$job_type_val->id}}">{{$job_type_val->job_type_name}}</option>
									@endforeach
								</select>
								@if ($errors->has('gender'))
                                    <strong class="error">{{ $errors->first('gender') }}</strong>
                                @endif
							</div>
							<div class="form-group col-md-10 offset-md-1" id="dob-row">
<label>Job Expire date</label>
<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" readonly placeholder="yyyy-mm-dd" name="exp_date"/>
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>
							</div>
							<div class="form-group col-md-10 offset-md-1">
								<input type="submit" class="btn py-3 px-5" value="Register">
							</div>
						</div>
					</form>

          
         </div>
	</div> 	<!-- container -->
</div>   <!-- site-section -->
@include('layout.footer')
@include('layout.js')