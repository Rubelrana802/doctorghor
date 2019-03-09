@extends('admin.master')

@section('mainContent')
<base href="https://doctorghor.com/" >
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
                    <a href="{{ url('/admindoctor/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Doctor </a>
                </div>
            </div>
        </div>
        <br />
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Doctor</div>
				   <hr>				   
				    {!! Form::open(['url' => '/doctor/save','method'=>'post', 'file'=>'true']) !!}
                        <div class="form-group row">
                            <label for="hospital" class="col-sm-2 col-form-label">Select Hospital :<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="hospitals" name="hospitals" required>
                                	<option value="">Please select hospital</option>
                                	@foreach ($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                    @endforeach  
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="department" class="col-sm-2 col-form-label">Select Department :<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="departments" name="departments">
                                    <option value="">Please select department</option>   
                                </select>
                            </div>
                        </div>
					<div class="form-group row">
					  <label for="input-3" class="col-sm-2 col-form-label">Doctor Name :<i class="text-danger">*</i></label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="doctorname" placeholder="Enter Your doctor name" required="">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-5" class="col-sm-2 col-form-label">Designation :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-6" name="designation" placeholder="Enter Your designation name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-7" class="col-sm-2 col-form-label">Specialty :<i class="text-danger">*</i></label>
					  <div class="col-sm-6">
						<select class="form-control input-sm specialty" name="specialty" required>
							<option value="">Please select specialty</option>
							<option value="Allergy &amp; Immunology">Allergy &amp; Immunology</option>
							<option value="Anesthesia">Anesthesia</option>
							<option value="Cardiology (Heart, Cardiac Surgery, Cardiovascular, Hypertension, Blood Pressure)">Cardiology (Heart, Cardiac Surgery, Cardiovascular, Hypertension, Blood Pressure)</option>
							<option value="Colorectal Surgery (Surgery of Anal Canal, Rectum, etc.)">Colorectal Surgery (Surgery of Anal Canal, Rectum, etc.)</option>
							<option value="Dentistry (Dental, Orthodontics, Maxillofacial Surgery, Scaling)">Dentistry (Dental, Orthodontics, Maxillofacial Surgery, Scaling)</option><option value="4">Dermatology (Skin, Venereology, Sexual, Hair, Allergy)</option><option value="Endocrinology (Diabetes, Hormones, Thyroid, etc.)">Endocrinology (Diabetes, Hormones, Thyroid, etc.)</option><option value="ENT (Ear, Nose &amp; Throat, Otorhinolaryngology)">ENT (Ear, Nose &amp; Throat, Otorhinolaryngology)</option><option value="Gastroenterology (Stomach, Pancreas and Intestine)">Gastroenterology (Stomach, Pancreas and Intestine)</option><option value="General Physician (All or any common diseases and health issues)">General Physician (All or any common diseases and health issues)</option><option value="37">General Surgery (Incision, Operation)</option><option value="11">Gynaecologic Oncology (Cancer of Female Reproductive System)</option><option value="Gynaecology and Obstetrics (Pregnancy, Menstrual, Uterus, Female)">Gynaecology and Obstetrics (Pregnancy, Menstrual, Uterus, Female)</option><option value="Haematology (Blood related diseases)">Haematology (Blood related diseases)</option><option value="Hepato-Biliary- Pancreatic Surgery">Hepato-Biliary- Pancreatic Surgery</option><option value="Hepatology (Liver, Gallbladder, Biliary system)">Hepatology (Liver, Gallbladder, Biliary system)</option><option value="Infectious Diseases">Infectious Diseases</option><option value="Infertility">Infertility</option><option value="Medicine (All Diseases of Adults)">Medicine (All Diseases of Adults)</option><option value="Neonatology (New Born Issues)">Neonatology (New Born Issues)</option><option value="Nephrology (Kidney, Ureter, Urinary Bladder)">Nephrology (Kidney, Ureter, Urinary Bladder)</option><option value="Neuromedicine (Brain, Spinal Cord, Nerve)">Neuromedicine (Brain, Spinal Cord, Nerve)</option><option value="Neurosurgery (Surgery of Brain, Spinal Cord and Nerve)">Neurosurgery (Surgery of Brain, Spinal Cord and Nerve)</option><option value="Nutritionist (Food, Diet, Weight Management)">Nutritionist (Food, Diet, Weight Management)</option><option value="Oncology (Cancer)">Oncology (Cancer)</option><option value="Ophthalmology (Eye, Vision, Cataracts, etc.)">Ophthalmology (Eye, Vision, Cataracts, etc.)</option><option value="Orthopaedics (Bone, Joint, Fractures)">Orthopaedics (Bone, Joint, Fractures)</option><option value="Other Speciality (not mentioned in the list)">Other Speciality (not mentioned in the list)</option><option value="Paediatric Surgery (Surgery for Children)">Paediatric Surgery (Surgery for Children)</option><option value="Paediatrics (Child or Infant any disease)">Paediatrics (Child or Infant any disease)</option><option value="Pain Management">Pain Management</option><option value="Physical Medicine (Paralysis, Pain Management)">Physical Medicine (Paralysis, Pain Management)</option><option value="Physiotherapy">Physiotherapy</option><option value="Plastic Surgery, Reconstruction or Cosmetic Surgery">Plastic Surgery, Reconstruction or Cosmetic Surgery</option><option value="Psychiatry (Mental Health, Drug Abuse, Depression, etc.)">Psychiatry (Mental Health, Drug Abuse, Depression, etc.)</option><option value="Respiratory Medicine (Pulmonary, Lung Diseases, Bronchitis etc.)">Respiratory Medicine (Pulmonary, Lung Diseases, Bronchitis etc.)</option><option value="Rheumatology (Arthritis, Joint, Soft Tissue problems)">Rheumatology (Arthritis, Joint, Soft Tissue problems)</option><option value="Sex Specialist(Venereology)">Sex Specialist(Venereology)</option><option value="Speech and Language Therapy">Speech and Language Therapy</option><option value="Thoracic Surgery (Surgery in Chest, Lung, etc.)">Thoracic Surgery (Surgery in Chest, Lung, etc.)</option><option value="Urology (Surgery for Kidney, Ureter or Urinary Bladder)">Urology (Surgery for Kidney, Ureter or Urinary Bladder)</option><option value="Vascular Surgery (e.g. Surgery of Blood Vessels)">Vascular Surgery (e.g. Surgery of Blood Vessels)</option>
						</select>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-9" class="col-sm-2 col-form-label">Gender :</label>
					  <div class="col-sm-6">
						<select name="Gender" class="form-control" selected="true" >
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Mobile :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-11" name="mobile" placeholder="Enter Your mobile name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Fee :<i class="text-danger">*</i></label>
					  <div class="col-sm-6">
						<input type="number" class="form-control" id="input-22" name="fee" placeholder="Enter Your fee new patient" required="">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Available time :<i class="text-danger">*</i></label>
					  <div class="col-sm-2">
						<input type="time" class="form-control" id="input-22" name="starttime" required="">
					  </div> To 
					  <div class="col-sm-2">
						<input type="time" class="form-control" id="input-22" name="endtime" required="">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-10" class="col-sm-2 col-form-label">Doctor Image :</label>
					  <div class="col-sm-6">
						<input type="file" class="form-control" id="input-22" name="image">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-12" class="col-sm-2 col-form-label">BMDC Number :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-13" name="bmdc" placeholder="Enter Your bmdc name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-14" class="col-sm-2 col-form-label">Degree :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-15" name="degree" placeholder="Enter Your degree name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-16" class="col-sm-2 col-form-label">Addreess :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-17" name="addreess" placeholder="Enter Your addreess name">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="input-18" class="col-sm-2 col-form-label">Description :</label>
					  <div class="col-sm-6">
						<textarea  class="form-control" name="description" placeholder="Enter Your description name">
						</textarea>
					  </div>
					</div>
					<div class="form-group row">
				  	<label for="email" class="col-sm-2 col-form-label">{{ __('E-Mail :') }}<i class="text-danger">*</i></label>
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
				  <label for="password" class="col-sm-2 col-form-label">{{ __('New Password :') }}<i class="text-danger">*</i></label>
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
			   
				  <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Confirm Pswd :') }}<i class="text-danger">*</i></label>
				  <div class="col-sm-6">
				  <input id="password-confirm" type="password" class="form-control" placeholder="Retry Password" name="password_confirmation" required>
			   </div>
			  </div>
					</div> 
					 <div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-6">
						<button type="submit" class="btn btn-info shadow-info px-5 "></i> Save</button>
					  </div>
					</div>
					{!! Form::close() !!}
				 </div>
			   </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    var basePath = $('base').attr('href');

    $('#hospitals').on('change', function(e){
        console.log(e);
        var hospital_id = e.target.value;
        $.get(basePath +'/json-departments?hospital_id=' + hospital_id,function(data) {
          console.log(data);

          $('#departments').empty();
          $('#departments').append('<option value="" disable="true" selected="true">Please select department</option>');

          $.each(data, function(index, departmentsObj){
            $('#departments').append('<option value="'+ departmentsObj.id +'">'+ departmentsObj.name +'</option>');
          })
        });
    });

</script>
@endsection