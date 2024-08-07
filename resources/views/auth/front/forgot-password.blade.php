@extends('layouts.front.front')
@section('content')

<section>
  <div class="row">
	<div class="col-md-12 login-bg">

	</div>
	<div class="container">
	  <div class="col-md-6 col-md-offset-3 login-form-block">
		<h2>Forgot Password</h2>
		@if (session()->has('error'))
			<div class="alert alert-danger alert-dissmissible show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
				{{ session('error') }}
			</div>
		@endif
		<form action="{{ route('forgot-password') }}" method="post">
			@csrf
			  <div class="form-group">
				<input type="text" name="mobile_no" class="form-control login-input {{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" placeholder="Enter Phone Number" value="{{ old('mobile_no') }}" required>
				@if($errors->has('mobile_no'))
					<div class="invalid-feedback">
						{{ $errors->first('mobile_no') }}
					</div>
				@endif
			  </div>
			  <div class="form-group text-center">
				<button type="submit" class="btn btn-info login-form-btn">Send OTP</button>
			  </div>
		</form>
	  </div>
	  <div class="col-md-6 col-md-offset-3 login-form text-center">
		<p>Login Here</p>
		<a href="{{ route('login') }}" class="btn btn-warning signup-btn">Login</a>
	  </div>
	</div>
  </div>
</section>



@endsection

