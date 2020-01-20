<?php
require "./Includes/header.php";
require __DIR__ .'/../Config/Bootstrap.php';
// get the controller here and save it to a variable to be used within this view
use \App\management\Controllers\ItemsController as ItemsController;
$pageHelper = new ItemsController();
$pageHelper->processPageRequest();
?>
	<h1>Management Update Items</h1>
    <a href="index.php">Home</a>
    <section class="create">
        <form class="form create_form" action="" method="post" >
            <label for="name">Item Name:</label>
            <input type="text" name="name" required="required" value="<?=$pageHelper->entity['name'];?>">
            <label for="price">Item Price:</label>
            <input type="number" name="price" required="required" value="<?=$pageHelper->entity['price'];?>">
            <label for="amount">Item Quantity:</label>
            <input type="number" name="amount" required="required" value="<?=$pageHelper->entity['amount'];?>">
            <div class="form_controls">
                <input type="submit" name="update" value="Update" class="btn btn-success">
                <a href="./index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </section>
<?php require "./Includes/footer.php"; ?>
