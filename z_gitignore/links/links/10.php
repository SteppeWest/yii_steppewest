<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Bare - Start Bootstrap Template</title>

	<!-- Bootstrap core CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet" crossorigin="anonymous">
	<link href="ui/css/10.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c6cf66c19a.js" crossorigin="anonymous"></script>

</head>

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-9 mx-auto">
				<div class="card card-signin flex-row my-5">
					<div class="card-img-left d-none d-md-flex">
						 <!-- Background image for card set in CSS! -->
					</div>
					<div class="card-body">
						<h5 class="card-title text-center">Register</h5>
						<form class="form-signin">
							<div class="form-label-group">
								<input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
								<label for="inputUserame">Username</label>
							</div>

							<div class="form-label-group">
								<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
								<label for="inputEmail">Email address</label>
							</div>

							<hr>

							<div class="form-label-group">
								<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
								<label for="inputPassword">Password</label>
							</div>

							<div class="form-label-group">
								<input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
								<label for="inputConfirmPassword">Confirm password</label>
							</div>

							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
							<a class="d-block text-center mt-2 small" href="#">Sign In</a>
							<hr class="my-4">
							<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
							<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
