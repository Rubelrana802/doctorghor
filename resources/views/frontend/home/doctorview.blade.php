@extends('frontend.master')
@section('MainContent')
<base href="http://localhost/doctorghor/" >

	<section class="padding-tb-100px background-grey-1">
        <div class="container">
                            <section class="fdb-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col col-md-12 text-center">
        @foreach($hospitals->slice(0, 1) as $hospital )
            <h1 style="text-transform: uppercase;">{{ $hospital->hospital_name}}</h1>
            <p class="lead">Department of {{ $hospital->dept_name}} </p><br>
        @endforeach
      </div>
    </div>
  </div>
</section>
            <div class="row">
                @foreach($doctors as $doctor )
                <div class="col-lg-3 col-md-6 hvr-bob sm-mb-45px">
                    <div class="background-white box-shadow wow fadeInUp" data-wow-delay="0.2s">
                        <div class="thum">
                            <a href="{{ url('/doctor/single/'.$doctor->id) }}"><img src="{{ asset('public/frontend') }}/assets/img/doctor-1.jpg" alt=""></a>
                        </div>
                        <div class="padding-30px">
                            <h5 class="margin-tb-10px"><a class="text-dark" id="doctor_id" href="{{ url('/doctor/single/'.$doctor->id) }}">{{ $doctor->name }}</a></h5>
                            <span class="text-grey-2">{{ $doctor->Specialty }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection