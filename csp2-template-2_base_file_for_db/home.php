<?php

session_start();

if (!isset($_SESSION['current_user']))
	header('location: login.php');

function getTitle() {
	echo 'Home';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Home Page</h1>
		
		<?php

		if (isset($_SESSION['current_user'])) {
			echo '<h3>Welcome ' . $_SESSION['current_user'] . '!</h3>';
		}

		?>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>