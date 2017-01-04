@extends('main')

@section('content')

<div class="row">
	


	<div class="col-md-6 col-md-offset-2">
		<h3>Sign In</h3>
		<form action="{{ route('signin') }}" method="post">
			<div class="form-group">
				<label for="email">
					Your Email
				</label>
				<input class="form-control" type="text" name="email"></input>
			</div>


			<div class="form-group">
				<label for="password">
					Your password
				</label>
				<input class="form-control" type="text" name="password"></input>
			</div>
			
			<button type="submit" class="btn btn-primary">Submit</button>
			
			<input type="hidden" name="_token" value="{{ Session::token() }}"></input>
		</form>
	</div>

</div>

@stop
