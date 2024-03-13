@include('auth.header')
@include('auth.nav')

<div class="container mt-5">
<div class="row justify-content-center">
<div class="row">
<div class="col-xs-12">


@if (isset($errors)) 
	{{var_dump($errors)}}
@endif 

<form method="POST" action="{{ url('job/update') }}" onsubmit="return validateForm()">
	@csrf
	@method('POST')
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="job_id" value="{{ $job->id }}">
						
		<div class="row">

			<div class="form-group col-md-10 offset-md-1 mb-4">
			<label>	Job Title </label>
				<input type="text" class="form-control" name="title" placeholder="Job Title" value="{{ $job->job_title }}">
				@if (isset($errors))
                    <strong class="error">{{ $errors->first('title') }}</strong>
                @endif
			</div>
						
			<div class="form-group col-md-10 offset-md-1 mb-4">
			<label>Requirement</label>
				<textarea name="requirement" id="editor1" class="form-control">@php echo  htmlspecialchars_decode($job->job_requirement) @endphp</textarea>
				@if (isset($errors))
                    <strong class="error">{{ $errors->first('email') }}</strong>
                @endif
			</div>
							
			<div class="form-group col-md-10 offset-md-1 mb-4">
			<label>Privilege</label>	
				<textarea name="privilege" id="editor2" class="form-control">{{ $job->privilege }}</textarea>

				@if (isset($errors))
                    <strong class="error">{{ $errors->first('password') }}</strong>
                @endif
			</div>

			<div class="form-group col-md-10 offset-md-1 mb-4">
				<label>Address</label>
				<input type="text" class="form-control" name="address" placeholder="Address" value="{{ $job->address  }}">
				@if (isset($errors))
                    <strong class="error">{{ $errors->first('conf_password') }}</strong>
                @endif
			</div>

			<div class="form-group col-md-10 offset-md-1 mb-4">
				<label>Job Category</label>
				<select class="form-control" name="category">
					@foreach($cat as $cat_val)
					
					<option value="{{$cat_val->id}}" {{($cat_val->id == $job->category_id) ? 'selected' : '' }} >{{$cat_val->category_name}}</option>
					
					@endforeach
				</select>
				@if (isset($errors))
                	<strong class="error">{{ $errors->first('phone') }}</strong>
                @endif
			</div>

			<div class="form-group col-md-10 offset-md-1 mb-4">
				<label>Company</label>
				<select class="form-control" name="company">
					@foreach($comp as $comp_val)
					
					<option value="{{$comp_val->id}}" {{($comp_val->id == $job->company_id) ? 'selected' : '' }} >{{$comp_val->company_name}}</option>
					
					@endforeach
				</select>
				@if (isset($errors))
                	<strong class="error">{{ $errors->first('phone') }}</strong>
                @endif
			</div>
							
			<div class="form-group col-md-10 offset-md-1 mb-4">
				<label>City</label>
				<select class="form-control" name="city" id="city">
				@foreach($city as $city_val)
					<option value="{{$city_val->id}}" {{($city_val->id == $job->city_id) ? 'selected' : '' }} >{{$city_val->city_name}}</option>
				@endforeach
				</select>
				@if (isset($errors))
                    <strong class="error">{{ $errors->first('country') }}</strong>
                @endif
			</div>

			<div class="form-group col-md-10 offset-md-1 mb-4">
				<label>Job Type</label>
				<select class="form-control" name="job_type">
					@foreach($job_type as $job_type_val)
					<option value="{{$job_type_val->id}}" {{($job_type_val->id == $job->job_type_id) ? 'selected' : '' }} >{{$job_type_val->job_type_name}}</option>
					@endforeach
				</select>
				@if (isset($errors))
                    <strong class="error">{{ $errors->first('gender') }}</strong>
                @endif
			</div>

	

			<div class="form-group col-md-10 offset-md-1">
				<input type="submit" class="btn btn-primary" value="Update">
			</div>
		</div>
</form>

          
</div> <!-- /.col-xs-12 -->
</div> <!-- /.row -->
</div>
</div>




@include('auth.footer')
