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
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{ asset('public/admin') }}/assets/images/patientlogo.png">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Login</div>
		    <form method="POST" action="{{ route('patient.login.submit') }}" aria-label="{{ __('patient.login.submit') }}">
                        @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
				  <input id="email" type="email" class="form-control form-control-rounded{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>


			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="password" class="sr-only">{{ __('Password') }}</label>
				  <input id="password" type="password" class="form-control form-control-rounded{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter your phone number">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

				<button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">
                    {{ __('Login') }}
                </button>
			  <div class="text-center pt-3">
				<hr>
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
