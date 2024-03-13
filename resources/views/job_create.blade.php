@include('layout.header')
@include('auth.nav')

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
			<input type="text" class="form-control" name="title" placeholder="Job Title" value="{{ old('title') }}">
			@if (isset($errors))
                <strong class="error">{{ $errors->first('title') }}</strong>
            @endif
		</div>

		<div class="form-group col-md-10 offset-md-1">
			<label>Requirement</label>
			<textarea name="requirement" id="editor1" class="form-control"></textarea>	
			@if (isset($errors))
                <strong class="error">{{ $errors->first('requirement') }}</strong>
            @endif
		</div>

		<div class="form-group col-md-10 offset-md-1">
			<label>Address</label>	
			<textarea name="address" id="editor2" class="form-control"></textarea>
			@if (isset($errors))
                <strong class="error">{{ $errors->first('address') }}</strong>
            @endif
		</div>

		<div class="form-group col-md-10 offset-md-1">
			<label>Privilege</label>
			<input type="text" class="form-control" name="privilege" placeholder="Privilege">
			@if (isset($errors))
                <strong class="error">{{ $errors->first('privilege') }}</strong>
            @endif
		</div>

		<div class="form-group col-md-10 offset-md-1">
			<label>Job Category</label>
			<select class="form-control" name="category">
				@foreach($cat as $cat_val)
				<option value="{{$cat_val->id}}">{{$cat_val->category_name}}</option>
				@endforeach
			</select>
			@if (isset($errors))
                <strong class="error">{{ $errors->first('category') }}</strong>
            @endif
		</div>

		<div class="form-group col-md-10 offset-md-1">
			<label>Company</label>
			<select class="form-control" name="company" id="company">
				@foreach($comp as $comp_val)
				<option value="{{$comp_val->id}}">{{$comp_val->company_name}}</option>
				@endforeach
			</select>
			@if (isset($errors))
                <strong class="error">{{ $errors->first('company') }}</strong>
            @endif
		</div>

		<div class="form-group col-md-10 offset-md-1">
			<label>City</label>
			<select class="form-control" name="city" id="city">
				@foreach($city as $city_val)
				<option value="{{$city_val->id}}">{{$city_val->city_name}}</option>
				@endforeach
			</select>
			@if (isset($errors))
                <strong class="error">{{ $errors->first('city') }}</strong>
            @endif
		</div>
							
		<div class="form-group col-md-10 offset-md-1">
			<label>Job Type</label>
			<select class="form-control" name="job_type">
				@foreach($job_type as $job_type_val)
				<option value="{{$job_type_val->id}}">{{$job_type_val->job_type_name}}</option>
				@endforeach
			</select>
			@if (isset($errors))
                <strong class="error">{{ $errors->first('job_type') }}</strong>
            @endif
		</div>
							

		<div class="form-group col-md-10 offset-md-1">
			<input type="submit" class="btn py-3 px-5" value="Save">
		</div>

	</div>
</form>

          
</div>
</div> 	<!-- container -->
</div>   <!-- site-section -->

@include('layout.js')