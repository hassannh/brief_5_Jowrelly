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

    static public function insertIntoItems($name, $desc, $quantity, $price, $add_date,$image )
    {
        $stmt = DB::connect()->prepare('INSERT INTO 
                                                products (
                                                    name,
                                                    description, 
                                                    quantité,
                                                    price,
                                                    $add_date,
                                                    pctur
                                                    
                                                ) 
                                            VALUES (
                                                :zname,
                                                :zdescription,
                                                :zquantité
                                                :zprice,
                                                :zadd_date,
                                                :zimage
                                                
                                            )
                                        ');
        $stmt->execute(
            array(
                'zname' => $name,
                'zdescription' => $desc,
                'zquantité' => $quantity,
                'zprice' => $price,
                ':zadd_date' => $add_date,
                'zimage' => $img
            )
        );
    }

    static public function updateItems($name, $desc, $quantity, $price, $add_date,$image , $id_i)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        products 
    SET 
    name,
    description=?, 
    quantité=?,
    price=?,
    add_date=?,
    image=?
    WHERE 
        id_i = ?");

        $stmt->execute(array($name, $desc, $quantity, $price, $add_date,$image, $id_i));
    }

    static public function deleteItems($id_i)
    {
        $stmt = DB::connect()->prepare("DELETE FROM products WHERE id_i = :zid");

        $stmt->bindParam(":zid", $id_i);

        $stmt->execute();
    }
}