@extends('main')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>SignUp</h3>
		<form action="{{ route('signup') }}" method="post" enctype='multipart/form-data' files="true"  >
			<div class="form-group">
				<label for="email">
					Your Email
				</label>
				<input class="form-control" type="text" name="email"> </input>
			</div>

			<div class="form-group">
				<label for="first_name">
					Your First Name
				</label>
				<input class="form-control" type="text" name="first_name"> </input>
			</div>

			<div class="form-group">
				<label for="password">
					Your password
				</label>
				<input class="form-control" type="text" name="password"> </input>
			</div>
			<input type="file" name="image">uploadPicture</input>
			
			<button type="submit" class="btn btn-primary">Submit</button>
			
			<input type="hidden" name="_token" value="{{ Session::token() }}"> </input>
		</form>
	</div>
</div>
@stop