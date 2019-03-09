@extends('company.master')

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
                    <a href="{{ url('/medicine/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Medicine </a>
                </div>
            </div>
        </div>
        <br />
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Medicine</div>
				   <hr>				   
				    {!! Form::open(['url' => '/medicine/save','method'=>'post']) !!}
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Company Name :</label>
					  <div class="col-sm-6">
						<select name="company_id" class="form-control" selected="true" readonly>
							<option value="{{ Auth::guard('company')->user()->id }}">{{ Auth::guard('company')->user()->name }}</option>
						</select>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Medicine Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="madicinename" placeholder="Enter Your medicine name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Unit :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="unit" placeholder="Enter Your unit name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Generic Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="generic" placeholder="Enter Your Generic name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Price :</label>
					  <div class="col-sm-6">
						<input type="number" class="form-control" id="input-4" name="price" placeholder="0.00">
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