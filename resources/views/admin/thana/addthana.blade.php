@extends('admin.master')

@section('mainContent')

<base href="http://localhost/doctorghor" >
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
                    <a href="{{ url('/thana/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Thana </a>
                </div>
            </div>
        </div>
        <br>

	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Thana</div>
				   <hr>				   
				    {!! Form::open(['url' => '/thana/save','method'=>'post']) !!}
                        <div class="form-group row">
                            <label for="division" class="col-sm-2 col-form-label">Select Division :</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="divisions" id="divisions" tabindex="-1" aria-hidden="true" required="required">
                                    <option value="" disable="true" selected="true">=== Select Divisions ===</option>
                                    @foreach ($divisions as $key => $value)
                                        <option value="{{$value->id}}">{{ $value->division_name }}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-sm-2 col-form-label">Select District :</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="districts" id="districts"  required="required">
                                    <option value="" disable="true" selected="true">=== Select Districts ===</option>
                                </select>
                            </div>
                        </div>
					 <div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Thana Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="ThanaName" placeholder="Enter Your thana name">
					  </div>
					</div>
					 <div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Save</button>
					  </div>
					</div>
					{!! Form::close() !!}
				 </div>
			   </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">

    var basePath = $('base').attr('href');

    $('#divisions').on('change', function(e){
        console.log(e);
        var div_id = e.target.value;
        $.get(basePath +'/json-districts?div_id=' + div_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
          })
        });
    });
</script>
@endsection
