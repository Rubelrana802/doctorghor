
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Doctorghor- Book Appointment With a Doctor Near You !</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('public/admin') }}/assets/images/fi.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('public/admin') }}/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{ asset('public/admin') }}/assets/images/doctorlogo.png">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Registration</div>
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
		    <form enctype = "multipart/form-data" method="POST" action="{{ route('Doctor.register') }}" aria-label="{{ __('Register') }}">
                @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="name" class="sr-only">{{ __('Name') }}</label>
				  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
			   </div>
			  </div>

					<div class="form-group">
					<div class="position-relative has-icon-right">
					  <label for="input-5" class="sr-only">Designation :</label>
						<input type="text" class="form-control" id="input-6" name="designation" placeholder="Enter Your designation name">
					  </div>
					</div>
					<div class="form-group">
					<div class="position-relative has-icon-right">
					  <label for="input-7" class="sr-only">Specialty :<i class="text-danger">*</i></label>
						<select class="form-control input-sm specialty" name="specialty" required>
							<option value="">Please select specialty</option>
							<option value="Allergy &amp; Immunology">Allergy &amp; Immunology</option>
							<option value="Anesthesia">Anesthesia</option>
							<option value="Cardiology (Heart, Cardiac Surgery, Cardiovascular, Hypertension, Blood Pressure)">Cardiology (Heart, Cardiac Surgery, Cardiovascular, Hypertension, Blood Pressure)</option>
							<option value="Colorectal Surgery (Surgery of Anal Canal, Rectum, etc.)">Colorectal Surgery (Surgery of Anal Canal, Rectum, etc.)</option>
							<option value="Dentistry (Dental, Orthodontics, Maxillofacial Surgery, Scaling)">Dentistry (Dental, Orthodontics, Maxillofacial Surgery, Scaling)</option><option value="4">Dermatology (Skin, Venereology, Sexual, Hair, Allergy)</option><option value="Endocrinology (Diabetes, Hormones, Thyroid, etc.)">Endocrinology (Diabetes, Hormones, Thyroid, etc.)</option><option value="ENT (Ear, Nose &amp; Throat, Otorhinolaryngology)">ENT (Ear, Nose &amp; Throat, Otorhinolaryngology)</option><option value="Gastroenterology (Stomach, Pancreas and Intestine)">Gastroenterology (Stomach, Pancreas and Intestine)</option><option value="General Physician (All or any common diseases and health issues)">General Physician (All or any common diseases and health issues)</option><option value="37">General Surgery (Incision, Operation)</option><option value="Gynaecologic Oncology (Cancer of Female Reproductive System)">Gynaecologic Oncology (Cancer of Female Reproductive System)</option><option value="Gynaecology and Obstetrics (Pregnancy, Menstrual, Uterus, Female)">Gynaecology and Obstetrics (Pregnancy, Menstrual, Uterus, Female)</option><option value="Haematology (Blood related diseases)">Haematology (Blood related diseases)</option><option value="Hepato-Biliary- Pancreatic Surgery">Hepato-Biliary- Pancreatic Surgery</option><option value="Hepatology (Liver, Gallbladder, Biliary system)">Hepatology (Liver, Gallbladder, Biliary system)</option><option value="Infectious Diseases">Infectious Diseases</option><option value="Infertility">Infertility</option><option value="Medicine (All Diseases of Adults)">Medicine (All Diseases of Adults)</option><option value="Neonatology (New Born Issues)">Neonatology (New Born Issues)</option><option value="Nephrology (Kidney, Ureter, Urinary Bladder)">Nephrology (Kidney, Ureter, Urinary Bladder)</option><option value="Neuromedicine (Brain, Spinal Cord, Nerve)">Neuromedicine (Brain, Spinal Cord, Nerve)</option><option value="Neurosurgery (Surgery of Brain, Spinal Cord and Nerve)">Neurosurgery (Surgery of Brain, Spinal Cord and Nerve)</option><option value="Nutritionist (Food, Diet, Weight Management)">Nutritionist (Food, Diet, Weight Management)</option><option value="Oncology (Cancer)">Oncology (Cancer)</option><option value="Ophthalmology (Eye, Vision, Cataracts, etc.)">Ophthalmology (Eye, Vision, Cataracts, etc.)</option><option value="Orthopaedics (Bone, Joint, Fractures)">Orthopaedics (Bone, Joint, Fractures)</option><option value="Other Speciality (not mentioned in the list)">Other Speciality (not mentioned in the list)</option><option value="Paediatric Surgery (Surgery for Children)">Paediatric Surgery (Surgery for Children)</option><option value="Paediatrics (Child or Infant any disease)">Paediatrics (Child or Infant any disease)</option><option value="Pain Management">Pain Management</option><option value="Physical Medicine (Paralysis, Pain Management)">Physical Medicine (Paralysis, Pain Management)</option><option value="Physiotherapy">Physiotherapy</option><option value="Plastic Surgery, Reconstruction or Cosmetic Surgery">Plastic Surgery, Reconstruction or Cosmetic Surgery</option><option value="Psychiatry (Mental Health, Drug Abuse, Depression, etc.)">Psychiatry (Mental Health, Drug Abuse, Depression, etc.)</option><option value="Respiratory Medicine (Pulmonary, Lung Diseases, Bronchitis etc.)">Respiratory Medicine (Pulmonary, Lung Diseases, Bronchitis etc.)</option><option value="Rheumatology (Arthritis, Joint, Soft Tissue problems)">Rheumatology (Arthritis, Joint, Soft Tissue problems)</option><option value="Sex Specialist(Venereology)">Sex Specialist(Venereology)</option><option value="Speech and Language Therapy">Speech and Language Therapy</option><option value="Thoracic Surgery (Surgery in Chest, Lung, etc.)">Thoracic Surgery (Surgery in Chest, Lung, etc.)</option><option value="Urology (Surgery for Kidney, Ureter or Urinary Bladder)">Urology (Surgery for Kidney, Ureter or Urinary Bladder)</option><option value="Vascular Surgery (e.g. Surgery of Blood Vessels)">Vascular Surgery (e.g. Surgery of Blood Vessels)</option>
						</select>
					  </div>
					</div>
					<div class="form-group">
					<div class="position-relative has-icon-right">
					  <label for="input-9" class="sr-only">Gender :</label>
						<select name="gender" class="form-control" selected="true" >
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					  </div>
					</div>
					<div class="form-group">
					<div class="position-relative has-icon-right">
					  <label for="input-10" class="sr-only">Mobile :</label>
						<input type="text" class="form-control" id="input-11" name="mobile" placeholder="Enter Your mobile name">
					  </div>
					</div>
					<div class="form-group">
					<div class="position-relative has-icon-right">
					  <label for="input-10" class="sr-only">Fee :<i class="text-danger">*</i></label>
						<input type="number" class="form-control" id="input-22" name="fee" placeholder="Enter Your fee new patient" required="">
					  </div>
					</div>
					<div class="form-group">
						<div class="position-relative has-icon-right">
					  <label for="input-10" class="sr-only">Available time :<i class="text-danger">*</i></label>
					  <div>
						<input type="time" class="form-control" id="input-22" name="starttime" required="">
					  </div> To 
					  <div>
						<input type="time" class="form-control" id="input-22" name="endtime" required="">
					  </div>
					</div>
					<br>
					<div class="form-group">
					<div class="position-relative has-icon-right">
					  <label for="input-10" class="sr-only">Doctor Image :</label>
						<input type="file" class="form-control" id="input-22" name="image">
					  </div>
					</div>
					<div class="form-group">
						<div class="position-relative has-icon-right">
					  <label for="input-12" class="sr-only">BMDC Number :</label>
						<input type="text" class="form-control" id="input-13" name="bmdc" placeholder="Enter Your bmdc name">
					  </div>
					</div>
					<div class="form-group">
						<div class="position-relative has-icon-right">
					  <label for="input-14" class="sr-only">Degree :</label>
						<input type="text" class="form-control" id="input-15" name="degree" placeholder="Enter Your degree name">
					  </div>
					</div>
					<div class="form-group">
						<div class="position-relative has-icon-right">
					  <label for="input-16" class="sr-only">Addreess :</label>
						<input type="text" class="form-control" id="input-17" name="addreess" placeholder="Enter Your addreess name">
					  </div>
					</div>
					<div class="form-group">
						<div class="position-relative has-icon-right">
					  <label for="input-18" class="sr-only">Description :</label>
						<textarea  class="form-control" name="description" placeholder="Enter Your description name">
						</textarea>
					  </div>
					</div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
				  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email ID" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="password" class="sr-only">{{ __('Password') }}</label>
				  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
				  <input id="password-confirm" type="password" class="form-control" placeholder="Retry Password" name="password_confirmation" required>
			   </div>
			  </div>
			  <button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">
                                    {{ __('Register') }}
                                </button>
			  <div class="text-center pt-3">
				<hr>
				<p class="text-muted">Already have an account? <a href="{{ url('/dctr/login')}}"> Login In here</a></p>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/admin') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('public/admin') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('public/admin') }}/assets/js/bootstrap.min.js"></script>
  
</body>
</html>
