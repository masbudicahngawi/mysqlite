<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>The Title</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<form method="post" action="/media/hasil">
		@csrf
		<div class="mb-3">
			<label for="mytext" class="form-label">My Text</label>
			<input type="text" class="form-control" name="mytext">
		</div>
		<div class="mb-3">
			<label for="mypassword" class="form-label">My Password</label>
			<input type="password" class="form-control" name="mypassword">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


	<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>