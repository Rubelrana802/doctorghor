@extends('admin.master')

@section('mainContent')

<div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/division/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Division </a>
                </div>
            </div>
        </div>
        <br />
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Division</div>
				   <hr>				   
				    {!! Form::open(['url' => '/division/save','method'=>'post']) !!}
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Division Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="divisionName" placeholder="Enter Your division name">
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