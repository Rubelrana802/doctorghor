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

        <br />
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Update Medicine</div>
				   <hr>				   
				    {!! Form::open(['url' => '/medicine/edit','method'=>'post']) !!}
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Medicine Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="madicinename" placeholder="Enter Your medicine name" value="{{ $medicine->name }}">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Unit :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="unit" placeholder="Enter Your unit name" value="{{ $medicine->unit }}">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Generic Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="generic" placeholder="Enter Your Generic name" value="{{ $medicine->generic }}">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Price :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="price" placeholder="0.00" value="{{ $medicine->price }}">
					  </div>
					</div>
					</div>
					<input type="hidden" name="madicineid" value="{{ $medicine->id }}"> 
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