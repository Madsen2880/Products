<?php

require_once 'config.php';
// $products = new Products($db);
// $products->createTabel();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>

    <div class="grid">
        <header>
            <h1>Products</h1>
        </header>
        <main>

            <?php

            if(isset($_GET['id'])){
                if(isset($_GET['action'])){
                    switch($_GET['action']){
                        case 'edit':
                            require_once './partials/products/edit.php';
                            break;
                        case 'delete':
                            $products = new Products($db);
                            $products->deleteElement($_GET['id']);
                            header('Location:index.php');
                            break;
                    }
                } else {
                    require_once './partials/products/show.php';
                }
            } else {
                require_once './partials/products/index.php';
                require_once './partials/products/list.php';
            }
            ?>
        </main>
    </div>
</body>
</html>