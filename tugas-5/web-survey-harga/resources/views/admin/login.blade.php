@extends('main')
@section('title','Commodity Center')
@section('content')
<!-- <img style="height: auto;" src="{{asset('images/commodities-wallpaper.jpg')}}" class="img-circle" alt="User Image"> -->
	<form id="admin-login" method="POST" action="{{route('admin-do-login')}}" autocomplete="off">
		@csrf
		<div class="login-container">
			<div class="login-form">
				<h1><b>ADMIN LOGIN</b></h1>
				<div class="input-text">
					<div class="form-group">
						<label for="username-input">Username</label>
						<input type="text" name="username" class="form-control" id="admin-username-input" aria-describedby="username" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="password-input">Password</label>
						<input type="password" name="password" class="form-control" id="admin-password-input" aria-describedby="password" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="LOGIN" class="form-control btn btn-primary">
				</div>
			</div>
		</div>
	</form>
@endsection
@section('script')
<script type="text/javascript">
	const hasAlert = @if(Session::has("type") || Session::has("message")) true @else false @endif;
	const Toast = Swal.mixin({
		toast: true,
		position: 'top-start',
		showConfirmButton: false,
		timer: 4000,
		timerProgressBar: true,
	})
	$(document).ready(function() {
		if(hasAlert){
			Toast.fire({
				icon: '{{Session::get("type")}}',
				title: '{{Session::get("message")}}'
			})
		}
	} );
</script>
@endsection
