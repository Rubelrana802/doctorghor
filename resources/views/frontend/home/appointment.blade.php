@extends('frontend.master')
@section('MainContent')

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
                                    	<h4 class="text-success">Request for Appointment:</h4>
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
                                            <form action="" class="form-inlin justify-content-center">
                                            	@csrf
                                                <input type="hidden" name="datetime" value="<?php echo $datetime; ?>">
                                                <div class="form-group">
                                                    <label class="sr-only">Name</label>
                                                    <input type="text" class="form-control" name="patientname" placeholder="Enter patient name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label  class="sr-only">{{ __('E-Mail Address') }}</label>
                                                    <input id="email" type="email" class="form-control form-control-rounded{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter patient email" name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                </div>
                            <div class="form-group">
                                <label class="sr-only">Mobile</label>
                                    <div class="input-group"><span style="padding:6px 2px 6px 12px;border:none;color:#fff;background-color:#28a745;" class="input-group-addon" id="sizing-addon2"><strong>+88</strong></span>
									   <input type="text" class="form-control mobile input-bg-common input-bg-common-sm " required="" name="mobile" id="mobile_no_field" placeholder="xxxxxxxxxx" maxlength="11" title="Please put your valid mobile no" style="-webkit-border-top-right-radius: 4px;	-webkit-border-bottom-right-radius: 4px;	-moz-border-radius-topright: 4px;	-moz-border-radius-bottomright: 4px;	border-top-right-radius: 4px;	border-bottom-right-radius: 4px;">
								    </div>
                            </div>
                            <div class="form-group">
                                <label class="text-left">Have you visited this doctor before?</label>
						        <label class="radio-inline">
							<input type="radio" class="visit" name="visit" value="1"> Yes</label>
							<label class="radio-inline">
								<input type="radio" name="visit" class="visit" value="0" checked="checked"> No</label>
                            </div>
                            
                            <input type="hidden" name="doctorid" value="{{ $doctor->id }}">
                            @endforeach
                            <button type="submit" id="submit" class="btn btn-success">Request Appointment</button>
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