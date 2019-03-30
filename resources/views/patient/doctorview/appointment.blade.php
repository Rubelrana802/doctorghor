@extends('patient.master')

@section('mainContent')

<input type="hidden" name="" value="{{ route('confirm') }}">

	<section class="padding-tb-100px background-grey-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <section id="cover">
                        <div id="cover-caption">
                            <div id="container" class="container">
                                <div class="row">
                                    <div class="col-sm-6 offset-sm-3 text-center">
                                        <br>
                                    	<h4 class="text-info">Request for Appointment</h4>
                                        @foreach($doctors as $doctor)
	                   					<hr style="margin: 10px 0px 10px 0 !important; text-align: center;">
	                   					<p class="doc_name">{{ $doctor->name }}</p>
	                   					<p class="doc_designation">{{ $doctor->Designation }}, Dept. of {{ $doctor->dept_name }}, {{ $doctor->hospital_name }}</p>
	                   					<hr style="margin: 10px 0px 10px 0px !important;">
	                   					<p class="doc_office"></p>
                                       
	                   					<!-- <p><span>Sima General Hospital &amp; Diagnostic Center, Main Branch, </span>Savar, Dhaka</p>
	                   					<hr style="margin: 10px 0px 10px 0px !important;"> -->
	                   					<p class="doc_designation">Appointment Time : <?php echo $datetime; ?></p>
	                   					<hr style="margin: 10px 0px 10px 0px !important;"><br><br>
                                            
                                        <legend><center>Request for Appointment</center></legend>
                                        <div class="info-form">
                            <form action="{{ url('patient/appointment') }}" class="form-inlin justify-content-center">
                                @csrf
                                <input type="hidden" name="datetime" value="<?php echo $datetime; ?>">
                                <div class="form-group">
                                    <label class="sr-only">Patient Name</label>
                                        <select name="patient_id" class="form-control" selected="true" readonly>
                                        <option value="{{ Auth::guard('patient')->user()->id }}">{{ Auth::guard('patient')->user()->name }}</option>
                                    </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="sr-only">Mobile</label>
                                    <div class="input-group"><span style="padding:6px 2px 6px 12px;border:none;color:#fff;background-color: #11CEEC;" class="input-group-addon" id="sizing-addon2"><strong>+88</strong></span>
									   <input type="text" class="form-control mobile input-bg-common input-bg-common-sm " required="" name="mobile" id="mobile_no_field" placeholder="xxxxxxxxxx" maxlength="11" title="Please put your valid mobile no" style="-webkit-border-top-right-radius: 4px;	-webkit-border-bottom-right-radius: 4px;	-moz-border-radius-topright: 4px;	-moz-border-radius-bottomright: 4px;	border-top-right-radius: 4px;	border-bottom-right-radius: 4px;">
								    </div>
                            </div>
                            <input type="hidden" name="doctor_id" value="{{ $doctor->id}}">
                            @endforeach
                            <button type="submit" id="submit" class="btn btn-info">Request Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			</div>
	</div>
            </div>
        </div>
    </section>

@endsection