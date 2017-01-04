<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>our title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
@include('includes.header')
<div class="row">
	<div class="col-md-6">
		<h3>signUp</h3>
		<form action="{{ route('signup') }}" method="post">
			<div class="form-group">
				<label for="email">
					Your Email
				</label>
				<input class="form-control" type="text" name="email"></input>	
			</div>

			<div class="form-group">
				<label for="first_name">
					Your First Name
				</label>
				<input class="form-control" type="text" name="first_name"></input>
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


	<div class="col-md-6">
		<h3>signIn</h3>
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
</body>
</html>