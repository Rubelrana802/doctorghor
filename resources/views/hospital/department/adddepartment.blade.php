@extends('hospital.master')

@section('mainContent')

        <div class="row">
            <div class="col-sm-12">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div class="text-center" style="font-size: 18px; padding: 9px; border: 2px solid #00B1E6;">
                     {{ Session::get('message') }}
                    </div>
                </div>
            @endif
            </div>
        </div>

<div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/hospitaldept/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Department </a>
                </div>
            </div>
        </div>
        <br />
    <div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Department</div>
				   <hr>				   
				{!! Form::open(['url' => '/hospitaldept/save','method'=>'post']) !!}
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Hospital Name :</label>
					  <div class="col-sm-6">
						<select name="hospitals" class="form-control" selected="true" readonly>
							<option value="{{ Auth::guard('hospital')->user()->id }}">{{ Auth::guard('hospital')->user()->name }}</option>
						</select>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Department Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="district" name="DepartmentName" placeholder="Enter Your department name" required="">
					  </div>
					</div>
					</div> 
					 <div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-6">
						<button type="submit" class="btn btn-info shadow-info px-5"></i> Save</button>
					  </div>
					</div>
				{!! Form::close() !!}
	</div>
</div>

@endsection