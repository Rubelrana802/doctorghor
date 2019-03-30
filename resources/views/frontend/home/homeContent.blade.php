@extends('frontend.master')
@section('MainContent')

<base href="https://doctorghor.com/" >

<section class="padding-tb-80px background1" id="banner">
    <div class="container z-index-2 links" style="margin-top: -50px;">
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">
        <div class="input-group" style="margin-top: 120px;">
          <input type="text" class="form-control" name="doctor_name" id="doctor_name" placeholder="Please search doctor name here..">
          <div id="doctorList"></div>
          {{ csrf_field() }}
        </div>
      </div>
    </div>
  </div>
    <div class="title text-center">
        <h1 class="text-dark font-weight-300" style="margin-top: 22px; font-size: 30px; color: #ffffff;">Find Your Doctor</h1>
    </div>
        <div class="container z-index-2 position-relative">
            <div class="justify-content-center">
     			{!! Form::open(['url' => '/doctor/view/','method'=>'post',])  !!}
                @csrf	
                    <div class="col-sm-12">
                        <div class="form-group row" style="margin-top: -8px;">
                            <label for="division" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="divisions" id="divisions" tabindex="-1" aria-hidden="true">
                                    <option value="" disable="true" selected="true">Please select division</option>
                                    @foreach ($divisions as $key => $value)
                                        <option value="{{$value->id}}">{{ $value->division_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                               <span class="error-form" id="division"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="district" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="districts" id="districts" >
                                    <option value="" disable="true" selected="true" style="color: #211251;">Please select district</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                               <span class="error-form" id="district"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="thana" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="thanas" name="thanas">
                                    <option value="" disable="true" selected="true">Please select thana</option>   
                                </select>
                            </div>
                            <div class="col-md-2">
                               <span class="error-form" id="thana"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="hospital" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="hospitals" name="hospitals">
                                    <option value="" disable="true" selected="true">Please select hospital</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                               <span class="error-form" id="hospital"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="department" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="departments" name="departments">
                                    <option value="0" disable="true" selected="true">Please select department</option>   
                                </select>
                            </div>
                            <div class="col-md-2">
                               <span class="error-form" id="department"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                        <label for="basic-input" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-6">
                           <button type="submit" id="submit" class="btn btn-primary btn-block shadow-primary px-5" formtarget="_blank" disabled="disabled"> Search</button>
                        </div>
                    </div>
                </div>
			{{ Form::close() }}
        </div>
    </section>
    <section class="padding-tb-100px background1" style="background-image: url('{{ asset('public/frontend') }}/assets/img/disbanner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-sm-1"></div>
                <div class="col-lg-10 col-sm-10">
                    <div class="row count_row">
                        <div class="col-lg-4 col-sm-4 text-center">
                            <p class="count_number count_color">1200 +</p>
                            <p class="count_text count_color">Patients Served</p>
                            <p class="count_icon count_color">
                                <i class="fas fa-stethoscope"></i>
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-4 text-center">
                            <p class="count_number count_color">650</p>
                            <p class="count_text count_color">Verified Doctors</p>
                            <p class="count_icon count_color">
                                <i class="fas fa-user-md"></i>
                            </p>
                        </div>
                        <div class="col-lg-4 col-sm-4 text-center">
                            <p class="count_number count_color">64</p>
                            <p class="count_text count_color">Districts Covered</p>
                            <p class="count_icon count_color">
                                <i class="fa fa-map-marker-alt"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('public/frontend/assets/js/extention/choices.js') }}"></script>

<script type="text/javascript">
    var basePath = $('base').attr('href');

    $('#divisions').on('change', function(e){
        console.log(e);
        var div_id = e.target.value;
        $.get(basePath +'/json-districts?div_id=' + div_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">Please select district</option>');

          $('#thanas').empty();
          $('#thanas').append('<option value="0" disable="true" selected="true">Please select thana</option>');

          $('#hospitals').empty();
          $('#hospitals').append('<option value="0" disable="true" selected="true">Please select hospital</option>');

          $('#departments').empty();
          $('#departments').append('<option value="0" disable="true" selected="true">Please select department</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
          })
        });
    });

    $('#districts').on('change', function(e){
        console.log(e);
        var dist_id = e.target.value;
        $.get(basePath +'json-thanas?dist_id=' + dist_id,function(data) {
          console.log(data);
          $('#thanas').empty();
          $('#thanas').append('<option value="0" disable="true" selected="true">select thana</option>');

          $.each(data, function(index, thanasObj){
            $('#thanas').append('<option value="'+ thanasObj.id +'">'+ thanasObj.name +'</option>');
          })
        });
    });

    $('#thanas').on('change', function(e){
        console.log(e);
        var thana_id = e.target.value;
        $.get(basePath +'json-hospitals?thana_id=' + thana_id,function(data) {
          console.log(data);
          $('#hospitals').empty();
          $('#hospitals').append('<option value="0" disable="true" selected="true">select hospital</option>');

          $.each(data, function(index, hospitalsObj){
            $('#hospitals').append('<option value="'+ hospitalsObj.id +'">'+ hospitalsObj.name +'</option>');
          })
        });
    });

    $('#hospitals').on('change', function(e){
        console.log(e);
        var hospital_id = e.target.value;
        $.get(basePath +'json-departments?hospital_id=' + hospital_id,function(data) {
          console.log(data);
          $('#departments').empty();
          $('#departments').append('<option value="0" disable="true" selected="true">select department</option>');

          $.each(data, function(index, departmentsObj){
            $('#departments').append('<option value="'+ departmentsObj.id +'">'+ departmentsObj.name +'</option>');
          })
        });
    });

    $('#departments').on('change', function(e){
        console.log(e);
        var dept_id = e.target.value;
        $.get(basePath +'json-doctors?dept_id=' + dept_id,function(data) {
          console.log(data);

          $.each(data, function(index, doctorstsObj){
            $('#doctors').append('<option value="'+ doctorstsObj.id +'">'+ doctorstsObj.name +'</option>');
          })
        });
    });

//form validation
$(document).ready(function(){
    $('#departments').change(function(){
        $('#submit').removeAttr('disabled');
    });
});
   

const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });
      
$('#link').click(function(){
   $('.links').css('visibility', 'visible');
   $(this).css('visibility', 'hidden');
})
</script>


<style type="text/css">
    .background1{
        background: #51BFEC;      
    }
    .count_row{

        color: #ffffff;
        font-size: 30px;
    }
  #banner{

  background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
rgba(210, 218, 226,1.0),
      rgba(32, 191, 107,1.0)
    ),
    /* bottom, image */
    url('{{ asset('public/frontend') }}/assets/img/worldbanner.jpg');
      -webkit-background-size:cover;
  background-size: cover;
  text-align: center;
  height: auto;
  }

</style>

<script>
$(document).ready(function(){

 $('#doctor_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#doctorList').fadeIn();  
                    $('#doctorList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#doctor_name').val($(this).text());  
        $('#doctorList').fadeOut();  
    });  
});

$('input[readonly]').click(function () {
    $(this).removeAttr('readonly');
})

</script>

@endsection