<?php
require __DIR__ .'/Config/Bootstrap.php';
use \App\Includes\Controllers\TillController as TillController;
$pageHelper = new TillController();
$pageHelper->processPageRequest();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Includes/css/style.css">
    <title>Home Page</title>
</head>
<body class="row">
   <section class="items col-7">
    <h1>Till Application</h1>
        <div class="row">
   <?php foreach($pageHelper->itemsArray as $item) : ?>
            <div class="items__card col-5 m-1" id="item-<?=$item['id']; ?>">
                <h2><?=$item['name'];?></h2>
                <h3 id="<?=$item['price'];?>">Price: £<?=$item['price'];?></h3>
                <h4><?=$item['amount'];?> Remaining</h4>
            </div>
            <br>
   <?php endforeach; ?>
        </div>
   </section> 
   <section class="calculator col-4">
    <h1>Calculating Order</h1>
    <p>order stuff</p>
    <h4 id="total">Total: 0</h4>
    <button id="pay" class="btn btn-primary mr-5">PAY</button>
    <button id="cancel" class="btn btn-warning">CANCEL</button>
   </section>
<script src="./Includes/js/index.js" rel="text/javascript"></script>
</body>
</html>