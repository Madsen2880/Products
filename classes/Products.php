<?php
class Products
{
    private $conn = null;

    public function __construct(DB $sqlConnection)
    {
        $this->conn = $sqlConnection;
    }

    public function insert($name, $price)
    {
        $this->conn->query(
            "INSERT INTO products (name, price) VALUES (:name, :price)",
            [':name' => $name, ':price' => $price]
        );
    }

    public function getAll()
    {
        return $this->conn->toList("SELECT * FROM products");
    }

    public function getOne($id)
    {
        return $this->conn->single(
            "SELECT * FROM products WHERE id = :id",
            [':id' => $id]
        );
    }

    public function deleteElement($id)
    {
        if ($this->conn->query("DELETE FROM products WHERE id = :id", [':id' => $id])) {
            return true;
        }
        return false;
    }

    public function updateElement($id, $name, $price)
    {
        if ($this->conn->query("UPDATE products SET name=:name, price=:price WHERE id = :id",
                                    [':id' => $id, ':name' => $name, ':price' => $price])) return true;
        return false;
    }

}