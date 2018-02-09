<?php

session_start();

function getTitle() {
	echo 'Create New Item';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Create New Item Page</h1>
		
		<form id="registerForm" method="POST" action="assets/createnewitem.php" class="form-group">

			<?php

			$file = file_get_contents('assets/items.json');
			$items = json_decode($file, true);
			$last_item = end($items);
			$new_id = $last_item['id'] + 1;
			
			?>

			<input hidden type="number" name="id" value="<?php echo $new_id; ?>">

			<label for="productName">Product Name</label>
			<input type="text" name="product_name" id="productName" placeholder="Enter product name" class="form-control">

			<label for="image">Image</label>
			<input type="file" class="form-control" name="image">

			<label for="price">Price</label>
			<input type="text" name="price" id="price" placeholder="PHP 0.00" class="form-control">

			<label for="description">Description</label>
			<textarea name="description" id="description" placeholder="Type product description here..." class="form-control"></textarea>

			<select name="category" class="form-control">
				<option>Category 1</option>
				<option>Category 2</option>
				<option>Category 3</option>
			</select>

			<input type="submit" name="submit" id="submit" value="Create Item" class="btn btn-primary">
		</form>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>