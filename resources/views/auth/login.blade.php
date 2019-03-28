@extends('layouts.frontend')

@section('main-content')


<div class="loginbg">


    
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                        <form action="{{ route('login.post') }}" method="POST" class="login100-form validate-form">
        {{ csrf_field() }}
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					@if($errors->any())
						<div class="wrap-input100 rs1-wrap-input101 m-b-20" data-validate="Type user name">
							
												
							@foreach ($errors->all() as $error)
								<p>{{ $error }}</p>
							@endforeach
					
						</div>
 					  @endif
					
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="login">
					</div>

					<div class="w-full text-center">
						<a href="/register" class="txt3">
							Register
						</a>
					</div>
				</form>

				<div class="login100-more"></div>
			</div>
		</div>
	</div>
	</div>
@endsection




</body>
</html>