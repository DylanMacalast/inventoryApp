<?php 
require "./Includes/header.php";

require __DIR__ .'/../Config/Bootstrap.php';
use \App\management\Controllers\ItemsController as ItemsController;
$pageHelper = new ItemsController();
$pageHelper->processPageRequest();
?>
	<h1>Management Delete Items</h1>
<?php require "./Includes/footer.php"; ?>
