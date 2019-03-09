@extends('admin.master')

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
                    <a href="{{ url('/district/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage District </a>
                </div>
            </div>
        </div>
        <br />
    <div class="card">
			     <div class="card-body">
				   <div class="card-title">Add District</div>
				   <hr>				   
				{!! Form::open(['url' => '/district/save','method'=>'post']) !!}
				    <div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Select Division :</label>
					  <div class="col-sm-6">
						<select class="form-control" name="division_id" id="division" selected="true" disable="true">
							<option value="">== Select Division ==</option>
							@foreach($division as $div)
								<option value="{{ $div->id }}">{{ $div->division_name }}</option>
							@endforeach							
						</select>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">District Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="district" name="DistrictName" placeholder="Enter Your district name" required="">
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