<?php
require "./Includes/header.php";
require __DIR__ .'/../Config/Bootstrap.php';
// get the controller here and save it to a variable to be used within this view
use \App\management\Controllers\ItemsController as ItemsController;
$pageHelper = new ItemsController();
$pageHelper->processPageRequest();
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
			<?php foreach($pageHelper->itemsArray as $item) : ?>
				<tr>
					<td><h3><?=$item['name'];?></h3></td>
					<td><?=$item['price'];?></td>
					<td><?=$item['amount'];?></th>
					<td><a href="update_item.php?update=<?=$item['id']; ?>" class="btn btn-success">Edit</a></td>
					<td><a href="delete_item.php?delete=<?=$item['id']; ?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<!-- End loop -->
            <?php endforeach; ?>
			</tbody>
		</table>
	</section>
<?php require "./Includes/footer.php"; ?>
