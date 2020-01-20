<?php require "./Includes/header.php"; ?>
	<h1>Management Update Items</h1>
    <a href="index.php">Home</a>
    <section class="create">
        <form class="form create_form" action="" method="post" >
            <label for="name">Item Name:</label>
            <input type="text" name="name" value="render data for name">
            <label for="price">Item Price:</label>
            <input type="text" name="price" value="render data for price">
            <label for="amount">Item Quantity:</label>
            <input type="text" name="amount" value="render data for amount">
            <div class="form_controls">
                <input type="submit" name="submit" value="Create">
                <input type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </section>
<?php require "./Includes/footer.php"; ?>
