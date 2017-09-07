<?php
    $products = new Products($db);

    foreach ($products->getAll() as $value) {
        echo '<a href="index.php?id=' . $value->id . '"><h3>' . $value->name . '</h3></a><p> ' . $value->price . 'kr</p>';
    }

?>