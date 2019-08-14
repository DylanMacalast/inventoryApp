<?php
namespace App\Includes\Views;
require __DIR__ .'/../Config/Bootstrap.php';
use \App\Includes\Controllers\ItemsController as ItemsController;

class ItemsView
{

    /**
     * Loop through items array and return each items values
     */


/**
 * This will produce dynamic html to be renderd into page views
 * NOTE: in future this will have a conditional first which will check for the category and then render a different block of html depending on the category
 * @return [string] [html]
 */
public static function renderItems()
{
    $itemCntrl = new ItemsController();
    $arr = $itemCntrl->setItemsArray();
    $html = '';
    foreach ($arr as $value) {

        $name = $value['Name'];
        $id= $value['ID'];
        $category = $value['Category'];
        $price = $value['Price'];

        $html .= "
        <div class='items__container'>
        <hr><hr><hr><hr><hr></br><hr><hr><hr><hr><hr></br>
            <div class='item__$category'>
                <h1>$id</h1>
                <hr>
                <h1>$name</h1>
                <hr>
                <h1>$category</h1>
                <hr>
                <h1>$price</h1>
            </div>
            <hr><hr><hr><hr><hr></br><hr><hr><hr><hr><hr></br>
        </div>
        ";
    }

    return $html;

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items View</title>
</head>
<body>
<?php echo ItemsView::renderItems(); ?>
</body>
</html>





