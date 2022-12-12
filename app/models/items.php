<?php
require_once './app/database/connect.php';
class products
{
    static public function select()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM products');
        $stmt->execute();
        $items = $stmt->fetchAll();
        return $items;
    }

    static public function insertIntoItems($params)
    {
        // $name, $desc, $quantity, $price, $img
        // [Name=>'dzedz',Description=>'edzd', quantity,price,]
        //     picture
        $columns = array_keys($params); 
        $sql = 'INSERT INTO products ('.implode(',',$columns) .') VALUES ('.implode(',',array_map(fn($item)=> ":$item" ,$columns) ) .')';
        $stmt = DB::connect()->prepare($sql);

        foreach ($params as $key => $value) {
            $stmt->bindValue(":$key",$value);
        }
        
        $stmt->execute();
    }

    static public function updateItems($name, $desc, $quantity, $price ,$image , $id_i)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        products 
    SET 
    name,
    description=?, 
    quantité=?,
    price=?,
    image=?
    WHERE 
    item_ID = ?");

        $stmt->execute(array($name, $desc, $quantity, $price,$image, $id_i));
    }

    static public function deleteItems($id_i)
    {
        $stmt = DB::connect()->prepare("DELETE FROM products WHERE item_ID = :zid");

        $stmt->bindParam(":zid", $id_i);

        $stmt->execute();
        
    }
}