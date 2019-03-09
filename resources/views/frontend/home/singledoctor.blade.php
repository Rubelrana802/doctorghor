@extends('frontend.master')
@section('MainContent')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/assets/datetime/jquery.datetimepicker.min.css') }}">

<script src="{{ asset('public/frontend/assets/datetime/jquery.jquery.js') }}"></script>
<script src="{{ asset('public/frontend/assets/datetime/jquery.datetimepicker.full.js') }}"></script>

<section class="banner padding-tb-120px sm-ptb-32px background-overlay"  style="background-color: #ddd">
  @foreach($doctors as $doctor)  
  <div class="container z-index-2 position-relative">
    <div class="row text-center pb-0 pb-lg-4">
      <div class="col-12">
            <img src="{{ asset('public/frontend') }}/assets/img/doctor-1.jpg" class="img-circle profile_page_doctor_image" alt="profile pic">
            <p class="profile_page_doctor_name">{{ $doctor->name }}</p>
            <p class="profile_page_doctor_designation">{{ $doctor->Designation }}, Dept. of {{ $doctor->dept_name }}, {{ $doctor->hospital_name }}</p>
            <p class="profile_page_doctor_sp">{{ $doctor->Specialty }}</p>
      </div>
    </div>
    <div class="row text-center pt-4 pt-md-5">
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 m-sm-auto">
        <p class="block_heading custom_para Special"><i class="fa fa-stethoscope" aria-hidden="true"></i> Specialist in</p>
                        <p class="block_heading custom_para"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></p>
                        <p class="custom_para">{{ $doctor->Specialty }}</p>
                        <hr class="custom_para custom_hr_profile">
                        <p class="profile_degree_portion">{{ $doctor->Degree }}.<br>
                        </p>
                        <hr class="custom_para custom_hr_profile">
                        <p class="profile_description_portion">{{ $doctor->Description }}</p>
      </div>

      <div class="col-12 col-sm-10 col-md-6 col-lg-4 ml-sm-auto mr-sm-auto mt-5 mt-md-0">
        <p class="appointment">Doctor's Appointment at</p>
                            <p class="displaytime"><time>[  {{ Carbon\Carbon::parse($doctor->start_time)->format('H:i') }} to {{ Carbon\Carbon::parse($doctor->end_time)->format('H:i') }} ]</time></p>
                            <div id="locations_slots_div imagebook">
                                <center>
                                    <img style="width:60px;" src="{{ asset('public/frontend/assets/img/slot_loader.gif') }}" alt="Loading">
                                </center><br>
                            </div>  
                <form role="form" method="post" action="{{ url('/confirm/appointment') }}">
                        {{csrf_field()}}            
                        <div class="form-group row">
                            <label for="datetime" class="col-sm-4 col-form-label">Appointment Date: </label>
                            <div class="col-sm-7">
                            <input type="text" name="datetime" id="datetime" class="form-control" readonly="">       
                        </div>
                    </div>
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}"> 
                     <div class="form-group row">
                      <label for="input-1" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-12">
                        <button type="submit" id="submit" class="btn btn-success btn-block shadow-success px-5"> Get Appointment</button>
                      </div>
                    </div>
                </form>
      </div>

    </div>
  </div>
  @endforeach
</section>


<style type="text/css">
.profile_page_doctor_image {
    padding: 5px;
    width: 150px;
    height: 150px;
}
.img-circle {
    border-radius: 50%;
}
img {
    vertical-align: middle; border: 0px;
}

.appointment_heading {
    padding: 10px;
    background: #51bfec;
    text-align: center;
    position: relative;
    box-sizing: border-box;
    -webkit-transition: all 280ms cubic-bezier(.4,0,.2,1);
    transition: all 280ms cubic-bezier(.4,0,.2,1);
    box-shadow: 0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23);
}

.profile_page_info_block {
    width: 50%;
    padding: 20px;
    -webkit-box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);
    -moz-box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);
    box-shadow: -1px 2px 24px 0px rgba(127,127,127,1);
    color: #7F8080;
    font-size: 15px;
}
.fa-heart {
    color: #51BFEC;
    font-size: 50px;
}

.fa-clock {
    color: #51BFEC;
    font-size: 50px;
}


.Special{
    color: #51BFEC;
    font-size: 30px;
}

.appointment{
    color: #51BFEC;
    font-size: 25px;
    padding: 10px;
}

.locations_slots_div {
    padding: 20px;
}
.displaytime{
    padding-top: 10px;
    font-size: 25px;
}

#datetime{
    margin-left: 0px;
}
</style>

<script type="text/javascript">
    $("#datetime").datetimepicker({
        step: 10
    });

$(document).ready(function(){
    $('#datetime').change(function(){
        $('#submit').removeAttr('disabled');
    });
});

</script>

@endsection