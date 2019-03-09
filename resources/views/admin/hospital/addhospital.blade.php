@extends('admin.master')

@section('mainContent')
      <base href="https://doctorghor.com/">
        <form method="POST" action="{{ route('hospital.register.submit') }}" aria-label="{{ __('Register') }}">
                @csrf
        <div class="form-group row">
         
          <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }} :</label>
          <div class="col-sm-6">
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Hospital Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

         </div>
        </div>
        <div class="form-group row">
         
          <label for="email" class="col-sm-2 col-form-label">{{ __('E-Mail Address') }} :</label>
          <div class="col-sm-6">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email ID" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
         </div>
        </div>
                    <div class="form-group row">
                        <label for="division" class="col-sm-2 col-form-label">Select Division :</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="divisions" id="divisions" tabindex="-1" aria-hidden="true">
                                    <option value="0" disable="true" selected="true">=== Select Divisions ===</option>
                                    @foreach ($divisions as $key => $value)
                                        <option value="{{$value->id}}">{{ $value->division_name }}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-sm-2 col-form-label">Select District :</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="districts" id="districts">
                                    <option value="0" disable="true" selected="true">=== Select Districts ===</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thana" class="col-sm-2 col-form-label">Select Thana :</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="thanas" name="thanas">
                                    <option value="0" disable="true" selected="true">=== Select Thanas ===</option>   
                                </select>
                            </div>
                        </div>
        <div class="form-group row">
          <label for="address" class="col-sm-2 col-form-label">Address :</label>
          <div class="col-sm-6">
          <input id="address" type="text" class="form-control" placeholder="Enter your adress" name="address"  required>
         </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">{{ __('Password') }} :</label>
          <div class="col-sm-6">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
                       @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                           </span>
                      @endif

         </div>
        </div>
        <div class="form-group row">
          <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Confirm Password') }} :</label>
          <div class="col-sm-6">
          <input id="password-confirm" type="password" class="form-control" placeholder="Retry Password" name="password_confirmation" required>
         </div>
        </div>
        <div class="form-group row">
        <label for="password-confirm" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-6">
        <button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">
                                    {{ __('Register') }}
                                </button>
        </div>
      </div>
       </form> 
      </div>
      </div>
       </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
    var basePath = $('base').attr('href');

    $('#divisions').on('change', function(e){
        console.log(e);
        var div_id = e.target.value;
        $.get(basePath +'json-districts?div_id=' + div_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $('#thanas').empty();
          $('#thanas').append('<option value="0" disable="true" selected="true">=== Select Thanas ===</option>');

          $.each(data, function(index, districtObj){
            $('#districts').append('<option value="'+ districtObj.id +'">'+ districtObj.name +'</option>');
          })
        });
    });

    $('#districts').on('change', function(e){
        console.log(e);
        var dist_id = e.target.value;
        $.get(basePath +'json-thanas?dist_id=' + dist_id,function(data) {
          console.log(data);
          $('#thanas').empty();
          $('#thanas').append('<option value="0" disable="true" selected="true">=== Select Thanas ===</option>');

          $.each(data, function(index, thanaObj){
            $('#thanas').append('<option value="'+ thanaObj.id +'">'+ thanaObj.name +'</option>');
          })
        });
    });
    
</script>

@endsection