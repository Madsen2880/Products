<?php
$products = new products($db);
if(isset($_POST['send'])) {
    $products->insert($_POST['name'], $_POST['price']);
}
?>


<form action="index.php" method="post">

    <label for="name">Produkt navn:</label><br>
    <input type="text" name="name" class="form-control" id="name"><br>

    <label for="text">Produkt pris:</label><br>
    <input type="text" name="price" id="" ><br>

    <button type="submit" name="send" class="btn btn-default">Opret Produkt</button>
</form>