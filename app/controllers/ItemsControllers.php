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
        $name = $_POST['nameItem'];
        $desc = $_POST['description'];
        $quantity = $_POST['quant'];
        $prix = $_POST['price'];
        $add_date = $_post['date'];
        $img = $_POST['picture'];
        $add_date = $_POST['add_date'];
        $id_i = $_POST['id_i'];
        products::insertIntoItems($name, $desc, $quantity, $price, $add_date,$image);
    }
    public function updateItems()
    {
        $name = $_POST['nameItem'];
        $desc = $_POST['description'];
        $quantity = $_POST['quant'];
        $prix = $_POST['price'];
        $add_date = $_post['date'];
        $img = $_POST['picture'];
        $add_date = $_POST['add_date'];
        $id_i = $_POST['id_i'];
        products::updateItems($name, $desc, $quantity, $price, $add_date,$image, $id_i);
    }
    public function deleteItems()
    {
        $id_i = $_POST['id_i'];
        products::deleteItems($id_i);
    }

}
