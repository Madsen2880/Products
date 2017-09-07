<?php
$products = new Products($db);
$id = $_GET['id'];

if(isset($_POST['update'])){
    $products->updateElement($id, $_POST['name'], $_POST['price']);
    header('Location: index.php?id=' .$id);
}

$data = $products->getOne($id);
?>
<form action="" method="post">
    <label for="name">Produkt navn:</label><br>
    <input type="text" id="name" name="name" value="<?= $data->name ?>"><br>
    <label for="number">Produkt pris:</label><br>
    <input type="text" name="price" id="price" value="<?= $data->price ?>"><br>
    <button type="submit" name="update">Opdater</button>
</form>

