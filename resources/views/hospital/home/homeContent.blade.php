@extends('hospital.master')

@section('mainContent')
    	    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
          <div class="card bg-pattern-primary">
            <div class="card-body text-center">
              <h1  style="color: #ffffff">Welcome to doctorghor.com</h1>
              <h4  style="color: #ffffff">Hospital Dashboard</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card bg-primary">
            <img style="height: 320px;" src="{{ asset('public/frontend') }}/assets/img/hospital_banner.jpg">
          </div>
        </div>
      </div>
    </div>
@endsection
  

@section('footer')
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Doctor Ghor
        </div>
      </div>
    </footer>
@endsection

