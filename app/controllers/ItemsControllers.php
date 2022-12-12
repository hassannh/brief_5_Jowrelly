<?php
require_once './app/models/items.php';

// items
class itemsController
{

    public function selectItems()
    {
        $items = products::select();
        return $items;
    }

    public function insertIntoItems()
    {
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $quantity = $_POST['quantity'];
        $prix = $_POST['price'];
        $img = $_FILES['picture']['name'];

        products::insertIntoItems(['Name' => $name, 'Description' => $desc, 'quantity' => $quantity, 'price' => $prix, 'picture' => $img]);
        // [Name=>'dzedz',Description=>'edzd', quantity,price,]
    }
    public function updateItems()
    {
        echo 'ssss';
        print_r($_FILES['picture']);
        $id_i = $_POST['id_item'];
        $name = $_POST['Name'];
        $desc = $_POST['Description'];
        $quantity = $_POST['Quantity'];
        $prix = $_POST['price'];
        // $add_date = $_post['add_date'];
        $img = $_FILES['picture']['name'];
        print_r($img);

        products::updateItems($name, $desc, $quantity, $prix, $img, $id_i);
    }
    public function deleteItems()
    {
        $id_i = $_GET['item_ID'];
        products::deleteItems($id_i);
    }
}


// $delete = new itemsController();
// $delete->deleteItems();
