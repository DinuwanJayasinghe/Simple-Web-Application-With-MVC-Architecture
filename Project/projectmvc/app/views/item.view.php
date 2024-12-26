<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/bootstrap.min.css">
    <style>
        .tbl-record {
            color: white;
        }
    </style>
</head>

<body class="bg-dark">

    <!-- Main Container -->
    <div class="container text-center py-4">
        <h1 class="text-center p-3 text-white">Items</h1>

        <form method="POST">

            <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger">
                    <?= implode("<br>", $errors) ?>
                </div>
            <?php endif; ?>


            <!-- form group -->
            <div class="form-group">
                <label>Item Name</label>
                <input type="text" name="name" id="name" placeholder="Enter item name" class="form-control">
            </div>
            <div class="form-group">
                <label>Unit price</label>
                <input type="text" name="price" id="price" placeholder="Enter Unit price" class="form-control">
            </div>
            <div class="form-group">
                <label>quantity</label>
                <input type="number" name="qty" id="qty" placeholder="Enter quantity" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info mt-3">Add item</button>
            </div>
            <!-- /form group -->
        </form>
    </div>
    <!-- /Main Container -->

</body>

</html>