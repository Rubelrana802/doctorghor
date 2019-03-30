@extends('patient.master')

@section('mainContent')

<section class="fdb-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
        <h1>Doctor Appointment</h1>
        <div class="input-group mt-5 mb-5">
          <input type="text" class="form-control" name="doctor_name" id="doctor_name" placeholder="Please search doctor name here..">
          <div id="doctorList"></div>
          {{ csrf_field() }}
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br/><br/><br/><br/><br/><br/>

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

</script>

@endsection