<?php

function getTitle() {
	echo 'Login';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Login Page</h1>

		<form id="loginForm" method="POST" action="assets/authenticate.php" class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Enter username" class="form-control">

			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Enter password" class="form-control">

			<input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary">
		</form>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>