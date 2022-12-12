<?php
require_once './app/models/items.php';

// items
class itemsController{

    public function selectItems()
    {
        $items = products::select();
        return $items;
    }
 
    public function insertIntoItems()
    {
        $id_i = $_POST['id_item'];
        $name = $_POST['Name'];
        $desc = $_POST['Description'];
        $quantity = $_POST['Quantity'];
        $prix = $_POST['price'];
        $add_date = $_post['add_date'];
        $img = $_POST['picture'];
        products::insertIntoItems($name, $desc, $quantity, $price, $add_date,$image);
    }
    public function updateItems()
    {
        $id_i = $_POST['id_item'];
        $name = $_POST['Name'];
        $desc = $_POST['Description'];
        $quantity = $_POST['Quantity'];
        $prix = $_POST['price'];
        $add_date = $_post['add_date'];
        $img = $_POST['picture'];
        
        products::updateItems($name, $desc, $quantity, $price, $add_date,$image, $id_i);
    }
    public function deleteItems()
    {
        $id_i = $_POST['Id_item'];
        products::deleteItems($Id_item);
    }

}

