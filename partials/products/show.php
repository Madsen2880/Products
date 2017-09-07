<?php

$products = new Products($db);
$data = $products->getOne($_GET['id']);

?>

<h3><?= $data->name ?></h3>
<p><?= $data->price ?> kr</p>
<a href="index.php">Tilbage</a>
<a href="index.php?id=<?= $data->id ?>&action=edit">Ret</a>
<a href="index.php?id=<?= $data->id ?>&action=delete">Slet</a>