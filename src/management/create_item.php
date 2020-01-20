<?php 
require "./Includes/header.php";

require __DIR__ .'/../Config/Bootstrap.php';
use \App\management\Controllers\ItemsController as ItemsController;
$pageHelper = new ItemsController();
$pageHelper->processPageRequest();
?>
	<h1>Management Create Items</h1>
    <a href="index.php">Home</a>
    <section class="create">
        <form class="form create_form" action="" method="post" >
            <label for="name">Item Name:</label>
            <input type="text" name="name" required="required">
            <label for="price">Item Price:</label>
            <input type="number" name="price" required="required">
            <label for="amount">Item Quantity:</label>
            <input type="number" name="amount" required="required">
            <div class="form_controls">
                <input type="submit" name="submit" value="Create" class="btn btn-success">
                <a href="./index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </section>
<?php require "./Includes/footer.php"; ?>
