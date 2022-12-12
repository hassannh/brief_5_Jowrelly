<?php
 require_once './app/controllers/ItemsControllers.php';
 require_once './app/controllers/UsersControllers.php';
 require_once './app/views/includes/header.php';
$noFooter = '';
?>




<form class="add_item" action="?do=Insert" method="POST">
    <div class="item">
        <label class="input-group-text label_item" for="name">Name of product</label>
        <input type="text" class="form-control" name="name" placeholder="Name Of The Item" required="required">
    </div>
    <div class="item">
        <label class="input-group-text label_item" for="description">Description of product</label>
        <input type="text" class="form-control" name="description" placeholder="Description Of The Item"
            required="required">
    </div>
    <div class="item">
        <label class="input-group-text label_item" for="quantity">Quantity</label>
        <input type="text" class="form-control" name="quantity" placeholder="quantity" required="required">
    </div>



    <div class="item">
        <label class="input-group-text label_item" for="prix_item">Price of product</label>
        <input type="text" class="form-control" name="price" placeholder="Price Of The Item" required="required">
    </div>
    <div class="item">
        <label class="input-group-text label_item" for="img_item">Pictur</label>
        <input class="form-control input_item" type="file" name="img_item" accept="image/png, image/jpeg, image/jpg"
            required="required">

    </div>
   
    <div class="submit_add">
        <input class="input-group-text input_submit" type="submit" value="+ Add product">
    </div>
</form>