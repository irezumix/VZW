{{-- @extends('layouts.frontend')

@section('main-content')
    <h1>Register</h1>

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    <form action="{{ route('register.post') }}" method="POST">
        {{ csrf_field() }}
        <p>
            <label for="name">Name:</label>
            <input type="name" name="name" id="name">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
@endsection --}}


@extends('layouts.frontend')

@section('main-content')


<div class="loginbg">


    
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                        <form action="{{ route('register.post') }}" method="POST" class="login100-form validate-form">
        {{ csrf_field() }}
					<span class="login100-form-title p-b-34">
						Register
					</span>
    					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20">
						<input class="input100" type="name" name="name" placeholder="Naam">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="password" name="password_confirmation" placeholder="Passwoord herhalen">
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
						<input type="submit" class="login100-form-btn" value="Register">
					</div>

					<div class="w-full text-center">
						<a href="/login" class="txt3">
							login
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