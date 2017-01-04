<!<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($users as $user)
{{ $user->first_name}}
@endforeach
</body>
</html>