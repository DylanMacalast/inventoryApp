<?php require "./Includes/header.php"; ?>
	<h1>Management Create Items</h1>
    <a href="index.php">Home</a>
    <section class="create">
        <form class="form create_form" action="" method="post" >
            <label for="name">Item Name:</label>
            <input type="text" name="name">
            <label for="price">Item Price:</label>
            <input type="text" name="price">
            <label for="amount">Item Quantity:</label>
            <input type="text" name="amount">
            <div class="form_controls">
                <input type="submit" name="submit" value="Create">
                <input type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </section>
<?php require "./Includes/footer.php"; ?>
