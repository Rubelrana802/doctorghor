@extends('patient.master')

@section('mainContent')
<div class="container-fluid">
	  
<section class="fdb-block ">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Welcome to doctorghor.com</h1>
        <h3>Patient Dashboard</h3>
          <div class="row justify-content-center">
            <div class="col-6">
            <img style="width:179px; height: 180px!important;" alt="image" class="img-fluid mt-2 rounded-circle" src="{{ asset('public/frontend') }}/assets/img/doctor-1.jpg">
          </div>
        </div>
        <div class="table-responsive mt-3">
        <table class="table table-striped mx-auto w-auto border">
          @foreach($patients as $patient)
          <tbody>
            <tr>
              <th class="align-right">Hospital Name</th>
              <th>:</th>
              <th>{{ $patient->hospital_name }}</th>
            </tr>
            <tr>
              <th>Address</th>
              <th>:</th>
              <th>{{ $patient->address }}</th>
            </tr>
            <tr>
              <th>Doctor Name</th>
              <th>:</th>
              <th>{{ $patient->doctor_name }}</th>
            </tr>
            <tr>
              <th>Fee</th>
              <th>:</th>
              <th>{{ $patient->fee }} &#2547;</th>
            </tr>
            <tr>
              <th>Appointment Time & Date</th>
              <th>:</th>
              <th>{{ $patient->datetime }}</th>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      </div>
    </div>

  </div>
</section>
</div>
@endsection
