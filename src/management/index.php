<?php require "./Includes/header.php"; ?>
<?php
// get the controller here and save it to a variable to be used within this view

?>
	<h1>Management Read All Items</h1>
	<section class="controls">
		<a href="create_item.php">Create New Item</a>
	</section>
	<section class="items">
		<table class="items_table table">
			<thead>
				<tr>
					<th>Item Name</th>
					<th>Item Price</th>
					<th>Item Qauntity</th>
					<th>Edit Item</th>
					<th>Delete Item</th>
				</tr>
			</thead>
			<tbody>
			<!-- PHP will loop through data and produce this format for each item -->
				<tr>
					<td><h3>Cake</h3></td>
					<td>£23</td>
					<td>23</th>
					<td><a href="update_item.php?id=<?php echo 3; ?>" class="btn btn-success">Edit</a></td>
					<td><a href="delete_item.php?id=<?php echo 3; ?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<!-- End loop -->
			</tbody>
		</table>
	</section>
<?php require "./Includes/footer.php"; ?>
