<!DOCTYPE html>
<html>

<head>
    <title>Item</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'product-add.php'; ?>
    <?php
    $mysql = new mysqli('localhost', 'root', '', 'item') or die(mysqli_error(($mysql)));
    $result = $mysql->query("select * from item") or die(mysqli_error(($mysql)));
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                while ($row = $result->fetch_assoc()) :
                ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Quantity']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td>
                            <a href="products.php?edit=<?php echo $row['ID']; ?>" class="btn btn-info">Edit</a>
                            <a href="products.php?delete=<?php echo $row['ID']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
    <?php
    function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>
    <div class="row justify-content-center">
        <form action="product-add.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <div class="form-group">
                <label><b>Name</b></label>
                <input class="form-control" type="text" value="<?php echo $name; ?>" name="name" placeholder="Enter new name" required />
            </div>
            <div class="form-group">
                <label><b>Quantity</b></label>
                <input class="form-control" type="text" value="<?php echo $quantity; ?>" name="quantity" placeholder="Enter quantity" required />
            </div>
            <div class="form-group">
                <label><b>Description</b></label>
                <input class="form-control" type="text" value="<?php echo $description; ?>" name="description" placeholder="Enter description" required />
            </div>
            <div class="form-group">
                <?php
                    if($update==true):
                ?>
                <button class="btn btn-info" type="submit" name="save">Update</button>
                <?php else: ?>
                <button class="btn btn-primary" type="submit" name="save">Save</button>
                <?php endif;?>
            </div>
        </form>
    </div>
</body>

</html>