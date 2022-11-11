<?php
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header('Location: index.php');
    exit;
}
$message = '';
if(isset($_POST['register'])) {
    require_once 'assets/inc/connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password_confirmation'];
    if($name == '' || $email == '' || $password == '' || $confirm_password == '') {
        $message = 'All fields are required';
    } else {
        if($password != $confirm_password) {
            $message = 'Passwords do not match';
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $conn->query($sql);
            if($conn->affected_rows > 0) {
                $message = 'Registration successful';
                header('Location: login.php');
            } else {
                $message = 'Registration failed';
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/logregstyle.css">
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Register</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="signin-form">
                                <h4><?php echo $message ?? ""; ?></h4>
								<div class="form-group mt-3">
									<input type="text" name="name" class="form-control" required>
									<label class="form-control-placeholder" for="name">Name</label>
								</div>
								<div class="form-group mt-3">
									<input type="email" name="email" class="form-control" required>
									<label class="form-control-placeholder" for="email">Email</label>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" name="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
									<label class="form-control-placeholder" for="cpassword">Confirm Password</label>
									<span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="register">Register</button>
								</div>
							</form>
							<p class="text-center">Already Registred? <a href="login.php">Login</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/logreg.js"></script>

</body>

</html>