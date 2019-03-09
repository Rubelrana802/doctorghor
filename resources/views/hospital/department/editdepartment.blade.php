@extends('hospital.master')
@section('mainContent')
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add District</div>
				   <hr>				   
				    {!! Form::open(['url' => '/district/edit','method'=>'post']) !!}
				    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
			      		<div class="alert alert-success alert-dismissible col-sm-6" role="alert">
				    			<button type="button" class="close" data-dismiss="alert">&times;</button>
				    		<div class="alert-icon">
								<i class="icon-check"></i>
				    		</div>
				   			<div class="alert-message">
				      			<span><strong>Success!</strong> {{ Session::get('message') }}</span>
				      		</div>
                  		</div>
             		</div>
					 <div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">District Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="DistrictName" value="{{ $district->name }}" placeholder="Enter Your Name">
					  </div>
					</div>
					<input type="hidden" name="districtId" value="{{ $district->id }}">
					 <div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Save</button>
					  </div>
					</div>
					{!! Form::close() !!}
				 </div>
			   </div>
@endsection